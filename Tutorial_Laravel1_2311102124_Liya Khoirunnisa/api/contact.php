<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Sanitize inputs
function sanitize($val) {
    return htmlspecialchars(trim(stripslashes($val)), ENT_QUOTES, 'UTF-8');
}

$nama    = sanitize($_POST['nama']    ?? '');
$email   = sanitize($_POST['email']   ?? '');
$no_hp   = sanitize($_POST['no_hp']   ?? '');
$pesan   = sanitize($_POST['pesan']   ?? '');

// Validation
$errors = [];

if (empty($nama))  $errors[] = 'Nama lengkap wajib diisi.';
if (empty($email)) $errors[] = 'Email wajib diisi.';
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Format email tidak valid.';
if (empty($pesan)) $errors[] = 'Pesan wajib diisi.';

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// Log to file (instead of email for demo)
$log_dir  = __DIR__ . '/../logs';
$log_file = $log_dir . '/messages.json';

if (!is_dir($log_dir)) {
    mkdir($log_dir, 0755, true);
}

$existing = [];
if (file_exists($log_file)) {
    $raw = file_get_contents($log_file);
    $existing = json_decode($raw, true) ?? [];
}

$new_message = [
    'id'         => uniqid('msg_'),
    'timestamp'  => date('Y-m-d H:i:s'),
    'nama'       => $nama,
    'email'      => $email,
    'no_hp'      => $no_hp,
    'pesan'      => $pesan,
];

$existing[] = $new_message;
file_put_contents($log_file, json_encode($existing, JSON_PRETTY_PRINT));

echo json_encode([
    'success' => true,
    'message' => 'Pesan berhasil dikirim!'
]);
exit;
