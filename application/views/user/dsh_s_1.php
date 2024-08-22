<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Progress Bar -->
    <div class="row mb-5">
        <div class="col">
            <div class="d-flex justify-content-center align-items-center">
                <div class="progress-step">
                    <span class="badge badge-primary text-white">1</span>
                    <span>Isi Biodata</span>
                </div>
                <div class="progress-line"></div>
                <div class="progress-step">
                    <span class="badge badge-secondary">2</span>
                    <span>Langkah Kedua</span>
                </div>
                <div class="progress-line"></div>
                <div class="progress-step">
                    <span class="badge badge-secondary">3</span>
                    <span>Langkah Ketiga</span>
                </div>
                <div class="progress-line"></div>
                <div class="progress-step">
                    <span class="badge badge-secondary">4</span>
                    <span>Selesai</span>
                </div>
            </div>
        </div>
    </div>


    <!-- Form -->
    <div class="row">
        <div class="col-md-3">
            <div class="text-center">
                <img src="https://via.placeholder.com/150" class="rounded-circle" alt="Profile Image">
                <p class="mt-2"><small>Klik untuk mengunggah foto</small></p>
            </div>
        </div>
        <div class="col-md-9">
            <form>
                <div class="form-group">
                    <label for="nama">Nama Lengkap Anda</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="genderMale" name="gender" class="custom-control-input">
                        <label class="custom-control-label" for="genderMale">Pria</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="genderFemale" name="gender" class="custom-control-input">
                        <label class="custom-control-label" for="genderFemale">Wanita</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tempatLahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatLahir" placeholder="Tempat Lahir">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tanggalLahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggalLahir">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nomorTelepon">Nomor Telepon</label>
                    <input type="tel" class="form-control" id="nomorTelepon" placeholder="Nomor Telepon">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3" placeholder="Alamat Detail"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->