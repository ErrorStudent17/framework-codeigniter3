<!-- < ?php print_r($result) ?> -->
<div class="row">
    <div class="container-fluid mx-3">
        <div class="card m-3">
            <div class="card-header">
                <h6>Data Mahasiswa</h6>
            </div>
            <div class="card-body">
                Selamat Datang di Halaman Data Mahasiswa
            </div>
        </div>

        <div class="card m-3">
            <!-- <div class="card-header"> -->
            <!-- <h6>Data Mahasiswa</h6> -->
            <!-- </div> -->
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama Mahasiswa</th>
                            <th scope="col">Formatif</th>
                            <th scope="col">Tugas</th>
                            <th scope="col">UTS</th>
                            <th scope="col">UAS</th>
                            <th scope="col">Nilai Akhir</th>
                            <th scope="col">Nilai Mutu</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col"><a href="<?php echo site_url('Mahasiswa/create') ?>" class="btn btn-small btn-success btn-block">Tambah</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($read->result_array() as $data) { ?>
                            <tr>
                                <th scope="row"><?php echo $no ?></th>
                                <td><?php echo $data['nim'] ?></td>
                                <td><?php echo $data['nama_mhs'] ?></td>
                                <td><?php echo $data['formatif'] ?></td>
                                <td><?php echo $data['tugas'] ?></td>
                                <td><?php echo $data['uts'] ?></td>
                                <td><?php echo $data['uas'] ?></td>
                                <td><?php echo $data['nilai_akhir'] ?></td>
                                <td><?php echo $data['nilai_mutu'] ?></td>
                                <td><?php echo $data['ket'] ?></td>
                                <td align="center">
                                    <a href="<?php echo site_url('Mahasiswa/edit/' . $data['nim']) ?>"
                                    class="btn btn-small btn-primary">Ubah</a> |
                                    <!-- <a href="<?php echo base_url('Mahasiswa/hitungNilai/'); ?>"
                                    class="btn btn-small btn-info">Hitung</a> |  -->
                                    <a href="<?php echo site_url('Mahasiswa/delete/' . $data['nim']) ?>"
                                    onclick="javascript: return confirm('Apakah Anda ingin menghapus Data a/n <?php echo $data['nama_mhs']; ?>')"
                                    class="btn btn-small btn-danger">Hapus</a>
                                </td>
                            </tr>

                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>