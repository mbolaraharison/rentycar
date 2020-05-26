<?php  $titre = "RentyCar"; ?>
@include('layouts.head')
<body>
@include('layouts.header')
<div class="sph-container-sm">
    <div class="container sph-container sph-result-top-container">
        <div class="row sph-row sph-fixing-middle-row">
            <div class="col-12 sph-col">
                <div class="container sph-container sph-prise-en-charge-result-container">
                    <div class="row sph-row sph-prise-en-charge-label-result-row">
                        <div class="col-12 sph-col sph-prise-en-charge-label-result-col">
                            <h5>Prise en charge</h5>
                        </div>
                    </div>
                    <div class="row sph-row sph-lieu-prise-en-charge-result-row">
                        <div class="col-12 sph-col sph-lieu-prise-en-charge-result-col">
                            <label>Lieu : </label>
                        </div>
                    </div>
                    <div class="row sph-row sph-date-prise-en-charge-result-row">
                        <div class="col-12 sph-col sph-date-prise-en-charge-result-col">
                            <label>Date : </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row sph-row sph-fixing-middle-row sph-result-list-top-div-row">
            <div class="col-12 sph-col sph-col-result-content">
                <div class="container sph-container sph-search-result-container">
                    <div class="row sph-row sph-search-result-row">
                        <div class="col-6 sph-col sph-filtre-link">
                            <label class="open-popup-filtre">Voir les filtres</label>
                            <div class="container sph-container sph-filtre-container popup-filtre">
                                <div class="row sph-row sph-filtre-top-row">
                                    <div class="col-11 sph-col">
                                        <div class="container sph-container">
                                            <div class="row sph-row sph-filtre-row">
                                                <div class="col-12 sph-col sph-filtre-label-col">
                                                    <h3>Filtrer votre recherche</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 sph-col sph-close-icon-col">
                                        <img src="{{ asset('/img/closeIcon.png') }}" alt="close-filtre-icon" name="close_popup_filtre">
                                    </div>
                                </div>
                                <div class="row sph-row sph-filtre-content-top-row">
                                    <div class="col-1 sph-col">

                                    </div>
                                    <div class="col-10 sph-col">
                                        <div class="row sph-row sph-filtre-societes-row">
                                            <div class="col-12 sph-col sph-filtre-societes-label-col">
                                                <h5>Sociétés de location</h5>
                                            </div>
                                            <div class="col-12 sph-col sph-societes-item">
                                                <input type="checkbox" class="form-check-input" name="societe_1" id="societe_1">
                                                <label class="form-check-label" for="societe_1">Societe-1</label>
                                            </div>
                                            <div class="col-12 sph-col sph-societes-item">
                                                <input type="checkbox" class="form-check-input" name="societe_2" id="societe_2">
                                                <label class="form-check-label" for="societe_2">Societe-2</label>
                                            </div>
                                        </div>
                                        <div class="row sph-row sph-filtre-types-row">
                                            <div class="col-12 sph-col sph-filtre-types-label-col">
                                                <h5>Types de voitures</h5>
                                            </div>
                                            <div class="col-12 sph-col sph-types-item">
                                                <input type="checkbox" class="form-check-input" name="type_1" id="type_1">
                                                <label class="form-check-label" for="type_1">Type-1</label>
                                            </div>
                                        </div>
                                        <div class="row sph-row sph-filtre-specifications-row">
                                            <div class="col-12 sph-col sph-filtre-specifications-label-col">
                                                <h5>Specifications</h5>
                                            </div>
                                            <div class="col-12 sph-col sph-specifications-item">
                                                <input type="checkbox" class="form-check-input" name="specification_1" id="specification_1">
                                                <label class="form-check-label" for="specification_1">Specification-1</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 sph-col">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 sph-col sph-modifier-link">
                            <label class="open-popup-trouver">Modifier votre recherche</label>
                            <div class="container sph-container sph-trouver-container popup-trouver">
                                <div class="row sph-row sph-trouver-top-row">
                                    <div class="col-11 sph-col">
                                        <div class="container sph-container">
                                            <div class="row sph-row sph-trouver-row">
                                                <div class="col-12 sph-col sph-trouver-col">
                                                    <h3>Modifier votre recherche</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 sph-col sph-close-icon-col">
                                        <img src="{{ asset('/img/closeIcon.png') }}" alt="close-trouver-icon" name="close_popup_trouver">
                                    </div>
                                </div>
                                <div class="row sph-row sph-trouver-form-top-row">
                                    <div class="col-12 sph-col sph-trouver-form-top-col">
                                        <div class="container sph-container">
                                            <form action="search_control" method="GET" class="sph-trouver-form">
                                                @csrf
                                                <div class="row sph-row sph-lieu-prise-en-charge-row">
                                                    <input type="text" class="form-control sph-lieu-prise-en-charge @error('lieu_prise_en_charge') is-invalid @enderror" placeholder="Lieu de prise en charge" name="lieu_prise_en_charge" value="{{ old('lieu_prise_en_charge') }}" >
                                                    @error('lieu_prise_en_charge')
                                                    <label class="alert alert-danger lieu_prise_en_charge_error_label">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                                <div class="row sph-row sph-check-lieu-restitution-row">
                                                    <div class="col-12 sph-col form-check sph-check-lieu-restitution-col">
                                                        <input type="checkbox" class="form-check-input sph-check-lieu-restitution check_lieu_restitution_id" name="check_lieu_restitution" id="check_lieu_restitution" {{ (! empty(old('check_lieu_restitution')) ? 'checked' : '') }}>
                                                        <label class="form-check-label sph-check-lieu-restitution-label" for="check_lieu_restitution">Choisir un lieu de restitution différent</label>
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-lieu-restitution-row lieu_restitution_id">
                                                    <input type="text" class="form-control sph-lieu-restitution @error('lieu_restitution') is-invalid @enderror lieu_restitution_input_id" placeholder="Lieu de restitution" name="lieu_restitution" value="{{ old('lieu_restitution') }}">
                                                    @error('lieu_restitution')
                                                    <label class="alert alert-danger lieu_restitution_error_label">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                                <div class="row sph-row sph-prise-en-charge-row">
                                                    <div class="col-6 sph-col sph-date-prise-en-charge-col">
                                                        <label for="date_prise_charge">Date de prise en charge</label>
                                                        <input type="text" class="form-control sph-date-time date_prise_charge_id @error('date_prise_en_charge') is-invalid @enderror" name="date_prise_en_charge" id="date" placeholder="yyyy-mm-dd" value="{{ old('date_prise_en_charge') }}">
                                                        @error('date_prise_en_charge')
                                                        <label class="alert alert-danger date_prise_en_charge_error_label">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                    <div class="col-6 sph-col sph-heure-prise-en-charge-col">
                                                        <label for="heure_prise_charge">Heure de prise en charge</label>
                                                        <input type="text" class="form-control sph-date-time heure_prise_charge_id @error('heure_prise_en_charge') is-invalid @enderror" placeholder="--:--" name="heure_prise_en_charge" value="{{ old('heure_prise_en_charge') }}">
                                                        @error('heure_prise_en_charge')
                                                        <label class="alert alert-danger heure_prise_en_charge_error_label">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-restitution-row">
                                                    <div class="col-6 sph-col sph-date-restitution-col">
                                                        <label for="date_restitution">Date de restitution</label>
                                                        <input type="text" class="form-control sph-date-time date_restitution_id @error('date_restitution') is-invalid @enderror" name="date_restitution" placeholder="yyyy-mm-dd" value="{{ old('date_restitution') }}">
                                                        @error('date_restitution')
                                                        <label class="alert alert-danger date_restitution_error_label">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                    <div class="col-6 sph-col sph-heure-restitution-col">
                                                        <label for="heure_restitution">Heure de restitution</label>
                                                        <input type="text" class="form-control sph-date-time heure_restitution_id @error('heure_restitution') is-invalid @enderror" name="heure_restitution" placeholder="--:--" value="{{ old('heure_restitution') }}">
                                                        @error('heure_restitution')
                                                        <label class="alert alert-danger heure_restitution_error_label">{{ $message }}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row sph-row sph-chercher-row">
                                                    <div class="col-12 sph-col sph-chercher-col">
                                                        <button type="submit" class="search_button sph-chercher form-control">
                                                            <span>Chercher</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row sph-row">
                        <div class="col-12 sph-col">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row sph-row sph-fixing-middle-row sph-result-list-div-row">
            <div class="col-12 sph-col sph-result-list-col">
                <div class="container sph-container sph-result-list-container">
                    <div class="row sph-row sph-result-list-label-row">
                        <div class="col-12 sph-col sph-result-list-label-col">
                            <h4>Des voitures correspondantes à vos besoins</h4>
                        </div>
                    </div>
                    <div class="row sph-row sph-result-list-label-row">
                        <div class="col-12 sph-col sph-result-list-nombre-col">
                            <h4>100 résultats...</h4>
                        </div>
                    </div>
                    <hr/>
                    <div class="row sph-row sph-result-item-number-row">
                        <div class="col-12 sph-col sph-result-item-number-col">
                            <div class="container sph-container sph-result-item-container">
                                <div class="row sph-row sph-img-result-item-row">
                                    <div class="col-12 sph-col sph-img-result-item-col">
                                        <img alt="img-item-1" src="/img/lambo.jpg">
                                    </div>
                                </div>
                                <div class="row sph-row sph-categorie-result-item-row">
                                    <div class="col-7 sph-col sph-categorie-result-item-col">
                                        <h4>Categorie-1</h4>
                                    </div>
                                    <div class="col-5 sph-col sph-infos-result-item-col">
                                        <label class="open-popup-infos">Plus d'informations</label>
                                        <div class="container sph-container sph-infos-container popup-infos">
                                            <div class="row sph-row sph-infos-top-row">
                                                <div class="col-11 sph-col ">
                                                    <div class="container sph-container">
                                                        <div class="row sph-row sph-infos-row">
                                                            <div class="col-12 sph-col sph-infos-label-col">
                                                                <h3>Plus d'informations</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-1 sph-col sph-close-icon-col">
                                                    <img src="{{ asset('/img/closeIcon.png') }}" alt="close-infos-icon" name="close_popup_infos">
                                                </div>
                                            </div>

                                            <div class="row sph-row sph-infos-content-top-row">
                                                <div class="col-1 sph-col">

                                                </div>
                                                <div class="col-10 sph-col">
                                                    <div class="row sph-row sph-filtre-societes-row">
                                                        <div class="col-12 sph-col sph-filtre-societes-label-col">
                                                            <h5>Sociétés de location</h5>
                                                        </div>
                                                        <div class="col-12 sph-col sph-societes-item">
                                                            <input type="checkbox" class="form-check-input" name="societe_1" id="societe_1">
                                                            <label class="form-check-label" for="societe_1">Societe-1</label>
                                                        </div>
                                                        <div class="col-12 sph-col sph-societes-item">
                                                            <input type="checkbox" class="form-check-input" name="societe_2" id="societe_2">
                                                            <label class="form-check-label" for="societe_2">Societe-2</label>
                                                        </div>
                                                    </div>
                                                    <div class="row sph-row sph-filtre-types-row">
                                                        <div class="col-12 sph-col sph-filtre-types-label-col">
                                                            <h5>Types de voitures</h5>
                                                        </div>
                                                        <div class="col-12 sph-col sph-types-item">
                                                            <input type="checkbox" class="form-check-input" name="type_1" id="type_1">
                                                            <label class="form-check-label" for="type_1">Type-1</label>
                                                        </div>
                                                    </div>
                                                    <div class="row sph-row sph-filtre-specifications-row">
                                                        <div class="col-12 sph-col sph-filtre-specifications-label-col">
                                                            <h5>Specifications</h5>
                                                        </div>
                                                        <div class="col-12 sph-col sph-specifications-item">
                                                            <input type="checkbox" class="form-check-input" name="specification_1" id="specification_1">
                                                            <label class="form-check-label" for="specification_1">Specification-1</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-1 sph-col">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row sph-row sph-marque-result-item-row">
                                    <div class="col-12 sph-col sph-marque-result-item-col">
                                        <label>Marque-1</label>
                                    </div>
                                </div>
                                <div class="row sph-row sph-transmission-result-item-row">
                                    <div class="col-8 sph-col sph-transmission-result-item-col">
                                        <label>Transmission-1</label>
                                    </div>
                                    <div class="col-4 sph-col sph-points-result-item-col">
                                        <label>Rate-1</label>
                                    </div>
                                </div>
                                <div class="row sph-row sph-choisir-result-item-row">
                                    <div class="col-6 sph-col sph-prix-result-item-col">115 dhs/j</div>
                                    <div class="col-6 sph-col sph-choisir-result-item-col">
                                        <button class="btn btn-primary sph-choisir">Choisir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sph-container-md">

</div>
<div class="sph-container-lg">

</div>
@include('layouts.footer')
</body>
</html>