@extends('layouts.app')

@section('title', 'Bakso Solo Kidul Pasar')

@section('content')


<!-- Hero Section -->
<section id="beranda" style="background-color: #F2F2F2; padding-top: 150px">
  <div class="custom-container">
    <div class="hero-section">
      <!-- Hero Title -->
      <div class="text-center">
        <h1 class="hero-title fw-bold">
          <span class="highlight">Best Quality</span> for Best Customer
        </h1>
      </div>

      <!-- Hero Content -->
      <div class="hero-content">
        <!-- Left Content -->
        <div class="hero-card text-start d-flex flex-column">
          <h5 class="card-title fw-bold text-uppercase">
            Kualitas terbaik <br> untuk citarasa <br> yang autenthic
          </h5>
          <div class="card-actions d-flex flex-column">
            <!-- Order Button -->
            <button
              class="d-flex order-button btn btn-outline-dark justify-content-center align-items-center py-3">
              <a href="https://s.id/baksosolokidulpasar?fbclid=PAQ0xDSwMIGpBleHRuA2FlbQIxMQABp60jBYeMT1NwoWDbNzFqzTUyiwxGsRBPS4qhIEX59pLWGHbPJCVDnlGraDXE_aem_fOkNWDI0Y5Z9SbHRVyJLlw" target="_blank" class="text-uppercase fw-bold text-black">
                Pesan Sekarang
              </a>
              <img src="{{ asset('img/icons/isolation_mode.png') }}" alt="Icon" class="img-fluid icon-order">
            </button>
            <!-- WhatsApp Button -->
            <a href="https://api.whatsapp.com/send?phone=6281292272007&text=Halo%20&fbclid=PAQ0xDSwMIGetleHRuA2FlbQIxMAABpwezqZtq8ATdyHUK_ZZB74BbS878wzZCu31DsxP3XM-nyU6ofVvn-yT-PbTP_aem_2nep4Yn3tlFMm1Iyp3OK5Q" target="_blank"
              class="btn btn-outline-dark whatsapp-btn d-flex justify-content-center align-items-center py-3">
              <img src="{{ asset('img/icons/whatsapp.png') }}" alt="">
            </a>
          </div>
        </div>

        <!-- Banner -->
        <div class="hero-banner">
          <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
            data-bs-interval="3000">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/banner-hero1.png') }}" alt="Slide 1" class="banner-img">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/banner-hero2.png') }}" alt="Slide 2" class="banner-img">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/banner-hero3.png') }}" alt="Slide 3" class="banner-img">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- About Section -->
<section id="tentang" class="bg-black">
  <div class="about-section p-0">
    <div class="row g-0">

      <!-- Tentang Bakso Solo -->
      <div class="col-12 col-md-5 col-lg-5 text-white d-flex flex-column justify-content-end"
        style="padding-left: 80px;">
        <div class="m-0 icon-tentang">
          <img src="{{ asset('img/icons/logo-bakso.png') }}" alt="Logo Bakso Solo">
        </div>
        <p class="description-about mb-0 fw-light">
          Didirikan pada tahun 1965 oleh Pak Suparno, produk andalan kami adalah rangkaian mangkok bakso
          dengan cita rasa asli Malang.
        </p>
      </div>

      <!-- Gambar -->
      <div class="col-12 col-md-7 col-lg-7">
        <img src="{{ asset('img/card-3.jpg') }}" alt="Foto Warung" class="img-tentang w-100"
          style="object-fit: cover;">
      </div>

    </div>
  </div>
</section>

