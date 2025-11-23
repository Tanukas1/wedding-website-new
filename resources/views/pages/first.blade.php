<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ladolcepytel.ts.</title>

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

        /* MAIN HERO SECTION */
        .welcome-section {
            background-image: url("{{ asset('assets/images/main-image/frame-home.jpg') }}");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover; 
            min-height: 100vh;
            text-align: center;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 0;
            color: #4d522e;
        }

        /* CONTENT BLOCK */
        .content-wrapper {
            width: 100%;
            max-width: 600px;
            color: #4d522e;
        }

        /* TEXT BLOCK (moves text only) */
        .text-block {
            padding-top: 25px; /* ← Adjust text up/down HERE */
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
        }

        .counter-box div {
            font-size: 20px;
            font-weight: bold;
        }

        /* BUTTON (moves button only) */
        .btn-programme {
            background-color: #575f2d;
            color: #fff;
            padding: 10px 30px;
            border-radius: 5px;
            font-size: 18px;
            margin-top: 271px; /* ← Adjust button position independently */
        }

        .btn-programme:hover {
            background-color: #474e25;
            color:#fff;
        }
    </style>
</head>

<body>

<section class="welcome-section">
    <div class="content-wrapper">

        <!-- TEXT BLOCK -->
        <div class="text-block">

            <div class="couple-name">TAMARA & SOLAL</div>

            <div class="date-place">
                Mercredi 1er juillet 2026<br>
                À 15h précises
            </div>

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
            </div>

        </div>
        <!-- END TEXT BLOCK -->

        <!-- BUTTON OUTSIDE TEXT-BLOCK (independent movement) -->
        <a href="{{ url('/index') }}" class="btn btn-programme">Programme</a>

    </div>
</section>

</body>

<script>
    const eventDate = new Date("2026-07-01T15:00:00").getTime();

    function updateCountdown() {
        const now = new Date().getTime();
        let distance = eventDate - now;

        if (distance < 0) distance = 0;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

        const counterBoxes = document.querySelectorAll(".counter-box");
        if (counterBoxes.length === 3) {
            counterBoxes[0].querySelector("div").innerText = days.toString().padStart(2, "0");
            counterBoxes[1].querySelector("div").innerText = hours.toString().padStart(2, "0");
            counterBoxes[2].querySelector("div").innerText = minutes.toString().padStart(2, "0");
        }
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
</script>

</html>
