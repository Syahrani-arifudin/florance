<?php include_once __DIR__ . '/../layout/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <i class="fas fa-calendar-alt me-2 text-primary"></i>
        Daftar Event
    </h1>
    <a href="index.php?url=AdminController/create" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>
        Tambah Event Baru
    </a>
</div>

<?php if (!empty($events)): ?>
    <div class="row">
        <?php foreach ($events as $event): ?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-gradient-primary text-black">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-music me-2"></i>
                            <?= htmlspecialchars($event->name) ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <p class="card-text mb-2">
                                <i class="fas fa-calendar text-primary me-2"></i>
                                <strong>Tanggal:</strong> 
                                <?= date('d M Y', strtotime($event->date)) ?>
                            </p>
                            <p class="card-text mb-2">
                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                <strong>Lokasi:</strong> 
                                <?= htmlspecialchars($event->location) ?>
                            </p>
                            <p class="card-text mb-2">
                                <i class="fas fa-users text-success me-2"></i>
                                <strong>Band:</strong> 
                                <?= htmlspecialchars($event->band ?: 'Belum ditentukan') ?>
                            </p>
                        </div>
                        
                        <?php if (!empty($event->songs)): ?>
                            <div class="mb-3">
                                <h6 class="text-muted">
                                    <i class="fas fa-list me-2"></i>
                                    Daftar Lagu:
                                </h6>
                                <div class="bg-light p-2 rounded">
                                    <small><?= nl2br(htmlspecialchars($event->songs)) ?></small>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <?php if (!empty($event->youtube)): ?>
                            <div class="mb-3">
                                <a href="<?= htmlspecialchars($event->youtube) ?>" target="_blank" 
                                   class="btn btn-sm btn-outline-danger">
                                    <i class="fab fa-youtube me-1"></i>
                                    Lihat di YouTube
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="btn-group w-100" role="group">
                            <a href="index.php?url=AdminController/edit/<?= $event->id ?>" 
                               class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-edit me-1"></i>
                                Edit
                            </a>
                            <a href="index.php?url=RundownController/index/<?= $event->id ?>" 
                               class="btn btn-outline-info btn-sm">
                                <i class="fas fa-clipboard-list me-1"></i>
                                Rundown
                            </a>
                            <a href="index.php?url=AdminController/delete/<?= $event->id ?>" 
                               class="btn btn-outline-danger btn-sm"
                               onclick="return confirm('Yakin ingin menghapus event ini?')">
                                <i class="fas fa-trash me-1"></i>
                                Hapus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <div class="text-center py-5">
        <div class="mb-4">
            <i class="fas fa-calendar-times text-muted" style="font-size: 4rem;"></i>
        </div>
        <h4 class="text-muted mb-3">Belum ada event</h4>
        <p class="text-muted mb-4">Mulai dengan menambahkan event pertama Anda</p>
        <a href="index.php?url=AdminController/create" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>
            Tambah Event Pertama
        </a>
    </div>
<?php endif; ?>

<?php include_once __DIR__ . '/../layout/footer.php'; ?>