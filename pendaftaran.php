<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Ulang SMK "Pasti Bisa"</title>
</head>
<body style="font-family: Arial; margin: 30px;">
    <h2>Pendaftaran Ulang SMK "Pasti Bisa"</h2>

    <form id="formBiaya">
        <label>Nama Siswa:</label><br>
        <input type="text" id="nama" required><br><br>

        <label>Nomor Induk:</label><br>
        <input type="text" id="nis" required><br><br>

        <label>Kelas (1-3):</label><br>
        <input type="number" id="kelas" min="1" max="3" required><br><br>

        <button type="button" onclick="hitungBiaya()">Hitung Biaya</button>
    </form>

    <hr>

    <!-- Bagian rincian biaya disembunyikan dulu -->
    <div id="rincian" style="display: none;">
        <h3>Rincian Biaya</h3>
        <div id="output"></div>
    </div>

    <script>
        function hitungBiaya() {
            let nama = document.getElementById("nama").value.trim();
            let nis = document.getElementById("nis").value.trim();
            let kelas = parseInt(document.getElementById("kelas").value);

            // Cek agar semua form terisi
            if (nama === "" || nis === "" || isNaN(kelas)) {
                alert("Harap isi semua data dengan benar!");
                return;
            }

            let uangGedung = 0, spp = 0, seragam = 0;

            // Struktur CASE OF (switch)
            switch (kelas) {
                case 1:
                    uangGedung = 800000;
                    spp = 90000;
                    seragam = 125000;
                    break;
                case 2:
                    uangGedung = 500000;
                    spp = 75000;
                    seragam = 100000;
                    break;
                case 3:
                    uangGedung = 500000;
                    spp = 75000;
                    seragam = 100000;
                    break;
                default:
                    document.getElementById("rincian").style.display = "none";
                    alert("Kelas tidak valid!");
                    return;
            }

            let total = uangGedung + spp + seragam;

            // Tampilkan rincian biaya
            document.getElementById("rincian").style.display = "block";
            document.getElementById("output").innerHTML = `
                <p><b>Nama Siswa:</b> ${nama}</p>
                <p><b>Nomor Induk:</b> ${nis}</p>
                <p><b>Kelas:</b> ${kelas}</p>
                <hr>
                <p>Uang Gedung: Rp${uangGedung.toLocaleString()}</p>
                <p>SPP Bulan Juli: Rp${spp.toLocaleString()}</p>
                <p>Seragam: Rp${seragam.toLocaleString()}</p>
                <hr>
                <p><b>Total Biaya: Rp${total.toLocaleString()}</b></p>
            `
        }
    </script>
</body>
</html>
