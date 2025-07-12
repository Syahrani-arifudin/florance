<?php include_once __DIR__ . '/../layout/header.php'; ?>
<h1>Daftar Semua Event</h1>

<!-- Tombol tambah event baru -->
<p><a href="index.php?url=AdminController/create">+ Tambah Event Baru</a></p>
<hr>

<?php if (!empty($events)): ?>
    <?php foreach ($events as $event): ?>
        <div style="margin-bottom: 20px;">
            <p>
                <!-- Tampilkan info event satu per satu -->
                <strong>Nama Event:</strong> <?= htmlspecialchars($event->name) ?><br>
                <strong>Tanggal:</strong> <?= htmlspecialchars($event->date) ?><br>
                <strong>Lokasi:</strong> <?= htmlspecialchars($event->location) ?><br>
                <strong>Band:</strong> <?= htmlspecialchars($event->band ?: '-') ?><br>
                <strong>Daftar Lagu:</strong><br>
                <!-- Tampilkan lagu, tetap rapi walau ada enter -->
                <?= nl2br(htmlspecialchars($event->songs ?: '-')) ?><br>
                <strong>Link YouTube:</strong><br>
                <!-- Kalau ada link, tampilkan sebagai tautan -->
                <?php if (!empty($event->youtube)): ?>
                    <a href="<?= htmlspecialchars($event->youtube) ?>" target="_blank">
                        <?= htmlspecialchars($event->youtube) ?>
                    </a>
                <?php else: ?>
                    Tidak ada link.
                <?php endif; ?>
            </p>

            <!-- Tombol edit, hapus, dan buka halaman rundown -->
            <p>
                <a href="index.php?url=AdminController/edit/<?= $event->id ?>">✏️ Edit</a> |
                <a href="index.php?url=AdminController/delete/<?= $event->id ?>" onclick="return confirm('Yakin ingin menghapus event ini?')">🗑 Hapus</a> |
                <a href="index.php?url=RundownController/index/<?= $event->id ?>">📋 Kelola Rundown</a>
            </p>
            <hr>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <!-- Kalau belum ada event -->
    <p>Belum ada event yang ditambahkan.</p>
<?php endif; ?>

