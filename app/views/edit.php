<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
</head>
<body>
    <div class="welcome">
        <h1>Edit Mata Ajar</h1>
        <form method="post" action="<?php echo URL::to('/mataajar/doupdate'); ?>"/>
            <?php foreach ($data as $dt){ ?>
            <input type="hidden" name="id_mataajar" value="<?php echo $dt->id_mataajar; ?>"/>
            Nama Mata Ajar : <input type="text" name="nama_mataajar" value="<?php echo $dt->nama_mataajar; ?>" />
            <?php } ?>
            <input type="submit" name="submit" value="submit"/>
        </form>
    </div>
</body>
</html>
