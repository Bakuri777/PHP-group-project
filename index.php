<?php
session_start();

include __DIR__ . '/data.php';
include __DIR__ . '/functions.php';

$pageTitle = 'Mico';
$activePage = 'index';

/* BOOK APPOINTMENT */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['appointment_submit'])) {

    $appointmentData = [
        'patient_name'     => trim($_POST['patient_name'] ?? ''),
        'doctor_name'      => trim($_POST['doctor_name'] ?? ''),
        'department_name'  => trim($_POST['department_name'] ?? ''),
        'phone'            => trim($_POST['phone'] ?? ''),
        'symptoms'         => trim($_POST['symptoms'] ?? ''),
        'appointment_date' => trim($_POST['appointment_date'] ?? ''),
        'created_at'       => date('Y-m-d H:i:s')
    ];

    $appointmentsFile = __DIR__ . '/appointments.json';

    $appointments = file_exists($appointmentsFile)
        ? json_decode(file_get_contents($appointmentsFile), true)
        : [];

    if (!is_array($appointments)) {
        $appointments = [];
    }

    $appointments[] = $appointmentData;

    file_put_contents(
        $appointmentsFile,
        json_encode($appointments, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    );

    $_SESSION['appointment'] = $appointmentData;

    header("Location: appointment_success.php");
    exit;
}

/* CONTACT FORM */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {

    $contactData = [
        'full_name'    => trim($_POST['full_name'] ?? ''),
        'email'        => trim($_POST['email'] ?? ''),
        'phone_number' => trim($_POST['phone_number'] ?? ''),
        'message'      => trim($_POST['message'] ?? ''),
        'created_at'   => date('Y-m-d H:i:s')
    ];

    $contactFile = __DIR__ . '/contact.json';

    $contacts = file_exists($contactFile)
        ? json_decode(file_get_contents($contactFile), true)
        : [];

    if (!is_array($contacts)) {
        $contacts = [];
    }

    $contacts[] = $contactData;

    file_put_contents(
        $contactFile,
        json_encode($contacts, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    );

    $_SESSION['contact'] = $contactData;

    header("Location: success.php");
    exit;
}

include __DIR__ . '/components/header.php';
?>

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
                  <img src="<?= e($slide['image']) ?>" alt="">
                </div>
              </div>

            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

    <div class="carousel_btn-box">
      <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
        <img src="images/prev.png" alt="">
      </a>
      <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
        <img src="images/next.png" alt="">
      </a>
    </div>
  </div>
</section>

<section class="book_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col">

        <form method="post" action="">

          <h4>BOOK <span>APPOINTMENT</span></h4>

          <div class="form-row">

            <div class="form-group col-lg-4">
              <label>Patient Name</label>
              <input type="text" class="form-control" name="patient_name" required>
            </div>

            <div class="form-group col-lg-4">
              <label>Doctor's Name</label>
              <select name="doctor_name" class="form-control wide" required>
                <?php foreach ($appointmentDoctors as $doctor): ?>
                  <option value="<?= e($doctor) ?>"><?= e($doctor) ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group col-lg-4">
              <label>Department's Name</label>
              <select name="department_name" class="form-control wide" required>
                <?php foreach ($appointmentDepartments as $department): ?>
                  <option value="<?= e($department) ?>"><?= e($department) ?></option>
                <?php endforeach; ?>
              </select>
            </div>

          </div>

          <div class="form-row">

            <div class="form-group col-lg-4">
              <label>Phone Number</label>
              <input type="text" class="form-control" name="phone" required>
            </div>

            <div class="form-group col-lg-4">
              <label>Symptoms</label>
              <input type="text" class="form-control" name="symptoms" required>
            </div>

            <div class="form-group col-lg-4">
                <label>Choose Date</label>
                <input
                  type="date"
                  class="form-control"
                  name="appointment_date"
                  value="<?= date('Y-m-d') ?>"
                  min="<?= date('Y-m-d') ?>"
                  required
                >
            </div>

          </div>

          <div class="btn-box">
            <button type="submit" class="btn" name="appointment_submit">
              Submit Now
            </button>
          </div>

        </form>

      </div>
    </div>
  </div>
</section>

<section class="about_section">
  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <div class="img-box">
          <img src="<?= e($about['image']) ?>" alt="">
        </div>
      </div>

      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              <?= e($about['title']) ?>
              <span><?= e($about['highlight']) ?></span>
            </h2>
          </div>

          <p><?= e($about['text']) ?></p>

          <a href="<?= e($about['button_link']) ?>">
            <?= e($about['button_text']) ?>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="treatment_section layout_padding">
  <div class="side_img">
    <img src="images/treatment-side-img.jpg" alt="">
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
              <img src="<?= e($treatment['image']) ?>" alt="">
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

<section class="team_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Our <span>Doctors</span></h2>
    </div>

    <div class="owl-carousel team_carousel">
      <?php foreach ($doctors as $doctor): ?>
        <div class="item">
          <div class="box">

            <div class="img-box">
              <img src="<?= e($doctor['image']) ?>" alt="">
            </div>

            <div class="detail-box">
              <h5><?= e($doctor['name']) ?></h5>
              <h6><?= e($doctor['degree']) ?></h6>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2><span>Testimonial</span></h2>
    </div>
  </div>

  <div class="container px-0">
    <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">

      <div class="carousel-inner">
        <?php foreach ($testimonials as $index => $testimonial): ?>
          <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">

            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5><?= e($testimonial['name']) ?></h5>
                  <h6><?= e($testimonial['subtitle']) ?></h6>
                </div>
              </div>

              <p><?= e($testimonial['text']) ?></p>
            </div>

          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<section class="contact_section layout_padding-bottom">
  <div class="container">

    <div class="heading_container">
      <h2>Get In Touch</h2>
    </div>

    <div class="row">

      <div class="col-md-7">
        <div class="form_container">

          <form method="post" action="">

            <div>
              <input type="text" name="full_name" placeholder="Full Name" required>
            </div>

            <div>
              <input type="email" name="email" placeholder="Email" required>
            </div>

            <div>
              <input type="text" name="phone_number" placeholder="Phone Number" required>
            </div>

            <div>
              <input type="text" class="message-box" name="message" placeholder="Message" required>
            </div>

            <div class="btn_box">
              <button type="submit" name="contact_submit">SEND</button>
            </div>

          </form>

        </div>
      </div>

      <div class="col-md-5">
        <div class="img-box">
          <img src="images/contact-img.jpg" alt="">
        </div>
      </div>

    </div>
  </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>