<?php include_once __DIR__ . '/../layout/header.php'; ?>

<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="d-flex align-items-center mb-4">
      <a href="index.php?url=AdminController/index" class="btn btn-outline-secondary rounded-circle me-3">
        <i class="fas fa-arrow-left"></i>
      </a>
      <h2 class="mb-0 fw-bold text-primary">
        <i class="fas fa-edit me-2"></i>
        Edit Event: <?= htmlspecialchars($event->name) ?>
      </h2>
    </div>

    <div class="card border-0 shadow-sm rounded-3">
      <div class="card-header bg-gradient text-white py-3" style="background: linear-gradient(45deg, #f59e0b, #d97706);">
        <h5 class="card-title mb-0 text-center">
          <i class="fas fa-calendar-edit me-2"></i>
          Form Edit Event
        </h5>
      </div>
      
      <div class="card-body p-4">
        <form action="index.php?url=AdminController/update/<?= $event->id ?>" method="post">
          <div class="mb-3">
            <label for="name" class="form-label fw-semibold">
              <i class="fas fa-tag text-primary me-2"></i>
              Nama Event
            </label>
            <input type="text" class="form-control form-control-lg rounded-pill" id="name" name="name" value="<?= htmlspecialchars($event->name) ?>" required>
          </div>

          <div class="mb-3">
            <label for="date" class="form-label fw-semibold">
              <i class="fas fa-calendar-alt text-success me-2"></i>
              Tanggal Event
            </label>
            <input type="date" class="form-control form-control-lg rounded-pill" id="date" name="date" value="<?= $event->date ?>" required>
          </div>

          <div class="mb-3">
            <label for="location" class="form-label fw-semibold">
              <i class="fas fa-map-marker-alt text-danger me-2"></i>
              Lokasi Event
            </label>
            <input type="text" class="form-control form-control-lg rounded-pill" id="location" name="location" value="<?= htmlspecialchars($event->location) ?>" required>
          </div>

          <div class="mb-3">
            <label for="band" class="form-label fw-semibold">
              <i class="fas fa-users text-warning me-2"></i>
              Nama Band
            </label>
            <input type="text" class="form-control form-control-lg rounded-pill" id="band" name="band" value="<?= htmlspecialchars($event->band ?? '') ?>">
          </div>

          <div class="mb-3">
            <label for="songs" class="form-label fw-semibold">
              <i class="fas fa-music text-info me-2"></i>
              Daftar Lagu
            </label>
            <textarea class="form-control form-control-lg rounded-3" id="songs" name="songs" rows="4"><?= htmlspecialchars($event->songs ?? '') ?></textarea>
          </div>

          <div class="mb-4">
            <label for="youtube" class="form-label fw-semibold">
              <i class="fab fa-youtube text-danger me-2"></i>
              Link YouTube
            </label>
            <input type="url" class="form-control form-control-lg rounded-pill" id="youtube" name="youtube" value="<?= htmlspecialchars($event->youtube ?? '') ?>">
          </div>

          <div class="d-flex gap-3 justify-content-end">
            <a href="index.php?url=AdminController/index" class="btn btn-outline-secondary btn-lg rounded-pill">
              <i class="fas fa-times me-2"></i>
              Batal
            </a>
            <button type="submit" class="btn btn-warning btn-lg rounded-pill text-white">
              <i class="fas fa-save me-2"></i>
              Update Event
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include_once __DIR__ . '/../layout/footer.php'; ?>