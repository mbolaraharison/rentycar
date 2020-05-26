<?php  $titre = "RentyCar"; ?>
@include('layouts.head')
<body>
@include('layouts.header')

<!-- Small -->
<div class="sph-container-sm">
    <div class="container sph-container">
        <div class="row sph-row sph-menu-home-entreprise-top-row">
            <div class="col-6 sph-col">
                <div class="container sph-container">
                    <div class="row sph-row">
                        <div class="col-3 sph-col sph-menu-home-entreprise-item-col sph-profil-menu-item">
                            <h6>Profil</h6>
                        </div>
                        <div class="col-4 sph-col sph-menu-home-entreprise-item-col sph-agence-menu-item">
                            <h6>Mes agences</h6>
                        </div>
                        <div class="col-5 sph-col sph-menu-home-entreprise-item-col">
                            <h6>Mes voitures</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 sph-col sph-menu-home-entreprise-item-col">
                <h6>Mes réservations</h6>
            </div>
            <div class="col-3 sph-col sph-menu-home-entreprise-item-col">
                <h6>Mes locations</h6>
            </div>
        </div>
        <div class="row sph-row sph-content-home-entreprise-top-row">
            <div class="col-12 sph-col sph-content-home-entreprise-top-col">
                @include('contents.gestion-agences-entreprise')
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