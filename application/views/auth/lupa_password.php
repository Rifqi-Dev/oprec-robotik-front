<div class="container">

        <!-- Outer Row -->
        <div class="row d-flex justify-content-center align-items-center vh-100">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img width="40" height="40" src="<?= base_url('assets/'); ?>img/gaza.png" class="img-fluid mb-5 mt-3" alt="E-Magang">
                                        <h1 class="h4 text-gray-900 mb-4">Lupa Password?</h1>
                                    </div>
                                    <p class="mb-4">Sans Cuy, Sini gw bantu buat reset password -nya~ Masukin email yang kamu pake buat daftar akun disini yaa!</p>
                                        
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Email">
                                        </div>
                                        <a href="login.html" class="btn btn-primary btn-user btn-block mt-4">
                                            Reset Password
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registrasi') ?>">Buat Akun!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth')?>">Sudah Punya Akun? Masuk!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>