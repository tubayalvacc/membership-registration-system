<?php
require 'config.php';

$message = ''; // Initialize an empty message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        $message = "Kayıt başarılı! Ana sayfaya yönlendiriliyorsunuz...";
        echo '<script>
                setTimeout(function() {
                    window.location.href = "index.php";
                }, 5000); // 5000 milliseconds = 5 seconds
              </script>';
    } else {
        $message = "Bir hata oluştu: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f5f2; /* Soft creamish white background color */
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #fff; /* White container background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
            max-width: 400px; /* Limit container width */
            margin: auto; /* Center container horizontally */
            margin-top: 50px; /* Add top margin for spacing */
        }
        h2 {
            text-align: center;
            color: #333; /* Dark text color */
        }
        .form-control {
            margin-bottom: 10px;
        }
        button {
            background-color: #4CAF50; /* Green */
            background-image: linear-gradient(to bottom right, #4CAF50, #2196F3); /* Gradient */
            color: white;
            border: none;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #45a049; /* Darker green on hover */
            background-image: linear-gradient(to bottom right, #45a049, #0b7dda); /* Darker gradient on hover */
        }
        p.message {
            text-align: center;
            color: #333; /* Dark text color */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Kayıt Ol</h2>
        <?php if (!empty($message)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="name">İsim:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">E-posta:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Şifre:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Kayıt Ol</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
