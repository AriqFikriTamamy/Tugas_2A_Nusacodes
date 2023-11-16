<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 Nusacodes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'calculator.php' ?>
    <div class="calculator">
        <h1 class="title">Kalkulator</h1>
        <form action="" method="post">
            <input type="number" name="number1" class="number" placeholder="Masukkan bilangan pertama"
                autocomplete="off">
            <select name="operation" class="operation">
                <option value="plus">+</option>
                <option value="minus">-</option>
                <option value="cross">*</option>
                <option value="divide">/</option>
            </select>
            <input type="number" name="number2" class="number" placeholder="Masukkan bilangan kedua" autocomplete="off">
            <input type="submit" value="Hitung" name="count" class="button">
        </form>
        <?php if (isset($_POST["count"])) { ?>
            <input type="number" value="<?php echo $result; ?>" class="number">
        <?php } else { ?>
            <input type="text" value="0" class="number" name="result">
        <?php } ?>
    </div>
</body>

</html>