<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SIRIVA" />
    <meta property="og:title" content="SIRIVA" />
    <meta property="og:description" content="SIRIVA" />
    <meta property="og:image" content="https://jobick.dexignlab.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>SIRIVA</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{url('public')}}/assets/images/favicon.png" />
    <link href="{{url('public')}}/assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">

    <!-- Form step -->
    <link href="{{url('public')}}/assets/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet">

    <!-- Style css -->
    <link href="{{url('public')}}/assets/css/style.css" rel="stylesheet">
    <script src="{{url('public')}}/assets/jquery-3.6.1.min.js"></script>


</head>

<body>


    <!--*******************
    	Preloader start
	********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
    	Preloader end
	********************-->

    <!--**********************************
        	Main wrapper start
	***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            	Header start
		***********************************-->
		@include('siriva.layout.header')
        <!--**********************************
        		Header end ti-comment-alt
		***********************************-->


		<!--**********************************
            	Sidebar start
		***********************************-->
		@include('siriva.layout.sidebar')
		<!--**********************************
            	Sidebar end
		***********************************-->


		<!--**********************************
            	Content body start
        ***********************************-->
		<div class="content-body">
			@yield('content')
		</div>

    </div>
    <!--**********************************
            Content body end
    ***********************************-->

	<!--**********************************
			Footer start
	***********************************-->
	@include('siriva.layout.footer')
	<!--**********************************
			Footer end
	***********************************-->

    <!--**********************************
        	Main wrapper end
	***********************************-->

    <!-- Required vendors -->
    <script src="{{url('public')}}/assets/vendor/global/global.min.js"></script>

    <script src="{{url('public')}}/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <!-- Dashboard 1 -->
    <script src="{{url('public')}}/assets/js/dashboard/dashboard-1.js"></script>

    <script src="{{url('public')}}/assets/js/custom.min.js"></script>
    <script src="{{url('public')}}/assets/js/dlabnav-init.js"></script>
    
	<!-- Form Steps -->
	<script src="{{url('public')}}/assets/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>
	<script src="{{url('public')}}/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
    
	<script>
		$(document).ready(function(){
			// SmartWizard initialize
			$('#smartwizard').smartWizard(); 
		});
	</script>


</body>

</html>
