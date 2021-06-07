<?php

namespace App\Http\Controllers;

use App\contactModel;
use Illuminate\Http\Request;

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
        $data['ipaddress'] = $ip;
        try {
            contactModel::create($data);
            return redirect()->back()->with('success','data berhasil dikirim, Terimakasih telah menghubungi saya, secepatnya akan saya balas');
        } catch (\Execption $th) {
            return redirect()->back()->with('failed','Data gagal dikirim '.$th );
        }

    }
}
