<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <h1 class="mb-4"><i class="fas fa-fw fa-user"></i> Edit user Kabid. GTK</h1>
    <form action="/kabidgtk/update/<?= $user['id'] ?>" method="post">
        <div class="row">
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
                        <input type="text" name="username" id="username" class="form-control" value="<?= $user['username'] ?>" placeholder="Masukkan Username" required>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" id="email" class="form-control" value="<?= $user['email'] ?>" placeholder="Masukkan Email" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
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
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
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
        </div>
        <div class="d-flex justify-content-between mt-4">
            <a href="/kabidgtk" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
