<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>" />
    <title>Kelompok 1 | WP II</title>
</head>

<body>
    <div class="container text-center mt-3">
        <div class="border bg-primary">
            <h2>Kelompok 1 <br>Web Programing II <br> Kelas 19.3A</h2>
        </div>
        <table class="table mt-3">
            <thead class="text-center bg-secondary text-white">
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Username Github</th>
                <th>mengerjakan</th>
            </thead>
            <tbody class="text-center">
                <?php
                $no = 1;
                foreach ($kelompok1 as $data_kelompok) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data_kelompok['NIM']; ?></td>
                        <td class="text-start"><?= $data_kelompok['nama']; ?></td>
                        <td class="text-start"><?= $data_kelompok['u_github']; ?></td>
                        <td><?= $data_kelompok['mengerjakan']; ?></td>
                    </tr>
                <?php
                    $no++;
                endforeach; ?>
            </tbody>
        </table>

        <p>Click tombol di bawah</p>
        <a href="<?= base_url('matkul/form'); ?>" class="btn btn-primary">Formulir Matkul</a>
    </div>





    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>