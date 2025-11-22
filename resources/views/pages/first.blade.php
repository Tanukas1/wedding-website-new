<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ladolcepytel.ts. </title>

    <!-- PRELOAD IMAGE → fixes text-first loading problem -->
    <link rel="preload" as="image" href="{{ asset('/assets/main-image/fond-accueil.png') }}">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            padding: 0;
            margin: 0;
            height: 100%;
            font-family: "Georgia", serif;
        }

        /* MAIN HERO SECTION SAME AS YOUR IMAGE */
         .welcome-section {
            background-image: url("{{ asset('/assets/images/main-image/fond-accueil.png') }}");
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
            text-align: center;
            padding-top: 341px; /* same as theme */
            padding-bottom: 80px; /* same as theme */
            color: #4d522e;
        }

        /* CONTENT BLOCK */
        .content-wrapper {
            width: 100%;
            max-width: 600px;
            color: #4d522e;
        }

        .couple-name {
            font-size: 32px;
            font-weight: 500;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .date-place {
            font-size: 18px;
            font-style: italic;
            /* margin-bottom: 15px; */
        }

        /* COUNTDOWN */
        .counter-box div {
            font-size: 20px;
            font-weight: bold;
        }

        /* BUTTON */
        .btn-programme {
            background-color: #575f2d;
            color: #fff;
            padding: 10px 30px;
            border-radius: 5px;
            font-size: 18px;
            margin-top: 45px;
        }

        .btn-programme:hover {
            background-color: #474e25;
            color:#fff;
        }

        /* ----------- MOBILE FIX ----------- */
        @media (max-width: 768px) {
            .welcome-section {
                background-size: cover;     
                padding-bottom: 100px;
            }

            .couple-name {
                font-size: 26px;
            }

            .date-place {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .welcome-section {
                padding-bottom: 80px;
            }
        }


    </style>
</head>

<body>

<section class="welcome-section">

    <div class="content-wrapper">

        <div class="couple-name">AMBRE & JONATHAN</div>

        <div class="date-place">
            7 au 10 Septembre 2025 <br>
            Rome, Italie.
        </div>

        <div class="d-flex justify-content-center gap-4">
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
        </div>
        <h1>hello</h1>
        <a href="{{ url('/index') }}" class="btn btn-programme">Programme</a>

    </div>

</section>

</body>
<script>
    // Set event date (7 September 2025)
    const eventDate = new Date("2025-09-07T00:00:00").getTime();

    function updateCountdown() {
        let now = new Date().getTime();
        let distance = eventDate - now;

        if (distance < 0) distance = 0;

        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance / (1000 * 60 * 60)) % 24);
        let minutes = Math.floor((distance / (1000 * 60)) % 60);

        document.querySelectorAll(".counter-box div")[0].innerText = days;
        document.querySelectorAll(".counter-box div")[1].innerText = hours;
        document.querySelectorAll(".counter-box div")[2].innerText = minutes;
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
</script>


</html>
