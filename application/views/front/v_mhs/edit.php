<div class="row">
    <div class="container-fluid mx-3">
        <div class="card m-3">
            <div class="card-header">
                <h6>Edit Data Mahasiswa</h6>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('Mahasiswa/update/' . $edit['nim']) ?>" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control" name="nim" value="<?php echo $edit['nim'] ?>" id="nim" placeholder="Masukkan NIM" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama_mhs">Nama Mahasiswa</label>
                                <input type="text" class="form-control" name="nama_mhs" value="<?php echo $edit['nama_mhs'] ?>" id="nama_mhs" placeholder="Masukkan Nama Mahasiswa" required>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formatif">Nilai Formatif</label>
                                <input type="number" class="form-control" name="formatif" value="<?php echo $edit['formatif'] ?>" id="formatif" placeholder="Masukkan Nilai Formatif" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="tugas">Nilai Tugas</label>
                                <input type="number" class="form-control" name="tugas" value="<?php echo $edit['tugas'] ?>" id="tugas" placeholder="Masukkan Nilai Formatif" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="uts">Nilai UTS</label>
                                <input type="number" class="form-control" name="uts" value="<?php echo $edit['uts'] ?>" id="uts" placeholder="Masukkan Nilai Formatif" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="uas">Nilai UAS</label>
                                <input type="number" class="form-control" name="uas" value="<?php echo $edit['uas'] ?>" id="uas" placeholder="Masukkan Nilai Formatif" required>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-4" hidden>
                            <label for="nilai_akhir">Nilai Akhir</label>
                            <input type="number" class="form-control" name="nilai_akhir" value="<?php echo $edit['nilai_akhir'] ?>" id="nilai_akhir" placeholder="Masukkan Nilai Formatif">
                        </div>
                        <div class="form-group col-4" hidden>
                            <label for="nilai_mutu">Nilai Mutu</label>
                            <input type="number" class="form-control" name="nilai_mutu" value="<?php echo $edit['nilai_mutu'] ?>" id="nilai_mutu" placeholder="Masukkan Nilai Formatif">
                        </div>
                        <div class="form-group col-4" hidden>
                            <label for="ket">Keterangan</label>
                            <input type="text" class="form-control" name="ket" value="<?php echo $edit['ket'] ?>" id="ket" placeholder="Masukkan Nilai Formatif">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Perbaharui</button>
                    <a href="<?php echo site_url('Mahasiswa') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
                </form>
            </div>
        </div>
    </div>
</div>