<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Progress Bar -->
    <div class="row mb-4">
        <div class="col">
            <div class="d-flex justify-content-center align-items-center">
                <div class="progress-step">
                    <span class="badge badge-primary">1</span>
                    <span>Isi Biodata</span>
                </div>
                <div class="progress-line"></div>
                <div class="progress-step">
                    <span class="badge badge-primary">2</span>
                    <span>Data Pendukung</span>
                </div>
                <div class="progress-line"></div>
                <div class="progress-step">
                    <span class="badge badge-secondary">3</span>
                    <span>Bayar Biaya Pendaftaran</span>
                </div>
                <div class="progress-line"></div>
                <div class="progress-step">
                    <span class="badge badge-secondary">4</span>
                    <span>Selesai Pendaftaran</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Section -->
    <div class="row">
        <div class="col-md-12">
            <form>
                <h4 class="mb-4">Data Pendukung</h4>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fakultas">Fakultas</label>
                        <select id="fakultas" class="form-control">
                            <option selected>Pilih Fakultas</option>
                            <option>Fakultas 1</option>
                            <option>Fakultas 2</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="programStudi">Program Studi</label>
                        <select id="programStudi" class="form-control">
                            <option selected>Pilih Program Studi</option>
                            <option>Program Studi 1</option>
                            <option>Program Studi 2</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="kemampuan">Kemampuan Penggunaan Perangkat Lunak</label>
                    <input type="text" class="form-control" id="kemampuan" placeholder="Kemampuan dalam Menggunakan Perangkat Lunak">
                </div>
                
                <div class="form-group">
                    <label for="alasan">Alasan Mendaftar</label>
                    <input type="text" class="form-control" id="alasan" placeholder="Alasan Mendaftar UK Robotic">
                </div>
                
                <div class="form-group">
                    <label for="motivasi">Motivasi</label>
                    <input type="text" class="form-control" id="motivasi" placeholder="Motivasi Mendaftar UK Robotic">
                </div>

                <div class="form-group">
                    <label for="rencana">Rencana</label>
                    <textarea class="form-control" id="rencana" rows="3" placeholder="Rencana Ketika Terdaftar Sebagai Anggota UK Robotic"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
