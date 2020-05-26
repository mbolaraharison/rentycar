<?php  $titre = "RentyCar"; ?>
@include('layouts.head')
<body>
@include('layouts.header')
<div class="sph-container-sm">
    <div class="container sph-container">
        <div class="row sph-row">
            <div class="col-12 sph-col">
                <form method="post" action="signup_client">
                    @csrf
                    <div class="container sph-container">
                        <div class="row sph-row">
                            <div class="col-12 sph-col sph-signup-client-top-col">
                                <div class="container sph-container sph-signup-client-container">
                                    <div class="row sph-row sph-signup-client-label-row">
                                        <div class="col-12 sph-col sph-signup-client-label-col">
                                            <h4>Inscrivez-vous !</h4>
                                        </div>
                                    </div>
                                    <div class="row sph-row sph-content-signup-client-top-row">
                                        <div class="col-12 sph-col sph-content-signup-client-top-col">
                                            <div class="container sph-container sph-content-signup-client-container">
                                                <div class="row sph-row sph-image-signup-client-row">
                                                    <div class="col-4 sph-col"></div>
                                                    <div class="col-4 sph-col sph-image-signup-client-col">
                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn">
                                                                <img src="{{ '/uploads/clients/avatars/default.png' }}" alt="Logo">
                                                                <img src="{{ '/img/uploadButton.png' }}" class="sph-upload-button">
                                                            </button>
                                                            <input type="file" name="myfile" class="sph-upload-input"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 sph-col"></div>
                                                </div>
                                                <div class="row sph-row sph-nom-signup-client-row">
                                                    <div class="col-12 sph-col sph-nom-signup-client-col">
                                                        <label for="nom_client">Nom</label>
                                                        <input type="text" class="form-control sph-nom-signup-client @error('nom_client') is-invalid @enderror" placeholder="Nom" name="nom_client" value="{{ old('nom_client') }}" >
                                                        @error('nom_client')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-prenom-signup-client-row">
                                                    <div class="col-12 sph-col sph-prenom-signup-client-col">
                                                        <label for="prenom_client">Prénom</label>
                                                        <input type="text" class="form-control sph-prenom-signup-client @error('prenom_client') is-invalid @enderror" placeholder="Prénom" name="prenom_client" value="{{ old('prenom_client') }}" >
                                                        @error('prenom_client')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row">
                                                    <div class="col-12 sph-col sph-date-naissance-col">
                                                        <label for="date_naissance">Date de naissance</label>
                                                        <input type="text" class="form-control sph-date-time sph-date-naissance date_naissance_id @error('date_naissance') is-invalid @enderror" name="date_naissance" id="date" placeholder="yyyy-mm-dd" value="{{ old('date_naissance') }}">
                                                        @error('date_naissance')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-telephone-signup-client-row">
                                                    <div class="col-12 sph-col sph-telephone-signup-client-col">
                                                        <label for="telephone_client">Telephone</label>
                                                        <input type="text" class="form-control sph-telephone-signup-client @error('telephone_client') is-invalid @enderror" placeholder="Telephone" name="telephone_client" value="{{ old('telephone_client') }}" >
                                                        @error('telephone_client')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-email-signup-client-row">
                                                    <div class="col-12 sph-col sph-email-signup-entreprise-col sph-signup-client-col">
                                                        <label for="email_client">Email</label>
                                                        <input type="email" class="form-control sph-signup-client @error('email_client') is-invalid @enderror" placeholder="Adresse e-mail" name="email_client" value="{{ old('email_client') }}" >
                                                        @error('email_client')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-mot-de-passe-signup-client-row">
                                                    <div class="col-12 sph-col sph-mot-de-passe-signup-client-col sph-signup-client-col">
                                                        <label for="mot_de_passe_client">Mot de passe</label>
                                                        <input type="password" class="form-control sph-signup-client @error('mot_de_passe_client') is-invalid @enderror" placeholder="Mot de passe" name="mot_de_passe_client" value="{{ old('mot_de_passe_client') }}" >
                                                        @error('mot_de_passe_client')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-confirmer-mot-de-passe-signup-client-row">
                                                    <div class="col-12 sph-confirmer-mot-de-passe-signup-client-col sph-signup-client-col">
                                                        <input type="password" class="form-control sph-signup-client @error('confirmer_mot_de_passe_client') is-invalid @enderror" placeholder="Confirmer mot de passe" name="confirmer_mot_de_passe_client" value="{{ old('confirmer_mot_de_passe_client') }}" >
                                                        @error('confirmer_mot_de_passe_client')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-signup-client-btn-row">
                                                    <div class="col-12 sph-col sph-signup-client-btn-col">
                                                        <button type="submit" class="search_button sph-signup-client-btn form-control btn btn-primary">
                                                            <span>S'inscrire</span>
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
<div class="sph-container-md"></div>

<!-- Large -->
<div class="sph-container-lg">

</div>

@include('layouts.footer')
</body>