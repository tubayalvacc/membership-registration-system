<?php
// Veritabanı bağlantısı için bilgiler
$servername = "localhost";
$username = "tubamhd";
$password = "123456";
$dbname = "member_register";

// Veritabanı bağlantısını oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Kullanıcı adı ve şifresini alın
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kullanıcı adı ve şifresini veritabanından kontrol etmek için sorgu hazırlama
    $sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Giriş başarılı ise kullanıcıyı settings.php sayfasına yönlendirme

        // Bildirim mesajı gösterme için değişken tanımlama
        $message = "Giriş başarılı. Yönlendiriliyorsunuz...";

        // Yönlendirme için JavaScript kullanımı
        echo '<script>
                setTimeout(function() {
                    var messageElement = document.createElement("div");
                    messageElement.className = "alert-message";
                    messageElement.textContent = "' . $message . '";
                    document.body.appendChild(messageElement);
                    
                    setTimeout(function() {
                        window.location.href = "settings.php";
                    }, 2000); // 2 saniye bekletme süresi
                }, 0); // 0 saniye bekletme süresi
              </script>';
    } else {
        // Giriş başarısız ise hata mesajı gösterme
        $login_error = "Kullanıcı adı veya şifre hatalı.";
    }
}

// Veritabanı bağlantısını kapatma
$conn->close();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yönetici Girişi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5; /* Creamish White */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 400px;
            border: 2px solid #4CAF50; /* Green border */
            border-radius: 10px;
            padding: 20px;
            background-color: #ffffff; /* White background */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Soft shadow */
        }
        .btn-gradient {
            background-image: linear-gradient(to right, #4CAF50, #3E8E41); /* Gradient button */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn-gradient:hover {
            background-color: #3E8E41; /* Darker shade on hover */
        }
        .alert-message {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #4CAF50; /* Green color */
            color: white;
            padding: 10px;
            border-radius: 5px;
            z-index: 9999;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h2 class="mb-4">Yönetici Girişi</h2>
        <?php if(isset($login_error)): ?>
            <div class="alert alert-danger"><?php echo $login_error; ?></div>
        <?php endif; ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="username">Kullanıcı Adı:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Şifre:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-gradient">Giriş Yap</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
