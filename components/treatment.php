<section class="treatment_section layout_padding" id="treatment">
  <div class="side_img">
    <img src="images/treatment-side-img.jpg" alt="treatment side image">
  </div>

  <div class="container">
    <div class="heading_container heading_center">
      <h2>Hospital <span>Treatment</span></h2>
    </div>

    <div class="row">
      <?php foreach ($treatments as $treatment): ?>
        <div class="col-md-6 col-lg-3">
          <div class="box">

            <div class="img-box">
              <img src="<?= e($treatment['image']) ?>" alt="<?= e($treatment['title']) ?>">
            </div>

            <div class="detail-box">
              <h4><?= e($treatment['title']) ?></h4>
              <p><?= e($treatment['text']) ?></p>
              <a href="<?= e($treatment['link']) ?>">Read More</a>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>