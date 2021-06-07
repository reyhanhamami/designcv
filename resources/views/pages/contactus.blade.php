<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#333333">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' >
    <title>Curriculum Vitae - Reyhan</title>
    {{-- style  --}}
    @method('before-style')
    @include('includes/style')
    @stack('after-style')
</head>
<body>
    <section>
        <div class="mt-5 pt-5"></div>
        <div class="text-center" style="top: -0.8rem !important;position: relative;margin-top:-3rem !important">
            <img src="{{ asset('assets/img/header.png') }}" alt="">
        </div>
        <div class="rectangel">
            <div class="text-center fontsize-20 light-color pt-5">Hubungi saya</div>
            
        <div class="container mt-4">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('failed'))
                <div class="alert alert-danger">{{ session('failed') }}</div>
            @endif
            <form action="{{ route('contactpost') }}" method="post">
                @csrf()
                @method('post')
                <div class="form-group row light-color">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="*wajib, cantumkan alamat email anda agar dapat berkomunikasi" required>
                    </div>
                </div>
                <div class="form-group row light-color">
                    <label for="phone" class="col-sm-2 col-form-label">No Handphone</label>
                    <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="*opsional, masukan no handphone anda untuk mempermudah komunikasi" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                    </div>
                </div>
                <div class="form-group row light-color">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsikan singkat project yang akan dibuat</label>
                    <div class="col-sm-10">
                    <textarea name="description" id="" cols="30" rows="10" required></textarea>
                    </div>
                </div>
               
                
                
                <div class="form-group row">
                    <div class="col-sm-12 text-center">
                        <button class="btn btn-success">Kirim data</button>
                        <a href="{{ route('homepage') }}" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </form>
        </div>

        </div>
    </section>


@stack('before-script')
@include('includes/script')
@stack('after-script')
</body>
</html>