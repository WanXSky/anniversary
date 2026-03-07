<?php
// ================== KONFIGURASI ==================
$uploadDir = "asset/music/";
$allowedExt = ['mp3', 'wav', 'ogg'];
$maxSize = 10 * 1024 * 1024; // 10MB

// ================== PROSES UPLOAD ==================
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['music'])) {

    // pastikan folder ada
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $originalName = $_FILES['music']['name'];
    $tmpFile      = $_FILES['music']['tmp_name'];
    $fileSize     = $_FILES['music']['size'];
    $error        = $_FILES['music']['error'];

    if ($error !== UPLOAD_ERR_OK) {
        $message = "Terjadi error saat upload.";
    } else {

        $ext  = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
        $base = strtolower(pathinfo($originalName, PATHINFO_FILENAME));

        // validasi ekstensi
        if (!in_array($ext, $allowedExt)) {
            $message = "Hanya file musik (mp3, wav, ogg)";
        }
        // validasi ukuran
        elseif ($fileSize > $maxSize) {
            $message = "Ukuran maksimal 10MB";
        }
        else {

            // sanitize nama file
            $safeName = preg_replace("/[^a-z0-9_-]/", "_", $base);

            // cegah overwrite
            $finalName = $safeName;
            $counter = 1;

            while (file_exists($uploadDir . $finalName . "." . $ext)) {
                $finalName = $safeName . "_" . $counter;
                $counter++;
            }

            $target = $uploadDir . $finalName . "." . $ext;

            if (move_uploaded_file($tmpFile, $target)) {
                $message = "Upload berhasil: " . $finalName . "." . $ext;
            } else {
                $message = "Upload gagal.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Upload Lagu</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        .box { width:400px; margin:50px auto; background:#fff; padding:20px; border-radius:8px; }
        input[type=file], input[type=submit] { width:100%; margin-top:10px; }
        .msg { margin-top:15px; color:#333; }
    </style>
</head>
<body>

<div class="box">
    <h3>Upload Lagu</h3>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="music" accept=".mp3,.wav,.ogg" required>
        <input type="submit" value="Upload">
    </form>

    <?php if ($message): ?>
        <div class="msg"><?= htmlspecialchars($message) ?></div>
    <?php endif; ?>
</div>

</body>
</html>