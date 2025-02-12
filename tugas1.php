<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
    scale=1.0">
    <tilte>Form Biodata</tilte>
    <body>
    <form action="form4.html" method="POST">
        <fieldset>
            <legend><h1>Formulir Peserta </h1></legend>
        <>
            <label>Nisn :</label>
            <input type="text" name="nisn" placeholder="Masukkan 
            Nisn">
        </p>
        <p>
            <label>Nama :</label>
            <input type="text" name="nama" placeholder="masukkan nama 
            lengkap">
        </p>
        <p>
            <label>Tempat Lahir  :</label>
            <input type="text" name="tempat lahir">
        </p>
        <p>
            <label>Tanggal lahir  :</label>
            <input type="date" name="tanggal">
        </p>
        <p>
            <label>Gender  :</label>
            <input type="radio" name="jengkel" value="laki-laki">Laki-laki
            <input type="radio" name="jengkel" value="perempuan">perempuan
        </p>
        <p>
            <label>Agama  :</label>
            <select name="agama">
                <option value="budha">Budha</option>
                <option value="hindu">Hindu</option>
                <option value="islam">Islam</option>
                <option value="katholik">kristen katholik</option>
                <option value="protestan">kristen protestan</option>
                <option value="kongchucu">kongchucu</option>
            </select>
        </p> 
        <p>
            <p>Alamat  :</p>
            <textare name="alamat" cols="50" rows="10"></textare>
        </p>
        <p>
            <label>Asal Sekolah  :</label>
            <input type="text" name="asal sekolah" placeholder="Masukkan Asal Sekolah">
        </p>
        <p>
            <label>Jurusan 1  :</label>
            <select name="pilih jurusan">
                <option value="AKL">Akutansi dan Keuangan Lembaga</option>
                <option value="MPLB">Manajemen Perkantoran dan Layanan Bisnis</option>
                <option value="PM">Pemasaran</option>
                <option value="PPLG">Pengembangan Perangkat Lunak dan Gim</option>
                <option value="TJKT">Teknik Jaringan Komputer dan Telekomunikasi</option>
                <option value="DKV">Desain Komunikasi Visual</option>
                <option value="SP">Seni Pertunjukan</option>
                <option value="BCF">BrodCasting & perFilman</option>
                <option value="PH">Perhotelan</option>
                <option value="KL">Kuliner</option>
            </select>
        </p>
        <p>
            <label>Jurusan 2  :</label>
            <select name="pilih jurusan">
                <option value="AKL">Akuntasi Keuangan Lembaga</option>
                <option value="MPLB">Manajemen Perkantoran dan Layanan Bisnis</option>
                <option value="PM">Pemasaran</option>
                <option value="PPLG">Pengembangan Perangkat Lunak dan Gim</option>
                <option value="TJKT">Teknik Jaringan Komputer dan Telekomunikasi</option>
                <option value="DKV">Desain Komunikasi Visual</option>
                <option value="SP">Seni Pertunjukan</option>
                <option value="BCF">BrodCasting & PerFilman</option>
                <option value="PH">Perhotelan</option>
                <option value="KL">Kuliner</option>
            </select>
        </p>
        <>
            <label>Ekstrakulikuler:</label>
           <input type="checkbox" name="osis">Osis
           <input type="checkbox" name="pramuka">Pramuka
           <input type="checkbox" name="pencinta alam">Pencinta Alam
           <input type="checkbox" name="remas al-kautsar">Remas Al-Kautsar
           <input type="checkbox" name="uks/pmr">Uks/Pmr        
           <input type="checkbox" name="fustal">Fustal
           <input type="checkbox" name="basket">Basket
           <input type="checkbox" name="voli">Voli
           <input type="checkbox" name="teater kusuma">Teater Kusuma
           <input type="checkbox" name="laskar hijau">Laskar Hijau
           <input type="checkbox" name="gerakan displin sekolah">Gerakan Displin Sekolah
        </p>
        <p>
            <input type="submit" name="submit" value="Daftar">
        </p>
    </fieldset>
</form>
</body>
</html>