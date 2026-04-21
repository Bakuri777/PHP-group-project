<?php
session_start();

include 'data.php';
include 'functions.php';

$pageTitle = 'Contact Success';
$activePage = '';

if (!isset($_SESSION['contact'])) {
    header("Location: index.php");
    exit;
}

$data = $_SESSION['contact'];

include 'components/header.php';
?>

<section class="about_section layout_padding">
  <div class="container">

    <div class="heading_container">
      <h2>Your form is <span>Submitted</span></h2>
    </div>

    <p><strong>Full Name:</strong> <?= e($data['full_name']) ?></p>
    <p><strong>Email:</strong> <?= e($data['email']) ?></p>
    <p><strong>Phone:</strong> <?= e($data['phone_number']) ?></p>
    <p><strong>Message:</strong> <?= e($data['message']) ?></p>

    <br>

    <a href="index.php" class="btn btn-primary">Back Home</a>

  </div>
</section>

<?php include 'components/footer.php'; ?>