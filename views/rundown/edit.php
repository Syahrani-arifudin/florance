<h2>Edit Sesi Rundown</h2>

<form action="index.php?url=RundownController/update/<?= $rundown->id ?>" method="POST">
    <input type="hidden" name="event_id" value="<?= $rundown->event_id ?>">

    <label>Nama Sesi:</label><br>
    <input type="text" name="session_name" value="<?= htmlspecialchars($rundown->session_name) ?>" required><br><br>

    <label>Waktu:</label><br>
    <input type="time" name="time" value="<?= $rundown->time ?>" required><br><br>

    <label>Deskripsi:</label><br>
    <textarea name="description"><?= htmlspecialchars($rundown->description) ?></textarea><br><br>

    <button type="submit">Simpan Perubahan</button>
</form>

<p><a href="index.php?url=RundownController/index/<?= $rundown->event_id ?>">← Kembali</a></p>

<link rel="stylesheet" href="aset/style.css"> 