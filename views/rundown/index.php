<h2>Rundown Acara</h2>

<!-- Tombol tambah rundown -->
<p><a href="index.php?url=RundownController/create/<?= $event_id ?>">+ Tambah Sesi Rundown</a></p>
<hr>

<?php if (!empty($rundowns)): ?>
    <ul>
        <?php foreach ($rundowns as $r): ?>
            <li>
                <strong><?= $r->time ?></strong> — <?= htmlspecialchars($r->session_name) ?>
                <?php if ($r->description): ?>
                    <br><em><?= nl2br(htmlspecialchars($r->description)) ?></em>
                <?php endif; ?>
                <br>
                <a href="index.php?url=RundownController/edit/<?= $r->id ?>">Edit</a> |
                <a href="index.php?url=RundownController/delete/<?= $r->id ?>" onclick="return confirm('Yakin ingin menghapus sesi ini?')">Hapus</a>
            </li>
            <hr>
        <?php endforeach; ?>   
    </ul>
<?php else: ?>
    <p><em>Belum ada rundown untuk event ini.</em></p>
<?php endif; ?>

<!-- Tombol kembali -->
<p><a href="index.php?url=AdminController/index">← Kembali ke Daftar Event</a></p>
<link rel="stylesheet" href="aset/style.css"> 
