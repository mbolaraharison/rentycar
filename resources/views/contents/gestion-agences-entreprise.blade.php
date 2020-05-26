<div class="sph-gestion-agences-entreprises" style="display : none !important;">
    <div class="sph-container-sm">
        <div class="container sph-container sph-agences-item-top-container">
            <div class="row sph-row">
                <div class="col-4 sph-col sph-agences-title-col">
                    <h3>Vos agences</h3>
                </div>
                <div class="col-2 sph-col">

                </div>
                <div class="col-6 sph-col sph-ajouter-agences-title-col">
                    <h3 class="open-popup-ajouter-agences">Ajouter une agence</h3>
                    <form method="POST" action="ajouter_agences" id="ajouter_agence_form">
                        @csrf
                        <div class="container sph-container popup-ajouter-agences">
                            <div class="row sph-row sph-ajouter-agences-top-row">
                                <div class="col-11 sph-col">
                                    <div class="container sph-container">
                                        <div class="row sph-row sph-ajouter-agences-row">
                                            <div class="col-12 sph-col sph-ajouter-agences-col">
                                                <h3>Ajouter une agence</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1 sph-col sph-close-icon-col">
                                    <img src="{{ asset('/img/closeIcon.png') }}" alt="close-trouver-icon" name="close_popup_ajouter_agences">
                                </div>
                            </div>
                            <div class="row sph-row">
                                <div class="col-12 sph-col sph-ville-ajouter-agences-col">
                                    <label for="ville_agence">Ville</label>
                                    <input type="text" form="ajouter_agence_form" class="form-control sph-ville-ajouter-agences @error('ville_agence') is-invalid @enderror" placeholder="Ville" name="ville_agence" value="{{ old('ville_agence') }}" >
                                    @error('ville_agence')
                                    <label class="alert alert-danger ville_agence_error_label">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="row sph-row">
                                <div class="col-12 sph-col sph-adresse-ajouter-agences-col">
                                    <label for="adresse_agence">Adresse</label>
                                    <input type="text" form="ajouter_agence_form" class="form-control sph-adresse-ajouter-agences @error('adresse_agence') is-invalid @enderror" placeholder="Adresse" name="adresse_agence" value="{{ old('adresse_agence') }}" >
                                    @error('adresse_agence')
                                    <label class="alert alert-danger adresse_agence_error_label">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="row sph-row">
                                <div class="col-12 sph-col sph-telephone-ajouter-agences-col">
                                    <label for="telephone_agence">Télephone</label>
                                    <input type="text" form="ajouter_agence_form" class="form-control sph-telephone-ajouter-agences @error('telephone_agence') is-invalid @enderror" placeholder="Télephone" name="telephone_agence" value="{{ old('telephone_agence') }}" >
                                    @error('telephone_agence')
                                    <label class="alert alert-danger telephone_agence_error_label">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="row sph-row">
                                <div class="col-12 sph-col sph-email-ajouter-agences-col">
                                    <label for="email_agence">Email</label>
                                    <input type="text" form="ajouter_agence_form" class="form-control sph-email-ajouter-agences @error('email_agence') is-invalid @enderror" placeholder="Email" name="email_agence" value="{{ old('email_agence') }}" >
                                    @error('email_agence')
                                    <label class="alert alert-danger email_agence_error_label">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="row sph-row">
                                <div class="col-12 sph-col sph-mot-de-passe-ajouter-agences-col">
                                    <label for="mot_de_passe_agence">Mot de passe</label>
                                    <input type="text" form="ajouter_agence_form" class="form-control sph-mot-de-passe-ajouter-agences @error('mot_de_passe_agence') is-invalid @enderror" placeholder="Mot de passe" name="mot_de_passe_agence" value="{{ old('mot_de_passe_agence') }}" >
                                    @error('mot_de_passe_agence')
                                    <label class="alert alert-danger mot_de_passe_error_label">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="row sph-row">
                                <div class="col-12 sph-col sph-confirmer-mot-de-passe-ajouter-agences-col">
                                    <input type="text" form="ajouter_agence_form" class="form-control sph-confirmer-mot-de-passe-ajouter-agences @error('confirmer_mot_de_passe_agence') is-invalid @enderror" placeholder="Confirmer mot de passe" name="confirmer_mot_de_passe_agence" value="{{ old('confirmer_mot_de_passe_agence') }}" >
                                    @error('confirmer_mot_de_passe_agence')
                                    <label class="alert alert-danger confirmer_mot_de_passe_error_label">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="row sph-row sph-btn-ajouter-agences-row">
                                <div class="col-12 sph-col sph-btn-ajouter-agences-col">
                                    <button type="submit" form="ajouter_agence_form" class="search_button sph-btn-ajouter-agences form-control">
                                        <span>Ajouter</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row sph-row">
                <div class="col-12 sph-col sph-agences-item-top-col">
                    <div class="container sph-container sph-agences-items-container">
                        <div class="row sph-row">
                            <div class="col-12 sph-col sph-agences-item-title-col">
                                <h4>Agence 1</h4>
                            </div>
                        </div>
                        <div class="row sph-row">
                            <div class="col-12 sph-col table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col">Localisation</th>
                                        <th scope="col">Ville</th>
                                        <th scope="col">Voitures</th>
                                        <th scope="col">Réservations</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img alt="agence-localisation" src=""></td>
                                        <td>Agadir</td>
                                        <td><button class="btn-primary sph-btn-voitures-agences">0</button></td>
                                        <td><button class="btn-primary sph-btn-reservations-agences">0</button></td>
                                    </tr>
                                    <tr>
                                        <td><label class="btn-infos-agences">Plus d'informations</label></td>
                                        <td><label class="open-popup-modifier-agences">Modifier agence</label></td>
                                        <form method="POST" action="modifier_agences" id="modifier_agence_form">
                                            @csrf
                                            <div class="container sph-container popup-modifier-agences">
                                                <div class="row sph-row sph-modifier-agences-top-row">
                                                    <div class="col-11 sph-col">
                                                        <div class="container sph-container">
                                                            <div class="row sph-row sph-modifier-agences-row">
                                                                <div class="col-12 sph-col sph-modifier-agences-col">
                                                                    <h3>Modifier agence</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1 sph-col sph-close-icon-col">
                                                        <img src="{{ asset('/img/closeIcon.png') }}" alt="close-trouver-icon" name="close_popup_modifier_agences">
                                                    </div>
                                                </div>
                                                <div class="row sph-row">
                                                    <div class="col-12 sph-col sph-ville-ajouter-agences-col">
                                                        <label for="ville_modifier_agence">Ville</label>
                                                        <input type="text" form="modifier_agence_form" class="form-control sph-ville-modifier-agences @error('ville_modifier_agence') is-invalid @enderror" placeholder="Ville" name="ville_modifier_agence"  value="Agadir">
                                                        @error('ville_modifier_agence')
                                                        <label class="alert alert-danger ville_modifier_agence_error_label">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row">
                                                    <div class="col-12 sph-col sph-adresse-modifier-agences-col">
                                                        <label for="adresse_modifier_agence">Adresse</label>
                                                        <input type="text" form="modifier_agence_form" class="form-control sph-adresse-modifier-agences @error('adresse_modifier_agence') is-invalid @enderror" placeholder="Adresse" name="adresse_modifier_agence" value="{{ old('adresse_modifier_agence') }}" >
                                                        @error('adresse_modifier_agence')
                                                        <label class="alert alert-danger adresse_modifier_agence_error_label">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row">
                                                    <div class="col-12 sph-col sph-telephone-modifier-agences-col">
                                                        <label for="telephone_modifier_agence">Télephone</label>
                                                        <input type="text" form="modifier_agence_form" class="form-control sph-telephone-modifier-agences @error('telephone_modifier_agence') is-invalid @enderror" placeholder="Télephone" name="telephone_modifier_agence" value="{{ old('telephone_modifier_agence') }}" >
                                                        @error('telephone_modifier_agence')
                                                        <label class="alert alert-danger telephone_modifier_agence_error_label">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row">
                                                    <div class="col-12 sph-col sph-email-modifier-agences-col">
                                                        <label for="email_modifier_agence">Email</label>
                                                        <input type="text" form="modifier_agence_form" class="form-control sph-email-modifier-agences @error('email_modifier_agence') is-invalid @enderror" placeholder="Email" name="email_modifier_agence" value="{{ old('email_modifier_agence') }}" >
                                                        @error('email_modifier_agence')
                                                        <label class="alert alert-danger email_modifier_agence_error_label">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row">
                                                    <div class="col-12 sph-col sph-mot-de-passe-modifier-agences-col">
                                                        <label for="mot_de_passe_modifier_agence">Mot de passe</label>
                                                        <input type="text" form="modifier_agence_form" class="form-control sph-mot-de-passe-modifier-agences @error('mot_de_passe_modifier_agence') is-invalid @enderror" placeholder="Mot de passe" name="mot_de_passe_modifier_agence" value="{{ old('mot_de_passe_modifier_agence') }}" >
                                                        @error('mot_de_passe_modifier_agence')
                                                        <label class="alert alert-danger mot_de_passe_modifier_agence_error_label">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row">
                                                    <div class="col-12 sph-col sph-confirmer-mot-de-passe-modifier-agences-col">
                                                        <input type="text" form="modifier_agence_form" class="form-control sph-confirmer-mot-de-passe-ajouter-agences @error('confirmer_mot_de_passe_modifier_agence') is-invalid @enderror" placeholder="Confirmer mot de passe" name="confirmer_mot_de_passe_modifier_agence" value="{{ old('confirmer_mot_de_passe_modifier_agence') }}" >
                                                        @error('confirmer_mot_de_passe_modifier_agence')
                                                        <label class="alert alert-danger confirmer_mot_de_passe_modifier_agence_error_label">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-btn-modifier-agences-row">
                                                    <div class="col-12 sph-col sph-btn-modifier-agences-col">
                                                        <button type="submit" class="search_button sph-btn-modifier-agences form-control" form="modifier_agence_form">
                                                            <span>Modifier</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless infos-agences" style="display : none !important;">
                                    <thead>
                                    <tr>
                                        <th scope="col">Adresse</th>
                                        <th scope="col">Télephone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mot de passe</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Appt 413 Bloc C Résidence Extension AJEDDIGUE Tilila</td>
                                        <td>0619628125</td>
                                        <td>mbolaphales@gmail.com</td>
                                        <td>blablablablablabla</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
</div>