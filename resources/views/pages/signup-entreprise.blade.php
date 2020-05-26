<?php  $titre = "RentyCar"; ?>
@include('layouts.head')
<body>
@include('layouts.header')
<div class="sph-container-sm">
    <div class="container sph-container">
        <div class="row sph-row">
            <div class="col-12 sph-col ">
                <form method="post" action="signup_entreprise">
                    @csrf
                    <div class="container sph-container">
                        <div class="row sph-row">
                            <div class="col-12 sph-col sph-signup-entreprise-top-col">
                                <div class="container sph-container sph-signup-entreprise-container">
                                    <div class="row sph-row sph-signup-entreprise-label-row">
                                        <div class="col-12 sph-col sph-signup-entreprise-label-col">
                                            <h4>Devenez une entreprise !</h4>
                                        </div>
                                    </div>
                                    <div class="row sph-row sph-content-signup-entreprise-top-row">
                                        <div class="col-12 sph-col sph-content-signup-entreprise-top-col">
                                            <div class="container sph-container sph-content-signup-entreprise-container">
                                                <div class="row sph-row sph-image-signup-entreprise-row">
                                                    <div class="col-4 sph-col"></div>
                                                    <div class="col-4 sph-col sph-image-signup-entreprise-col">
                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn">
                                                                <img src="{{ '/uploads/entreprises/logos/default.png' }}" alt="Logo">
                                                                <img src="{{ '/img/uploadButton.png' }}" class="sph-upload-button">
                                                            </button>
                                                            <input type="file" name="myfile" class="sph-upload-input"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 sph-col"></div>
                                                </div>
                                                <div class="row sph-row sph-nom-signup-entreprise-row">
                                                    <div class="col-12 sph-col sph-nom-signup-entreprise-col">
                                                        <label for="nom_entreprise">Nom d'entreprise</label>
                                                        <input type="text" class="form-control sph-nom-signup-entreprise @error('nom_entreprise') is-invalid @enderror" placeholder="Nom d'entreprise" name="nom_entreprise" value="{{ old('nom_entreprise') }}" >
                                                        @error('nom_entreprise')
                                                            <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-statut-juridique-signup-entreprise-row">
                                                    <div class="col-12 sph-col sph-statut-juridique-signup-entreprise-col sph-signup-entreprise-col">
                                                        <label for="statut_juridique">Statut juridique</label>
                                                        <select class="form-control sph-signup-entreprise @error('statut_juridique') is-invalid @enderror" placeholder="Statut juridique" name="statut_juridique">
                                                            <option value="">Choisir un statut juridique</option>
                                                            <option value="ei" {{ old('statut_juridique') == 'ei' ? 'selected' : '' }}>Entreprise individuelle</option>
                                                            <option value="eirl" {{ old('statut_juridique') == 'eirl' ? 'selected' : '' }}>EIRL</option>
                                                            <option value="eurl" {{ old('statut_juridique') == 'eurl' ? 'selected' : '' }}>EURL</option>
                                                            <option value="sa" {{ old('statut_juridique') == 'sa' ? 'selected' : '' }}>SA</option>
                                                            <option value="sarl" {{ old('statut_juridique') == 'sarl' ? 'selected' : '' }}>SARL</option>
                                                            <option value="sas" {{ old('statut_juridique') == 'sas' ? 'selected' : '' }}>SAS</option>
                                                            <option value="sasu" {{ old('statut_juridique') == 'sasu' ? 'selected' : '' }}>SASU</option>
                                                            <option value="snc" {{ old('statut_juridique') == 'snc' ? 'selected' : '' }}>SNC</option>
                                                        </select>
                                                        @error('statut_juridique')
                                                            <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-raison-sociale-signup-entreprise-row">
                                                    <div class="col-12 sph-col sph-raison-sociale-signup-entreprise-col sph-signup-entreprise-col">
                                                        <label for="raison_sociale">Raison sociale</label>
                                                        <input type="text" class="form-control sph-signup-entreprise @error('raison_sociale') is-invalid @enderror" placeholder="Raison sociale" name="raison_sociale" value="{{ old('raison_sociale') }}" >
                                                        @error('raison_sociale')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-email-signup-entreprise-row">
                                                    <div class="col-12 sph-col sph-email-signup-entreprise-col sph-signup-entreprise-col">
                                                        <label for="email_entreprise">Email</label>
                                                        <input type="email" class="form-control sph-signup-entreprise @error('email_entreprise') is-invalid @enderror" placeholder="Adresse e-mail" name="email_entreprise" value="{{ old('email_entreprise') }}" >
                                                        @error('email_entreprise')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-mot-de-passe-signup-entreprise-row">
                                                    <div class="col-12 sph-col sph-mot-de-passe-signup-entreprise-col sph-signup-entreprise-col">
                                                        <label for="mot_de_passe_entreprise">Mot de passe</label>
                                                        <input type="password" class="form-control sph-signup-entreprise @error('mot_de_passe_entreprise') is-invalid @enderror" placeholder="Mot de passe" name="mot_de_passe_entreprise" value="{{ old('mot_de_passe_entreprise') }}" >
                                                        @error('mot_de_passe_entreprise')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-confirmer-mot-de-passe-signup-entreprise-row">
                                                    <div class="col-12 sph-confirmer-mot-de-passe-signup-entreprise-col sph-signup-entreprise-col">
                                                        <input type="password" class="form-control sph-signup-entreprise @error('confirmer_mot_de_passe_entreprise') is-invalid @enderror" placeholder="Confirmer mot de passe" name="confirmer_mot_de_passe_entreprise" value="{{ old('confirmer_mot_de_passe_entreprise') }}" >
                                                        @error('confirmer_mot_de_passe_entreprise')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-adresse-signup-entreprise-row">
                                                    <div class="col-12 sph-col sph-adresse-signup-entreprise-col sph-signup-entreprise-col">
                                                        <label for="adresse_entreprise">Adresse</label>
                                                        <input type="text" class="form-control sph-signup-entreprise @error('adresse_entreprise') is-invalid @enderror" placeholder="Adresse" name="adresse_entreprise" value="{{ old('adresse_entreprise') }}" >
                                                        @error('adresse_entreprise')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-telephone-signup-entreprise-row">
                                                    <div class="col-12 sph-col sph-telephone-signup-entreprise-col sph-signup-entreprise-col">
                                                        <label for="telephone_entreprise">Télephone</label>
                                                        <input type="text" class="form-control sph-signup-entreprise @error('telephone_entreprise') is-invalid @enderror" placeholder="Télephone" name="telephone_entreprise" value="{{ old('telephone_entreprise') }}" >
                                                        @error('telephone_entreprise')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-siege-social-signup-entreprise-row">
                                                    <div class="col-12 sph-col sph-siege-social-signup-entreprise-col sph-signup-entreprise-col">
                                                        <label for="siege_social">Siège social</label>
                                                        <input type="text" class="form-control sph-signup-entreprise @error('siege_social') is-invalid @enderror" placeholder="Siège social" name="siege_social" value="{{ old('siege_social') }}" >
                                                        @error('siege_social')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-ville-signup-entreprise-row">
                                                    <div class="col-12 sph-col sph-ville-signup-entreprise-col sph-signup-entreprise-col">
                                                        <label for="ville_entreprise">Ville</label>
                                                        <input type="text" class="form-control sph-signup-entreprise  @error('ville_entreprise') is-invalid @enderror" placeholder="Ville" name="ville_entreprise" value="{{ old('ville_entreprise') }}" >
                                                        @error('ville_entreprise')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-pays-signup-entreprise-row">
                                                    <div class="col-12 sph-col sph-pays-signup-entreprise-col sph-signup-entreprise-col">
                                                        <label for="pays_entreprise">Pays</label>
                                                        <select class="form-control sph-signup-entreprise @error('pays_entreprise') is-invalid @enderror" placeholder="Pays" name="pays_entreprise" value="{{ old('pays_entreprise') }}" >
                                                            @include('layouts.liste-pays');
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-description-signup-entreprise-row">
                                                    <div class="col-12 sph-col sph-description-signup-entreprise-col sph-signup-entreprise-col">
                                                        <label for="description_entreprise">Description</label>
                                                        <textarea rows="3" cols="100" class="form-control sph-signup-entreprise  @error('description_entreprise') is-invalid @enderror" placeholder="Description" name="description_entreprise" value="{{ old('description_entreprise') }}" ></textarea>
                                                        @error('description_entreprise')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-duns-signup-entreprise-row">
                                                    <div class="col-12 sph-col sph-duns-signup-entreprise-col sph-signup-entreprise-col">
                                                        <label for="duns">DUNS d'entreprise</label>
                                                        <input type="text" class="form-control sph-signup-entreprise @error('duns') is-invalid @enderror" placeholder="DUNS d'entreprise" name="duns" value="{{ old('duns') }}" >
                                                        @error('duns')
                                                        <label class="alert alert-danger">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-files-signup-entreprise-row">
                                                    <div class="col-12 sph-col sph-files-signup-entreprise-col sph-signup-entreprise-col">
                                                        <label for="files">Documents (K/Kbis/L/Lbis/D1)</label>
                                                        <input type="file" class="form-control sph-signup-entreprise @error('files') is-invalid @enderror" placeholder="K/Kbis/L/Lbis/D1" name="files" value="{{ old('files') }}" >
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-signup-entreprise-btn-row">
                                                    <div class="col-12 sph-col sph-signup-entreprise-btn-col">
                                                        <button type="submit" class="search_button sph-signup-entreprise-btn form-control btn btn-primary">
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