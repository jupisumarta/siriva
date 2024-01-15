@extends('siriva.base')
@section('content')

<div class="container-fluid">
	<div class="card bg-primary">
		<div class="card-body">
			<center>
				<h3 class="text-white">DATA PASIEN</h3>
			</center>
		</div>
	</div>


	<div class="card mt-3">
		<div class="card-body table-responsive">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr class="bg-primary text-white">
						<th class="text-center">No</th>
						<th>No RM.</th>
						<th>Nama Pasien</th>
						<th>Alamat</th>
						<th>Nomor Telepon</th>
						<th>Curiga Kanker</th>
						<th width="200px">Aksi</th>
					</tr>
				</thead>

				<tbody>
					@foreach($list_pasien->sortByDesc('siriva_id') as $item)
					<tr>
						<td class="text-center">{{$loop->iteration}}</td>
						<td>{{$item->siriva_rm}}</td>
						<td>{{ucwords($item->siriva_nama_pasien)}}</td>
						<td>{{ucwords($item->siriva_alamat_pasien)}}</td>
						<td>
							{{$item->siriva_telp}} <br>
							<a href="https://wa.me/{{$item->siriva_telp}}" target="_blank" class="btn btn-sm btn-primary"> <i class="fa fa-phone"></i> WhatsApp</a>

						</td>
						<td>
							@if($item->siriva_curiga_kanker == 1)
							<b style="color:#BE0707">Curiga Kanker</b>
							@else
							<b style="color:#1DB515">Tidak Dicurigai</b>
							@endif

						</td>
						<td>
							<div class="btn-group">
								<a href="{{url('pasien',$item->siriva_id)}}/history" class="btn btn-dark btn-sm"><i class="fa fa-history"></i> History</a>
								<!-- <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> -->
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>


				<tfoot>
					<tr class="bg-primary text-white">
						<th class="text-center">No</th>
						<th>No RM.</th>
						<th>Nama Pasien</th>
						<th>Alamat</th>
						<th>Nomor Telepon</th>
						<th>Curiga Kanker</th>
						<th width="200px">Aksi</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
@endsection