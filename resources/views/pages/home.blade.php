@extends('layout.master')

@section('content')
<!-- ================= SAMPLE SECTIONS ================= -->
<div id="mairie" class="mairie-img mx-auto position-relative">
    <picture>
        <source media="(min-width: 992px)" srcset="{{ asset('assets/images/home/first-image-desktop.jpg') }}">
        <img src="{{ asset('assets/images/home/first-image-mobile.jpg') }}" alt="Mairie Illustration" class="img-fluid">
    </picture>

    <!-- Text Overlay inside image container -->
    <div class="text-overlay">
        <h1 class="mairie-title">LA MAIRIE</h1>
        <h2 class="couple-names">TAMARA & SOLAL</h2>
        <p class="small-text">se diront</p>
        <h3 class="oui-text">“ Oui ”</h3>
        <p class="event-date">
            le Mercredi 1er juillet 2026<br>
            <span class="sub-text"> à 15h30</span>
        </p>
        <p class="address">
           à la mairie du XVIe arrondissement <br>
            <span class="sub-text"> 71 av. Henri Martin, 75116  </span> 
        </p> 
       
    </div>
</div>
<!-- 
 <div class="flower-img mx-auto mt-2">
    <img src="{{ asset('assets/images/home/Tawn-Hall.jpg') }}" alt="Flowers" class="img-fluid">
</div> -->
<div id="houppa" class="houppa-overlay-wrapper">
    <img src="{{ asset('assets/images/home/Stage-new.jpg') }}" alt="" class="img-fluid overlay-img">

    <div class="houppa-overlay-content">
        <p class="text-end hebrew-top">בס״ד</p>
        <h1 class="houppa-title">HOUPPA & RÉCEPTION</h1>
        <div class="row justify-content-center parents-row">

            <div class="col-md-4">
                <p class="parents-block">
                    Liliane et Jacob Fayer<br>
                    Martine et Salomon Taïeb<br>
                    Elsa Hanoun Fayer et Thierry Fayer
                </p>
            </div>

            <div class="col-md-4">
                <p class="parents-block">
                    Liliane et Simon Benhamou<br>
                    Paulette et Maurice Temstet<br>
                    Laurence et Jérôme Benhamou
                </p>
            </div>

        </div>

        <p class="invitation-line">
            Ont l’immense joie de vous faire part du mariage<br>
            de leurs petits-enfants et enfants
        </p>
        <h2 class="couple-names">TAMARA & SOLAL</h2>
        <p class="hebrew-names">שמענון משה    שיילה</p>
        <p class="invitation-line">
            Et seront honorés de votre présence pour<br>
            la cérémonie religieuse qui aura lieu
        </p>
        <p class="ceremony-date">
            Le 29 juillet 2026<br>
            <span class="subtext">à 16h précises</span>
        </p>
        <p class="ceremony-location">
            Dans les jardins de la Villa Mondragone<br>
            Via Frascati 51, 00040 Monte Porzio Catone, Rome, Italie
        </p>

        <p class="invitation-line mt-3">
            La cérémonie sera suivie d’une réception
        </p>
      <img src="{{ asset('assets/images/home/ring.png') }}" class="ring-img" alt="Ring Image">
        <p class="transport-text">
            Des navettes vous attendront<br>
            devant les 3 hôtels proposés par les mariés,<br>
            à 15h précises
        </p>
    </div>
</div>

<section id="beach" class="beach-section sr-fade">
    <div class="container">

        <!-- Title -->
        <h1 class="beach-title">LA DOLCE PYTEL </h1>
        <p class="beach-subtitle">White party</p>

        <!-- Illustration -->
        <div class="beach-img mx-auto">
            <img src="{{ asset('assets/images/home/party.png') }}" alt="" class="img-fluid">
        </div>

        <!-- Names -->
        <h2 class="beach-names">TAMARA & SOLAL</h2>

        <!-- Invitation -->
        <p class="invite-line"> vous attendent pour une White party </p>

        <!-- Date -->
        <p class="beach-date">
           Le jeudi 30 juillet 2026 <br>
            <span class="subtext">À partir de 16h </span>
        </p>

        <!-- Location -->
        <p class="beach-location">
            à la mairie du XVIe arrondissement <br>
            71 av. Henri Martin, 75116 
        </p>

        <!-- Palm trees -->
        <div class="palm-img mx-auto">
            <img src="{{ asset('assets/images/home/PALMIERS.png') }}" class="img-fluid" alt="">
        </div>

        <!-- Transport -->
        <p class="transport-text">
            Des navettes vous attendront<br>
            devant les 3 hôtels proposés par les mariés,<br>
            à 11h précises
        </p>

    </div>
