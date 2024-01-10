<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<!-- PAGE TITLE HERE -->
	<title>SIRIVA</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{url('public')}}/assets/images/favicon.png" />
    <link href="{{url('public')}}/assets/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="{{url('public')}}/assets/images/SIRIVA-LOGO KECIL.png" width="90%" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Masuk dengan akun anda</h4>
                                    <form action="{{ url('login') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Usernama</strong></label>
                                            <input type="text" class="form-control" name="username" placeholder="Usename">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{url('public')}}/assets/vendor/global/global.min.js"></script>
    <script src="{{url('public')}}/assets/js/custom.min.js"></script>
    <script src="{{url('public')}}/assets/js/dlabnav-init.js"></script>

</body>
</html>