<!-- Menu -->
<section id="menu" class="overflow-x-hidden">
  <div class="menu-section">
    <div class="custom-container"> 
      <!-- Bagian Atas -->
      <div class="row align-items-start" style="gap: 50px;">
         <!-- Kolom Kiri -->
        <div class="col-md-6" style="max-width: 600px;">
          <div class="d-flex flex-column" style="gap: 80px"> 
            <!-- Deskripsi -->
            <div class="d-flex flex-column">
              <h2 class="description-menu fw-bold">Makan dan nikmati di waroeng kami</h2>
              <p class="fs-4 fw-normal mb-0" style="line-height: 140%;"> Kami berdedikasi untuk menjaga keotentikan rasa dari masa ke masa. </p>
            </div> 
            <!-- Baris Bawah -->
            <div class="d-flex flex-column flex-md-row align-items-center" style="gap: 50px;"> 
              <img src="{{ asset('img/bakso-solo1.png') }}" alt="Bakso" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; border-radius: 20px;"> 
              <a href="#" class="btn-menu btn btn-dark fw-semibold fs-4 align-self-start" style="line-height: 100%;">Lihat Menoe</a> 
            </div>
          </div>
        </div> 
        <!-- Kolom Kanan -->
        <div class="col-md-6"> 
          <img src="{{ asset('img/bakso-solo2.png') }}" alt="Bakso Besar" class="img-fluid" style="width: 630px; height: 510px; object-fit: cover; border-radius: 20px;"> 
        </div>
      </div> 
      
      <!-- Bagian Bawah -->
      <div class="row justify-content-between g-5 medal"> 
        <!-- Kolom Kiri -->
        <div class="col-md-5 align-content-end">
          <div class="d-flex align-items-center gap-4"> 
            <button class="btn-medal btn rounded-circle d-flex align-items-center justify-content-center"> 
              <img src="{{ asset('img/icons/medal-star.png') }}" alt="" class="icon-medal"> 
            </button>
            <div class="djaminan">
               <p class="mb-1 fs-4">
                  <span class="fw-bold">Djaminan koeah baso</span>
                  <span class="text-muted"> jang</span>
               </p>
               <p class="fs-4 text-muted mb-0">nendang mengoegah selera!</p>
            </div>
          </div>
        </div> 
        <!-- Kolom Kanan -->
        <div class="col-md-7 d-flex align-items-start" style="max-width: 770px; height: 250px; gap: 50px;">
          <div style="width: 357px; height: 250px;"> 
            <img src="{{ asset('img/bakso-solo3.png') }}" alt="Kualitas Bakso" style="width: 357px; height: 250px; object-fit: cover; border-radius: 20px;"> 
          </div>
          <div>
            <h5 class="fs-2 fw-semibold d-flex align-items-end" style="height: 80px; line-height: 140%;"> Koealitas nomer 01 </h5>
            <p class="text-muted fs-4 mb-0"> Kesegaran bahan bakso menjadi prioritas utama untuk memuaskan lidah pelanggan setia kami. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<section id="warung" style="background-color: #FEBE33;">
  <div class="custom-container">
    <div class="outlet-section">
      <div class="d-flex justify-content-between align-items-center">
        <h2 class="heading-outlet fw-bold" style="max-width:600px;">
          Kami dekat, menjadi pilihan kuliner anda & keluarga
        </h2>
        <div class="d-flex" style="gap: 15px;">
          <!-- Tombol Kiri -->
          <button
            class="btn-outlet btn btn-outline-dark rounded-circle border-2 d-flex align-items-center justify-content-center"
            style="width: 56px; height: 56px; opacity: 0.35;" id="prevBtn">
            <img src="{{ asset('img/icons/arrow-left.png') }}" alt="Prev" class="img-fluid"
              style="max-width: 24px;">
          </button>

          <!-- Tombol Kanan -->
          <button
            class="btn-outlet btn btn-outline-dark rounded-circle border-2 d-flex align-items-center justify-content-center"
            style="width: 56px; height: 56px; opacity: 1;" id="nextBtn">
            <img src="{{ asset('img/icons/arrow-right.png') }}" alt="Next" class="img-fluid"
              style="max-width: 24px;">
          </button>
        </div>
      </div>

      <div class="outlet-carousel d-flex" style="gap: 30px; height: 518.6326904296875px;">
        <!-- Card 1 -->
        <div class="outlet-card d-flex flex-column">
          <div class="position-relative">
            <img src="{{ asset('img/outlet1.jpg') }}" alt="Lokasi 1" class="img-outlet">

            <a href="https://share.google/cZGQAuWC6SteG91mw" 
              target="_blank"
              class="btn-lokasi d-flex align-items-center position-absolute bottom-0 start-0 m-3 fs-5 fw-semibold text-decoration-none">
              Lokasi
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                xmlns="http://www.w3.org/2000/svg" class="ms-2">
                <path
                  d="M20.476 8.55463C19.2681 4.28734 15.399 2.54041 12.0899 2.71383C12.0899 2.71383 12.0899 2.71383 12.0805 2.71432C8.78072 2.88726 5.10558 5.02019 4.35039 9.39036C3.50947 14.2712 6.6775 18.2014 9.48572 20.632C10.5266 21.5335 11.8229 21.9437 13.0942 21.877C14.3655 21.8104 15.6118 21.267 16.5434 20.2621C19.0822 17.5513 21.8225 13.3208 20.476 8.55463ZM12.6636 13.6602C11.037 13.7455 9.64989 12.4965 9.56465 10.87C9.4794 9.24342 10.7284 7.85629 12.3549 7.77105C13.9815 7.6858 15.3686 8.93478 15.4538 10.5613C15.5391 12.1879 14.2901 13.575 12.6636 13.6602Z"
                  fill="white" />
              </svg>
            </a>
          </div>

          <div class="d-flex flex-column" style="gap: 15px;">
            <div class="fw-semibold" style="font-size: 22px; line-height:110%;">Jl. A. Yani No.57</div>
            <div class="fs-6 fw-normal" style="line-height: 140%;">Purwodadi, Kec. Blimbing, Kota Malang, Jawa Timur 65126</div>
          </div>
        </div>


        <!-- Card 2 -->
        <div class="outlet-card d-flex flex-column">
          <div class="position-relative">
            <img src="{{ asset('img/outlet2.jpg') }}" alt="Lokasi 2" class="img-outlet">

            <a href="https://share.google/rpti07DTfa7gtgQ6d" 
              target="_blank"
              class="btn-lokasi d-flex align-items-center position-absolute bottom-0 start-0 m-3 fs-5 fw-semibold text-decoration-none">
              Lokasi
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                xmlns="http://www.w3.org/2000/svg" class="ms-2">
                <path
                  d="M20.476 8.55463C19.2681 4.28734 15.399 2.54041 12.0899 2.71383C12.0899 2.71383 12.0899 2.71383 12.0805 2.71432C8.78072 2.88726 5.10558 5.02019 4.35039 9.39036C3.50947 14.2712 6.6775 18.2014 9.48572 20.632C10.5266 21.5335 11.8229 21.9437 13.0942 21.877C14.3655 21.8104 15.6118 21.267 16.5434 20.2621C19.0822 17.5513 21.8225 13.3208 20.476 8.55463ZM12.6636 13.6602C11.037 13.7455 9.64989 12.4965 9.56465 10.87C9.4794 9.24342 10.7284 7.85629 12.3549 7.77105C13.9815 7.6858 15.3686 8.93478 15.4538 10.5613C15.5391 12.1879 14.2901 13.575 12.6636 13.6602Z"
                  fill="white" />
              </svg>
            </a>
          </div>

          <div class="d-flex flex-column" style="gap: 15px;">
            <div class="fw-semibold" style="font-size: 22px; line-height:110%;">Jl. Halmahera No. 12A</div>
            <div class="fs-6 fw-normal" style="line-height: 140%;">Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117</div>
          </div>
        </div>


        <!-- Card 3 -->
        <div class="outlet-card d-flex flex-column" style="margin-right: 60px;">
          <div class="position-relative">
            <img src="{{ asset('img/outlet3.jpg') }}" alt="Lokasi 3" class="img-outlet">

            <a href="https://share.google/5AhDrIF5hxfsPyi9U" 
              target="_blank"
              class="btn-lokasi d-flex align-items-center position-absolute bottom-0 start-0 m-3 fs-5 fw-semibold text-decoration-none">
              Lokasi
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                xmlns="http://www.w3.org/2000/svg" class="ms-2">
                <path
                  d="M20.476 8.55463C19.2681 4.28734 15.399 2.54041 12.0899 2.71383C12.0899 2.71383 12.0899 2.71383 12.0805 2.71432C8.78072 2.88726 5.10558 5.02019 4.35039 9.39036C3.50947 14.2712 6.6775 18.2014 9.48572 20.632C10.5266 21.5335 11.8229 21.9437 13.0942 21.877C14.3655 21.8104 15.6118 21.267 16.5434 20.2621C19.0822 17.5513 21.8225 13.3208 20.476 8.55463ZM12.6636 13.6602C11.037 13.7455 9.64989 12.4965 9.56465 10.87C9.4794 9.24342 10.7284 7.85629 12.3549 7.77105C13.9815 7.6858 15.3686 8.93478 15.4538 10.5613C15.5391 12.1879 14.2901 13.575 12.6636 13.6602Z"
                  fill="white" />
              </svg>
            </a>
          </div>

          <div class="d-flex flex-column" style="gap: 15px;">
            <div class="fw-semibold" style="font-size: 22px; line-height:110%;">Jl. Sartono S.H No. 52</div>
            <div class="fs-6 fw-normal" style="line-height: 140%;">Sukoharjo, Kec. Klojen, Kota Malang, Jawa Timur 65148</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
     const carousel = document.querySelector('.outlet-carousel');
  const cards = document.querySelectorAll('.outlet-card');
  let currentIndex = 0;

  function scrollToCard(index) {
    const cardWidth = cards[0].offsetWidth + 15; // +30 karena ada gap 30px
    carousel.scrollTo({
      left: index * cardWidth,
      behavior: 'smooth'
    });
  }

  document.getElementById('nextBtn').addEventListener('click', () => {
    if (currentIndex < cards.length - 1) {
      currentIndex++;
      scrollToCard(currentIndex);
    }
  });

  document.getElementById('prevBtn').addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
      scrollToCard(currentIndex);
    }
  });
  </script>
