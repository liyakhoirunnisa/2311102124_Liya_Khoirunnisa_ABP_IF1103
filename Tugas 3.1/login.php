<?php
// Memulai session
session_start();

$message = "";

// Cek apakah tombol login ditekan
if (isset($_POST['login'])) {
    $username = $_POST['username']; // ambil username dari form
    $password = $_POST['password']; // ambil password dari form

    // Cek username dan password pada session
    if (isset($_SESSION['users'][$username]) && $_SESSION['users'][$username] == $password) {
        $message = "welcome " . htmlspecialchars($username); // login berhasil
    } else {
        $message = "wrong username/password"; // login gagal
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login - Liya Khoirunnisa</title>
    <style>
        /* Style body */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            margin-top: 80px;
        }

        /* Container form login */
        .login-container {
            width: 350px;
        }

        /* Judul login */
        h2 {
            text-align: center;
            color: #1a365d;
            margin-bottom: 30px;
            font-weight: 500;
        }

        /* Grup input */
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        /* Label input */
        .form-group label {
            width: 100px;
            color: #333;
        }

        /* Input username dan password */
        .form-group input[type="text"],
        .form-group input[type="password"] {
            flex: 1;
            padding: 8px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 4px;
        }

        /* Efek fokus input */
        .form-group input[type="text"]:focus,
        .form-group input[type="password"]:focus {
            border-color: #3b82f6;
        }

        /* Grup tombol dan link */
        .action-group {
            display: flex;
            align-items: center;
            margin-left: 100px;
        }

        /* Tombol login */
        .btn-login {
            background-color: #22c55e;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
        }

        /* Hover tombol */
        .btn-login:hover {
            background-color: #16a34a;
        }

        /* Link register */
        .link-register {
            color: #3b82f6;
            text-decoration: none;
            margin-left: 25px;
        }

        /* Hover link */
        .link-register:hover {
            text-decoration: underline;
        }

        /* Pesan login */
        .message {
            margin-top: 15px;
            margin-left: 100px;
            color: #333;
            font-size: 15px;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Login</h2>

        <!-- Form login -->
        <form method="POST" action="">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <!-- Tombol login dan link register -->
            <div class="action-group">
                <input type="submit" name="login" value="Login" class="btn-login">
                <a href="register.php" class="link-register">Register</a>
            </div>
        </form>

        <?php
        // Tampilkan pesan login
        if ($message != "") {
            echo "<div class='message'>$message</div>";
        }
        ?>
    </div>

</body>

</html>