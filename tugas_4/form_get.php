<?php
$data = $_GET ?? null;
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Pendaftaran Mahasantri</title>
<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, #667eea, #764ba2);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }
    .card {
        background: #fff;
        width: 100%;
        max-width: 600px;
        padding: 25px;
        border-radius: 14px;
        box-shadow: 0 15px 40px rgba(0,0,0,.2);
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }
    label {
        font-weight: 600;
        display: block;
        margin-top: 12px;
    }
    input, select, textarea, button {
        width: 100%;
        padding: 10px;
        margin-top: 6px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 14px;
    }
    .inline {
        display: flex;
        gap: 15px;
        margin-top: 8px;
    }
    button {
        background: #667eea;
        color: #fff;
        border: none;
        margin-top: 20px;
        cursor: pointer;
    }
    button:hover {
        background: #5a67d8;
    }
    .result {
        margin-top: 25px;
        padding: 15px;
        background: #f4f6ff;
        border-radius: 10px;
    }
</style>
</head>
<body>

<div class="card">
<h2>Form Pendaftaran Mahasantri</h2>

<form method="GET">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" required>

    <label>NIM</label>
    <input type="text" name="nim" required>

    <label>Jenis Kelamin</label>
    <div class="inline">
        <label><input type="radio" name="jk" value="Laki-laki"> Laki-laki</label>
        <label><input type="radio" name="jk" value="Perempuan"> Perempuan</label>
    </div>

    <label>Program Studi</label>
    <select name="prodi">
        <option value="PPL">PPL</option>
        <option value="DM">DM</option>
    </select>

    <label>Hobi</label>
    <div class="inline">
        <label><input type="checkbox" name="hobi[]" value="Membaca"> Membaca</label>
        <label><input type="checkbox" name="hobi[]" value="Menulis"> Menulis</label>
        <label><input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga</label>
    </div>

    <label>Alamat</label>
    <textarea name="alamat"></textarea>

    <button type="submit">Daftar</button>
</form>

<?php if (!empty($_GET)): ?>
<div class="result">
    <h3>Data Pendaftaran</h3>
    <p><b>Nama:</b> <?= htmlspecialchars($_GET['nama']) ?></p>
    <p><b>NIM:</b> <?= htmlspecialchars($_GET['nim']) ?></p>
    <p><b>Jenis Kelamin:</b> <?= $_GET['jk'] ?? '-' ?></p>
    <p><b>Prodi:</b> <?= $_GET['prodi'] ?></p>
    <p><b>Hobi:</b> <?= isset($_GET['hobi']) ? implode(', ', $_GET['hobi']) : '-' ?></p>
    <p><b>Alamat:</b> <?= $_GET['alamat'] ?></p>
</div>
<?php endif; ?>

</div>
</body>
</html>
