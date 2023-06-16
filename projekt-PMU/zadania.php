<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Autorzy: </title>
</head>
<body>
    <div class="container">
    <?php include('PHP_Files/task_display.php') ?>

<div class="search-area">
            <h2>Wpisz kogo chcesz wyszukać</h2>
            <form action="" method="post" id='form2'>
                <input type="text" name="search" id="search" class='salto'>
                <input type="submit" value="wyszukaj" name='submit' class='salto'>
            </form>

            <?php include('PHP_Files/search.php'); ?>
</div>

        <div class="container-zadania-2">
            <div class="dodaj-zadanie">
                <h1>Treść zadania</h1>
                <form action="PHP_Files/dodawanie_zadania.php" method="post" class="mega-formularz">
                    <input type="text" name="zadanie" id="">
                    <input type="submit" value="OK" name="zadanie-submit">
                    <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
                    <input type="submit" value="anuluj" name="zadanie-cancel">
                </form>
            </div>
        </div>
    </div>
    
    <div class="container-transfer">
        <form action="PHP_Files/transfer_task.php" method="post" id='transfer_form'>
            <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
        </form>
    </div>

            
    <script src="app.js" defer></script>
</body>
</html>