</section>















<!-- Sart Promo, Video, & Gallery -->
<div style="background-color: #000; color: #fff;">
  <!-- Start Promo -->
  <div class="custom-container section-promo">
    <div class="row">
      <!-- Kiri -->
      <div class="col-md-6 mb-4">
        <h1 class="heading-60px fw-semibold" style="margin-bottom: 60px;">
          Meriahkan <span class="highlight">event</span><br>
          anda dengan <br>
          semangkok Bakso<br>
          Solo Kidul Pasar
        </h1>

        <div class="text-white tablet-promo" style="background-color: #32393A; border-radius: 30px; padding-top: 45px; padding-bottom: 45px; padding-left: 45px; padding-right: 45px;">
          <p class="fw-semibold fs-36px mb-4">
            Informasi lengkap &<br> pemesanan, silahkan hubungi <br> kami 👇
          </p>
          <a href="https://api.whatsapp.com/send?phone=6281292272007&text=Halo%20&fbclid=PAQ0xDSwMIGetleHRuA2FlbQIxMAABpwezqZtq8ATdyHUK_ZZB74BbS878wzZCu31DsxP3XM-nyU6ofVvn-yT-PbTP_aem_2nep4Yn3tlFMm1Iyp3OK5Q" target="_blank"
            class="whatsapp-btn-1 d-flex justify-content-center align-items-center text-white text-decoration-none w-100 py-3"
            style="background-color: #25D366;"
            target="_blank">
            <img src="{{ asset('img/icons/whatsapp.png') }}" alt="Whatsapp" style="height: 40px;">
          </a>
        </div>
      </div>

      <!-- Kanan -->
      <div class="col-md-6 px-4 px-md-5">
        <h4 class="fw-semibold mb-30px">Syarat dan Ketentuan</h4>

        <div class="d-flex align-items-start gap-3 mt-4 flex-column flex-md-row">
          <span class="fs-5 fw-semibold text-white opacity-50">01.</span>
          <p class="fs-5 mb-30px">Bakso Solo Kidul Pasar menerima pesanan dalam segala acara atau event seperti pernikahan, ulang tahun, dan event-event lainnya.</p>
        </div>
        <div class="line mb-30px"></div>

        <div class="d-flex align-items-start gap-3 mt-4 flex-column flex-md-row">
          <span class="fs-5 fw-semibold text-white opacity-50">02.</span>
          <p class="fs-5 mb-30px">Pihak konsumen diperbolehkan untuk memesan Bakso Solo Kidul Pasar sesuai Request dan kebutuhan konsumen</p>
        </div>
        <div class="line mb-30px"></div>

        <div class="d-flex align-items-start gap-3 mt-4 flex-column flex-md-row">
          <span class="fs-5 fw-semibold text-white opacity-50">03.</span>
          <p class="fs-5 mb-30px">Jika pesanan <span class="fw-semibold">diatas nominal 2 juta</span> dari pihak konsumen maka akan <span class="fw-semibold" style="color: #FEBE33;">GRATIS Pramusaji</span>, Ongkos Kirim dan alat-alat pendukung (Dandang, Peralatan makan, hingga kompor)</p>
        </div>
        <div class="line mb-30px"></div>

        <div class="d-flex align-items-start gap-3 mt-4 flex-column flex-md-row">
          <span class="fs-5 fw-semibold text-white opacity-50">04.</span>
          <p class="fs-5 mb-30px">Jika pesanan <span class="fw-semibold">dibawah Nominal 2 juta</span> ada fee untuk pramusaji dan ongkos kirim sebesar 150 ribu.</p>
        </div>
        <div class="line mb-30px"></div>
      </div>
    </div>
  </div>
  <!-- End Promo -->

  <!-- Start Video -->
  <div class="custom-container d-flex justify-content-center section-video">
    <div class="banner-wrapper">
      <img src="{{ asset('img/yt.png') }}" alt="Bakso Video" class="banner-img-1">

      <!-- Tombol Overlay -->
      <a href="#" style="
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
      ">
        <img src="{{ asset('img/icons/video-circle.png') }}" alt="Pause" class="icon-pause">
      </a>
    </div>
  </div>
  <!-- End Video -->


  <!-- Start Gallery Foto -->
  <div class="custom-container section-gallery">
    <div class="row g-5">
      <div class="col-md-6 d-flex flex-column gallery-gap-2">
        <img src="{{ asset('img/card-1.jpg') }}" class="gallery-img" alt="Foto 1" style="object-fit: cover; width:615px; height: 363px; border-radius: 20px;">
        <img src="{{ asset('img/card-2.jpg') }}" class="gallery-img" alt="Foto 2" style="object-fit: cover; width:615px; height: 620px; border-radius: 20px;">
      </div>
      <div class="col-md-6 d-flex flex-column gallery-gap-2">
        <img src="{{ asset('img/card-3.jpg') }}" class="gallery-img" alt="Foto 3" style="object-fit: cover; width:615px; height: 620px; border-radius: 20px;">
        <img src="{{ asset('img/card-4.jpg') }}" class="gallery-img" alt="Foto 4" style="object-fit: cover; width:615px; height: 363px; border-radius: 20px; margin-bottom:70px;">
      </div>
    </div>
  </div>
  <!-- End Gallery Foto -->
