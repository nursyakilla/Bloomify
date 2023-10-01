<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to Bloomify</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("/frontend/assets/img/favicon.png") }}" rel="icon">
  <link href="{{ asset("/frontend/assets/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("/frontend/assets/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/aos/aos.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/glightbox/css/glightbox.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/swiper/swiper-bundle.min.css") }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("/frontend/assets/css/main.css") }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="{{ url("index.html") }}" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h2>Bloomify</h2>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="{{ url("#hero") }}">Beranda</a></li>          
          <li><a class="nav-link" href="{{ url("#menu") }}">Menu</a></li>
          <li><a class="nav-link" href="{{ url("#testimonials") }}">Testimoni</a></li>
          
          <li><a class="getstarted" href="{{ route('login') }}">Login</a></li>
          <li><a class="getstarted" href="{{ route('register') }}">Register</a></li>
        </ul>
      </nav>    
    </div>
  </header>
  <section id="hero" class="hero d-flex align-items-center section-bg pt-5">
    <div class="container">
      <div class="row justify-content-between gy-4">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Menghidupkan Hijau di<br>Setiap Sudut</h2>
          <p data-aos="fade-up" data-aos-delay="100">Kami hadir dengan koleksi tanaman dan perlengkapan berkebun terbaik untuk mewujudkan kebun impian Anda. 
                                                     Temukan ragam pilihan yang memikat dan bawa sentuhan alam ke dalam setiap ruangan dan kebun Anda.</p>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="{{ asset("/frontend/assets/img/green.png") }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>
            <p>Apa itu 
              <span>Bloomify???</span>
            </p>
          </h2>
        </div>
        <div class="row gy-4">
          <img src="{{ asset("/frontend/assets/img/green-1.jpg") }}" 
               class="col-lg-7 position-relative text-right"
               data-aos="fade-up"
               data-aos-delay="150">
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Di Bloomify, kami lebih dari sekadar toko online. 
              </p>
              <p>
                Kami adalah komunitas yang berdedikasi 
                untuk menghidupkan kecantikan alam di dalam rumah dan taman Anda.                 
              </p>
              <p>
                Dengan fokus pada tanaman hias pilihan, bibit berkualitas, dan perlengkapan berkebun yang lengkap, 
                kami mengundang Anda untuk merangkul alam dengan cara yang unik dan memuaskan.
              </p>
              <p>
                Dari tanaman hias yang memikat hingga perlengkapan berkualitas tinggi, 
                kami menghubungkan Anda dengan produk-produk yang akan membantu taman Anda mekar dan tumbuh. 
              </p>
              <p>
                Mari bersama-sama merayakan keanekaragaman alam dan menciptakan ruang yang menginspirasi 
                dengan sentuhan hijau dan warna-warni yang hanya bisa diberikan oleh tumbuhan.
              </p>
              <div class="position-relative mt-4">
                <img src="{{ asset("/frontend/assets/img/bibit.jpg") }}" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="section-header">
            <h2>
              <p>Kenapa Harus Memilih
                <span>Bloomify???</span>
              </p>
            </h2>
            </div>
            <div class="col-lg-12">
              <div class="row gy-5 justify-content-center">
                  <div class="col-xl-4" data-aos="fade-up" data-aos-delay="100">
                      <div class="icon-box d-flex flex-column align-items-center">
                          <i class="bi bi-tree-fill"></i>
                          <h4>Tanaman dengan Standar yang Tinggi</h4>
                          <p>Kami hanya menyediakan tanaman-tanaman pilihan yang telah diuji dan disaring untuk memastikan kualitas terbaik. Setiap tanaman yang Anda beli adalah investasi yang akan memberikan keindahan yang berlanjut.</p>
                      </div>
                  </div>
                  <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box d-flex flex-column align-items-center">
                        <i class="bi bi-apple"></i>
                        <h4>Bibit Berkualitas Tinggi</h4>
                        <p>Kami memahami bahwa setiap pertumbuhan dimulai dari bibit yang baik. Dengan bibit berkualitas tinggi, Anda dapat melihat harapan dan keajaiban tumbuh dengan setiap penyiraman.</p>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box d-flex flex-column align-items-center">
                      <i class="bi bi-tools"></i>
                      <h4>Pemilihan Peralatan Berkebun yang Berkualitas</h4>
                      <p>Kami menerapkan standar ketat dalam memilih perlengkapan berkebun yang kami tawarkan. Kualitas adalah hal yang tidak boleh ditawar-tawar, dan kami memastikan bahwa setiap alat yang kami jual adalah alat yang akan membantu Anda dalam perjalanan berkebun Anda.</p>
                  </div>
              </div>
              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column align-items-center text-right">
                    <i class="bi bi-journal-text"></i>
                    <h4>Panduan Berkebun yang Menyenangkan</h4>
                    <p>Dari memilih tanaman hingga teknik merawat, kami siap membantu setiap langkah Anda dalam berkebun. Kami hanya ingin memastikan Anda merasa percaya diri dalam merawat kebun impian Anda.</p>
                </div>
            </div>
            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box d-flex flex-column align-items-center">
                  <i class="bi bi-bag-fill"></i>
                  <h4>Pengalaman Berbelanja yang Mudah dan Aman</h4>
                  <p>Dengan platform yang mudah digunakan dan transaksi yang aman, kami membuat pengalaman berbelanja Anda bersama kami menyenangkan dan bebas stres.</p>
              </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <section id="menu" class="menu">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Produk
        <p>Lihat Produk
          <span>Bloomify</span>
          Kami
        </p>
      </h2>
    </div>
    <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <li class="nav-item">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-tanaman">
          <h4>Tanaman Hias</h4>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-bibit">
          <h4>Bibit Tanaman</h4>
        </a>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-perlengkapan">
            <h4>Perlengkapan Berkebun</h4>
          </a>
        </li>
      </ul>
      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
        <div class="tab-pane fade active show" id="menu-tanaman">
          <div class="tab-header text-center mt-4">
            <h3>Tanaman Hias</h3>
          </div>
          <div class="row gy-5 mb-5">
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/tanaman_hias/table.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/tanaman_hias/table.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Kaktus Mini</h5>
              <p class="price">Rp.40.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/tanaman_hias/table-1.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/tanaman_hias/table-1.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Sekulen</h5>
              <p class="price">Rp.45.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/tanaman_hias/table-2.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/tanaman_hias/table-2.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Pothos</h5>
              <p class="price">Rp.50.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/tanaman_hias/floor.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/tanaman_hias/floor.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Pohon Kentia <br>
                  (Howea forsteriana)
               </h5>
              <p class="price">Rp.55.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/tanaman_hias/floor-1.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/tanaman_hias/floor-1.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Dracaena</h5>
              <p class="price">Rp.60.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/tanaman_hias/floor-2.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/tanaman_hias/floor-2.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Fiddle Leaf Fig <br>
                (Ficus lyrata)
              </h5>
              <p class="price">Rp.65.000</p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="menu-bibit">
          <div class="tab-header text-center mt-4">
            <h3>Bibit Tanaman</h3>
          </div>
          <div class="row gy-5 mb-5">
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/bibit/buah.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/bibit/buah.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Lemon</h5>
              <p class="price">Rp.40.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/bibit/buah-1.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/bibit/buah-1.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Alpukat</h5>
              <p class="price">Rp.45.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/bibit/buah-2.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/bibit/buah-2.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Jeruk</h5>
              <p class="price">Rp.50.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/bibit/sayur.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/bibit/sayur.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Tomat</h5>
              <p class="price">Rp.55.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/bibit/sayur-1.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/bibit/sayur-1.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Cabai</h5>
              <p class="price">Rp.60.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/bibit/sayur-2.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/bibit/sayur-2.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Wortel</h5>
              <p class="price">Rp.65.000</p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="menu-perlengkapan">
          <div class="tab-header text-center mt-4">
            <h3>Perlengkapan Berkebun</h3>
          </div>
          <div class="row gy-5 mb-5">
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/perlengkapan/pestisida.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/perlengkapan/pestisida.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Pestisida</h5>
              <p class="price">Rp.20.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/perlengkapan/pupuk.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/perlengkapan/pupuk.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Pupuk</h5>
              <p class="price">Rp.20.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/perlengkapan/sarung_tangan.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/perlengkapan/sarung_tangan.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Sarung Tangan</h5>
              <p class="price">Rp.20.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/perlengkapan/selang_air.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/perlengkapan/selang_air.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Selang Air</h5>
              <p class="price">Rp.20.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/perlengkapan/sekop.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/perlengkapan/sekop.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Sekop</h5>
              <p class="price">Rp.20.000</p>
            </div>
            <div class="col-lg-4 menu-item">
              <a href="{{ asset("/frontend/assets/img/perlengkapan/pot.jpg") }}" class="glightbox"><img src="{{ asset("/frontend/assets/img/perlengkapan/pot.jpg") }}" class="menu-img img-fluid" alt=""></a>
              <h5>Pot</h5>
              <p class="price">Rp.20.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Testimoni</h2>
        <p>Apa yang Mereka Katakan Tentang<span>Bloomify???</span></p>
      </div>
      <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Bloomify adalah tempat yang sempurna untuk pecinta tanaman. 
                      Saya membeli beberapa bibit tanaman dan semuanya tumbuh dengan baik. 
                      Perlengkapan berkebun mereka juga sangat membantu. 
                      Pengalaman berbelanja yang luar biasa!
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Arthur Hamada</h3>
                    <h4>Produser Lagu</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src="{{ asset("/frontend/assets/img/testimoni/arthur.jpg") }}" class="img-fluid testimonial-img" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Saya baru saja memulai hobi berkebun, dan Bloomify adalah mitra terbaik saya. 
                      Saya mendapatkan panduan yang bagus tentang merawat tanaman hias dan bibit. 
                      Perlengkapan berkebun yang mereka tawarkan berkualitas tinggi. 
                      Terima kasih atas layanan yang luar biasa!
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Junghwan So</h3>
                    <h4>Atlet Taekwondo</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src="{{ asset("/frontend/assets/img/testimoni/hwan.jpg") }}" class="img-fluid testimonial-img" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Saya suka pilihan tanaman hias yang beragam dan kualitasnya. 
                      Bibit tanaman yang saya beli tumbuh dengan cepat.
                      Perlengkapan berkebun mereka sangat membantu dalam menjaga kebun saya tetap indah
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Justin Park</h3>
                    <h4>Dokter Bedah</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src="{{ asset("/frontend/assets/img/testimoni/justin.jpg") }}" class="img-fluid testimonial-img" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Bloomify adalah toko tanaman terbaik yang pernah saya kunjungi. 
                      Saya membeli beberapa tanaman hias untuk dekorasi rumah saya, dan hasilnya luar biasa.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Woozi Lee</h3>
                    <h4>Produser Lagu</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src="{{ asset("/frontend/assets/img/testimoni/woozi.jpg") }}" class="img-fluid testimonial-img" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Bloomify adalah toko online favorit saya untuk kebutuhan berkebun. 
                      Saya suka cara mereka memberikan informasi yang berguna tentang tanaman hias dan bibit. 
                      Perlengkapan berkebun yang mereka tawarkan juga sangat berkualitas. 
                      Saya sangat puas dengan layanan mereka.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Seonghwa Park</h3>
                    <h4>Penyanyi</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src="{{ asset("/frontend/assets/img/testimoni/hwa.jpg") }}" class="img-fluid testimonial-img" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>
          <p>Butuh Bantuan?? 
            <span>Silahkan Hubungi Kami</span>
          </p>
        </h2>
      </div>
      <div class="mb-3">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/d/embed?mid=11pd0F5vbCwx0TjQwNLNLqfFS3H0&hl=en_US&ehbc=2E312F" width="640" height="480" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="row gy-4">
        <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-map flex-shrink-0"></i>
            <div>
              <h3>Alamat Kami</h3>
              <p>397-5 Hapjeong-dong, Mapo-gu, Seoul, Korea Selatan</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-item d-flex align-items-center">
            <i class="icon bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Kami</h3>
              <p>bloomify@example.com</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>No Telepon Kami</h3>
              <p>+62 0812-3456-7890</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-share flex-shrink-0"></i>
            <div>
              <h3>Waktu Toko Buka</h3>
              <div>
                <strong>Senin-Sabtu:</strong> 10.00 - 21.00 WIB;
                <strong>Minggu:</strong> Tutup
              </div>
            </div>
          </div>
        </div>
        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama Kamu" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email Kamu" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Sedang di Proses</div>
            <div class="error-message">Maaf Telah Terjadi Kesalahan</div>
            <div class="sent-message">Pesanmu Telah Terkirim. Terima Kasih!</div>
          </div>
          <div class="text-center"><button type="submit">Kirim Pesan</button></div>
        </form>
      </div>
    </div>
  </section>
