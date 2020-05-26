<!-- Small -->
<div class="sph-container-sm">
    <div class="container sph-container">
        <div class="row sph-row sph-partie-1-row sph-fixing-middle-row">
            <div class="col-1 sph-col">
            </div>
            <div class="col-10 sph-col sph-trouver-container-col">
                <div class="container sph-container sph-trouver-container">
                    <div class="row sph-row sph-trouver-row">
                        <div class="col-12 sph-col sph-trouver-col">
                            <h3>Trouver une location</h3>
                        </div>
                    </div>
                    <div class="row sph-row sph-trouver-form-top-row">
                        <div class="col-12 sph-col sph-trouver-form-top-col">
                            <div class="container sph-container">
                                <form action="search_control" method="GET">
                                    @csrf
                                    <div class="row sph-row sph-lieu-prise-en-charge-row">
                                        <input type="text" class="form-control sph-lieu-prise-en-charge @error('lieu_prise_en_charge') is-invalid @enderror" placeholder="Lieu de prise en charge" name="lieu_prise_en_charge" value="{{ old('lieu_prise_en_charge') }}" >
                                        @error('lieu_prise_en_charge')
                                        <label class="alert alert-danger">{{ $message }}</label>
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
                                            <label class="alert alert-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                        <div class="col-6 sph-col sph-heure-prise-en-charge-col">
                                            <label for="heure_prise_charge">Heure de prise en charge</label>
                                            <input type="text" class="form-control sph-date-time heure_prise_charge_id @error('heure_prise_en_charge') is-invalid @enderror" id="" placeholder="--:--" name="heure_prise_en_charge" value="{{ old('heure_prise_en_charge') }}">
                                            @error('heure_prise_en_charge')
                                            <label class="alert alert-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row sph-row sph-restitution-row">
                                        <div class="col-6 sph-col sph-date-restitution-col">
                                            <label for="date_restitution">Date de restitution</label>
                                            <input type="text" class="form-control sph-date-time date_restitution_id @error('date_restitution') is-invalid @enderror" name="date_restitution" placeholder="yyyy-mm-dd" value="{{ old('date_restitution') }}">
                                            @error('date_restitution')
                                            <label class="alert alert-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                        <div class="col-6 sph-col sph-heure-restitution-col">
                                            <label for="heure_restitution">Heure de restitution</label>
                                            <input type="text" class="form-control sph-date-time heure_restitution_id @error('heure_restitution') is-invalid @enderror" name="heure_restitution" placeholder="--:--" value="{{ old('heure_restitution') }}">
                                            @error('heure_restitution')
                                            <label class="alert alert-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row sph-row sph-chercher-row">
                                        <div class="col-12 sph-col sph-chercher-col">
                                            <button type="submit" class="search_button sph-chercher form-control btn btn-primary">
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
            <div class="col-1 sph-col">
            </div>
        </div>
        <div class="row sph-row sph-fixing-middle-row sph-agences-recommandees-top-row">
            <div class="col-1 sph-col"></div>
            <div class="col-10 sph-col">
                <div class="container sph-container sph-agences-recommandees-container">
                    <div class="row sph-row sph-agences-recommandees-row">
                        <div class="col-12 sph-col sph-agences-recommandees-col">
                            <h3>Agences recommandées</h3>
                        </div>
                    </div>
                    <div class="row sph-row">
                        <div class="col-3 sph-col sph-agence-1-col">
                            <img alt="Agence 1" src="{{ asset('/img/europCar.png') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-2-col">
                            <img alt="Agence 2" src="{{ asset('/img/avis.png') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-3-col">
                            <img alt="Agence 3" src="{{ asset('/img/dollar.jpg') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-4-col">
                            <img alt="Agence 4" src="{{ asset('/img/alamo.png') }}">
                        </div>
                    </div>
                    <div class="row sph-row">
                        <div class="col-3 sph-col sph-agence-5-col">
                            <img alt="Agence 5" src="{{ asset('/img/firefly.png') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-6-col">
                            <img alt="Agence 6" src="{{ asset('/img/budget.jpg') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-7-col">
                            <img alt="Agence 7" src="{{ asset('/img/hertz.jpg') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-8-col">
                            <img alt="Agence 8" src="{{ asset('/img/carrentals.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1 sph-col"></div>
        </div>
    </div>
