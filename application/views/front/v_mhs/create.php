<div class="row">
    <div class="container-fluid mx-3">
        <div class="card m-3">
            <div class="card-header">
                <h6>Tambah Data Mahasiswa</h6>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('Mahasiswa/save') ?>" method="post">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" required name="nim" id="nim" placeholder="Masukkan Kode Admin">
                    </div>
                    <div class="form-group">
                        <label for="nama_mhs">Nama Mahasiswa</label>
                        <input type="text" class="form-control" required name="nama_mhs" id="nama_mhs" placeholder="Masukkan Nama Admin">
                    </div>
                    <div class="form-group">
                        <label for="formatif">Nilai Formatif</label>
                        <input type="number" class="form-control" required name="formatif" id="formatif" placeholder="Masukkan Nilai Formatif">
                    </div>
                    <div class="form-group">
                        <label for="tugas">Nilai Tugas</label>
                        <input type="number" class="form-control" required name="tugas" id="tugas" placeholder="Masukkan Nilai Formatif">
                    </div>
                    <div class="form-group">
                        <label for="uts">Nilai UTS</label>
                        <input type="number" class="form-control" required name="uts" id="uts" placeholder="Masukkan Nilai Formatif">
                    </div>
                    <div class="form-group">
                        <label for="uas">Nilai UAS</label>
                        <input type="number" class="form-control" required name="uas" id="uas" placeholder="Masukkan Nilai Formatif">
                    </div>
                    <div class="form-group" hidden>
                        <label for="nilai_akhir">Nilai Akhir</label>
                        <input type="number" class="form-control" name="nilai_akhir" id="nilai_akhir" placeholder="Masukkan Nilai Formatif">
                    </div>
                    <div class="form-group" hidden>
                        <label for="nilai_mutu">Nilai Mutu</label>
                        <input type="number" class="form-control" name="nilai_mutu" id="nilai_mutu" placeholder="Masukkan Nilai Formatif">
                    </div>
                    <div class="form-group" hidden>
                        <label for="ket">Keterangan</label>
                        <input type="text" class="form-control" name="ket" id="ket" placeholder="Masukkan Nilai Formatif">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo site_url('Mahasiswa') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
                </form>
            </div>
        </div>
    </div>
</div>