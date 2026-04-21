<?php
include 'data.php';
include 'functions.php';
$pageTitle = 'About - Mico';
$activePage = 'about';
include 'components/header.php';
?>
<section class="about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="img-box">
          <img src="<?= e($about['image']) ?>" alt="about image">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2><?= e($about['title']) ?> <span><?= e($about['highlight']) ?></span></h2>
          </div>
          <p><?= e($about['text']) ?></p>
          <a href="index.php">Back To Home</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'components/footer.php'; ?>
