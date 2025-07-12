
<h2>Tambah Event Baru</h2>

<form action="index.php?url=AdminController/store" method="post">
    <label>Nama Event:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Tanggal:</label><br>
    <input type="date" name="date" required><br><br>

    <label>Lokasi:</label><br>
    <input type="text" name="location" required><br><br>

    <label>Nama Band:</label><br>
    <input type="text" name="band"><br><br>

    <label>Daftar Lagu (boleh lebih dari satu baris):</label><br>
    <textarea name="songs" rows="4" cols="40"></textarea><br><br>

    <label>Link YouTube Lagu:</label><br>
    <input type="text" name="youtube"><br><br>

    <button type="submit">Simpan</button>
    <a href="index.php?url=AdminController/index"><button>batal</button></a>
</form>
<p><a href="index.php?url=AdminController/index">Kembali ke Daftar Event</a></p>
<link rel="stylesheet" href="aset/style.css"> 
<?php include_once __DIR__ . '/../layout/footer.php'; ?>