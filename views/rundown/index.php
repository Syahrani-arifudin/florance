<?php include_once __DIR__ . '/../layout/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div class="d-flex align-items-center">
        <a href="index.php?url=AdminController/index" class="btn btn-outline-secondary rounded-circle me-3">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="h3 mb-0 text-gray-800">
            <i class="fas fa-clipboard-list me-2 text-primary"></i>
            Rundown Acara
        </h1>
    </div>
    <a href="index.php?url=RundownController/create/<?= $event_id ?>" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>
        Tambah Sesi Rundown
    </a>
</div>

<?php if (!empty($rundowns)): ?>
    <div class="row">
        <?php foreach ($rundowns as $index => $r): ?>
            <div class="col-12 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <div class="text-center">
                                    <div class="badge bg-primary fs-6 p-3 rounded-circle">
                                        <?= $index + 1 ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="text-center text-md-start">
                                    <h5 class="text-primary mb-0">
                                        <i class="fas fa-clock me-2"></i>
                                        <?= date('H:i', strtotime($r->time)) ?>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h6 class="card-title mb-1 fw-bold">
                                    <?= htmlspecialchars($r->session_name) ?>
                                </h6>
                                <?php if ($r->description): ?>
                                    <p class="card-text text-muted mb-0">
                                        <?= nl2br(htmlspecialchars($r->description)) ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-3">
                                <div class="btn-group w-100" role="group">
                                    <a href="index.php?url=RundownController/edit/<?= $r->id ?>" 
                                       class="btn btn-outline-warning btn-sm">
                                        <i class="fas fa-edit me-1"></i>
                                        Edit
                                    </a>
                                    <a href="index.php?url=RundownController/delete/<?= $r->id ?>" 
                                       class="btn btn-outline-danger btn-sm"
                                       onclick="return confirm('Yakin ingin menghapus sesi ini?')">
                                        <i class="fas fa-trash me-1"></i>
                                        Hapus
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <div class="text-center py-5">
        <div class="mb-4">
            <i class="fas fa-clipboard text-muted" style="font-size: 4rem;"></i>
        </div>
        <h4 class="text-muted mb-3">Belum ada rundown</h4>
        <p class="text-muted mb-4">Mulai dengan menambahkan sesi rundown pertama untuk event ini</p>
        <a href="index.php?url=RundownController/create/<?= $event_id ?>" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>
            Tambah Sesi Rundown Pertama
        </a>
    </div>
<?php endif; ?>

<?php include_once __DIR__ . '/../layout/footer.php'; ?>