</div>
<!-- Medium -->
<div class="sph-container-md">
    <div class="container sph-container">
        <div class="row sph-row sph-partie-1-row sph-fixing-middle-row">
            <div class="col-1 sph-col"></div>
            <div class="col-5 sph-col sph-trouver-container-col">
                <div class="container sph-container sph-trouver-container">
                    <div class="row sph-row sph-trouver-row">
                        <div class="col-12 sph-col sph-trouver-col">
                            <h3>Trouver une location</h3>
                        </div>
                    </div>
                    <div class="row sph-row sph-trouver-form-top-row">
                        <div class="col-12 sph-col sph-trouver-form-top-col">
                            <div class="container sph-container">
                                <form action="search_control" method="GET">
                                    @csrf
                                    <div class="row sph-row sph-lieu-prise-en-charge-row">
                                        <input type="text" class="form-control sph-lieu-prise-en-charge @error('lieu_prise_en_charge') is-invalid @enderror" placeholder="Lieu de prise en charge" name="lieu_prise_en_charge" value="{{ old('lieu_prise_en_charge') }}" >
                                        @error('lieu_prise_en_charge')
                                        <label class="alert alert-danger">{{ $message }}</label>
                                        @enderror
                                    </div>
                                    <div class="row sph-row sph-check-lieu-restitution-row">
                                        <div class="col-12 sph-col form-check sph-check-lieu-restitution-col">
                                            <input type="checkbox" class="form-check-input sph-check-lieu-restitution" name="check_lieu_restitution" id="check_lieu_restitution" {{ (! empty(old('check_lieu_restitution')) ? 'checked' : '') }}>
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
                                            <label class="alert alert-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                        <div class="col-6 sph-col sph-heure-prise-en-charge-col">
                                            <label for="heure_prise_charge">Heure de prise en charge</label>
                                            <input type="text" class="form-control sph-date-time heure_prise_charge_id @error('heure_prise_en_charge') is-invalid @enderror" id="" placeholder="--:--" name="heure_prise_en_charge" value="{{ old('heure_prise_en_charge') }}">
                                            @error('heure_prise_en_charge')
                                            <label class="alert alert-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row sph-row sph-restitution-row">
                                        <div class="col-6 sph-col sph-date-restitution-col">
                                            <label for="date_restitution">Date de restitution</label>
                                            <input type="text" class="form-control sph-date-time date_restitution_id @error('date_restitution') is-invalid @enderror" name="date_restitution" placeholder="yyyy-mm-dd" value="{{ old('date_restitution') }}">
                                            @error('date_restitution')
                                            <label class="alert alert-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                        <div class="col-6 sph-col sph-heure-restitution-col">
                                            <label for="heure_restitution">Heure de restitution</label>
                                            <input type="text" class="form-control sph-date-time heure_restitution_id @error('heure_restitution') is-invalid @enderror" name="heure_restitution" placeholder="--:--" value="{{ old('heure_restitution') }}">
                                            @error('heure_restitution')
                                            <label class="alert alert-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row sph-row sph-chercher-row">
                                        <div class="col-12 sph-col sph-chercher-col">
                                            <button type="submit" class="search_button sph-chercher form-control btn btn-primary">
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
            <div class="col-6 sph-col"></div>
        </div>
        <div class="row sph-row sph-fixing-middle-row sph-agences-recommandees-top-row">
            <div class="col-2 sph-col"></div>
            <div class="col-8 sph-col">
                <div class="container sph-container sph-agences-recommandees-container">
                    <div class="row sph-row sph-agences-recommandees-row">
                        <div class="col-12 sph-col sph-agences-recommandees-col">
                            <h3>Agences recommandées</h3>
                        </div>
                    </div>
                    <div class="row sph-row">
                        <div class="col-3 sph-col sph-agence-1-col">
                            <img alt="Agence 1" src="{{ asset('/img/europCar.png') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-2-col">
                            <img alt="Agence 2" src="{{ asset('/img/avis.png') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-3-col">
                            <img alt="Agence 3" src="{{ asset('/img/dollar.jpg') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-4-col">
                            <img alt="Agence 4" src="{{ asset('/img/alamo.png') }}">
                        </div>
                    </div>
                    <div class="row sph-row">
                        <div class="col-3 sph-col sph-agence-5-col">
                            <img alt="Agence 5" src="{{ asset('/img/firefly.png') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-6-col">
                            <img alt="Agence 6" src="{{ asset('/img/budget.jpg') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-7-col">
                            <img alt="Agence 7" src="{{ asset('/img/hertz.jpg') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-8-col">
                            <img alt="Agence 8" src="{{ asset('/img/carrentals.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 sph-col"></div>
        </div>
    </div>
