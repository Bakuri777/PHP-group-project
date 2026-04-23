<section class="slider_section ">
  <div class="dot_design">
    <img src="images/dots.png" alt="dots">
  </div>

  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

      <?php foreach ($sliderItems as $index => $slide): ?>
        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
          <div class="container ">
            <div class="row">

              <div class="col-md-6">
                <div class="detail-box">
                  <div class="play_btn">
                    <button type="button">
                      <i class="fa fa-play" aria-hidden="true"></i>
                    </button>
                  </div>

                  <h1>
                    <?= e($slide['title_top']) ?><br>
                    <span><?= e($slide['title_bottom']) ?></span>
                  </h1>

                  <p><?= e($slide['text']) ?></p>

                  <a href="<?= e($slide['button_link']) ?>">
                    <?= e($slide['button_text']) ?>
                  </a>
                </div>
              </div>

              <div class="col-md-6">
                <div class="img-box">
                  <img src="<?= e($slide['image']) ?>" alt="slider image">
                </div>
              </div>

            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

    <div class="carousel_btn-box">
      <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
        <img src="images/prev.png" alt="previous">
      </a>
      <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
        <img src="images/next.png" alt="next">
      </a>
    </div>
  </div>
</section>
