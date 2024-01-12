@extends('siriva.base')
<style>
    input[type="submit"] {
        background-color: #F93A0B;
        color: #ffffff;
        border: 1px solid #F93A0B;
        padding: 10px;
        cursor: pointer;
    }

    input[type="submit"]:disabled {
        background-color: #ddd;
        color: #999;
        cursor: not-allowed;
    }
</style>
@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Periksa</a></li>
                <li class="breadcrumb-item"><a href="{{ url('periksa-pasien') }}">Data Pasien</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pemeriksaan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('siriva/periksa-data') }}" method="post">
                            <div id="smartwizard" class="form-wizard order-create">
                                <ul class="nav nav-wizard">
                                    <li><a class="nav-link" href="#wizard_Service">
                                            <span>1</span>
                                        </a></li>
                                    <li><a class="nav-link" href="#wizard_Time">
                                            <span>2</span>
                                        </a></li>
                                    <li><a class="nav-link" href="#wizard_Details">
                                            <span>3</span>
                                        </a></li>
                                    <li><a class="nav-link" href="#wizard_Payment">
                                            <span>4</span>
                                        </a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="wizard_Service" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Nama Pasien*</label>
                                                    <input type="text" name="namapasien" class="form-control"
                                                        placeholder="Silva" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Suku Pasien*</label>
                                                    <input type="text" name="sukupasien" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Alamat Pasien*</label>
                                                    <input type="text" class="form-control" id="inputGroupPrepend2"
                                                        aria-describedby="inputGroupPrepend2" placeholder="Silahkan diisi"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Kelurahan / Desa Pasien*</label>
                                                    <input type="text" name="desa" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Nama Suami*</label>
                                                    <input type="text" name="namasuami" class="form-control"
                                                        placeholder="Bayu" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Berat Badan Pasien*</label>
                                                    <input type="text" name="beratbadan" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Tinggi Badan Pasien*</label>
                                                    <input type="text" name="tinggipasien" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Telp / WA Pasien*</label>
                                                    <input type="text" name="telp" class="form-control"
                                                        placeholder="(+62)444-555-6666" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Status Kawin Pasien*</label>
                                                    <input type="text" name="phoneNumber" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Status Kawin Suami*</label>
                                                    <input type="text" name="phoneNumber" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Pendidikan Pasien*</label>
                                                    <input type="text" name="phoneNumber" class="form-control"
                                                        placeholder="SMP/ SMA/ Mahasiswa" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Pekerjaan Pasien*</label>
                                                    <input type="text" name="phoneNumber" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Pendidikan Pasien*</label>
                                                    <input type="text" name="phoneNumber" class="form-control"
                                                        placeholder="SMP/ SMA/ Mahasiswa" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Pendidikan Suami*</label>
                                                    <input type="text" name="phoneNumber" class="form-control"
                                                        placeholder="SMP/ SMA/ Mahasiswa" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="wizard_Time" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Usia Pertama Haid*</label>
                                                    <input type="text" name="firstName" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Usia Pertama Kawin*</label>
                                                    <input type="text" class="form-control" id="emial1"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Usia Pertama Hamil*</label>
                                                    <input type="text" name="phoneNumber" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">HPHT*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Manopause*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Umur Manopause*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Siklus Haid*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Jumlah Melahirkan*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Pernah Menyusui*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Caesar*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Keguguran*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Keluarga Sakit Kanker*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Siapa yang sakit*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Kanker apa?*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Keluar banyak cairan /
                                                        keputihan*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Nyeri diperut bagian
                                                        bawah*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Pendarahan bila
                                                        bersenggama*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Pendarahan diluar haid*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Benjolan Payudara /
                                                        Ketiak*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Nyeri payudara*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Cairan Abnormal puting
                                                        payudara*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Lain*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div id="wizard_Details" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-sm-4 mb-2">
                                                <h4>Curiga Kanker*</h4>
                                            </div>
                                            <div class="col-6 col-sm-4 mb-2">
                                                <div class="mb-3">
                                                    <input class="form-control" value="9.00" type="number"
                                                        name="input1" id="input1">
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 mb-2">
                                                <div class="mb-3">
                                                    <input class="form-control" value="6.00" type="number"
                                                        name="input2" id="input2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 mb-2">
                                                <h4>SSK*</h4>
                                            </div>
                                            <div class="col-6 col-sm-4 mb-2">
                                                <div class="mb-3">
                                                    <input class="form-control" value="9.00" type="number"
                                                        name="input3" id="input3">
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 mb-2">
                                                <div class="mb-3">
                                                    <input class="form-control" value="6.00" type="number"
                                                        name="input4" id="input4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 mb-2">
                                                <h4>PAP Smear*</h4>
                                            </div>
                                            <div class="col-6 col-sm-4 mb-2">
                                                <div class="mb-3">
                                                    <input class="form-control" value="9.00" type="number"
                                                        name="input5" id="input5">
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 mb-2">
                                                <div class="mb-3">
                                                    <input class="form-control" value="6.00" type="number"
                                                        name="input6" id="input6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 mb-2">
                                                <h4>Hasil IVA*</h4>
                                            </div>
                                            <div class="col-6 col-sm-4 mb-2">
                                                <div class="mb-3">
                                                    <input class="form-control" value="9.00" type="number"
                                                        name="input7" id="input7">
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 mb-2">
                                                <div class="mb-3">
                                                    <input class="form-control" value="6.00" type="number"
                                                        name="input8" id="input8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 mb-2">
                                                <h4>IVA Lainnya*</h4>
                                            </div>
                                            <div class="col-6 col-sm-4 mb-2">
                                                <div class="mb-3">
                                                    <input class="form-control" value="9.00" type="number"
                                                        name="input9" id="input9">
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 mb-2">
                                                <div class="mb-3">
                                                    <input class="form-control" value="6.00" type="number"
                                                        name="input10" id="input10">
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div id="wizard_Payment" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Menggunakan Probekrio Tip*</label>
                                                    <input type="text" name="firstName" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Antibiotik Profiaksis 7
                                                        hari*</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Menjelaskan kemungkinan
                                                        keadaan*</label>
                                                    <input type="text" name="phoneNumber" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Hasil Pemeriksaan Payudara -
                                                        Kiri*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Hasil Pemeriksaan Payudara -
                                                        Kanan*</label>
                                                    <input type="text" name="place" class="form-control"
                                                        placeholder="Silahkan diisi" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
