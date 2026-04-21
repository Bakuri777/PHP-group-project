<?php
if (!isset($pageTitle)) {
    $pageTitle = $site['title'];
}

if (!isset($activePage)) {
    $activePage = 'index';
}

$bodyClass = $activePage === 'index' ? '' : 'sub_page';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title><?= e($pageTitle) ?></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body class="<?= e($bodyClass) ?>">
  <div class="hero_area">
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <a href="tel:<?= e($site['phone']) ?>">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>Call : <?= e($site['phone']) ?></span>
            </a>
            <a href="mailto:<?= e($site['email']) ?>">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>Email : <?= e($site['email']) ?></span>
            </a>
            <a href="#">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span><?= e($site['location']) ?></span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <img src="<?= e($site['logo']) ?>" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav">
                  <?php foreach ($navLinks as $key => $link): ?>
                    <li class="nav-item <?= isActivePage($key, $activePage) ?>">
                      <a class="nav-link" href="<?= e($link['url']) ?>">
                        <?= e($link['label']) ?>
                        <?php if ($key === $activePage): ?>
                          <span class="sr-only">(current)</span>
                        <?php endif; ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="quote_btn-container">
                <a href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>Login</span>
                </a>
                <a href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>Sign Up</span>
                </a>
                <form class="form-inline">
                  <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
