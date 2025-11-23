

<!-- ================= TOP BAR ================= -->
<div class="top-bar">
    <a href="{{ url('/') }}">
        <img src="{{ url('assets/images/main-image/logo.png') }}" alt="Logo" class="logo">
    </a>

    <!-- TIMER (3 line format) -->
    <div class="timer">
        <div>00<br><span>Days</span></div>
        <div>00<br><span>Hours</span></div>
        <div>00<br><span>Minutes</span></div>
    </div>

    <div class="menu-toggle" onclick="toggleMenu()">≡</div>
</div>

<!-- ================= OVERLAY MENU ================= -->
<div id="overlayMenu" class="overlay-menu">

    <!-- SAME TOPBAR INSIDE MENU -->
    <div class="overlay-top">
        <img src="{{(asset('assets/images/main-image/logo.png'))}}" class="logo">

        <div class="timer">
            <div>00<br><span>Days</span></div>
            <div>00<br><span>Hours</span></div>
            <div>00<br><span>Minutes</span></div>
        </div>

        <div class="close-btn" onclick="toggleMenu()">×</div>
    </div>

    <!-- MENU CONTENT -->
    <div class="menu-content">
        <ul class="menu-links">
            <li><a href="#mairie">LA MAIRIE</a></li>
            <li><a href="#houppa">HOUPPA & RÉCEPTION</a></li>
            <li><a href="#beach">LA BEACH PARTY</a></li>
            <li><a href="#hotels">LES HÔTELS</a></li>
            <li><a href="#addresses">LES BONNES ADRESSES</a></li>
            <li><a href="#presence">CONFIRMATION DE PRÉSENCE</a></li>
        </ul>
    </div>
</div>

