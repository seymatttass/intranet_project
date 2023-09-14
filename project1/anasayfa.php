<?php
require 'sayfa.ust.php';
?>


<!DOCTYPE html>
<html>
<head>
    
    <title>Web Sitenizin Başlığı</title>
    <style>
        body {
            background-image: url('/assets/2.jpeg'); /* Resmin yolunu belirtin */
            background-size: cover; /* Resmi sayfa boyutuna sığdır */
            background-repeat: no-repeat; /* Resmi yinelemeyi kapat */
        }
    </style>

    
</head>
<body>
    
<script>
document.addEventListener("DOMContentLoaded", function () {
  // İletişim bağlantısını seçin
  var iletisimLink = document.getElementById("iletisim-link");

  // İletişim bağlantısına tıklama olayını ekle
  iletisimLink.addEventListener("click", function (event) {
    event.preventDefault(); // Bağlantının varsayılan davranışını engelle
    scrollToBottom(); // Sayfayı en alta kaydır
  });

  // Sayfayı en alta kaydıran fonksiyon
  function scrollToBottom() {
    window.scrollTo({
      top: document.body.scrollHeight,
      behavior: "smooth", // Düzenli kaydırma efekti ekler
    });
  }
});
</script>



    
<script>
document.addEventListener("DOMContentLoaded", function () {
  // İletişim bağlantısını seçin
  var iletisimLink = document.getElementById("hakkimizda-link");

  // İletişim bağlantısına tıklama olayını ekle
  iletisimLink.addEventListener("click", function (event) {
    event.preventDefault(); // Bağlantının varsayılan davranışını engelle
    scrollToBottom(); // Sayfayı en alta kaydır
  });

  // Sayfayı en alta kaydıran fonksiyon
  function scrollToBottom() {
    window.scrollTo({
      top: document.body.scrollHeight,
      behavior: "smooth", // Düzenli kaydırma efekti ekler
    });
  }
});
</script>



</body>
</html>



<?php
require 'navbar.php';
?>
 







<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <div class="d-flex justify-content-center align-items-center vh-100">
        <img src="/assets/organizasyon.jpeg" class="d-block max-height-50" alt="..." width="640" height="450">
      </div>
      <div class="carousel-caption d-none d-md-block">
        <p>Özel günleriniz bize emanet.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <div class="d-flex justify-content-center align-items-center vh-100">
        <img src="/assets/dugunn.webp" class="d-block max-height-50" alt="..." width="640" height="450">
      </div>
      <div class="carousel-caption d-none d-md-block">
        <p>Seçimi yap gerisini bize bırak.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <div class="d-flex justify-content-center align-items-center vh-100">
        <img src="/assets/Düğün-.jpeg" class="d-block max-height-50" alt="..." width="640" height="450">
      </div>
      <div class="carousel-caption d-none d-md-block">
        <p>Uygun fiyatlı yüksek görünümlü davetler için biz burdayız.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<br> </br>
<br> </br>

<hr class="dashed">

<div class="container mt-4">
  <div class="row">
    <div class="col-md-3">
      <div class="d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg>
        <br> </br>
        <h6>organizasyonun_piri</h6>
      </div>
      <div class="d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
          <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
        </svg>
        <br> </br>
        <h6>organizasyonpiri</h6>
      </div>
      <div class="d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
        </svg>
        <br> </br>
        <h6>info@piriorganizasyon.com</h6>
      </div>
      <div class="d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
          <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
        </svg>
        <br> </br>
        <h6>02164553243</h6>
      </div>
      <div class="d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
          <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
          <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
        <br> </br>
        <h6>574.Sokak İstanbul, Türkiye</h6>
      </div>
    </div>
    <div class="col-md-9">
        <h1>Hakkımızda</h1>
        <p>Müşteri memnuniyeti öncelikli çözüm odaklı yaklaşımımız, 20 yılı geçen sektör deneyimimiz
          ve profesyonel kadromuz ile üstlendiğimiz projeleri ilk günkü heyecanımızla gerçekleştirmekteyiz.
          Takım çalışmasını ilke edinmiş tecrübeli, dinamik, son teknoloji ve trendleri takip eden ekibimiz 
          ile geleneksel yapılarımıza da uygun olarak her proje için tasarılar planlar, en ufak ayrıntıları
          hesaplar, projelerinizin hedefine ulaşmasını sağlarız.</p>
    </div>
  </div>
</div>














<?php require_once 'sayfa.alt.php'; ?>