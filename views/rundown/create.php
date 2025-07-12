<h2>Tambah Sesi Rundown</h2>

<form action="index.php?url=RundownController/store" method="POST">
    <input type="hidden" name="event_id" value="<?= htmlspecialchars($event_id) ?>">

    <label>Nama Sesi:</label><br>
    <input type="text" name="session_name" required><br><br>

    <label>Waktu:</label><br>
    <input type="time" name="time" required><br><br>

    <label>Deskripsi:</label><br>
    <textarea name="description"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>

<p><a href="index.php?url=RundownController/index/<?= htmlspecialchars($event_id) ?>">← Kembali</a></p>

<link rel="stylesheet" href="aset/style.css"> 