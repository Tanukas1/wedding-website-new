<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ladolcepytel.ts.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
    @yield('css')
</head>
<body>
    @include('includes.header')
    @yield('content')
   
<!-- <script src="https://unpkg.com/scrollreveal"></script>

<script>
  // Initialize ScrollReveal
  ScrollReveal().reveal('.sr-fadesr-fade', {
    distance: '20px',
    origin: 'bottom',
    duration: 800,
    delay: 100,
    opacity: 0,
    reset: false
  });

  ScrollReveal().reveal('.sr-slide-left', {
    distance: '40px',
    origin: 'left',
    duration: 800,
    delay: 200,
    opacity: 0,
    reset: false
  });

  ScrollReveal().reveal('.sr-scale', {
    scale: 0.9,
    duration: 800,
    delay: 150,
    reset: false
  });
</script> -->
<!-- In your master layout (before closing </body>) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/ScrollTrigger.min.js"></script>

<script>
gsap.registerPlugin(ScrollTrigger);

// Scroll animation (your existing code stays same)
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

// 🔥 Correct Rotation Animation
gsap.to(".animate-img", {
    rotation: 30,      
    duration: 3,
    ease: "power1.inOut",
    yoyo: true,
    repeat: -1,         
    repeatRefresh: true 
});

// 🔁 After rotation clockwise, rotate anticlockwise twice
gsap.to(".animate-img", {
    rotation: -30,     
    duration: 3,
    ease: "power1.inOut",
    repeat: 2,          
    delay: 1.5          
});
</script>

@yield('js')
</body>
</html>