</div>
<!-- End Promo, Video, & Gallery -->

<!-- Start Review -->
<div class="review-section">
  <div class="custom-container">
    <!-- Subjudul -->
    <p class="text-muted d-block mb-2">Google review</p>
    <h3 class="review-title">Kata Mereka</h3>

    <!-- Isi review -->
    <p class="review-content" id="reviewContent">
      {{ $reviews[0]->content }}
    </p>

    <!-- Reviewer & Navigasi -->
    <div class="d-flex justify-content-between align-items-center mt-4 review-nav-container">
      <!-- Reviewer -->
      <div class="d-flex align-items-center gap-2">
        <img src="{{ asset($reviews[0]->avatar) }}" alt="Reviewer" class="review-avatar" id="reviewAvatar">
        <span class="review-name" id="reviewName">{{ $reviews[0]->name }}</span>
      </div>

      <!-- Tombol Navigasi -->
      <div class="d-flex" style="gap: 15px;">
        <button class="btn nav-arrow arrow-left" id="prevReview">
          <img src="{{ asset('img/icons/arrow-left.png') }}" alt="Arrow Left">
        </button>
        <button class="btn nav-arrow arrow-right" id="nextReview">
          <img src="{{ asset('img/icons/arrow-right.png') }}" alt="Arrow Right">
        </button>
      </div>
    </div>

    <!-- Line -->
    <div class="line-2" style="margin-top: 100px;"></div>
  </div>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const reviews = @json($reviews);
    let currentIndex = 0;

    const reviewContent = document.getElementById('reviewContent');
    const reviewName = document.getElementById('reviewName');
    const reviewAvatar = document.getElementById('reviewAvatar');

    function showReview(index) {
      reviewContent.textContent = reviews[index].content;
      reviewName.textContent = reviews[index].name;
      reviewAvatar.src = reviews[index].avatar_url || reviews[index].avatar;
    }

    document.getElementById('nextReview').addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % reviews.length;
      showReview(currentIndex);
    });

    document.getElementById('prevReview').addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + reviews.length) % reviews.length;
      showReview(currentIndex);
    });
  });
