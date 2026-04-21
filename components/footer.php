  </div>

  <section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="index.php">
            <img src="<?= e($site['logo']) ?>" alt="logo">
          </a>
        </div>
        <div class="info_form">
          <form action="#">
            <input type="email" placeholder="Your email">
            <button>Subscribe</button>
          </form>
        </div>
      </div>
      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <h5>Address</h5>
            <div class="info_contact">
              <a href="#">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span><?= e($site['location']) ?></span>
              </a>
              <a href="tel:<?= e($site['phone']) ?>">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>Call <?= e($site['phone']) ?></span>
              </a>
              <a href="mailto:<?= e($site['email']) ?>">
                <i class="fa fa-envelope"></i>
                <span><?= e($site['email']) ?></span>
              </a>
            </div>
            <div class="social_box">
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h5>Useful link</h5>
              <div class="info_links_menu">
                <?php foreach ($navLinks as $key => $link): ?>
                  <a class="<?= isActivePage($key, $activePage) ?>" href="<?= e($link['url']) ?>">
                    <?= e($link['label']) ?>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>LATEST POSTS</h5>
              <?php foreach ($latestPosts as $post): ?>
                <div class="post_box">
                  <div class="img-box">
                    <img src="<?= e($post['image']) ?>" alt="post">
                  </div>
                  <p><?= e($post['text']) ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>News</h5>
              <?php foreach ($newsPosts as $post): ?>
                <div class="post_box">
                  <div class="img-box">
                    <img src="<?= e($post['image']) ?>" alt="news">
                  </div>
                  <p><?= e($post['text']) ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
