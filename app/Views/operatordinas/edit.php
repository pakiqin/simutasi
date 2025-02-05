<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <h1 class="mb-4"><i class="fas fa-fw fa-user"></i> Edit Operator Dinas</h1>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>

    <form action="/operatordinas/update/<?= $user['id'] ?>" method="post">
        <div class="row">
            <!-- Bagian Kiri -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="nama">Nama Lengkap</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $user['nama'] ?>" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                        <input type="text" name="username" id="username" class="form-control" value="<?= $user['username'] ?>" placeholder="Masukkan Username" readonly>
                    </div>
                    <small class="text-muted">Username tidak dapat diubah.</small>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" id="email" class="form-control" value="<?= $user['email'] ?>" placeholder="Masukkan Email" required>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="no_hp">Nomor Handphone</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?= $user['no_hp'] ?>" placeholder="Masukkan Nomor Handphone" required>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Kosongkan jika tidak ingin mengganti password">
                    </div>
                    <small class="text-muted">Kosongkan jika tidak ingin mengganti password</small>
                </div>
                <div class="form-group mb-3">
                    <label for="status">Status</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-toggle-on"></i></span>
                        <select name="status" id="status" class="form-select">
                            <option value="enable" <?= $user['status'] === 'enable' ? 'selected' : '' ?>>Enable</option>
                            <option value="disable" <?= $user['status'] === 'disable' ? 'selected' : '' ?>>Disable</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Bagian Kanan -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="cabang_dinas">Cabang Dinas yang Dikelola</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                        <div class="form-check-container" style="width: 100%; padding-left: 10px;">
                            <?php foreach ($cabang_dinas as $cabang): ?>
                                <div class="form-check">
                                    <input 
                                        class="form-check-input" 
                                        type="checkbox" 
                                        name="cabang_dinas[]" 
                                        id="cabang_<?= $cabang['id'] ?>" 
                                        value="<?= $cabang['id'] ?>" 
                                        <?= in_array($cabang['id'], $assignedCabangIds) ? 'checked' : '' ?>
                                    >
                                    <label class="form-check-label" for="cabang_<?= $cabang['id'] ?>">
                                        <?= $cabang['nama_cabang'] ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <small class="text-muted">Pilih satu atau lebih cabang dinas.</small>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between mt-4">
            <a href="/operatordinas" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
