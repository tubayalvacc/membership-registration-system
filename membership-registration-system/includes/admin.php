<?php

//--------------YÖNETİCİ PANELİ----------------


session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

require 'config.php';

$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yönetici Paneli</title>
</head>
<body>
    <h2>Yönetici Paneli</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>İsim</th>
                <th>E-posta</th>
                <th>Oluşturma Tarihi</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
                <td>
                    <a href="edit_user.php?id=<?php echo $row['id']; ?>">Düzenle</a>
                    <a href="delete_user.php?id=<?php echo $row['id']; ?>">Sil</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
