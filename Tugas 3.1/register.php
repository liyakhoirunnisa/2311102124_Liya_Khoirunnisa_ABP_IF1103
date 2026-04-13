<?php
// Memulai session
session_start();

$message = "";

// Cek apakah form register disubmit ketika tombol send ditekan
if (isset($_POST['send'])) {
    $username = $_POST['username']; // mengambil username dari form
    $password = $_POST['password']; // mengambil password dari form

    // Inisialisasi array 'users' di session jika belum ada
    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = array(); // membuat array users
    }

    // Menyimpan data username dan password ke dalam session
    $_SESSION['users'][$username] = $password;

    // Set pesan berhasil
    $message = "user is added";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register - Liya Khoirunnisa</title>
    <style>
        /* style body */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            margin-top: 80px;
        }

        /* container form */
        .login-container {
            width: 350px;
        }

        /* judul halaman */
        h2 {
            text-align: center;
            color: #1a365d;
            margin-bottom: 30px;
            font-weight: 500;
        }

        /* grup input */
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        /* label input */
        .form-group label {
            width: 100px;
            color: #333;
        }

        /* input username & password */
        .form-group input[type="text"],
        .form-group input[type="password"] {
            flex: 1;
            padding: 8px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 4px;
            outline: none;
        }

        /* efek saat input diklik */
        .form-group input[type="text"]:focus,
        .form-group input[type="password"]:focus {
            border-color: #3b82f6;
        }

        /* grup tombol */
        .action-group {
            display: flex;
            align-items: center;
            margin-left: 100px;
        }

        /* tombol send */
        .btn-login {
            background-color: #22c55e;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
        }

        /* efek hover tombol */
        .btn-login:hover {
            background-color: #16a34a;
        }

        /* style link login */
        .link-login {
            color: #3b82f6;
            text-decoration: none;
        }

        .link-login:hover {
            text-decoration: underline;
        }

        /* pesan sukses */
        .message {
            margin-top: 20px;
            margin-left: 100px;
            color: #333;
            font-size: 15px;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Register</h2>

        <!-- form register -->
        <form method="POST" action="">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <!-- tombol kirim -->
            <div class="action-group">
                <input type="submit" name="send" value="Send" class="btn-login">
            </div>
        </form>

        <?php
        // menampilkan pesan sukses dan link login
        if ($message != "") {
            echo "<div class='message'>$message <a href='login.php' class='link-login'>Login</a></div>";
        }
        ?>
    </div>

</body>

</html>