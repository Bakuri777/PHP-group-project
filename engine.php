<?php
session_start();

// მონაცემები და ფუნქციები
include __DIR__ . '/data.php';
include __DIR__ . '/functions.php';

// გვერდის ინფორმაცია
$pageTitle = 'Mico';
$activePage = 'index';


/* ================================
   📅 BOOK APPOINTMENT
================================ */
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

    $file = __DIR__ . '/appointments.json';

    $data = file_exists($file)
        ? json_decode(file_get_contents($file), true)
        : [];

    if (!is_array($data)) {
        $data = [];
    }

    $data[] = $appointmentData;

    file_put_contents(
        $file,
        json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    );

    $_SESSION['appointment'] = $appointmentData;

    header("Location: appointment_success.php");
    exit;
}


/* ================================
   📩 CONTACT FORM
================================ */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {

    $contactData = [
        'full_name'    => trim($_POST['full_name'] ?? ''),
        'email'        => trim($_POST['email'] ?? ''),
        'phone_number' => trim($_POST['phone_number'] ?? ''),
        'message'      => trim($_POST['message'] ?? ''),
        'created_at'   => date('Y-m-d H:i:s')
    ];

    $file = __DIR__ . '/contact.json';

    $data = file_exists($file)
        ? json_decode(file_get_contents($file), true)
        : [];

    if (!is_array($data)) {
        $data = [];
    }

    $data[] = $contactData;

    file_put_contents(
        $file,
        json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    );

    $_SESSION['contact'] = $contactData;

    header("Location: success.php");
    exit;
}