<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="button text-center my-3">
        <a href="<?= base_url('matkul'); ?>" class="btn btn-sm btn-primary p-2">Home</a>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center text-center">
        <form action="<?= base_url('Matkul/tampil_data'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode"><br>
                        <?= form_error('kode', '<small class="text-danger">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama"><br>
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit" class="my-3 btn btn-sm btn-info">
                    </td>
                </tr>
            </table>
        </form>
        </div>
    </div>
</body>

</html>