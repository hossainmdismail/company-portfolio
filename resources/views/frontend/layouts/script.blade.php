 <!-- Metas -->
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <meta name="author" content="SynexDigital">
 {!! SEO::generate() !!}

 {{-- Google Site Verification --}}
 <meta name="google-site-verification" content="WD0y1ieiXYkW_OffpIe7LpBPOr-mSFQpmqju5Vz79B8" />
 <!-- Favicon -->
 <link rel="shortcut icon" href="{{ asset('default/default.png') }}" title="Favicon" sizes="16x16">

 <link rel="stylesheet" href="{{ asset('css/app.css') }}">

 {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@3.4.0/dist/full.css" rel="stylesheet" type="text/css" /> --}}
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
     integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" /> --}}
 {{-- <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
     rel="stylesheet"> --}}
 <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
 <link
     href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,500;0,600;1,300&family=Orbitron:wght@400;500;600;700;800&display=swap"
     rel="stylesheet">
 <script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>
 {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
 <link rel="stylesheet" href="{{ asset('asset/Frontend/') }}/lib/owl/owl.carousel.min.css">
 <link rel="stylesheet" href="{{ asset('asset/Frontend/') }}/lib/owl/owl.theme.default.min.css">
 <!-- GT tgjs -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-0D02Y90D7E"></script>
 <script>
     window.dataLayer = window.dataLayer || [];

     function gtag() {
         dataLayer.push(arguments);
     }
     gtag('js', new Date());

     gtag('config', 'G-0D02Y90D7E');
 </script>
 <script src="{{ asset('asset/Frontend/') }}/lib/owl/owl.carousel.min.js"></script>
 {{-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> --}}
 {{-- <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> --}}
 {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script> --}}
 {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
 <script>
     tailwind.config = {
         darkMode: false,
         theme: {
             extend: {
                 colors: {
                     "button-primary": "#C2E812",
                     "primary-bg": "#C2E812",
                     "primary-hover": "#c2e813f0",
                     "text-primary": "#111",
                     "footer-bg": "#121212;",
                     "carusel-primary": "#121212",
                     "h-overlay": "linear-gradient(180deg, #121212 0%, rgba(18, 18, 18, 0.00) 100%)",
                 },
                 fontFamily: {
                     'figtree': ['Figtree', 'sans-serif'],
                 },
             },
         },
     };
 </script> --}}
