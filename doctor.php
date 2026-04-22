<?php
include __DIR__ . '/data.php';
include __DIR__ . '/functions.php';

$pageTitle = 'Doctors - Mico';
$activePage = 'doctor';

include __DIR__ . '/components/header.php';
?>

<section class="team_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Our <span>Doctors</span></h2>
    </div>

    <div class="carousel-wrap">
      <div class="owl-carousel team_carousel">
        <?php foreach ($doctors as $doctor): ?>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?= e($doctor['image']) ?>" alt="<?= e($doctor['name']) ?>">
              </div>

              <div class="detail-box">
                <h5><?= e($doctor['name']) ?></h5>
                <h6><?= e($doctor['degree']) ?></h6>

                <div class="social_box">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>