<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "include/script.php"; ?>
  <title>Document</title>
</head>
<body>

 <!-- ======= Inicio do Header ======= -->
 <?php include "include/Header.php";?>
    <!-- fim do Header -->
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="index.html">PÁGINA INICIAL</a></li>
      <li>DOAÇÕES	</li>
    </ol>
    <h2>Detalhe sobre á doação</h2>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Categorita</strong>:produto de Higeni</li>
            <li><strong>Doador</strong>:André Soki</li>
            <li><strong>Data de doação</strong>: 01 Novembro, 2022</li>
            <li><strong>ONG</strong>: <a href="blog.html">AMAR</a></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>This is an example of portfolio detail</h2>
          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main>
 <!-- ======= ONG`S ======= -->
 <?php include "include/ong.php"; ?>
    <!-- fim ONG´s -->

    <!-- ======= Rodape ======= -->
    <?php include "include/footer.php"; ?>
    <!-- fim rodape -->

    <!-- Botão para subida rapida -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i></a>
     <!-- Botão para subida rapida -->
    <!-- modals -->
    <?php include "include/modal.php";?>

    <!--  Script do JS-->
    <?php include "include/scriptJS.php";?>
    <!-- Script do JS -->

</body>
</html>