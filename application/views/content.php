<table class="table table-bordered table-dark">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($contohmhs as $cth):?>
        <tr>
            <td scope="row"><?php echo $cth['id'];  ?></td>
            <td><?php echo $cth['nama'];  ?></td>
            <td><?php echo $cth['nim'];  ?></td>
            <td><?php echo $cth['alamat'];  ?></td>
        </tr>
    <?php endforeach;  ?>
    </tbody>
</table>