</div>
<!-- Large -->
<div class="sph-container-lg">
    <div class="container sph-container">
        <div class="row sph-row sph-partie-1-row sph-fixing-middle-row">
            <div class="col-1 sph-col"></div>
            <div class="col-4 sph-col sph-trouver-container-col">
                <div class="container sph-container sph-trouver-container">
                    <div class="row sph-row sph-trouver-row">
                        <div class="col-12 sph-col sph-trouver-col">
                            <h3>Trouver une location</h3>
                        </div>
                    </div>
                    <div class="row sph-row sph-trouver-form-top-row">
                        <div class="col-12 sph-col sph-trouver-form-top-col">
                            <div class="container sph-container">
                                <form action="search_control" method="GET">
                                    @csrf
                                    <div class="row sph-row sph-lieu-prise-en-charge-row">
                                        <input type="text" class="form-control sph-lieu-prise-en-charge @error('lieu_prise_en_charge') is-invalid @enderror" placeholder="Lieu de prise en charge" name="lieu_prise_en_charge" value="{{ old('lieu_prise_en_charge') }}" >
                                        @error('lieu_prise_en_charge')
                                        <label class="alert alert-danger">{{ $message }}</label>
                                        @enderror
                                    </div>
                                    <div class="row sph-row sph-check-lieu-restitution-row">
                                        <div class="col-12 sph-col form-check sph-check-lieu-restitution-col">
                                            <input type="checkbox" class="form-check-input sph-check-lieu-restitution" name="check_lieu_restitution" id="check_lieu_restitution" {{ (! empty(old('check_lieu_restitution')) ? 'checked' : '') }}>
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
                                            <label class="alert alert-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                        <div class="col-6 sph-col sph-heure-prise-en-charge-col">
                                            <label for="heure_prise_charge">Heure de prise en charge</label>
                                            <input type="text" class="form-control sph-date-time heure_prise_charge_id @error('heure_prise_en_charge') is-invalid @enderror" id="" placeholder="--:--" name="heure_prise_en_charge" value="{{ old('heure_prise_en_charge') }}">
                                            @error('heure_prise_en_charge')
                                            <label class="alert alert-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row sph-row sph-restitution-row">
                                        <div class="col-6 sph-col sph-date-restitution-col">
                                            <label for="date_restitution">Date de restitution</label>
                                            <input type="text" class="form-control sph-date-time date_restitution_id @error('date_restitution') is-invalid @enderror" name="date_restitution" placeholder="yyyy-mm-dd" value="{{ old('date_restitution') }}">
                                            @error('date_restitution')
                                            <label class="alert alert-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                        <div class="col-6 sph-col sph-heure-restitution-col">
                                            <label for="heure_restitution">Heure de restitution</label>
                                            <input type="text" class="form-control sph-date-time heure_restitution_id @error('heure_restitution') is-invalid @enderror" name="heure_restitution" placeholder="--:--" value="{{ old('heure_restitution') }}">
                                            @error('heure_restitution')
                                            <label class="alert alert-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row sph-row sph-chercher-row">
                                        <div class="col-12 sph-col sph-chercher-col">
                                            <button type="submit" class="search_button sph-chercher form-control btn btn-primary">
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
            <div class="col-7 sph-col"></div>
        </div>
        <div class="row sph-row sph-fixing-middle-row sph-agences-recommandees-top-row">
            <div class="col-2 sph-col"></div>
            <div class="col-8 sph-col">
                <div class="container sph-container sph-agences-recommandees-container">
                    <div class="row sph-row sph-agences-recommandees-row">
                        <div class="col-12 sph-col sph-agences-recommandees-col">
                            <h3>Agences recommandées</h3>
                        </div>
                    </div>
                    <div class="row sph-row">
                        <div class="col-3 sph-col sph-agence-1-col">
                            <img alt="Agence 1" src="{{ asset('/img/europCar.png') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-2-col">
                            <img alt="Agence 2" src="{{ asset('/img/avis.png') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-3-col">
                            <img alt="Agence 3" src="{{ asset('/img/dollar.jpg') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-4-col">
                            <img alt="Agence 4" src="{{ asset('/img/alamo.png') }}">
                        </div>
                    </div>
                    <div class="row sph-row">
                        <div class="col-3 sph-col sph-agence-5-col">
                            <img alt="Agence 5" src="{{ asset('/img/firefly.png') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-6-col">
                            <img alt="Agence 6" src="{{ asset('/img/budget.jpg') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-7-col">
                            <img alt="Agence 7" src="{{ asset('/img/hertz.jpg') }}">
                        </div>
                        <div class="col-3 sph-col sph-agence-8-col">
                            <img alt="Agence 8" src="{{ asset('/img/carrentals.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 sph-col"></div>
        </div>
    </div>
</div>