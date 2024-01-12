@extends('siriva.base')
@section('content')
<div class="container-fluid">


    <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 col-6">
             <h3 class="mt-2">DATA PASIEN</h3>
           </div>
           <div class="col-md-6 col-6">

            <a href="{{url('pemeriksaan/create')}}" class=" btn btn-primary float-right" style="float: right;"><i class="fa fa-plus"></i> PERIKSA PASIEN</a>
         </div>
     </div>
 </div>
</div>
<!-- row -->
<div class="row">

    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon">
                    <span class="me-3 bgl-primary text-primary">
                        <!-- <i class="ti-user"></i> -->
                        <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </span>
                <div class="media-body">
                    <p class="mb-1">Pasien Periksa</p>
                    <h4 class="mb-0" id="absensi">{{$jumlahPeriksa}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
    <div class="widget-stat card bg-success">
        <div class="card-body p-4">
            <div class="media">
                <span class="me-3">
                    <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </span>
            <div class="media-body text-white text-end">
                <p class="mb-1">Normal</p>
                <h3 class="text-white">95.50%</h3>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
    <div class="widget-stat card bg-danger">
        <div class="card-body  p-4">
            <div class="media">
                <span class="me-3">
                    <svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                </svg>
            </span>
            <div class="media-body text-white text-end">
                <p class="mb-1">Dicurigai</p>
                <h3 class="text-white">17.39%</h3>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-xl-12 col-xxl-6 col-lg-6">
    <div class="card">
        <div class="card-header  border-0 pb-0">
            <h4 class="card-title">Data Pasien</h4>
        </div>
        <div class="card-body">
         <table class="table">
             <thead>
                 <tr class="bg-primary text-white">
                     <th>No</th>
                     <th width="100px">No RM</th>
                     <th>Nama Pasien</th>
                     <th>Aksi</th>
                 </tr>
             </thead>

             <tbody>
                 @foreach($list_pasien->sortByDesc('siriva_id') as $item)
                 <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ucwords($item->siriva_rm)}}</td>
                    <td><b>{{ucwords($item->siriva_nama_pasien)}}</b> <br>
                        {{$item->created_at}}
                    </td>
                    <td>
                        <a href="{{url('pemeriksaan',$item->siriva_id)}}/cek-pasien" class="btn btn-primary btn-sm">Cek Pasien</a>
                    </td>
                </tr>
                @endforeach
            </tbody>


            <tfoot>
             <tr class="bg-primary text-white">
                 <th>No</th>
                 <th>No Rekam Medis</th>
                 <th>Nama Pasien</th>
                 <th>Aksi</th>
             </tr>
         </tfoot>
     </table>
 </div>
</div>
</div>

</div>
</div>
@endsection
