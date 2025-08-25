<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bakso Solo Kidul Pasar')</title>
    @vite('resources/css/app.scss')
    @stack('styles')
</head>
<body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg pb-0 position-absolute top-0 start-0 w-100"
        style="padding: 32px 80px; background-color: transparent; z-index: 1000;">
        <div class="container-fluid p-0">
            <a class="navbar-brand fw-bold m-0" href="#">
                <img src="{{ asset('img/icons/logo-bakso-solo.png') }}" alt="Bakso Solo" width="110">
            </a>

            <!-- Button Hamburger -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse align-items-center" id="navbarMenu" style="padding-left: 80px;">
                <ul class="navbar-nav gap-4" style="font-size: 20px; gap: 50px">
                    <li class="nav-item"><a class="link-underline-dark active text-dark" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="p-0 nav-link text-muted" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="p-0 nav-link text-muted" href="#warung">Warung</a></li>
                    <li class="nav-item"><a class="p-0 nav-link text-muted" href="#">Event</a></li>
                    <li class="nav-item"><a class="p-0 nav-link text-muted" href="#">Menu</a></li>
                </ul>
            </div>

            <div class="d-none d-lg-block">
                <a href="https://s.id/baksosolokidulpasar?fbclid=PAQ0xDSwMIGpBleHRuA2FlbQIxMQABp60jBYeMT1NwoWDbNzFqzTUyiwxGsRBPS4qhIEX59pLWGHbPJCVDnlGraDXE_aem_fOkNWDI0Y5Z9SbHRVyJLlw" target="_blank" class="btn btn-dark px-4 py-3" style="border-radius: 12px">PESAN SEKARANG</a>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <main>
        @yield('content')
    </main>

    <!-- Start Footer -->
    <footer class="footer">
    <div class="custom-container footer-container">
        
        <!-- Logo -->
        <div class="footer-logo">
        <img src="{{ asset('img/icons/logo-bakso.png') }}" alt="Bakso Solo Kidul Pasar">
        </div>

        <!-- Copyright -->
        <div class="footer-text">
        <p>
            © 1965 <span class="brand">Bakso Solo Kidul Pasar</span> | Developed by 
            <span class="developer">Inagata</span>
        </p>
        </div>

        <!-- Social Icons -->
        <div class="footer-social">
        <a href="#" class="icon-btn">
            <img src="{{ asset('img/icons/Facebook.png') }}" alt="Facebook" class="footer-icon">
        </a>
        <a href="https://www.instagram.com/baksosolo_kidulpasar?igsh=bGM3aW9hdTBwbDR6" target="_blank" class="icon-btn">
            <img src="{{ asset('img/icons/instagram.png') }}" alt="Instagram" class="footer-icon">
        </a>
        <a href="https://api.whatsapp.com/send?phone=6281292272007&text=Halo%20&fbclid=PAQ0xDSwMIGetleHRuA2FlbQIxMAABpwezqZtq8ATdyHUK_ZZB74BbS878wzZCu31DsxP3XM-nyU6ofVvn-yT-PbTP_aem_2nep4Yn3tlFMm1Iyp3OK5Q" target="_blank" class="icon-btn">
            <img src="{{ asset('img/icons/WhatsApp-ixon.png') }}" alt="WhatsApp" class="footer-icon">
        </a>
        </div>
    </div>
    </footer>
    <!-- End Footer -->

    @vite('resources/js/app.js')
    @stack('scripts')
</body>
</html>
