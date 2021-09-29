<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <title>Kelompok 1 | WP II</title>
</head>

<body>
    <h1 class="text-center mt-3">Kelompok 1 <br>Web Programing II</h1>
    <div class="container">
        <table class="table table-bordered border-dark">
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Username Github</th>
                    <th>mengerjakan</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach ($data as $data_kelompok) ?>
                <tr>
                    <td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>





    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>