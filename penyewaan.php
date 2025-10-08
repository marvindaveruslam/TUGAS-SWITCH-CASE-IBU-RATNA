<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program Sewa Mobil</title>
</head>
<body style="font-family: Arial; margin: 30px;">

    <h2>Program Sewa Mobil</h2>
    <form method="post" action="">
        <label>Nama Penyewa:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Pilih Jenis Mobil:</label><br>
        <select name="mobil" required>
            <option value="">-- Pilih Mobil --</option>
            <option value="Avanza">Avanza</option>
            <option value="Xenia">Xenia</option>
            <option value="Innova">Innova</option>
            <option value="Alphard">Alphard</option>
            <option value="Fortuner">Fortuner</option>
        </select><br><br>

        <label>Lama Sewa (hari):</label><br>
        <input type="number" name="lama" min="1" required><br><br>

        <button type="submit" name="hitung">Hitung Biaya</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $mobil = $_POST['mobil'];
        $lama = $_POST['lama'];

        $biaya_sewa = 0;
        $asuransi = 0;

        // Struktur CASE OF (switch)
        switch ($mobil) {
            case "Avanza":
            case "Xenia":
                $biaya_sewa = 300000;
                $asuransi = 15000;
                break;
            case "Innova":
                $biaya_sewa = 500000;
                $asuransi = 25000;
                break;
            case "Alphard":
                $biaya_sewa = 750000;
                $asuransi = 30000;
                break;
            case "Fortuner":
                $biaya_sewa = 700000;
                $asuransi = 25000;
                break;
            default:
                echo "<b>Jenis mobil tidak valid!</b>";
                exit;
        }

        $total = ($biaya_sewa * $lama) + $asuransi;

        echo "<h3>Rincian Sewa Mobil</h3>";
        echo "Nama Penyewa : $nama <br>";
        echo "Jenis Mobil  : $mobil <br>";
        echo "Lama Sewa    : $lama hari <br><br>";

        echo "Biaya Sewa per Hari : Rp " . number_format($biaya_sewa, 0, ',', '.') . "<br>";
        echo "Biaya Asuransi      : Rp " . number_format($asuransi, 0, ',', '.') . "<br><hr>";
        echo "<b>Total Bayar       : Rp " . number_format($total, 0, ',', '.') . "</b>";
    }
    ?>

</body>
</html>