<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ladolcepytel.ts.</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        body {
            margin: 0;
            padding: 0;
        }
        @font-face {
        font-family: 'Artis-Swing';
        src: url('{{ asset("assets/font/artis-swing-extralight/Artis-Swing Extralight/Artis-Swing Extralight.otf") }}') format("truetype");
        font-weight: normal;
        font-style: normal;
    }

    </style>

    @yield('css')
</head>

<body>

    <!-- ✅ CORRECT BACKGROUND MUSIC CODE -->
    <audio id="bg-music" autoplay loop muted style="display:none;">
        <source src="{{ asset('assets/images/main-image/song.mp3') }}" type="audio/mpeg">
    </audio>

    @include('includes.header')
    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/ScrollTrigger.min.js"></script>

    <script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray('.animate-on-scroll').forEach(elem => {
      gsap.from(elem, {
        y: 50,
        opacity: 0,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
          trigger: elem,
          start: 'top 80%'
        }
      });
    });

    gsap.to(".animate-img", {
        rotation: 30,
        duration: 3,
        ease: "power1.inOut",
        yoyo: true,
        repeat: -1,
        repeatRefresh: true
    });

    gsap.to(".animate-img", {
        rotation: -30,
        duration: 3,
        ease: "power1.inOut",
        repeat: 2,
        delay: 1.5
    });
    </script>

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

    document.querySelectorAll('.menu-links a').forEach(link => {
        link.addEventListener('click', () => {
            toggleMenu();
        });
    });
    </script>

   <script>
    // Event: 29 July 2026
    const weddingDate = new Date("2026-07-29T00:00:00").getTime();

    function updateCountdown() {
        const now = new Date().getTime();
        let diff = weddingDate - now;

        if (diff < 0) diff = 0;

        const days = Math.floor(diff / (1000 * 60 * 60 * 24));
        const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((diff % (1000 * 60)) / 1000);

        // 🔥 FIX: Update BOTH timers
        document.querySelectorAll(".timer").forEach(timer => {
            const divs = timer.querySelectorAll("div");

            divs[0].innerHTML = days.toString().padStart(2, "0") + "<br><span>Days</span>";
            divs[1].innerHTML = hours.toString().padStart(2, "0") + "<br><span>Hours</span>";
            divs[2].innerHTML = minutes.toString().padStart(2, "0") + "<br><span>Minutes</span>";
            divs[3].innerHTML = seconds.toString().padStart(2, "0") + "<br><span>Seconds</span>";
        });
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
</script>

    <!-- ✅ MOBILE AUTOPLAY FIX -->
    <script>
    window.addEventListener('load', function () {
        const audio = document.getElementById("bg-music");
        setTimeout(() => {
            audio.muted = false;
            audio.play().catch(()=>{});
        }, 500);
    });
    </script>

    @yield('js')

</body>
</html>
