<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "tubamhd";
$password = "123456";
$dbname = "member_register";
$conn = new mysqli($servername, $username, $password, $dbname);

// Veritabanı bağlantı hatası kontrolü
if ($conn->connect_error) {
    die("Veritabanı bağlantı hatası: " . $conn->connect_error);
}

// Yeni kullanıcı ekleme işlemi
if (isset($_POST['add_user'])) {
    $new_username = $_POST['new_username'];
    $new_password = $_POST['new_password'];
    $new_email = $_POST['new_email'];

    $sql = "INSERT INTO users (name, password, email) VALUES ('$new_username', '$new_password', '$new_email')";

    if ($conn->query($sql) === TRUE) {
        $message = "Yeni kullanıcı başarıyla eklendi.";
        // Başarı mesajı göster ve sayfayı yenile
        echo "<meta http-equiv='refresh' content='5'>";
    } else {
        $message = "Hata: " . $sql . "<br>" . $conn->error;
    }
}

// Kullanıcı düzenleme işlemi
if (isset($_POST['edit_user'])) {
    $edit_id = $_POST['edit_id'];
    $edit_username = $_POST['edit_username'];
    $edit_password = $_POST['edit_password'];
    $edit_email = $_POST['edit_email'];

    $sql = "UPDATE users SET name='$edit_username', password='$edit_password', email='$edit_email' WHERE id='$edit_id'";

    if ($conn->query($sql) === TRUE) {
        $message = "Kullanıcı bilgileri başarıyla güncellendi.";
        // Başarı mesajı göster ve sayfayı yenile
        echo "<meta http-equiv='refresh' content='5'>";
    } else {
        $message = "Hata: " . $sql . "<br>" . $conn->error;
    }
}

// Kullanıcı silme işlemi
if (isset($_GET['delete_user'])) {
    $delete_id = $_GET['delete_user'];

    $sql = "DELETE FROM users WHERE id='$delete_id'";

    if ($conn->query($sql) === TRUE) {
        $message = "Kullanıcı başarıyla silindi.";
        // Başarı mesajı göster ve sayfayı yenile
        echo "<meta http-equiv='refresh' content='5'>";
    } else {
        $message = "Hata: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kullanıcı Yönetimi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            padding: 20px;
        }
        .container {
            max-width: 100%; /* Ekran genişliği kadar */
            border: 2px solid #4CAF50;
            border-radius: 10px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .form-container, .list-container, .edit-container {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .form-container {
            max-width: 400px; /* Formun genişliği sınırlı */
        }
        .list-container {
            min-width: 400px; /* Liste genişliği sınırlı */
        }
        .edit-container {
            display: none; /* Düzenleme konteyneri başlangıçta gizli */
        }
        .btn-gradient {
            background-image: linear-gradient(to right, #4CAF50, #3E8E41);
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
            background-color: #3E8E41;
        }
        .btn-danger {
            background-color: #ff4d4d;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin-top: 5px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-danger:hover {
            background-color: #ff1a1a;
        }
        .list-container table {
            width: 100%;
        }
        .btn-group-sm > .btn {
            padding: 5px 10px;
            font-size: 14px;
        }
        .btn-group-sm > .btn:first-child {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h2 class="mb-4">Kullanıcı Yönetimi</h2>
        <?php if (isset($message)): ?>
            <div class="alert alert-info"><?php echo $message; ?></div>
        <?php endif; ?>
    </div>

    <div class="row justify-content-around">
        <div class="col-lg-4">
            <div class="form-container">
                <h4 class="mb-4">Yeni Kullanıcı Ekle</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="new_username">Kullanıcı Adı:</label>
                        <input type="text" id="new_username" name="new_username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="new_password">Şifre:</label>
                        <input type="password" id="new_password" name="new_password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="new_email">E-posta:</label>
                        <input type="email" id="new_email" name="new_email" class="form-control" required>
                    </div>
                    <button type="submit" name="add_user" class="btn btn-gradient btn-block">Ekle</button>
                </form>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="list-container">
                <h4 class="mb-4">Kullanıcı Listesi</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kullanıcı Adı</th>
                            <th>E-posta</th>
                            <th>İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM users";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['email']}</td>
                                    <td>
                                        <div class='btn-group btn-group-sm'>
                                            <button class='btn btn-info' onclick=\"editUser({$row['id']}, '{$row['name']}', '{$row['password']}', '{$row['email']}')\">Düzenle</button>
                                            <a href='?delete_user={$row['id']}' class='btn btn-danger'>Sil</a>
                                        </div>
                                    </td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>Kayıtlı kullanıcı yok.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="edit-container">
                <h4 class="mb-4">Kullanıcı Düzenle</h4>
                <form method="post" action="">
                    <input type="hidden" id="edit_id" name="edit_id">
                    <div class="form-group">
                        <label for="edit_username">Kullanıcı Adı:</label>
                        <input type="text" id="edit_username" name="edit_username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_password">Şifre:</label>
                        <input type="password" id="edit_password" name="edit_password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_email">E-posta:</label>
                        <input type="email" id="edit_email" name="edit_email" class="form-control" required>
                    </div>
                    <button type="submit" name="edit_user" class="btn btn-info">Kaydet</button>
                    <button type="button" class="btn btn-secondary ml-2" onclick="cancelEdit()">İptal</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function editUser(id, username, password, email) {
            document.getElementById('edit_id').value = id;
            document.getElementById('edit_username').value = username;
            document.getElementById('edit_password').value = password;
            document.getElementById('edit_email').value = email;

            // Show edit container, hide others
            document.querySelector('.form-container').style.display = 'none';
            document.querySelector('.list-container').style.display = 'none';
            document.querySelector('.edit-container').style.display = 'block';
        }

        function cancelEdit() {
            // Clear fields and hide edit container, show list container
            document.getElementById('edit_id').value = '';
            document.getElementById('edit_username').value = '';
            document.getElementById('edit_password').value = '';
            document.getElementById('edit_email').value = '';

            document.querySelector('.form-container').style.display = 'block';
            document.querySelector('.list-container').style.display = 'block';
            document.querySelector('.edit-container').style.display = 'none';
        }
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
