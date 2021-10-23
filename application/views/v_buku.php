<div class="container card p-3">
    <div class="judul text-center">
        <h4><?= $title; ?></h4>
    </div>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <?php foreach($columns as $c1): ?>
                <th><?= ucwords($c1); ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach($buku as $b): ?>
            <tr>
                <?php foreach($columns as $c2) :?>
                    <td><?= $b[$c2]; ?></td>
                <?php endforeach ?>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>