<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="José Daniel Grijalba">

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('build/css/login-register-lock.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    {{-- <link href="{{ asset('build/css/style.min.css" ') }}" rel="stylesheet"> --}}
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="build/css/sweetalert.css">

    {{-- <link rel="stylesheet" type="text/css" href="/template/dist/css/style.css"> --}}
    <title></title>
</head>

<body>
    <section id="wrapper">
        <div
            class="login-register"style="background-image:url({{ asset('images/background/fondo-login-1024x427.jpg') }}">

            <div class="login-box card login-box">
                <div class="card-header">
                    <div class="justify-content-center row">
                        <div class="col-10">
                            <h1>Tienda Virtual</h1>

                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}" id="formLogin" name="formLogin">
                            @csrf

                            <div>
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="form-control" placeholder="Email" type="email"
                                    name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="mt-4 input-group form-group">
                                {{-- <x-jet-label for="password" value="{{ __('Password') }}" /> --}}
                                <x-jet-input id="password" class="form-control" placeholder="Password" type="password"
                                    name="password" required autocomplete="current-password" />
                                <button type="button" class="btn btn-outline-primary showPassword">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>

                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('password.request') }}" id="to-recover">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                            </div>

                            {{-- <div class="flex items-center justify-end"> --}}
                            <div class="">

                                <div id="alertLogin" class="text-center"></div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <x-jet-button class="btn btn-block btn-lg btn-info btn-rounded">
                                            {{ __('Log in') }}
                                        </x-jet-button>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-12 text-center">
                                    No tienes cuenta? <a id="to-register" class="text-info m-l-5"><b>Registrate</b></a>
                                </div>
                            </div>
                        </form>

                        <!--  -->
                        <form class="form-horizontal" id="formResetPass" name="formResetPass" action=""
                            method="POST" autocomplete="off">
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <h3>¿Olvidaste contraseñ&ntilde;a?</h3>
                                    <p class="text-muted">Ingresa tu correo y se te enviaran las instrucciones para
                                        restablacerla! </p>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input id="txtEmailReset" name="txtEmailReset" class="form-control" type="email"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button type="submit"
                                        class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"><i
                                            class="fa fa-unlock fa-lg fa-fw"></i> Reiniciar</button>
                                </div>
                            </div>
                            <a class="d-block small mt-3" href="javascript:void(0)" id="to-return" class="text-info">
                                <p class="text-center"><b>Iniciar sesion </b></p>
                            </a>
                        </form>
                        <!--  -->
                        <div id="register_user" class="animate form registration_form">
                            <section class="login_content">
                                <form id="create_account" style="display:none">
                                    <h1>Create Account</h1>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Usuario"
                                            required="" />
                                    </div>
                                    <div>
                                        <input type="email" class="form-control" placeholder="Email"
                                            required="" />
                                    </div>
                                    <div>
                                        <input type="password" class="form-control" placeholder="Contrase&ntilde;a"
                                            required="" />
                                    </div>
                                    <div>
                                        <a class="btn btn-default submit" href="index.html">Enviar</a>
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="separator">
                                        <p class="change_link">Ya estas Registrado ?
                                            <a href="#signin" class="to_register"> Ingresa </a>
                                        </p>
                                        <div class="clearfix"></div>
                                        <br />

                                        <div>
                                            <span> &copy;Copyright <?= date('Y') ?> Best -José Daniel Grijalba</span>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
    <!-- <script src="/js/bootstrap.min.js"></script> -->
    <script src="{{ asset('vendors/fontawesome/js/all.min.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('vendors/plugins/pace.min.js') }}"></script>
    <script src="{{ asset('vendors/sweetalert/sweetalert.min.js') }}"></script>
</body>

</html>
<script>
    $(function() {
        $(".preloader").fadeOut();
    });
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#formLogin").slideUp();
        $("#formResetPass").fadeIn();
    });
    $('#to-return').on("click", function() {
        $("#formResetPass").slideUp();
        $("#formLogin").fadeIn();
    });
    $('#to-register').on("click", function() {
        $('#formLogin').hide();
        $("#create_account").show();
    });
    $('.to_register').on("click", function() {
        $('#create_account').hide();
        $("#formLogin").show();
    });

    $(document).ready(function() {
        $("#formResetPass").slideUp();
        $(document).on("click", ".showPassword", function() {
            let inputPassword = $(this).parent().find("input");
            if ($(inputPassword).val() != "") {
                if ($(inputPassword).prop("type") == "password") {
                    $(inputPassword).prop("type", "text");
                    $(this).html('<i class="fas fa-eye-slash"></i>');
                } else if ($(inputPassword).prop("type") == "text") {
                    $(inputPassword).prop("type", "password");
                    $(this).html('<i class="fas fa-eye"></i>');
                }
            }
        });

    });
</script>
