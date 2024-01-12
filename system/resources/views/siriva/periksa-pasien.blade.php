@extends('siriva.base')
@section('content')

<div class="container-fluid">
				
				
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Periksa Pasien</a></li>
        </ol>
    </div>
    <!-- row -->
    
    <div class="row">
        
        <div class="col-xl-8">
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
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Suku Pasien</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label"><strong>Alamat Pasien</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label"><strong>Kelurahan / Desa Pasien</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Nama Suami</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label"><strong>Berat Badan Pasien</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-2">
                                                        <label class="form-label"><strong>Tinggi Pasien</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Status Kawin Pasien</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label"><strong>Status Kawin Suami</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-2">
                                                        <label class="form-label"><strong>Pendidikan Pasien</strong></label><br>
                                                        <label class="form-label">isi</label>
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
                                                        <label class="form-label">Tahun</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Usia Pertama Kawin</strong></label><br>
                                                        <label class="form-label">Tahun</label>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label"><strong>Usia Pertama Hamil</strong></label><br>
                                                        <label class="form-label">Tahun</label>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label"><strong>HPHT</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Manopause</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label"><strong>Umur Manopause</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-2">
                                                        <label class="form-label"><strong>Silus Haid</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Jumlah Melahirkan</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label"><strong>Status Kawin Suami</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-2">
                                                        <label class="form-label"><strong>Pernah Menyusui</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Caesar</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Ada keluarga sakit Kanker?</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Siapa yang sakit</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Kanker apa?</strong></label><br>
                                                        <label class="form-label">isi</label>
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
                                                        <label class="form-label">Tahun</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Nyeri dibawah perut / panggul</strong></label><br>
                                                        <label class="form-label">Tahun</label>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label"><strong>Pendarahan saat senggama</strong></label><br>
                                                        <label class="form-label">Tahun</label>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label"><strong>Pendarahan diluar haid</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Benjolan Payudara / ketiak</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label"><strong>Nyeri pada payudara</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-2">
                                                        <label class="form-label"><strong>Cairan abnormal</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Lainnya</strong></label><br>
                                                        <label class="form-label">isi</label>
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
                                                        <label class="form-label">Tahun</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Pemeriksaan SSK</strong></label><br>
                                                        <label class="form-label">Tahun</label>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label"><strong>Pengambilan PAP Smear</strong></label><br>
                                                        <label class="form-label">Tahun</label>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label"><strong>Hasil IVA</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>IVA Lainnya</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label"><strong>Prebekrio Tip</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-2">
                                                        <label class="form-label"><strong>Antibiotik Profiaksis</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Penjelasan</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Payudara Kanan 1</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label"><strong>Payudara Kanan 2</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-2">
                                                        <label class="form-label"><strong>Payudara Kanan 3</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-2">
                                                        <label class="form-label"><strong>Payudara Kanan 4</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label"><strong>Payudara Kiri 1</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label"><strong>Payudara Kiri 2</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-2">
                                                        <label class="form-label"><strong>Payudara Kiri 3</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    <div class="mb-3 col-md-2">
                                                        <label class="form-label"><strong>Payudara Kiri 4</strong></label><br>
                                                        <label class="form-label">isi</label>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="proses" class="tab-pane fade">
                                    <div class="pt-3">
                                        <div class="settings-form">
                                            <h4 class="text-primary">Hasil SADANIS</h4>
                                            <form>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                        <label class="form-check-label" for="customCheckBox1">SADANIS Normal</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                        <label class="form-check-label" for="customCheckBox1">SADANIS Benjolan</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                        <label class="form-check-label" for="customCheckBox1">Curiga Kanker Payudara</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        
                                                        <label class="form-check-label" for="customCheckBox1">Kelainan payudara lain</label>
                                                        <input type="text" name="tinggipasien" class="form-control" placeholder="isi disini" required>

                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                           
                                            <h4 class="text-primary">Anjuran SADANIS</h4>
                                            <form>
                                                <div class="row">
                                                    
                                                    <div class="mb-3 col-md-6">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                        <label class="form-check-label" for="customCheckBox1">SADARI setiap bulan</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                        <label class="form-check-label" for="customCheckBox1">SADANIS setiap tahun</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                        <label class="form-check-label" for="customCheckBox1">USG usia 40 Tahun</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        
                                                        <label class="form-check-label" for="customCheckBox1">Mammografi 40 Tahun</label>
                                                        <input type="text" name="tinggipasien" class="form-control" placeholder="isi disini" required>
                                                    </div>
                                                    
                                                </div>
                                                
                                
                                            <h4 class="text-primary">Hasil IVA</h4>
                                       
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                        <label class="form-check-label" for="customCheckBox1">IVA Normal</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                        <label class="form-check-label" for="customCheckBox1">Servistis</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                        <label class="form-check-label" for="customCheckBox1">IVA +</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                        <label class="form-check-label" for="customCheckBox1">Lesi Luas</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                        <label class="form-check-label" for="customCheckBox1">Curiga Kanker Serviks</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        
                                                        <label class="form-check-label" for="customCheckBox1">Kelainan Ginekologi Lain</label>
                                                        <input type="text" name="tinggipasien" class="form-control" placeholder="isikan kalau ada" required>
                                                    </div>
                                                    
                                                </div>
                                                
                                    
                                            <h4 class="text-primary">Anjuran IVA</h4>
                                    
                                                <div class="row">
                                                    
                                                    <div class="mb-3 col-md-6">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                        <label class="form-check-label" for="customCheckBox1">IVA Ulang 3-5 Tahun</label>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                        <label class="form-check-label" for="customCheckBox1">PAP Smear</label>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <h4 class="text-primary">Krioterapi</h4>
                                       
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        
                                                        <label class="form-check-label" for="customCheckBox1">Krioterapi Tanggal</label>
                                                        <input name="datepicker" class="datepicker-default form-control" id="datepicker">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        
                                                        <label class="form-check-label" for="customCheckBox1">Kontrol Ulang</label>
                                                        <select class="default-select form-control wide mb-3">
                                                            <option>1 Bulan</option>
                                                            <option>6 Bulan</option>
                                                            <option>1 Tahun</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        
                                                        <label class="form-check-label" for="customCheckBox1">Rujukan</label>
                                                        <input type="text" name="tinggipasien" class="form-control" placeholder="isikan kalau ada" required>
                                                    </div>
                                                    <div class="mb-3 col-12">
                                                        <button type="submit" class="btn btn-danger">PROSES SIRIVA</button>

                                                    </div>

                                                    
                                                </form>
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </form>
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
</div>

@endsection