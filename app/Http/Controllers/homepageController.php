<?php

namespace App\Http\Controllers;

use App\contactModel;
use Illuminate\Http\Request;
use App\Mail\sendNotifRekrut;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Mail;

class homepageController extends Controller
{
    public function index()
    {
        return view('template.homepage');
    }
    public function contact()
    {
        return view('pages.contactus');
    }
    public function contactpost(Request $request)
    {
        $data = $request->except('_token','_method');
        $ip = $request->ip();
        $nohp = $request->phone;
            // cek apakah no hp mengandung karakter + dan 0-9
            if(!preg_match('/[^+0-9]/',trim($nohp))){
                // cek apakah no hp karakter 1-3 adalah +62
                if(substr(trim($nohp), 0, 2)=='62'){
                    $hp = trim($nohp);
                }
                // cek apakah no hp karakter 1 adalah 0
                elseif(substr(trim($nohp), 0, 1)=='0'){
                    $hp = '62'.substr(trim($nohp), 1);
                }
            }
        (empty($hp)) ? $nohp = $nohp : $nohp = $hp;
        $data['phone'] = $nohp;
        $data['ipaddress'] = $ip;
        $dataSendMessage = array(
            'phone' => $data['phone'] ? $data['phone'] : '6289663085777',
            'message' => 'Terimakasih sudah menghubungi saya, secepatnya akan saya respon, pesan anda seperti berikut : '. $data['description']
        );
        try {
            contactModel::create($data);
            Mail::to('reyhanhamami@gmail.com')->send(new sendNotifRekrut($data));
            Curl::to('https://tes-bot-whatsapp.herokuapp.com/sendapiwhatsappnode')
            ->withData($dataSendMessage)->asJson(true)->post();
            if (!empty($data['email'])) {
                Mail::to($data['email'])->send(new sendNotifRekrut($data));
            } 
            if (!empty($data['phone'])) {
                Curl::to('https://tes-bot-whatsapp.herokuapp.com/sendapiwhatsappnode')
                ->withData($dataSendMessage)->asJson(true)->post();
            }
            return redirect()->back()->with('success','data berhasil dikirim, Terimakasih telah menghubungi saya, secepatnya akan saya balas');
        } catch (\Execption $th) {
            return redirect()->back()->with('failed','Data gagal dikirim '.$th );
        }

    }
}
