

<!DOCTYPE html>

<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Üye Kayıt Sistemi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Bootstrap CSS dosyasını burada bağlıyoruz -->
    <link rel="stylesheet" href="css/styles.css"> <!-- Kendi CSS dosyanızı burada bağlayabilirsiniz -->
    <style>
        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298, #a1c4fd, #c2e9fb);
            font-family: 'Arial', sans-serif;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .custom-card {
            background: linear-gradient(135deg, #ececec, #ffffff);
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            color: #333;
        }
        .custom-card:hover {
            transform: scale(1.05);
        }
        .custom-card .btn {
            border-radius: 25px;
            padding: 10px 20px;
        }
        .custom-card .btn-primary {
            background: linear-gradient(135deg, #6a82fb, #fc5c7d);
            border: none;
        }
        .custom-card .btn-secondary {
            background: linear-gradient(135deg, #11998e, #38ef7d);
            border: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Üye Kayıt Sistemi</h1>
        <p class="text-center">Hoş geldiniz! Lütfen aşağıdaki bağlantılardan uygun olanı seçin:</p>
        <div class="d-flex justify-content-center mt-5">
            <div class="card custom-card m-3" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Kayıt Ol</h5>
                    <p class="card-text">Sisteme üye olmak için buraya tıklayın.</p>
                    <a href="register.php" class="btn btn-primary">Kayıt Ol</a>
                </div>
            </div>
            <div class="card custom-card m-3" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Yönetici Girişi</h5>
                    <p class="card-text">Yönetici paneline giriş yapmak için buraya tıklayın.</p>
                    <a href="login.php" class="btn btn-secondary">Yönetici Girişi</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