</section>
<section id="hotels" class="hotels-section">
    <div class="container text-center">
        <!-- Heading -->
        <h2 class="fw-bold">
            VOTRE SÉJOUR
        </h2>
        <h5 class="mb-4">
            Hôtels
        </h5>

        <!-- Key Image -->
        <div class="my-4">
            <img src="{{ asset('assets/images/home/clef.png') }}" class="img-fluid animate-img">
        </div>

        <!-- Intro Text -->
        <p class="mb-5 intro-text">
            Afin de vous faciliter l'organisation de votre séjour, 
            les mariés ont le plaisir de vous partager trois hôtels dans 
            lesquels des tarifs ont été négociés pour vous.
        </p>

        <!-- HOTEL 1 -->
        <div class="mb-5">
            <h4>MERCURE ROMA CORSO TRIESTE</h4>

            <p class="text-muted mb-1">
                Via Gradisca, 31, 00198 Rome, Italie
            </p>

            <a href="#">Vous pouvez télécharger le formulaire de réservation ici</a><br>
            <small style="color:#6d6d55;">À renvoyer à l’adresse suivante : amanda.lambard@accor.com</small>

            <p class="mt-3 mb-1" style="color:#6d6d55;">Pour plus d’informations sur l’hôtel :</p>
            <a href="https://all.accor.com/hotel/3320/index.fr.shtml" class="btn rounded-pill px-4">Mercure Roma Corso Trieste</a>

            <div class="hotel-emoji">🙂</div>
        </div>

        <!-- HOTEL 2 -->
        <div class="mb-5">
            <h4 style="text-decoration: underline;">THE HOXTON</h4>

            <p class="text-muted mb-1">
                Largo Benedetto Marcello, 220, 00198 Rome, Italie
            </p>

            <a href="#">Veuillez accéder à ce lien</a><br>
            <small style="color:#6d6d55;">Utiliser le code d'accès suivant : AMB070923</small>

            <p class="mt-3 mb-1" style="color:#6d6d55;">Pour plus d’informations sur l’hôtel :</p>
            <a href="https://thehoxton.com/fr/italy/rome/" class="btn rounded-pill px-4">The Hoxton</a>

            <div class="hotel-emoji">🙂</div>
        </div>

        <!-- HOTEL 3 -->
        <div class="mb-5">
            <h4>SOFITEL ROMA VILLA BORGHESE</h4>

            <p class="text-muted mb-1">
                Via Lombardia 47, 00187 Rome, Italie
            </p>

            <a href="#">Vous pouvez télécharger le formulaire de réservation ici</a><br>
            <small style="color:#6d6d55;">À renvoyer à l’adresse suivante : h878-RE@sofitel.com</small>

            <p class="mt-3 mb-1" style="color:#6d6d55;">Pour plus d’informations sur l’hôtel :</p>
            <a href="https://www.sofitelrome.com/fr/" class="btn rounded-pill px-4">Sofitel Rome Villa Borghese</a>

            <div class="hotel-emoji">🙂</div>
        </div>
    </div>
</section>
<section id="addresses" class="address-section" >
    <div class="container text-center">

        <h2 class="fw-light mb-1">VOTRE SÉJOUR</h2>
        <p class="fst-italic mb-4">Les bonnes adresses d'Ambre et Jonathan</p>

        <img src="{{asset('assets/images/home/pates.png')}}" 
             class="img-fluid mb-4 animate-img" style="max-width:140px;">

        <p class="text-muted mb-5" style="max-width:480px; margin:auto;">
            Pour profiter pleinement de votre séjour, les mariés ont sélectionné quelques adresses à découvrir.
        </p>

        <div class="row justify-content-center">

            <!-- Item -->
            <div class="col-12 col-md-8 mb-5 address-item">
                <h4>Gelateria La Romana</h4>
                <p class="text-muted fst-italic mb-1">Glacier</p>
                <p class="text-muted">Via Venti Settembre 60, 00187 Roma, Italie</p>
                <a href="#" class="address-icon">🙂</a>
            </div>

            <!-- Item -->
            <div class="col-12 col-md-8 mb-5 address-item">
                <h4>Pompi Tiramisu</h4>
                <p class="text-muted fst-italic mb-1">Boutique de desserts – Tiramisu</p>
                <p class="text-muted">V. della Croce 82, 00187 Roma, Italie</p>
                <a href="#" class="address-icon">🙂</a>
            </div>

            <!-- Item -->
            <div class="col-12 col-md-8 mb-5 address-item">
                <h4>Terrazza Borromini</h4>
                <p class="text-muted fst-italic mb-1">Rooftop</p>
                <p class="text-muted">Via di Santa Maria dell’Anima 30, 00186 Roma, Italie</p>
                <a href="#" class="address-icon">🙂</a>
            </div>

            <!-- Item -->
            <div class="col-12 col-md-8 mb-5 address-item">
                <h4>Capo Boi</h4>
                <p class="text-muted fst-italic mb-1">Restaurant de poissons</p>
                <p class="text-muted">Via Arco 88, 00186 Roma, Italie</p>
                <a href="#" class="address-icon">🙂</a>
            </div>

            <!-- Item -->
            <div class="col-12 col-md-8 mb-5 address-item">
                <h4>Trattoria Al Moro</h4>
                <p class="text-muted fst-italic mb-1">Cuisine italienne</p>
                <p class="text-muted">Vicolo delle Bollette 13, 00187 Roma, Italie</p>
                <a href="#" class="address-icon">🙂</a>
            </div>

            <!-- Item -->
            <div class="col-12 col-md-8 mb-5 address-item">
                <h4>Trattoria Da Enzo al 29</h4>
                <p class="text-muted fst-italic mb-1">Spécialités romaines</p>
                <p class="text-muted">Via dei Vascellari 29, 00153 Roma, Italie</p>
                <a href="#" class="address-icon">🙂</a>
            </div>

            <!-- Item -->
            <div class="col-12 col-md-8 mb-5 address-item">
                <h4>Baghetto Ristorante</h4>
                <p class="text-muted fst-italic mb-1">Restaurant Kasher</p>
                <p class="text-muted">Via del Portico D’Ottavia 3, 00186 Roma, Italie</p>
                <a href="#" class="address-icon">🙂</a>
            </div>

            <!-- Item -->
            <div class="col-12 col-md-8 mb-5 address-item">
                <h4>Little Tripoli</h4>
                <p class="text-muted fst-italic mb-1">Restaurant Kasher</p>
                <p class="text-muted">Via Cernia 9, 00186 Roma RM, Italie</p>
                <a href="#" class="address-icon">🙂</a>
            </div>

        </div>
    </div>
