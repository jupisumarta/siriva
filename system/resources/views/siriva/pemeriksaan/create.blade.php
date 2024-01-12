@extends('siriva.base')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-xl-12 col-xxl-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Pemeriksaan</h4>
				</div>
				<div class="card-body">
					<div id="smartwizard" class="form-wizard order-create">
						<ul class="nav nav-wizard">
							<li><a class="nav-link" href="#dataPasien"> 
								<span>1</span> 
							</a></li>
							<li><a class="nav-link" href="#dataPasien2">
								<span>2</span>
							</a></li>
							<li><a class="nav-link" href="#wizard_Details">
								<span>3</span>
							</a></li>
							<li><a class="nav-link" href="#cekKanker">
								<span>4</span>
							</a></li>
						</ul>
						<div class="tab-content">
							<form action="{{url('pemeriksaan/create')}}" method="post">
								@csrf

								<div id="dataPasien" class="tab-pane" role="tabpanel">
									<div class="row">
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Nama Pasien*</label>
												<input type="text" required name="siriva_nama_pasien" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Suku Pasien*</label>
												<span>Suku Bangsa</span>
												<input type="text" name="siriva_suku_pasien" required class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Alamat Pasien*</label>
												<input type="text" name="siriva_alamat_pasien" required class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Kelurahan / Desa Pasien*</label>
												<input type="text" required name="siriva_kel_pasien" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Nama Suami*</label>
												<input type="text" name="siriva_suami_pasien" required class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Berat Badan Pasien* KG</label>
												<input type="number" name="siriva_berat" required class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Tinggi Badan Pasien* cm</label>
												<input type="number" name="siriva_tinggi" required class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Telp / WA Pasien*</label>
												<input type="text" name="siriva_telp" required class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Status Kawin Pasien*</label>
												<select name="siriva_kawin_pasien" id="" class="form-control">
													<option value="1">Kawin</option>
													<option value="2">Belum Kawin</option>
													<option value="3">Janda</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Status Kawin Suami*</label>
												<select name="siriva_kawin_suami" id="" class="form-control">
													<option value="1">Kawin</option>
													<option value="2">Belum Kawin</option>
													<option value="3">Janda</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Pendidikan Pasien*</label>
												<select name="siriva_pendidikan" id="" class="form-control">
													<option value="Tidak Sekolah">Tidak Sekolah</option>
													<option value="SD">SD</option>
													<option value="SMP">SMP</option>
													<option value="SMA">SMA</option>
													<option value="D III">D III (DIII)</option>
													<option value="D IV">D IV (DIII)</option>
													<option value="S1">S1</option>
													<option value="S2">S2</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Pekerjaan Pasien*</label>
												<select name="siriva_pekerjaan_pasien" id="" class="form-control">
													<option value="" hidden>-- Pilih Pekerjaan --</option>
													@foreach($list_pekerjaan as $item)
													<option value="{{$item->pekerjaan_id}}">{{ucwords($item->pekerjaan_nama)}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="col-lg-12 mb-3">
											<div class="mb-3">
												<label class="text-label form-label">Pendidikan Suami*</label>
												<select name="siriva_pendidikan_suami" id="" class="form-control">
													<option value="Tidak Sekolah">Tidak Sekolah</option>
													<option value="SD">SD</option>
													<option value="SMP">SMP</option>
													<option value="SMA">SMA</option>
													<option value="D III">D III (DIII)</option>
													<option value="D IV">D IV (DIII)</option>
													<option value="S1">S1</option>
													<option value="S2">S2</option>
												</select>
											</div>
										</div>

									</div>
								</div>
								<div id="dataPasien2" class="tab-pane" role="tabpanel">
									<div class="row">
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Usia Pertama Haid*</label>
												<input type="number" name="siriva_usia_haid" required class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Usia Pertama Kawin*</label>
												<input type="number" name="siriva_usia_kawin" required class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Usia Pertama Hamil*</label>
												<input type="number" name="siriva_usia_hamil" required class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">HPHT*</label>
												<input type="date" name="siriva_hp" required class="form-control">
												<input type="date" name="siriva_ht" required class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Manopause*</label>
												<select class="form-control" name="">
													<option value="0">Tidak</option>
													<option value="1">Ya</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Umur Manopause*</label>
												<input type="number" name="siriva_manopause_umur" required class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Siklus Haid*</label>
												<select name="siriva_siklus_haid" id="" class="form-control">
													<option value="1">Teratur</option>
													<option value="0">Tidak Teratur</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Jumlah Melahirkan*</label>
												<input type="number" name="siriva_jumlah_melahirkan" required class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Pernah Menyusui*</label>
												<select name="siriva_menyusui" id="" class="form-control">
													<option value="1">Ya</option>
													<option value="0">Tidak</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Caesar*</label>
												<select name="siriva_caesar" id="" class="form-control">
													<option value="1">Ya</option>
													<option value="0">Tidak</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Keguguran*</label>
												<select name="siriva_keguguran" id="" class="form-control">
													<option value="1">Ya</option>
													<option value="0">Tidak</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Keluarga Sakit Kanker*</label>
												<select name="siriva_keluarga_kanker" id="" class="form-control">
													<option value="1">Ya</option>
													<option value="0">Tidak</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Siapa yang sakit*</label>
												<input type="text" name="siriva_siapa" required class="form-control">
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Kanker apa?*</label>
												<input type="text" name="siriva_kanker" class="form-control" >
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Keluar banyak cairan / keputihan*</label>
												<select name="siriva_cairan" id="" class="form-control">
													<option value="1">Ya</option>
													<option value="0">Tidak</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Nyeri diperut bagian bawah*</label>
												<select name="siriva_nyeri" id="" class="form-control">
													<option value="1">Ya</option>
													<option value="0">Tidak</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Pendarahan bila bersenggama*</label>
												<select name="siriva_darah" id="" class="form-control">
													<option value="1">Ya</option>
													<option value="0">Tidak</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Pendarahan diluar haid*</label>
												<select name="siriva_darah_luar" id="" class="form-control">
													<option value="1">Ya</option>
													<option value="0">Tidak</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Benjolan Payudara / Ketiak*</label>
												<select name="siriva_benjolan" id="" class="form-control">
													<option value="1">Ya</option>
													<option value="0">Tidak</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Nyeri payudara*</label>
												<select name="siriva_nyeri_payudara" id="" class="form-control">
													<option value="1">Ya</option>
													<option value="0">Tidak</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Keluar cairan abnormal dari puting payudara*</label>
												<select name="siriva_cairan_abnormal" id="" class="form-control">
													<option value="1">Ya</option>
													<option value="0">Tidak</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Lain*</label>
												<input type="text" name="siriva_lain" class="form-control" required>
											</div>
										</div>
									</div>
								</div>

								<!-- belum -->
								<div id="wizard_Details" class="tab-pane" role="tabpanel">
									<div class="row">
										<div class="col-sm-4 mb-2">
											<h4>Curiga Kanker*</h4>
										</div>
										<div class="col-12 col-sm-4 mb-2">
											<div class="mb-3">
												<select name="siriva_curiga_kanker" id="" class="form-control">
													<option value="0">Tidak</option>
													<option value="1">Ya, Rujuk RS</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 mb-2">
											<h4>SSK*</h4>
										</div>
										<div class=" col-sm-4 mb-2">
											<div class="mb-3">
												<select name="siriva_ssk" id="" class="form-control">
													<option value="1">Tampak</option>
													<option value="0">Tidak Tampak</option>
												</select>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-sm-6 mb-2">
											<h4>PAP Smear*</h4>
										</div>
										<div class=" col-sm-4 mb-2">
											<div class="mb-3">
												<select name="siriva_iva_pap_smear" id="" class="form-control">
													<option value="0">Tidak</option>
													<option value="1">Ya</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 mb-2">
											<h4>Hasil IVA*</h4>
										</div>
										<div class=" col-sm-4 mb-2">
											<div class="mb-3">
												<select name="siriva_iva_hasil" id="" class="form-control">
													<option value="Enderseviks">Enderseviks</option>
													<option value="Ekstoserviks">Ekstoserviks</option>
													<option value="Negatif">Negatif/Normal</option>
													<option value="Radang/Servisitis">Radang/Servisitis</option>
													<option value="Positif">Positif</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4 mb-2">
											<h4>IVA Lainnya*</h4>
										</div>
										<div class=" col-sm-4 mb-2">
											<div class="mb-3">
												<input class="form-control" value="siriva_iva_lain" type="text" name="input9" id="input9">
											</div>
										</div>
									</div>


								</div>
								<div id="cekKanker" class="tab-pane" role="tabpanel">
									<div class="row">
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Menggunakan Probekrio Tip*</label>
												<select name="siriva_probekrio" id="" class="form-control">
													<option value="0">Tidak</option>
													<option value="1">Ya</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Antibiotik Profiaksis 7 hari*</label>
												<select name="siriva_antibiotik" id="" class="form-control">
													<option value="Doxycycline 2 dd 100mg">Doxycycline 2 dd 100mg</option>
													<option value="Lainnya">Lainnya</option>
												</select>
											</div>
										</div>
										<div class="col-lg-12 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Menjelaskan kemungkinan keadaan*</label>
												<select name="siriva_keadaan" id="" class="form-control">
													<option value="Tidak Senggama 30 hari">Tidak Senggama 30 hari</option>
													<option value="Keputihan">Keputihan</option>
													<option value="Adanya Demam">Adanya Demam</option>
													<option value="Kapan harus kembali">Kapan harus kembali</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Hasil Pemeriksaan Payudara - Kiri*</label> <br> <br>
												<input type="checkbox" name="siriva_payudara_kiri_1" value="1">	Payudara 1 <br>
												<input type="checkbox" name="siriva_payudara_kiri_2" value="1">	Payudara 2 <br>
												<input type="checkbox" name="siriva_payudara_kiri_3" value="1">	Payudara 3 <br>
												<input type="checkbox" name="siriva_payudara_kiri_4" value="1">	Payudara 4 <br>

											</div>
										</div>
										<div class="col-lg-6 mb-2">
											<div class="mb-3">
												<label class="text-label form-label">Hasil Pemeriksaan Payudara - Kanan*</label> <br> <br>
												<input type="checkbox" name="siriva_payudara_kanan_1" value="1">	Payudara 1 <br>
												<input type="checkbox" name="siriva_payudara_kanan_2" value="1">	Payudara 2 <br>
												<input type="checkbox" name="siriva_payudara_kanan_3" value="1">	Payudara 3 <br>
												<input type="checkbox" name="siriva_payudara_kanan_4" value="1">	Payudara 4 <br>
											</div>
										</div>

										<div class="col-md-12">
											<button class="btn btn-primary btn-block" type="submit">PROSES</button>
										</div>

									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection