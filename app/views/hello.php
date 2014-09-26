<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
</head>
<body>
    <div class="welcome">
        <h1>Input Mata Ajar</h1>
        <form method="post" action="mataajar/input"/>
            KodeBarang : <input type="text" name="kodewarna"/> <br /><br />
            WarnaBarang : <input type="text" name="warnabarang"/> <br />
            <input type="submit" name="submit" value="submit"/>
        </form>
        <br>
<table border='1'>
    <tr>
        <td>No.</td>
        <td>Nama</td>
        <td>Guru</td>
        <td>Operasi</td>
    </tr>
    <?php 
        $i =1; 
        foreach ($data as $dt){ 
    ?>
    <!-- untuk menampilkan kodewarna dan nama barang -->
    <tr>

        <td><?php echo $i; ?></td>
        <td><?php echo $dt->kodewarna; ?></td>
        <td><?php echo $dt->warnabarang; ?></td>
        <td>
            <a href="mataajar/edit/<?php echo $dt->id_mataajar; ?>">edit</a> | 
            <a href="mataajar/hapus/<?php echo $dt->id_mataajar; ?>">hapus</a>
        </td>
    </tr>
    <?php 
        $i++; 
        }
    ?>
</table>
    </div>
</body>
</html>
