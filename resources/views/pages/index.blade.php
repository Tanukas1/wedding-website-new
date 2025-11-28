<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ladolcepytel.ts.</title>

    <!-- Google Script Font (Great Vibes) -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- PRELOAD IMAGE -->
    <link rel="preload" as="image" href="{{ asset('/assets/images/main-image/frame-home.jpg') }}">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
   
<style>
    html, body {
        padding: 0;
        margin: 0;
        height: 100%;
        font-family: "Georgia", serif;
    }

    @font-face {
        font-family: 'Artis-Swing';
        src: url('{{ asset("assets/font/artis-swing-extralight/Artis-Swing Extralight/Artis-Swing Extralight.otf") }}') format("truetype");
        font-weight: normal;
        font-style: normal;
    }

    /* DEFAULT = MOBILE BACKGROUND IMAGE */
    .welcome-section {
        background-image: url("{{ asset('assets/images/main-image/frame-home-mobile.jpg') }}");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
        text-align: center;

        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
    }

    /* DESKTOP BACKGROUND IMAGE */
    @media (min-width: 992px) {
        .welcome-section {
            background-image: url('http://127.0.0.1:8000/assets/images/main-image/frame-home-desktop.jpg');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            aspect-ratio: 16 / 9;   /* Force 1920×1080 shape */
            padding: 0;
        }
        .btn-programme {
            margin-top: 323px !important; /* Keep it below the text */
        }

        /* Adjust text-block vertical alignment if needed */
        .text-block {
            margin-top: 0; /* Reset mobile negative margin */
        }
    }

    .content-wrapper {
        width: 100%;
        max-width: 600px;
    }

    .text-block {
        margin-top: -40px; /* Move text higher */
    }

    .couple-name {
        font-family: 'Artis-Swing', cursive;
        font-size: 42px;
        font-weight: 500;
        margin-bottom: 15px;
        color: #800020; /* Burgundy */
    }

    .date-place {
        font-size: 15px;
        font-style: italic;
        color: #800020;
        line-height: 1.7;
    }

   .counter-box div {
        font-size: 22px;
        font-weight: 400;
        font-family: 'Cinzel Decorative', serif;
        color: #800020; 
    }

    .counter-box small {
        color: #800020;
    }

    .btn-programme {
        background-color: #800020;
        color: #fff;
        padding: 10px 30px;
        border-radius: 5px;
        font-size: 18px;
        margin-top: 260px; /* Button position */
    }

    .btn-programme:hover {
        background-color: #800020;
        color: #fff;
    }
  
</style>

</head>

<body>
 <audio id="bg-music" autoplay loop muted style="display:none;">
        <source src="{{ asset('assets/images/main-image/song.mp3') }}" type="audio/mpeg">
</audio>

<section class="welcome-section">
    <div class="content-wrapper">

        <!-- TEXT AREA -->
        <div class="text-block">
            <div class="couple-name">Tamara & Solal</div>

            <div class="date-place">
                29–30 Juillet 2026<br>
                Rome, Italie
            </div>

            <!-- COUNTDOWN -->
            <div class="d-flex justify-content-center gap-4 mt-3">
                <div class="counter-box text-center">
                    <div>00</div>
                    <small>Days</small>
                </div>
                <div class="counter-box text-center">
                    <div>00</div>
                    <small>Hours</small>
                </div>
                <div class="counter-box text-center">
                    <div>00</div>
                    <small>Minutes</small>
                </div>
                <div class="counter-box text-center">
                    <div>00</div>
                    <small>Seconds</small>
                </div>
            </div>

        </div>

        <!-- BUTTON -->
        <a href="{{ url('/home') }}" class="btn btn-programme">Programme</a>

    </div>
</section>
<script>
    // Event starts on July 29, 2026 at 00:00
    const eventDate = new Date("2026-07-29T00:00:00").getTime();

    function updateCountdown() {
        const now = new Date().getTime();
        let distance = eventDate - now;

        if (distance < 0) distance = 0;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        const box = document.querySelectorAll(".counter-box");

        box[0].querySelector("div").innerText = days.toString().padStart(2, "0");
        box[1].querySelector("div").innerText = hours.toString().padStart(2, "0");
        box[2].querySelector("div").innerText = minutes.toString().padStart(2, "0");
        box[3].querySelector("div").innerText = seconds.toString().padStart(2, "0");
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
</script>
<script>
window.addEventListener('load', function () {
    const audio = document.getElementById("bg-music");

    setTimeout(() => {
        audio.muted = false;
        audio.currentTime = 3; // Start from 3 seconds
        audio.play().catch(() => {});
    }, 2000); // Delay playback by 2 seconds
});
</script>

</body>
</html>