</script>
</div>
<!-- End Review -->

<!-- Start Banner -->
<div class="custom-container d-flex justify-content-center mt-5 mb-5">
  <div class="banner-wrapper">
    <!-- Gambar Banner -->
    <img src="{{ asset('img/banner.png') }}" alt="Banner" class="banner-img-1">

    <!-- Tombol Overlay -->
    <div class="button-overlay btn-container">
      <!-- Tombol Pesan Sekarang -->
      <a href="https://s.id/baksosolokidulpasar?fbclid=PAQ0xDSwMIGpBleHRuA2FlbQIxMQABp60jBYeMT1NwoWDbNzFqzTUyiwxGsRBPS4qhIEX59pLWGHbPJCVDnlGraDXE_aem_fOkNWDI0Y5Z9SbHRVyJLlw" target="_blank" class="btn-pesan">
        PESAN SEKARANG
        <img src="{{ asset('img/icons/isolation_mode.png') }}" alt="Food">
      </a>

      <!-- Tombol WhatsApp -->
      <a href="https://api.whatsapp.com/send?phone=6281292272007&text=Halo%20&fbclid=PAQ0xDSwMIGetleHRuA2FlbQIxMAABpwezqZtq8ATdyHUK_ZZB74BbS878wzZCu31DsxP3XM-nyU6ofVvn-yT-PbTP_aem_2nep4Yn3tlFMm1Iyp3OK5Q" target="_blank" class="btn-wa custom-btn">
        <img src="{{ asset('img/icons/whatsapp.png') }}" alt="WhatsApp">
      </a>
    </div>
  </div>
</div>
<!-- End Banner -->



















@endsection

