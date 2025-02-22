<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('public/resource/css/loader.css')}}">

    <title>Login Champs Portal</title>
</head>

<body>

    <div class="loading" id="loader"></div>
    @include('auth.css')
    <div class="text-center ptchmp">
        <img style="width:90px" src="public/resource/img/footer-logo.png" alt="">
        <h6 class="txpt">PT. CHAMP RESTO INDONESIA TBK</span></h6>
        {{-- <img style="width:250px" src="http://api.champ-group.com/starlet/public/assets/img/logo_CRI.png" alt=""> --}}
       
    </div>
    <div class="container">
        <div class="screen">
          <div class="screen__content">
            <form action="{{route('loginApp')}}" class="login" method="POST" id="logg">@csrf
              <div class="login__field">
                <i class="login__icon fas fa-user"></i>
                <input type="text" name="nip" id="nip" class="login__input"
                placeholder="Masukan NIP">
              </div>
              <div class="login__field">
                <i class="login__icon fas fa-lock"></i>
                <input id="password-field" name="password" type="password" class="login__input"
                placeholder="Password">
              </div>
              <button type="submit" class="button login__submit" onclick="loadingon()">
                <span class="button__text">Log In Now</span>
                <i class="button__icon fas fa-chevron-right"></i>
              </button>       
            </form>
          </div>
          <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>    
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
          </div>  
        </div>
      </div>
    {{-- <div class="container">
        <div class="card logincard">
            <div class="card-body" style="background: #21252999;border-radius:12px">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="login-wrap p-3">
                            <div class="img text-center py-2">
                                <img id="logomss" src="{{asset('public/resource/login/img/champs.png')}}" alt=""
                                    class="">
                            </div>
                            <hr style="border: 1px solid white">
                            <form action="{{route('loginApp')}}" class="signin-form" method="POST" id="logg">@csrf
                                <div class="form-group my-3">
                                    <input type="text" name="nip" id="nip" class="form-control ifc" onkeyup="upper()"
                                        placeholder="Masukan NIP">
                                </div>
                                <div class="form-group my-3">
                                    <input id="password-field" name="PassUser" type="password" class="form-control ifc"
                                        placeholder="Password">
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group my-3">
                                    <button type="submit" onclick="loadingon()"
                                        class="form-control btn btn-primary btn-login px-3">Login</button>
                                </div>
                            </form>
                            <hr style="border: 1px solid white">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        // setTimeout(function(){
        //     $('#logg').submit();
        // }, 1000);
        function upper(){
            var str = document.getElementById('nip').value;
            var x = str.toUpperCase();
            document.getElementById('nip').value = x;
        }
        $(window).on('load', function () {
            $('#loader').delay(450).fadeOut('slow');
        });
        
        function loadingon(){
            $('#loader').show();
        }
        function loadingoff(){
            $('#loader').hide();
        }
        function loadingon2(){
            $('.loading2').show();
        }
        function loadingoff2(){
            $('.loading2').hide();
        }
    </script>
    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: "{{ session('success') }}"
        })
    </script>
    @elseif((session('error')))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Sorry!!',
            text: "{{ session('error') }}"
        })
    </script>
    @endif

</body>

</html>