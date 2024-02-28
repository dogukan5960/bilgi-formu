<!DOCTYPE html>
<html>
<head>
    <title>Form Gönderildi</title>
</head>
<body>
    <h1>Form Gönderildi</h1>
    <p>Form verileri başarıyla alındı.</p>
    <?php
    // Form verilerini alma
    $kimlikNo = $_POST["tc"];
    $adSoyad = $_POST["adSoyad"];
    $yas = $_POST["yas"];
    $mail = $_POST["ePosta"];
    $yazilimDili = $_POST["pDil"];
    $yazilimGirisTarihi = $_POST["tarih"];
    $deneyimYili = $_POST["deneyim"];
    

    // Dosya yükleme
    $uploadDir = "uploads/";
    $fileName = basename($_FILES["foto"]["name"]);
    $targetFilePath = $uploadDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    // Sadece resim dosyalarını kabul et
    $allowedTypes = array("jpg", "jpeg", "png", "gif");
    if (in_array($fileType, $allowedTypes)) {
        // Dosya yükleme
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFilePath)) {
            echo "Fotoğraf başarıyla yüklendi.";
        } else {
            echo "Fotoğraf yüklenirken bir hata oluştu.";
        }
    } else {
        echo "Sadece JPG, JPEG, PNG & GIF dosyaları kabul edilir.";
    }

    // Verileri ekrana yazdır
    echo "<h2>Kişisel Bilgiler</h2>";
    echo "TC Kimlik: " . $kimlikNo . "<br>";
    echo "Ad Soyad: " . $adSoyad . "<br>";
    echo "Yaş: " . $yas . "<br>";
    echo "E-posta: " . $mail . "<br>";
    echo "Yazılım Dili: " . $yazilimDili . "<br>";
    echo "Yazılıma Giriş Tarihi: " . $yazilimGirisTarihi . "<br>";
    echo "Deneyim Yılı: " . $deneyimYili . "<br>";
    echo "Programlama Dilleri: " . $programlamaDilleri . "<br>";
    echo "<br>";
    echo "<h2>Fotoğraf</h2>";
    echo "<img src='" . $targetFilePath . "' alt='Fotoğraf' height='200'>";
    ?>
</body>
</html>