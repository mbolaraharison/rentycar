<?php  $titre = "RentyCar"; ?>
@include('layouts.head')
<body>
@include('layouts.header')

<!-- Small -->
<div class="sph-container-sm">
    <div class="container sph-container">
        <div class="row sph-row">
            <div class="col-12 sph-col">
                <form method="post" action="signin">
                    @csrf
                    <div class="container sph-container">
                        <div class="row sph-row">
                            <div class="col-12 sph-col sph-signin-top-col">
                                <div class="container sph-container sph-signin-container">
                                    <div class="row sph-row sph-signin-label-row">
                                        <div class="col-12 sph-col sph-signin-label-col">
                                            <h4>Connectez-vous !</h4>
                                        </div>
                                    </div>
                                    <div class="row sph-row sph-content-signin-top-row">
                                        <div class="col-12 sph-col sph-content-signin-top-col">
                                            <div class="container sph-container sph-content-signin-container">
                                                <div class="row sph-row sph-email-signin-row">
                                                    <div class="col-12 sph-col sph-email-signin-col">
                                                        <label for="email_signin">Email</label>
                                                        <input type="text" class="form-control sph-email-signin @error('email_signin') is-invalid @enderror" placeholder="Email" name="email_signin" value="{{ old('email_signin') }}" >
                                                        @error('email_signin')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-mot-de-passe-signin-row">
                                                    <div class="col-12 sph-col sph-mot-de-passe-signin-col">
                                                        <label for="mot_de_passe_signin">Mot de passe</label>
                                                        <input type="password" class="form-control sph-mot-de-passe-signin @error('mot_de_passe_signin') is-invalid @enderror" placeholder="Mot de passe" name="mot_de_passe_signin" value="{{ old('mot_de_passe_signin') }}" >
                                                        @error('mot_de_passe_signin')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-signin-btn-row">
                                                    <div class="col-12 sph-col sph-signin-btn-col">
                                                        <button type="submit" class="search_button sph-signin-btn form-control btn btn-primary">
                                                            <span>Se connecter</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
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

<!-- Medium -->
<div class="sph-container-md">
</div>

<!-- Large -->
<div class="sph-container-lg">
</div>

@include('layouts.footer')
</body>