</section>
<section id="presence" class="presence-section">
    <div class="container text-center">
        <!-- Title -->
        <h2 class="fw-light mb-1">
            CONFIRMEZ VOTRE<br>PRÉSENCE
        </h2>
        <p class="subtitle fst-italic">dès réception</p>
        <!-- Doves Image -->
        <img src="{{ asset('assets/images/home/COLOMBES-ENVELOPPE.png') }}"
             class="img-fluid my-4 dove-img" alt="">

        <!-- Form -->
        <form action="{{ route('send.form.email') }}" method="POST" class="text-start mx-auto presence-form">
                @csrf
                <label class="presence-label">PRÉNOM</label>
                <input type="text" name="prenom" class="form-control mb-3 presence-input">
                <label class="presence-label">NOM</label>
                <input type="text" name="nom" class="form-control mb-3 presence-input">
                <label class="presence-label mt-3">LA MAIRIE</label><br>
                <div class="mb-2">
                    <label><input type="radio" name="mairie" value="Oui"> Oui</label>
                    <label class="ms-3"><input type="radio" name="mairie" value="Non"> Non</label>
                </div>
                <label class="presence-label">NOMBRE DE PERSONNES À LA MAIRIE</label>
                <input type="text" name="personnes_mairie" class="form-control mb-3 presence-input">
                <label class="presence-label mt-3">LA BEACH PARTY</label><br>
                <div class="mb-2">
                    <label><input type="radio" name="beach" value="Oui"> Oui</label>
                    <label class="ms-3"><input type="radio" name="beach" value="Non"> Non</label>
                </div>
                <label class="presence-label">NOMBRE DE PERSONNES À LA BEACH PARTY</label>
                <input type="text" name="personnes_beach" class="form-control mb-3 presence-input">
                <label class="presence-label mt-3">LA HOUPPA & RÉCEPTION</label><br>
                <div class="mb-2">
                    <label><input type="radio" name="houppa" value="Oui"> Oui</label>
                    <label class="ms-3"><input type="radio" name="houppa" value="Non"> Non</label>
                </div>
                <label class="presence-label">NOMBRE DE PERSONNES À LA HOUPPA</label>
                <input type="text" name="personnes_houppa" class="form-control mb-3 presence-input">
                <p class="small-note fst-italic mt-4 mb-2">
                    Afin de vous faciliter les trajets, merci de sélectionner votre hôtel
                </p>
                <div class="ms-2 mb-3 hotel-list">
                    <label class="d-block"><input type="radio" name="hotel" value="Mercure Roma Corso Trieste"> Mercure Roma Corso Trieste</label>
                    <label class="d-block"><input type="radio" name="hotel" value="The Hoxton"> The Hoxton</label>
                    <label class="d-block"><input type="radio" name="hotel" value="Sofitel Rome Villa Borghese"> Sofitel Rome Villa Borghese</label>
                    <label class="d-block"><input type="radio" name="hotel" value="Autre"> Autre</label>
                </div>
                <label class="presence-label">MESSAGE AUX MARIÉS</label>
                <textarea name="message_maries" class="form-control mb-4 presence-textarea" rows="4"></textarea>
                <div class="text-center">
                    <button type="submit" class="presence-btn">Envoyer</button>
                </div>
            </form>
    </div>
</section>

@endsection