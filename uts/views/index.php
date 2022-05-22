<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uts</title>
</head>

<body> 
    <?php echo validation_errors();?>
    <?php echo form_open ('from');?>
    <header>
        <h2>formulir pendaftaran tiket nobar liverpool fc</h2>
    </header>
    <main>
        <form>
            <h4> Nama </h4>
            <input type="text" name="Nama" value="" size="45" />
            <h4> No Anggota </h4>
            <input type="number" name="No Anggota" value="" size="45" />
            <h4> No telepon </h4>
            <input type="number" name="No Telepon" value="" size="45" />
            <div><input type="submit" value="Submit" /></div>
        </form>
    </main>
</body>

</html>