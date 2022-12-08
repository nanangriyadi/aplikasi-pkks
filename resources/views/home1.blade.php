
@extends('layouts.main')

@section('container')

<!-- ======= hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">We are professional</h2>
                <p class="animate__animated animate__fadeInUp">SLB Negeri Badegan adalah salah satu lembaga yang memiliki dedikasi yang tinggi untuk kemajuan IPTEK ( Ilmu Pengetahuan Dan Teknologi) maka dengan adanya Penilaian Kinerja Kepala Sekolah Ini menjadi sebuah tantangan tersendiri bagi kami dan kemajuan lembaga kami.</p>
                <a href="/about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Saya Siap</a>
              </div>
            </div>
          </div>
          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">We are the Best</h2>
                <p class="animate__animated animate__fadeInUp">SLB Negeri Badegan adalah salah satu lembaga yang memiliki dedikasi yang tinggi untuk kemajuan IPTEK ( Ilmu Pengetahuan Dan Teknologi) maka dengan adanya Penilaian Kinerja Kepala Sekolah Ini menjadi sebuah tantangan tersendiri bagi kami dan kemajuan lembaga kami.</p>
                <a href="/about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Saya Siap</a>
              </div>
            </div>
          </div>
          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">We are hero</h2>
                <p class="animate__animated animate__fadeInUp">SLB Negeri Badegan adalah salah satu lembaga yang memiliki dedikasi yang tinggi untuk kemajuan IPTEK ( Ilmu Pengetahuan Dan Teknologi) maka dengan adanya Penilaian Kinerja Kepala Sekolah Ini menjadi sebuah tantangan tersendiri bagi kami dan kemajuan lembaga kami.</p>
                <a href="/about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Saya Siap</a>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

@endsection