<?php
session_start();

include 'data.php';
include 'functions.php';

$pageTitle = 'Appointment Success';
$activePage = '';

if (!isset($_SESSION['appointment'])) {
    header("Location: index.php");
    exit;
}

$data = $_SESSION['appointment'];

include 'components/header.php';
?>

<section class="about_section layout_padding">
  <div class="container">

    <div class="heading_container">
      <h2>Appointment <span>Submitted</span></h2>
    </div>

    <p><strong>Name:</strong> <?= e($data['patient_name']) ?></p>
    <p><strong>Doctor:</strong> <?= e($data['doctor_name']) ?></p>
    <p><strong>Department:</strong> <?= e($data['department_name']) ?></p>
    <p><strong>Phone:</strong> <?= e($data['phone']) ?></p>
    <p><strong>Symptoms:</strong> <?= e($data['symptoms']) ?></p>
    <p><strong>Date:</strong> <?= e($data['appointment_date']) ?></p>

    <br>
    <a href="index.php" class="btn btn-primary">Back Home</a>

  </div>
</section>

<?php include 'components/footer.php'; ?>