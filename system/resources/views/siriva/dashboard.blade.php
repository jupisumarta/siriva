@extends('siriva.base')
@section('content')
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!--**********************************
                Content body start
        ***********************************-->
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
                                            <svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-database">
                                                <ellipse cx="12" cy="5" rx="9" ry="3">
                                                </ellipse>
                                                <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                                <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                            </svg>
                                        </span>
                                        <div class="media-body">
                                            <p class="mb-1">Target Pemeriksaan</p>
                                            <h4 class="mb-0" id="kinerja">200</h4>
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
                                            <svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-database">
                                                <ellipse cx="12" cy="5" rx="9" ry="3">
                                                </ellipse>
                                                <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                                <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                            </svg>
                                        </span>
                                        <div class="media-body">
                                            <p class="mb-1">Capaian Target</p>
                                            <h4 class="mb-0" id="absensi">{{$pencapaian}}</h4>
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
                                            <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30"
                                                height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">IVA +</p>
                                            <h3 class="text-white">{{$ivaPlus}} Orang</h3>
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
                                            <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30"
                                                height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
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
                                            <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30"
                                                height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">LESI LUAS</p>
                                            <h3 class="text-white">{{$lesiLuas}} Orang</h3>
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
                                            <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30"
                                                height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">CURIGA KANKER SERVIKS</p>
                                            <h3 class="text-white">{{$curigaKanker}} Orang</h3>
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
                                            <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30"
                                                height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </span>
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
                                            <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30"
                                                height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">NORMAL</p>
                                            <h3 class="text-white" id="jumabsensiperjalanandinas">{{$normal}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>

        <!--**********************************
                Content body end
        ***********************************-->


    <!--**********************************
            Support ticket button start
    ***********************************-->

    <!--**********************************
            Support ticket button end
    ***********************************-->


    </div>

   


    <!--**********************************
            Scripts
        ***********************************-->
@endsection
