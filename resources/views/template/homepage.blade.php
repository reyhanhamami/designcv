<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#333333">
    <title>Curriculum Vitae - Reyhan</title>
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
</head>
<body>
    {{-- navbar  --}}
    <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto lato fontsize-20" style="z-index: 2;">
        <a class="nav-link text-dark" href="#">CONTACT <span class="sr-only">(current)</span></a>
        <a class="nav-link text-dark" href="#">ABOUT ME</a>
        <img src="{{ asset('assets/img/logoR.png') }}" alt="" class="text-dark ml-4">
        <a class="nav-link text-dark ml-4" href="#">PROJECTS</a>
        <a class="nav-link text-dark" href="#">EDUCATION</a>
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
                            <a href="" class="lightcyan-color">
                                DOWNLOAD CV
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>