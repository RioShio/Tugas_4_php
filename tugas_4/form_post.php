<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nilai = (int)$_POST['nilai'];
    $status = $nilai < 70 ? "TIDAK LULUS" : "LULUS";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Penilaian Mahasantri</title>
<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, #43cea2, #185a9d);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }
    .card {
        background: #fff;
        width: 100%;
        max-width: 500px;
        padding: 25px;
        border-radius: 14px;
        box-shadow: 0 15px 40px rgba(0,0,0,.2);
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    label {
        font-weight: 600;
        display: block;
        margin-top: 12px;
    }
    input, select, button {
        width: 100%;
        padding: 10px;
        margin-top: 6px;
        border-radius: 8px;
        border: 1px solid #ccc;
    }
    button {
        background: #185a9d;
        color: #fff;
        border: none;
        margin-top: 20px;
        cursor: pointer;
    }
    .result {
        margin-top: 25px;
        padding: 15px;
        background: #f0f7ff;
        border-radius: 10px;
    }
    .fail {
        color: red;
        font-weight: bold;
    }
    .pass {
        color: green;
        font-weight: bold;
    }
</style>
</head>
<body>

<div class="card">
<h2>Form Penilaian Mahasantri</h2>

<form method="POST">
    <label>Username</label>
    <input type="text" name="username" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <label>Mata Kuliah</label>
    <select name="matkul">
        <option value="PPL">PPL</option>
        <option value="DM">DM</option>
    </select>

    <label>Nilai</label>
    <input type="number" name="nilai" required>

    <button type="submit">Submit Nilai</button>
</form>

<?php if (isset($status)): ?>
<div class="result">
    <p><b>Username:</b> <?= $_POST['username'] ?></p>
    <p><b>Mata Kuliah:</b> <?= $_POST['matkul'] ?></p>
    <p><b>Nilai:</b> <?= $nilai ?></p>
    <p><b>Status:</b>
        <span class="<?= $status === 'LULUS' ? 'pass' : 'fail' ?>">
            <?= $status ?>
        </span>
    </p>
</div>
<?php endif; ?>

</div>
</body>
</html>
