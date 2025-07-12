<?php include_once __DIR__ . '/../layout/header.php'; ?>

<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="d-flex align-items-center mb-4">
      <a href="index.php?url=RundownController/index/<?= $rundown->event_id ?>" class="btn btn-outline-secondary rounded-circle me-3">
        <i class="fas fa-arrow-left"></i>
      </a>
      <h2 class="mb-0 fw-bold text-primary">
        <i class="fas fa-edit me-2"></i>
        Edit Sesi: <?= htmlspecialchars($rundown->session_name) ?>
      </h2>
    </div>

    <div class="card border-0 shadow-sm rounded-3">
      <div class="card-header bg-gradient text-white py-3" style="background: linear-gradient(45deg, #f59e0b, #d97706);">
        <h5 class="card-title mb-0 text-center">
          <i class="fas fa-clipboard-check me-2"></i>
          Form Edit Sesi Rundown
        </h5>
      </div>
      
      <div class="card-body p-4">
        <form action="index.php?url=RundownController/update/<?= $rundown->id ?>" method="post">
          <input type="hidden" name="event_id" value="<?= $rundown->event_id ?>">

          <div class="mb-3">
            <label for="session_name" class="form-label fw-semibold">
              <i class="fas fa-tag text-primary me-2"></i>
              Nama Sesi
            </label>
            <input type="text" class="form-control form-control-lg rounded-pill" id="session_name" name="session_name" value="<?= htmlspecialchars($rundown->session_name) ?>" required>
          </div>

          <div class="mb-3">
            <label for="time" class="form-label fw-semibold">
              <i class="fas fa-clock text-success me-2"></i>
              Waktu
            </label>
            <input type="time" class="form-control form-control-lg rounded-pill" id="time" name="time" value="<?= $rundown->time ?>" required>
          </div>

          <div class="mb-4">
            <label for="description" class="form-label fw-semibold">
              <i class="fas fa-align-left text-info me-2"></i>
              Deskripsi
            </label>
            <textarea class="form-control form-control-lg rounded-3" id="description" name="description" rows="4"><?= htmlspecialchars($rundown->description) ?></textarea>
          </div>

          <div class="d-flex gap-3 justify-content-end">
            <a href="index.php?url=RundownController/index/<?= $rundown->event_id ?>" class="btn btn-outline-secondary btn-lg rounded-pill">
              <i class="fas fa-times me-2"></i>
              Batal
            </a>
            <button type="submit" class="btn btn-warning btn-lg rounded-pill text-white">
              <i class="fas fa-save me-2"></i>
              Update Sesi
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include_once __DIR__ . '/../layout/footer.php'; ?>