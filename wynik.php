<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik quizu</title>
</head>
<body>
    <?php
        $suma=0;
        foreach($_POST as $key=>$value)
        { 
            $suma=$suma+$value;
        }
        echo "Suma zdobytych punktów=$suma"
    ?>
</body>
</html>