</main>
<footer id="footer" class="footer">
  <div class="container">
    <div class="row gy-3">
      <div class="col-lg-3 col-md-6 d-flex">
        <i class="bi bi-geo-alt icon"></i>
        <div>
          <h4>Alamat</h4>
          <p>
            397-5 Hapjeong-dong, Mapo-gu, <br>
            Seoul, Korea Selatan
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 footer-links d-flex">
        <i class="bi bi-clock icon"></i>
        <div>
          <h4>Waktu Toko Buka</h4>
          <p>
            <strong>Senin-Sabtu:</strong> 10.00 - 21.00 WIB<br>
            Minggu:Tutup
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 d-flex">
        <i class="bi bi-telephone icon"></i>
        <div>
          <h4>No Telepon</h4>
          <p>
            +62 0812-3456-7890
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Ikuti Sosial Media Kami</h4>
        <div class="social-links d-flex">
          <a href="{{ url("#") }}" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="{{ url("#") }}" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="{{ url("#") }}" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="{{ url("#") }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Bloomify</span></strong>.All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
      Desain Web dari <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer>

<a href="{{ url("#") }}" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset("/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/aos/aos.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/glightbox/js/glightbox.min.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/purecounter/purecounter_vanilla.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/swiper/swiper-bundle.min.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/php-email-form/validate.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("/frontend/assets/js/main.js") }}"></script>

</body>

</html>