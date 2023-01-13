<main>
    <title>JDIH | Login</title>
    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <a href="/" class="logo float-left">
                {{-- <img src="img/logo.png" height="54" alt="Porto Admin" /> --}}
                <h1><b>JDIH BKKBN</b></h1>
            </a>

            <div class="panel card-sign">
                <div class="card-title-sign mt-3 text-right">
                    <h2 class="title text-uppercase font-weight-bold m-0"><i class="fa fa-user mr-1"></i> Sign In</h2>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="login" class="mt-4" method="POST">

                        <div class="form-group mb-3">
                            <label>Username</label>
                            <div class="input-group input-group-icon">
                                <input wire:model.lazy="email" type="email" class="form-control" placeholder="example@company.com" id="email" autofocus required>
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </span>
                            </div>
                            @error('email') <div wire:key="form" class="invalid-feedback"> {{$message}} </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <div class="clearfix">
                                <label class="float-left">Password</label>
                                <a href="pages-recover-password.html" class="float-right">Lost Password?</a>
                            </div>
                            <div class="input-group input-group-icon">
                                <input wire:model.lazy="password" type="password" placeholder="Password" class="form-control" id="password" required>
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </span>
                            </div>
                            @error('password') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="RememberMe" name="rememberme" type="checkbox" />
                                    <label for="RememberMe">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button type="submit" class="btn btn-primary mt-2">Login Now</button>
                            </div>
                        </div>

                        <span class="mt-3 mb-3 line-thru text-center text-uppercase">
                            <span>v2.0</span>
                        </span>

                        <!-- <div class="mb-1 text-center">
                            <a class="btn btn-success mb-3 ml-1 mr-1" href="#">Manual Book <i class="fa fa-book"></i></a>
                            <a class="btn btn-danger mb-3 ml-1 mr-1" href="#">Video Tutorial <i class="fa fa-youtube"></i></a>
                        </div> -->

                        <p class="text-center">Don't have an account yet? <a href="pages-signup.html">Sign Up!</a></p>

                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2022. Biro Hukum, Organisasi dan Tata Laksana</p>
        </div>
    </section>
    <!-- end: page -->
</main>