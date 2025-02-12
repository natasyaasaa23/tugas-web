<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji Bersih</title>
</head>
<body>
    <h2>Hitung Gaji Bersih Karyawan</h2>
    <form id="salaryForm">
        <label>Nama: </label>
        <input type="text" id="nama" required><br><br>

        <label>Divisi: </label>
        <input type="text" id="divisi" required><br><br>

        <label>Gaji Bulanan (Rp): </label>
        <input type="number" id="gajiBulanan" required><br><br>

        <label>Memiliki NPWP?</label>
        <input type="radio" name="npwp" value="ya" required> Ya
        <input type="radio" name="npwp" value="tidak" required> Tidak<br><br>

        <button type="button" onclick="hitungGaji()">Hitung</button>
    </form>

    <h3>Hasil Perhitungan:</h3>
    <p id="hasil"></p>

    <script>
        function hitungGaji() {
            let nama = document.getElementById("nama").value;
            let divisi = document.getElementById("divisi").value;
            let gajiBulanan = parseFloat(document.getElementById("gajiBulanan").value);
            let npwp = document.querySelector('input[name="npwp"]:checked').value;

            let gajiTahunan = gajiBulanan * 12;
            let pajak = 0;
            let gajiBersihTahunan = gajiTahunan;
            let gajiBersihBulanan = gajiBulanan;

            if (gajiTahunan > 54000000) {
                let tarifPajak = npwp === "ya" ? 0.15 : 0.20;
                pajak = gajiTahunan * tarifPajak;
                gajiBersihTahunan -= pajak;
                gajiBersihBulanan = gajiBersihTahunan / 12;
            }

            document.getElementById("hasil").innerHTML = `
                <strong>Nama:</strong> ${nama}<br>
                <strong>Divisi:</strong> ${divisi}<br>
                <strong>Gaji Tahunan (Rp):</strong> ${gajiTahunan.toLocaleString()}<br>
                <strong>Pajak (Rp):</strong> ${pajak.toLocaleString()}<br>
                <strong>Gaji Bersih Perbulan (Rp):</strong> ${gajiBersihBulanan.toLocaleString()}<br>
            `;
        }
    </script>
</body>
</html>