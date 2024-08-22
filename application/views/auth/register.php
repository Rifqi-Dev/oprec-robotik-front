<div class="container ">

    <div class="card o-hidden border-0 shadow-lg my-5 mt-10 justify-content-center d-flex">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <img width="40" height="40" src="<?= base_url('assets/'); ?>img/gaza.png" class="img-fluid mb-5 mt-3" alt="E-Magang">
                        </div>
                        <form class="user">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-fw fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-fw fa-id-badge"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control form-control-user"
                                        id="exampleInputNim"
                                        placeholder="NIM">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-fw fa-lock"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword"
                                            placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleRepeatPassword" placeholder="Ulangi Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox small mt-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Saya setuju untuk mengikuti <a href=""> syarat dan ketentuan </a></label>
                                </div>
                            </div>
                            <a href="login.html" class="btn btn-primary btn-user btn-block mt-5">
                                Daftar Akun
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/lupaPassword') ?>">Lupa Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth') ?>">Sudah Punya Akun? Masuk!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>