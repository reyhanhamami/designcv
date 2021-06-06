<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#333333">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' >
    <title>Curriculum Vitae - Reyhan</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logoR.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- icon fontawesome  --}}
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    {{-- font  --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    {{-- css default  --}}
    <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
    {{-- owl carousel  --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
</head>
<body>
    {{-- navbar  --}}
    <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto lato fontsize-20" style="z-index: 2;">
        <a class="nav-link text-dark" href="#">Contact <span class="sr-only">(current)</span></a>
        <a class="nav-link text-dark" href="#">About Me</a>
        <img src="{{ asset('assets/img/logoR.png') }}" alt="" class="text-dark" style="margin-left:.8rem">
        <a class="nav-link text-dark ml-4" href="#">Projects</a>
        <a class="nav-link text-dark" href="#">Education</a>
        </div>
    </div>
    </nav>
    {{-- jumbotron  --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row position-relative">
                <div class="col-6 position-absolute" style="left:0;top:0">
                    <div class="ml-4">
                        <div class="lato fontsize-25 half-border main-color">MUHAMMAD REYHAN HAMAMI</div>
                        <div class="lato fontsize-19 mt-3 secondary-color">FULL STACK DEVELOPER</div>
                        <div class="lato fontsize-15 mt-2 secondary-color">LARAVEL - FLUTTER - VUEJS</div>
                        <div class="row mt-5">
                            <div class="dot ml-3 mr-2" ></div>
                            <div class="dot mr-2"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="rectangel-icon mt-7r">
                            <div class="row text-center ">
                                <div class="col" style="margin-top:3.5px">
                                    <a href="https://www.instagram.com/mreyhanhamami/" target="_blank">
                                        <i class="fab fa-instagram lightcyan-color fa-2x"></i>
                                    </a>
                                </div>
                                <div class="col" style="margin-top:3.5px">
                                    <a href="https://github.com/reyhanhamami" target="_blank">
                                        <i class="fab fa-github lightcyan-color fa-2x"></i>
                                    </a>
                                </div>
                                <div class="col" style="margin-top:3.5px">
                                    <a href="https://www.facebook.com/reyhanhamami" target="_blank">
                                        <i class="fab fa-facebook lightcyan-color fa-2x"></i>
                                    </a>
                                </div>
                                <div class="col" style="margin-top:3.5px">
                                    <a href="https://www.linkedin.com/in/reyhan-hamami-4a3a70194/" target="_blank">
                                        <i class="fab fa-linkedin-in lightcyan-color fa-2x"></i>
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 position-relative mx-auto" style="top:-90px;right:7px">
                    <img src="{{ asset('assets/img/jumbotron.png') }}" alt="">
                </div>
                <div class="col-4 pl-5 position-absolute" style="right:0;top:0">
                    <div class="row d-flex align-items-end">
                        <div class="col-6 rubik fontsize-49">HELLO</div>
                        <div class="col-1 "><div class="dot"></div></div>
                        <div class="col-1"><div class="dot"></div></div>
                        <div class="col-1"><div class="dot"></div></div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="dot mt-4"></div>
                            <div class="dot mt-2"></div>
                            <div class="dot mt-2"></div>
                        </div>
                        <div class="col d-flex align-items-end rubik fontsize-30">
                            I'M HERE
                        </div>
                    </div>
                    <div class="rectangel-icon mt-9r">
                        <div class="row text-center poppins fontsize-16">
                            <a href="" class="lightcyan-color lato fontsize-15">
                                Umur <span class="light-color" id="myage"></span> tahun
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- about me  --}}
        <div class="text-center" style="top: -0.8rem !important;position: relative;margin-top:-3rem !important">
            <img src="{{ asset('assets/img/header.png') }}" alt="">
        </div>
    <div class="rectangel">
        <div class="position-relative">
            <div class="lato fontsize-20 light-color text-center pt-5">
                Tentang Saya
            </div>
            <div style="position: absolute;top:-10rem !important;left:20rem !important" >
                <img src="{{ asset('assets/img/aboutus.png') }}" alt="">
            </div>
        </div>
        <div class="fontsize-15 light-color text-center pt-5 mx-auto position-relative" style="margin: 0 8rem !important;z-index:2">
            Full stack developer dengan pengalaman lebih dari 3 tahun dan telah membuat berbagai macam jenis aplikasi website maupun mobile, dan dapat berkerja sendiri ataupun berkolaborasi dengan team,
            Bersemangat menciptakan aplikasi yang hebat, dan belajar tiap hari untuk pengembangan diri, motto saya menjadi simple dan mudah itu baik
        </div>
    </div>
        <div class="text-center" style="position: relative;margin-top:-3rem !important">
            <img src="{{ asset('assets/img/bottom.png') }}" alt="">
        </div>

    {{-- my service  --}}
    <div class="container mt-5 mb-5">
        <div class="lato fontsize-24 border-center text-center mb-5">
            MY SERVICES
        </div>
        <div class="row">

            <div class="col-6 text-center">
                <span class="fas fa-laptop-code fa-2x btn-service"></span>
                <div class="lato fontsize-20">Web Development</div>
                <div class="fontsize-15 mt-3">Membuat aplikasi kustom berdasarkan permintaan berbasis web, dengan menggunakan bahasa pemrograman php, freamwork 
                    <span class="font-weight-bold">laravel</span>, 
                    <span class="font-weight-bold">bootstrap</span>,
                    <span class="font-weight-bold">jquery</span> atau
                    <span class="font-weight-bold">vue js</span>, 
                    dengan pengalaman lebih dari 3 tahun, Garansi revisi tanpa batas hingga aplikasi selesai dibuat.
                </div>
            </div>

            <div class="col-6 text-center">
                <span class="fas fa-code fa-2x btn-service"></span>
                <div class="lato fontsize-20">Apps Development</div>
                <div class="fontsize-15 mt-3">Membuat aplikasi kustom berdasarkan permintaan berbasis android, dengan menggunakan bahasa pemrograman dart, freamwork 
                    <span class="font-weight-bold">flutter</span>, 
                    yang terintegrasi dengan API dan halaman admin, dengan pengalaman kurang dari 1 tahun, Garansi revisi tanpa batas hingga aplikasi selesai dibuat.
                </div>
            </div>

            <div class="col-6 text-center mt-5">
                <span class="fas fa-database fa-2x btn-service"></span>
                <div class="lato fontsize-20">Data base</div>
                <div class="fontsize-15 mt-3">Menggunakan manajemen basis data
                    <span class="font-weight-bold">MySQL</span> atau
                    <span class="font-weight-bold">SQL server</span> atau keduanya
                    dengan pengalaman membuat stored procedure, view, linked server, dan analisis database.
                </div>
            </div>

            <div class="col-6 text-center mt-5">
                <span class="fas fa-hdd fa-2x btn-service"></span>
                <div class="lato fontsize-20">Deployment Aplication</div>
                <div class="fontsize-15 mt-3">Mendistribusikan aplikasi yang dibuat hingga ke tangan pengguna dan bisa dipakai oleh pengguna dengan baik, menggunakan server hosting local maupun internasional, atau upload ke play store jika berbentuk aplikasi android
                </div>
            </div>
        </div>
    </div>

    {{-- education --}}
        <div class="text-center" style="top: -0.8rem !important;position: relative;margin-top:-3rem !important">
                <img src="{{ asset('assets/img/header.png') }}" alt="">
        </div>
    <div class="rectangel">
        <div class="container">
            <div class="lato fontsize-21 light-color text-center pt-5">Pendidikan</div>
            <div class="row">
                <div class="col-3 pl-5">
                    <img src="{{ asset('assets/img/education.png') }}" alt="">
                </div>
                <div class="col-8 mt-5 ml-5 pl-3">
                    <ul>
                        <li class="fontsize-17 light-color">SMK TARUNA BHAKTI - <span class="lightcyan-color">Teknik Komputer Dan Jaringan</span> - DEPOK
                            <br>
                            <div class="light-color fontsize-14">2011 - 2014</div>
                        </li>
                        
                        <li class="fontsize-17 light-color">UNIVERSITAS MUHAMMADIYAH PROF.DR.HAMKA - <span class="lightcyan-color">Teknik Informatika</span> - JAKARTA TIMUR
                            <br>
                            <div class="light-color fontsize-14">2014 - 2019 || Lulus dengan IPK 3.31</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
        <div class="text-center" style="position: relative;margin-top:-3rem !important">
            <img src="{{ asset('assets/img/bottom.png') }}" alt="">
        </div>

    {{-- my hobbies  --}}
    <div class="container mt-5 mb-5">
        <div class="lato fontsize-24 border-center text-center mb-5">
            MY HOBBIES
        </div>
        <div class="text-center row">
            <div class="col">
                <img src="{{ asset('assets/img/sepeda-03.svg') }}" alt="" width="150px">
                <div class="lato fontsize-16 font-weight-bold">Sepeda</div>
            </div>
            <div class="col">
                <img src="{{ asset('assets/img/makestory-04.svg') }}" alt="" width="150px">
                <div class="lato fontsize-16 font-weight-bold">Menulis / Blog</div>
            </div>
            <div class="col">
                <img src="{{ asset('assets/img/design-05.svg') }}" alt="" width="150px">
                <div class="lato fontsize-16 font-weight-bold">Desain Grafis</div>
            </div>
            <div class="col">
                <img src="{{ asset('assets/img/travelling-06.svg') }}" alt="" width="150px">
                <div class="lato fontsize-16 font-weight-bold">Travelling</div>
            </div>
        </div>
    </div>
    <div class="pt-5"></div>
    {{-- my projects  --}}
    <div class="text-center" style="top: -0.8rem !important;position: relative;margin-top:-3rem !important">
        <img src="{{ asset('assets/img/header.png') }}" alt="">
    </div>
    <div class="rectangel" style="padding-bottom: 1rem !important">
        <div class="container">
            <div class="lato fontsize-21 text-center light-color pt-5">Portofolio</div>
            {{-- carousell porto  --}}
            <div class="carousel-porto owl-carousel">
                <div class="row mt-3">
                    <div class="col-5 mt-2">
                        <img src="{{ asset('assets/img/intranet.png') }}" alt="" width="450px" style="border-radius: 10px">
                    </div>
                    <div class="col-5 ml-4">
                        <div class="lato fontsize-24 light-color">Intranet</div>
                        <div class="fontsize-14 light-color mt-2">Aplikasi Intranet berfungsi sebagai gerbang login utama untuk dapat bisa 
                            mengakses internet public maupun local di area kantor, serta memiliki berbagai fitur seperti
                            pengumuman, visi misi perusahaan, galeri, lowongan pekerjaan, absensi, lembur, cuti, penjadwalan, dan lain-lain</div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-5 mt-2">
                        <img src="{{ asset('assets/img/trshlife.png') }}" alt="" height="210px" width="450px" style="border-radius: 10px">
                    </div>
                    <div class="col-5 ml-4">
                        <div class="lato fontsize-24 light-color">trshlife</div>
                        <div class="fontsize-14 light-color mt-2">Aplikasi trshlife adalah aplikasi pengelolaan limbah plastik yang dihasilkan dari
                            minuman maupun makanan kemasan berbentuk plastik, dimana fungsi dari aplikasi ini untuk mengenerate QR Code lalu di cetak
                            dan ditempelkan di kemasan plastik, agar pengguna dapat menscan qr code tersebut dan mendapatkan point yang dapat
                            ditukarkan menjadi uang, fiturnya generate qr, daftar sebagai mitra, pick up sampah, scan qr, tukar point, mencari lokasi
                            mitra, dll.
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-5 mt-2">
                        <img src="{{ asset('assets/img/blog.png') }}" alt="" width="450px" style="border-radius: 10px">
                    </div>
                    <div class="col-5 ml-4">
                        <div class="lato fontsize-24 light-color">Blog</div>
                        <div class="fontsize-14 light-color mt-2">blog dari badan wakaf al-quran yang dibuat menggunakan 
                            wordpress dan di install di server, dengan fitur-fitur default dari wordpress untuk membuat blog
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-5 mt-2">
                        <img src="{{ asset('assets/img/validasi.png') }}" alt="" width="450px" style="border-radius: 10px">
                    </div>
                    <div class="col-5 ml-4">
                        <div class="lato fontsize-24 light-color">Aplikasi Pengontrol Uang masuk</div>
                        <div class="fontsize-14 light-color mt-2">Aplikasi ini dibuat untuk memecahkan masalah dari pihak penyedia layanan transfer
                            bank, dimana proses transfer uang yang masuk di penyedia layanan dan di transfer ke rekening bank penerima dikumpulin 
                            terlebih dahulu menjadi satu (bulk), sehingga nantinya akan ada uang masuk misalnya 10juta dengan beberapa transaksi atau transfer 
                            dari orang yang berbeda-beda, untuk memudahkan admin melakukan pengecekan dan validasi bukti transaksi dari agent.
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-5 mt-2">
                        <img src="{{ asset('assets/img/agent.png') }}" alt="" width="450px" style="border-radius: 10px">
                    </div>
                    <div class="col-5 ml-4">
                        <div class="lato fontsize-24 light-color">Aplikasi CRM(customer relationship management)</div>
                        <div class="fontsize-14 light-color mt-2">Aplikasi yang berfungsi sebagai layanan penyambung dengan customer yang 
                            terintegrasi dengan sistem, sehingga setiap percakapan telepon, bukti donasi, terekam dengan baik, dan juga 
                            aplikasi ini memiliki fitur share data ke semua customer yang dimilikinya, bisa lewat whatsapp, sms, facebook, maupun twitter
                        </div>
                    </div>
                </div>
            </div>
            {{-- end carousel  --}}
            <div class="mt-3" style="margin: 1rem 5rem !important">
                <div class="light-color fontsize-15 mx-5 text-center">
                    <span class="font-weight-bold">Ingin membuat suatu aplikasi yang hebat??</span>
                    <br> 
                    <br> 
                    izikan saya untuk bergabung dan membuat aplikasi yang luar biasa,
                    saya akan lakukan yang terbaik agar aplikasi yang anda inginkan bisa terwujud dengan hasil yang sangat terbaik
                </div>
                <div class="btn-rekrut mt-2 font-weight-bold">REKRUT SAYA</div>
                <div class="light-color text-center mt-4 pb-0">&copy 2021 - <span id='year'></span> &#9775 Muhammad Reyhan Hamami &#9775 All rights reserved.</div>
            </div>
        </div>
        
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $(".carousel-porto").owlCarousel({
                items: 1,
                dot:true,
                loop:true,
                autoplay:true
            });
            var age = new Date().getFullYear();
            document.getElementById("year").innerHTML = new Date().getFullYear();
            document.getElementById('myage').innerHTML = age-1996;
        });
    </script>
</body>
</html>