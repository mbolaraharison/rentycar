<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="" method="GET">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-12">
                        <h2>Recherchez une location</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="form-control" name="search_city" placeholder="Entrer une ville" aria-label="search by city"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-check">
                        <input type="checkbox" class="form-check-input" id="transmissionautomatique">
                        <label class="form-check-label" for="transmissionautomatique">Choisir un autre lieu de restitution</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <input type="date" class="form-control" name="search_city" placeholder="Entrer une ville" aria-label="search by city"/>
                    </div>
                    <div class="col-6">
                        <input type="time" class="form-control" name="search_city" placeholder="Entrer une ville" aria-label="search by city"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

        </div>
    </div>
</div>
@include('layouts.footer');


if (window.matchMedia("(min-width : 768px)").matches) { // If media query matches
content.innerHTML = '<h2 class="sph-container-sm">RentyCar 768</h2>';
}else if(window.matchMedia("(min-width : 1000px)").matches){
content.innerHTML = '<h2 class="sph-container-sm">RentyCar 1000</h2>';
}else if(window.matchMedia("(max-width : 768px)").matches){
content.innerHTML = '<h2 class="sph-container-sm">RentyCar small</h2>';
}