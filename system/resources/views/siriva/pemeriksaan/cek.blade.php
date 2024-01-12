@extends('siriva.base')
@section('content')


<div class="container">
<div class="row">

	<div class="col-xl-12 mt-5">
		<div class="card">
			<div class="card-body">
				<div class="profile-tab">
					<div class="custom-tab-1">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a href="#identitas" data-bs-toggle="tab" class="nav-link active show">Identitas</a>
							</li>
							<li class="nav-item"><a href="#riwayat" data-bs-toggle="tab" class="nav-link">Riwayat</a>
							</li>
							<li class="nav-item"><a href="#keluhan" data-bs-toggle="tab" class="nav-link">Keluhan</a>
							</li>
							<li class="nav-item"><a href="#pemeriksaan" data-bs-toggle="tab" class="nav-link">Pemeriksaan</a>
							</li>
							<li class="nav-item"><a href="#proses" data-bs-toggle="tab" class="nav-link">Proses</a>
							</li>
						</ul>
						<div class="tab-content">
							<div id="identitas" class="tab-pane fade active show">
								<div class="pt-3">
									<div class="settings-form">
										<h4 class="text-primary">Identitas Pasien</h4>
										<form>
											<div class="row">
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Nama Pasien</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_nama_pasien)}}</label>
												</div>
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Suku Pasien</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_suku_pasien)}}</label>
												</div>
											</div>
											<div class="mb-3">
												<label class="form-label"><strong>Alamat Pasien</strong></label><br>
												<label class="form-label">{{ucwords($pasien->siriva_alamat_pasien)}}</label>
											</div>
											<div class="mb-3">
												<label class="form-label"><strong>Kelurahan / Desa Pasien</strong></label><br>
												<label class="form-label">{{ucwords($pasien->siriva_kel_pasien)}}</label>
											</div>
											<div class="row">
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Nama Suami</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_suami_pasien)}}</label>
												</div>
												<div class="mb-3 col-md-4">
													<label class="form-label"><strong>Berat Badan Pasien</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_berat)}}</label>
												</div>
												<div class="mb-3 col-md-2">
													<label class="form-label"><strong>Tinggi Pasien</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_tinggi)}}</label>
												</div>
											</div>
											<div class="row">
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Status Kawin Pasien</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_kawin_pasien)}}</label>
												</div>
												<div class="mb-3 col-md-4">
													<label class="form-label"><strong>Status Kawin Suami</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_kawin_suami)}}</label>
												</div>
												<div class="mb-3 col-md-2">
													<label class="form-label"><strong>Pendidikan Pasien</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_pendidikan_pasien)}}</label>
												</div>
											</div>
											<div class="row">
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Pendidikan Suami</strong></label><br>
													<label class="form-label">isi</label>
												</div>

											</div>


										</form>
									</div>
								</div>
							</div>
							<div id="riwayat" class="tab-pane fade">
								<div class="pt-3">
									<div class="settings-form">
										<h4 class="text-primary">Riwayat Pasien</h4>
										<form>
											<div class="row">
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Usia Pertama Haid</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_usia_haid)}} Tahun</label>
												</div>
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Usia Pertama Kawin</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_usia_kawin)}} Tahun</label>
												</div>
											</div>
											<div class="mb-3">
												<label class="form-label"><strong>Usia Pertama Hamil</strong></label><br>
												<label class="form-label">{{ucwords($pasien->siriva_usia_hamil)}} Tahun</label>
											</div>
											<div class="mb-3">
												<label class="form-label"><strong>HPHT</strong></label><br>
												<label class="form-label">Hp : {{ucwords($pasien->siriva_hp)}}</label> <br>
												<label class="form-label">Ht : {{ucwords($pasien->siriva_ht)}}</label>
											</div>
											<div class="row">
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Manopause</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_manopause)}}</label>
												</div>
												<div class="mb-3 col-md-4">
													<label class="form-label"><strong>Umur Manopause</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_manopause_umur)}} Tahun</label>
												</div>
												<div class="mb-3 col-md-2">
													<label class="form-label"><strong>Siklus Haid</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_siklus_haid)}}</label>
												</div>
											</div>
											<div class="row">
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Jumlah Melahirkan</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_jumlah_melahirkan)}}</label>
												</div>
												<div class="mb-3 col-md-4">
													<label class="form-label"><strong>Status Kawin Suami</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_kawin_suami)}}</label>
												</div>
												<div class="mb-3 col-md-2">
													<label class="form-label"><strong>Pernah Menyusui</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_menyusui)}}</label>
												</div>
											</div>
											<div class="row">
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Caesar</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_caesar)}}</label>
												</div>
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Ada keluarga sakit Kanker?</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_keluarga_kanker)}}</label>
												</div>
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Siapa yang sakit</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_siapa)}}</label>
												</div>
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Kanker apa?</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_kanker_nama)}}</label>
												</div>
											</div>


										</form>
									</div>
								</div>

							</div>
							<div id="keluhan" class="tab-pane fade">
								<div class="pt-3">
									<div class="settings-form">
										<h4 class="text-primary">Keluhan Pasien</h4>
										<form>
											<div class="row">
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Keluar banyak cairan / keputihan</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_cairan)}}</label>
												</div>
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Nyeri dibawah perut / panggul</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_nyeri)}}</label>
												</div>
											</div>
											<div class="mb-3">
												<label class="form-label"><strong>Pendarahan saat senggama</strong></label><br>
												<label class="form-label">{{ucwords($pasien->siriva_darah)}}</label>
											</div>
											<div class="mb-3">
												<label class="form-label"><strong>Pendarahan diluar haid</strong></label><br>
												<label class="form-label">{{ucwords($pasien->siriva_darah_luar)}}</label>
											</div>
											<div class="row">
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Benjolan Payudara / ketiak</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_benjolan)}}</label>
												</div>
												<div class="mb-3 col-md-4">
													<label class="form-label"><strong>Nyeri pada payudara</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_nyeri_payudara)}}</label>
												</div>
												<div class="mb-3 col-md-2">
													<label class="form-label"><strong>Cairan abnormal</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_cairan_abnormal)}}</label>
												</div>
											</div>
											<div class="row">
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Lainnya</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_lain)}}</label>
												</div>

											</div>

										</form>
									</div>
								</div>
							</div>
							<div id="pemeriksaan" class="tab-pane fade">
								<div class="pt-3">
									<div class="settings-form">
										<h4 class="text-primary">Pemeriksaan Pasien</h4>
										<form>
											<div class="row">
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Curiga Kanker</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_curiga_kanker)}}</label>
												</div>
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Pemeriksaan SSK</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_ssk)}}</label>
												</div>
											</div>
											<div class="mb-3">
												<label class="form-label"><strong>Pengambilan PAP Smear</strong></label><br>
												<label class="form-label">{{ucwords($pasien->siriva_iva_pap_smear)}}</label>
											</div>
											<div class="mb-3">
												<label class="form-label"><strong>Hasil IVA</strong></label><br>
												<label class="form-label">Belum ada data</label>
											</div>
											<div class="row">
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>IVA Lainnya</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_iva_lain)}}</label>
												</div>
												<div class="mb-3 col-md-4">
													<label class="form-label"><strong>Prebekrio Tip</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_probekrio)}}</label>
												</div>
												<div class="mb-3 col-md-2">
													<label class="form-label"><strong>Antibiotik Profiaksis</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_probekrio)}}</label>
												</div>
											</div>
											<div class="row">
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Penjelasan</strong></label><br>
													<label class="form-label">Belum ada data</label>
												</div>
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Payudara Kanan 1</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_payudara_kanan_1)}}</label>
												</div>
												<div class="mb-3 col-md-4">
													<label class="form-label"><strong>Payudara Kanan 2</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_payudara_kanan_2)}}</label>
												</div>
												<div class="mb-3 col-md-2">
													<label class="form-label"><strong>Payudara Kanan 3</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_payudara_kanan_3)}}</label>
												</div>
												<div class="mb-3 col-md-2">
													<label class="form-label"><strong>Payudara Kanan 4</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_payudara_kanan_4)}}</label>
												</div>
												<div class="mb-3 col-md-6">
													<label class="form-label"><strong>Payudara Kiri 1</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_payudara_kiri_1)}}</label>
												</div>
												<div class="mb-3 col-md-4">
													<label class="form-label"><strong>Payudara Kiri 2</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_payudara_kiri_2)}}</label>
												</div>
												<div class="mb-3 col-md-2">
													<label class="form-label"><strong>Payudara Kiri 3</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_payudara_kiri_3)}}</label>
												</div>
												<div class="mb-3 col-md-2">
													<label class="form-label"><strong>Payudara Kiri 4</strong></label><br>
													<label class="form-label">{{ucwords($pasien->siriva_payudara_kiri_4)}}</label>
												</div>

											</div>

										</form>
									</div>
								</div>
							</div>
							<div id="proses" class="tab-pane fade">
								<form action="{{url('pemeriksaan',$pasien->siriva_id)}}/proses" method="post">
									@csrf
									@method("PUT")
								
								<div class="pt-3">
									<div class="settings-form">
										<h4 class="text-primary">Hasil SADANIS</h4>
								
											<div class="row">
												<div class="mb-3 col-md-6">
													<input type="checkbox" class="form-check-input" value="1" name="sadanis_normal" >
													<label class="form-check-label">SADANIS Normal</label>
												</div>
												<div class="mb-3 col-md-6">
													<input type="checkbox" value="1" name="sadanis_benjolan" class="form-check-input" >
													<label class="form-check-label">SADANIS Benjolan</label>
												</div>
												<div class="mb-3 col-md-6">
													<input type="checkbox" value="1" name="sadanis_kanker_payudara" class="form-check-input" >
													<label class="form-check-label">Curiga Kanker Payudara</label>
												</div>
												<div class="mb-3 col-md-6">

													<label class="form-check-label" >Kelainan payudara lain</label>
													<input type="text" name="sadanis_kelainan" class="form-control" placeholder="isi disini" >

												</div>

											</div>



											<h4 class="text-primary">Anjuran SADANIS</h4>
											
												<div class="row">

													<div class="mb-3 col-md-6">
														<input type="checkbox" value="1" name="sadanis_anjuran_bulanan" class="form-check-input" >
														<label class="form-check-label">SADARI setiap bulan</label>
													</div>
													<div class="mb-3 col-md-6">
														<input type="checkbox" value="1" name="sadanis_anjuran_tahunan" class="form-check-input" >
														<label class="form-check-label">SADANIS setiap tahun</label>
													</div>
													<div class="mb-3 col-md-6">
														<input type="checkbox" value="1" name="sadanis_anjuran_usg" class="form-check-input" >
														<label class="form-check-label">USG usia 40 Tahun</label>
													</div>
													<div class="mb-3 col-md-6">

														<label class="form-check-label" >Mammografi 40 Tahun</label>
														<input type="text" name="sadanis_anjuran_mammografi" class="form-control" placeholder="isi disini" >
													</div>

												</div>


												<h4 class="text-primary">Hasil IVA</h4>

												<div class="row">
													<div class="mb-3 col-md-6">
														<input type="checkbox" value="1" name="iva_normal" class="form-check-input" >
														<label class="form-check-label">IVA Normal</label>
													</div>
													<div class="mb-3 col-md-6">
														<input type="checkbox" value="1" name="iva_servistis" class="form-check-input" >
														<label class="form-check-label">Servistis</label>
													</div>
													<div class="mb-3 col-md-6">
														<input type="checkbox" value="1" name="iva_positif" class="form-check-input" >
														<label class="form-check-label">IVA +</label>
													</div>
													<div class="mb-3 col-md-6">
														<input type="checkbox" value="1" name="iva_lesi_luas" class="form-check-input" >
														<label class="form-check-label">Lesi Luas</label>
													</div>
													<div class="mb-3 col-md-6">
														<input type="checkbox" value="1" name="iva_kanker_serviks" class="form-check-input" >
														<label class="form-check-label">Curiga Kanker Serviks</label>
													</div>
													<div class="mb-3 col-md-6">

														<label class="form-check-label">Kelainan Ginekologi Lain</label>
														<input type="text" name="iva_lain" name="tinggipasien" class="form-control" placeholder="isikan kalau ada" >
													</div>

												</div>

												
												<h4 class="text-primary">Anjuran IVA</h4>

												<div class="row">

													<div class="mb-3 col-md-6">
														<input type="checkbox" value="1" name="iva_anjuran_3" class="form-check-input" >
														<label class="form-check-label">IVA Ulang 3-5 Tahun</label>
													</div>
													<div class="mb-3 col-md-6">
														<input type="checkbox" value="1" name="iva_anjuran_pap" class="form-check-input" >
														<label class="form-check-label">PAP Smear</label>
													</div>


												</div>
												<h4 class="text-primary">Krioterapi</h4>

												<div class="row">
													<div class="mb-3 col-md-6">

														<label class="form-check-label">Krioterapi Tanggal</label>
														<input name="kriotrapi_tanggal" type="date" class=" form-control">
													</div>
													<div class="mb-3 col-md-6">

														<label class="form-check-label" >Kontrol Ulang</label>
														<select class="default-select form-control wide mb-3" name="iva_kontrol_ulang">
															<option value="1 Bulan">1 Bulan</option>
															<option value="6 Bulan">6 Bulan</option>
															<option value="1 Tahun">1 Tahun</option>
														</select>
													</div>
													<div class="mb-3 col-md-6">

														<label class="form-check-label">Rujukan</label>
														<input type="text" name="siriva_rujukan" class="form-control" placeholder="isikan kalau ada" >
													</div>
													<div class="mb-3 col-12">
														<button type="submit" class="btn btn-danger">PROSES SIRIVA</button>

													</div>


												</form>


											</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="replyModal">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Post Reply</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
									</div>
									<div class="modal-body">
										<form>
											<textarea class="form-control" rows="4">Message</textarea>
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">btn-close</button>
										<button type="button" class="btn btn-primary">Reply</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	@endsection