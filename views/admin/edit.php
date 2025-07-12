<h2>Edit Event: <?= htmlspecialchars($event->name) ?></h2>
<form action="index.php?url=AdminController/update/<?= $event->id ?>" method="post">
    <label>Nama Event:</label><br>
    <input type="text" name="name" value="<?= htmlspecialchars($event->name) ?>" required><br><br>

    <label>Tanggal:</label><br>
    <input type="date" name="date" value="<?= $event->date ?>" required><br><br>

    <label>Lokasi:</label><br>
    <input type="text" name="location" value="<?= htmlspecialchars($event->location) ?>" required><br><br>

    <label>Nama Band:</label><br>
    <input type="text" name="band" value="<?= htmlspecialchars($event->band ?? '') ?>"><br><br>

    <label>Daftar Lagu:</label><br>
    <textarea name="songs" rows="4"><?= htmlspecialchars($event->songs ?? '') ?></textarea><br><br>

    <label>Link YouTube:</label><br>
    <input type="text" name="youtube" value="<?= htmlspecialchars($event->youtube ?? '') ?>"><br><br>


    <button type="submit">Update</button>
</form>
<a href="index.php?url=AdminController/index">Kembali</a>
<link rel="stylesheet" href="aset/style.css"> 