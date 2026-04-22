<?php
session_start();

include __DIR__ . '/data.php';
include __DIR__ . '/functions.php';

$pageTitle = 'Contact - Mico';
$activePage = 'contact';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contactData = [
        'full_name'    => trim($_POST['full_name'] ?? ''),
        'email'        => trim($_POST['email'] ?? ''),
        'phone_number' => trim($_POST['phone_number'] ?? ''),
        'message'      => trim($_POST['message'] ?? ''),
        'created_at'   => date('Y-m-d H:i:s')
    ];

    $contactFile = __DIR__ . '/contact.json';

    $contacts = [];
    if (file_exists($contactFile)) {
        $decoded = json_decode(file_get_contents($contactFile), true);
        if (is_array($decoded)) {
            $contacts = $decoded;
        }
    }

    $contacts[] = $contactData;

    file_put_contents(
        $contactFile,
        json_encode($contacts, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    );

    $_SESSION['contact'] = $contactData;

    header('Location: success.php');
    exit;
}

include __DIR__ . '/components/header.php';
?>

<section class="contact_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container">
      <h2>
        Get In Touch
      </h2>
    </div>
    <div class="row">
      <div class="col-md-7">
        <div class="form_container">
          <form method="post" action="">
            <div>
              <input type="text" name="full_name" placeholder="Full Name" required />
            </div>
            <div>
              <input type="email" name="email" placeholder="Email" required />
            </div>
            <div>
              <input type="text" name="phone_number" placeholder="Phone Number" required />
            </div>
            <div>
              <input type="text" class="message-box" name="message" placeholder="Message" required />
            </div>
            <div class="btn_box">
              <button type="submit" name="contact_submit">
                SEND
              </button>
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