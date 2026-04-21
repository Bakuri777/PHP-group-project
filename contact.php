<?php
include 'data.php';
include 'functions.php';
$pageTitle = 'Contact - Mico';
$activePage = 'contact';
$formSubmitted = $_SERVER['REQUEST_METHOD'] === 'POST';
include 'components/header.php';
?>
<section class="contact_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container">
      <h2>Get In Touch</h2>
    </div>
    <div class="row">
      <div class="col-md-7">
        <div class="form_container">
          <?php if ($formSubmitted): ?>
            <div class="alert alert-success">Your form is submitted.</div>
          <?php endif; ?>
          <form method="post">
            <div>
              <input type="text" name="full_name" placeholder="Full Name" />
            </div>
            <div>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" name="phone_number" placeholder="Phone Number" />
            </div>
            <div>
              <input type="text" class="message-box" name="message" placeholder="Message" />
            </div>
            <div class="btn_box">
              <button type="submit">SEND</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-5">
        <div class="img-box">
          <img src="images/contact-img.jpg" alt="contact image">
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'components/footer.php'; ?>
