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
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
	<link href="./vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="./vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	
	<!-- Style css -->
    <link href="./css/style.css" rel="stylesheet">
	<script src="jquery-3.6.1.min.js"></script>

	
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
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
				<img src="images/SIRIVANEW.png" width="100%">
				

            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Dashboard
                            </div>
							
                        </div>
                        <ul class="navbar-nav header-right"><li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <div id="pegawaigambar"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="./login.html" class="dropdown-item ai-icon">
                                        <svg  xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				
				<ul class="metismenu" id="menu">
                    <li><a class="" href="index.html" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        </li>
					<li><a class="" href="periksa.html" aria-expanded="false">
							<i class="flaticon-093-waving"></i>
							<span class="nav-text">Pemeriksaan</span>
						</a>
                    </li>
                    <li><a class="" href="pasien.html" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">Pasien</span>
						</a>
					</li>
                    
                    
                </ul>
				<div class="plus-box">
					<p class="fs-14 font-w600 mb-2">SIRIVA <br>memudahkan<br>Pengawasan,<br>Pemeriksaan<br>IVA</p>
					<p>Untuk Ketapang lebih baik dan lebih sehat</p>
					<img src="images/SIRIVA-LOGO KECIL.png" width="100%">
				</div>
				<div class="copyright">
					<h3><strong  style="font-size: 25px;" class="text-danger">SIRIVA © 2024</strong></h3>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">

					<div class="col-xl-6 col-xxl-6 col-lg-6 col-sm-6">
						<a href="kinerja-periksa.html">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
										<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
											<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Target Pemeriksaan</p>
										<h4 class="mb-0" id="kinerja"></h4>
									</div>
								</div>
							</div>
						</div>
						</a>
                    </div>


					<div class="col-xl-6 col-xxl-6 col-lg-6 col-sm-6">
						<a href="kehadiran-periksa.html">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
										<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
											<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Capaian Target</p>
										<h4 class="mb-0" id="absensi"></h4>
									</div>
								</div>
							</div>
						</div>
						</a>
                    </div>

					

				</div>

					
				<div class="row">
					<div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
						<a href="#">
						<div class="widget-stat card bg-danger">
							<div class="card-body  p-4">
								<div class="media">
									<span class="me-3">
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">IVA +</p>
										<h3 class="text-white">- Orang</h3>
									</div>
								</div>
							</div>
						</div>
						</a>
                    </div>

					
				</div>

				<div class="row">
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<a href="#">
						<div class="widget-stat card bg-danger">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">SERVISITIS</p>
										<h3 class="text-white">1 Orang</h3>
									</div>
								</div>
							</div>
						</div>
						</a>
                    </div>

					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<a href="#">
						<div class="widget-stat card bg-danger">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">LESI LUAS</p>
										<h3 class="text-white">- Orang</h3>
									</div>
								</div>
							</div>
						</div>
						</a>
                    </div>

					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<a href="#">
						<div class="widget-stat card bg-danger">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">CURIGA KANKER SERVIKS</p>
										<h3 class="text-white">- Orang</h3>
									</div>
								</div>
							</div>
						</div>
						</a>
                    </div>

					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<a href="#">
						<div class="widget-stat card bg-danger">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">KELAINAN SERVIKS LAIN</p>
										<h3 class="text-white">- Orang</h3>
									</div>
								</div>
							</div>
						</div>
						</a>
                    </div>

					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<a href="kehadiran-daftar-perjalanandinas.html">
						<div class="widget-stat card bg-info">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">NORMAL</p>
										<h3 class="text-white" id="jumabsensiperjalanandinas"></h3>
									</div>
								</div>
							</div>
						</div>
						</a>
                    </div>

					
				</div>
			</div>
		</div>
	</div>
        <!--**********************************
            Content body end
        ***********************************-->
		
		
		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Designed &amp; Developed by <a href="https://ketapangkab.go.id/" target="_blank">PDE-DISKOMINFO</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	
	<!-- Dashboard 1 -->
	<script src="./js/dashboard/dashboard-1.js"></script>
	
	
    <script src="./js/custom.min.js"></script>
	<script src="./js/dlabnav-init.js"></script>
	
    
	<script>
		function JobickCarousel()
			{

				/*  testimonial one function by = owl.carousel.js */
				jQuery('.front-view-slider').owlCarousel({
					loop:false,
					margin:30,
					nav:true,
					autoplaySpeed: 3000,
					navSpeed: 3000,
					autoWidth:true,
					paginationSpeed: 3000,
					slideSpeed: 3000,
					smartSpeed: 3000,
					autoplay: false,
					animateOut: 'fadeOut',
					dots:true,
					navText: ['', ''],
					responsive:{
						0:{
							items:1
						},
						
						480:{
							items:1
						},			
						
						767:{
							items:3
						},
						1750:{
							items:3
						}
					}
				})
			}

			jQuery(window).on('load',function(){
				setTimeout(function(){
					JobickCarousel();
				}, 1000); 
			});

			DataSemua();
  function DataSemua() {
    var DataSemua = $("#load_DataSemua");
    DataSemua.html("");
    $.ajax({

      type: "GET",
      url: "http://sinman.ketapangkab.go.id/dash_pd/api_v1/DataIndexOPD.php",
      async: true,
      cache: true,
      dataType: 'json',
      success: function (result) {
        var resObjDataSemua = (result);
        $.each(resObjDataSemua, function (key, val) {
		
          var absensi = val.absensi;
          var kinerja = val.kinerja;
		  var jumpegawai = val.jumpegawai;
		  var jumpegawaihonorer = val.jumpegawaihonorer;
		  var jumpegawaip3k = val.jumpegawaip3k;
		  var jumabsensiterlambat = val.jumabsensiterlambat;
		  var jumabsensipulangcepat = val.jumabsensipulangcepat;
		  var jumabsensicuti = val.jumabsensicuti;
		  var jumabsensipenugasan = val.jumabsensipenugasan;
		  var jumabsensiperjalanandinas = val.jumabsensiperjalanandinas;
		  var pegawaigambar = val.pegawaigambar;

          document.getElementById("absensi").innerHTML = absensi;
          document.getElementById("kinerja").innerHTML = kinerja;
		  document.getElementById("jumpegawai").innerHTML = jumpegawai;
		  document.getElementById("jumpegawaihonorer").innerHTML = jumpegawaihonorer;
		  document.getElementById("jumpegawaip3k").innerHTML = jumpegawaip3k;
		  document.getElementById("jumabsensiterlambat").innerHTML = jumabsensiterlambat;
		  document.getElementById("jumabsensipulangcepat").innerHTML = jumabsensipulangcepat;
		  document.getElementById("jumabsensicuti").innerHTML = jumabsensicuti;
		  document.getElementById("jumabsensipenugasan").innerHTML = jumabsensipenugasan;
		  document.getElementById("jumabsensiperjalanandinas").innerHTML = jumabsensiperjalanandinas;
		  document.getElementById("pegawaigambar").innerHTML = "<img src="+pegawaigambar+" width='100%'>";
		  document.getElementById("pegawaigambarmenu").innerHTML = "<img src="+pegawaigambar+" width='100%'>";



        });
      },
    });
  }
  setInterval("DataSemua()", 1000);
	</script>

</body>
</html>

