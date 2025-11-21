<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ladolcepytel.ts. </title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

  /* TOP BAR */
  .top-bar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;  
      background: #d3d9a3;
      z-index: 1000;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
  }

  .logo {
      width: 45px;
  }

  /* TIMER 3 LINE FORMAT */
 .timer {
    display: flex;
    gap: 10px;
    text-align: center;
    font-size: 12px;
    letter-spacing: 1px;
}

.timer div {
    display: flex;
    flex-direction: column;
    line-height: 14px;
}


  /* RIGHT BUTTON (hamburger + cross) */
  .menu-toggle, .close-btn {
      width: 38px;
      height: 38px;
      background: #fff;
      border: 2px solid #000;
      border-radius: 5px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 20px;
      cursor: pointer;
  }

  /* OVERLAY MENU */
  .overlay-menu {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: #d3d9a3;
      z-index: 2000;
      display: none;
      flex-direction: column;
      align-items: center;
  }
  .overlay-menu.open {
      display: flex;
  }

  /* SAME TOPBAR INSIDE MENU */
  .overlay-top {
      width: 100%;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #d3d9a3;
      border-bottom: 1px solid rgba(0,0,0,0.1);
  }

  .menu-content {
      margin-top: 0px;
      width: 100%;
      max-width: 300px;
      text-align: center;
  }

  .menu-links {
      list-style: none;
      padding: 0;
      margin-top: 20px;
  }

  .menu-links li {
      border-top: 1px solid rgba(0,0,0,0.15);
  }
  /* Remove top border from first menu item */
.menu-links li:first-child {
    border-top: none !important;
}


  .menu-links a {
      display: block;
      padding: 18px 0;
      text-transform: uppercase;
      color: #515732;
      text-decoration: none;
      font-size: 16px;
      letter-spacing: 1px;
  }

  .menu-links a:hover {
      color: #2d3020;
  }

  body.menu-open {
      overflow: hidden;
  }

</style>
</head>
<body>

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
            <li><a href="#beach">LA BEACH PARTY</a></li>
            <li><a href="#houppa">HOUPPA & RÉCEPTION</a></li>
            <li><a href="#hotels">LES HÔTELS</a></li>
            <li><a href="#addresses">LES BONNES ADRESSES</a></li>
            <li><a href="#presence">CONFIRMATION DE PRÉSENCE</a></li>
        </ul>
    </div>
</div>







<script>
function toggleMenu() {
    const menu = document.getElementById("overlayMenu");
    const body = document.body;

    if (menu.classList.contains("open")) {
        menu.classList.remove("open");
        body.classList.remove("menu-open");
    } else {
        menu.classList.add("open");
        body.classList.add("menu-open");
    }
}

/* Close menu on link click */
document.querySelectorAll('.menu-links a').forEach(link => {
    link.addEventListener('click', () => {
        toggleMenu();
    });
});
</script>
<script>
// SET YOUR DATE HERE
const weddingDate = new Date("2025-12-20T00:00:00").getTime();

function updateCountdown() {
    const now = new Date().getTime();
    const diff = weddingDate - now;

    if (diff <= 0) {
        document.querySelectorAll(".timer div:first-child").forEach(el => el.innerHTML = "00");
        return;
    }

    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));

    // Update all timers (top bar + menu)
    document.querySelectorAll(".days").forEach(el => el.innerHTML = days);
    document.querySelectorAll(".hours").forEach(el => el.innerHTML = hours);
    document.querySelectorAll(".minutes").forEach(el => el.innerHTML = minutes);
}

setInterval(updateCountdown, 1000);
updateCountdown();
</script>


</body>
</html>
