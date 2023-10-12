
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <div>
            <label>Check your number</label>
        </div>
        <div>
            <input type="text" name="number">
        </div>
    </form>


    
    <?php
    if(!($_GET["number"] == "")){
        if(is_numeric($_GET["number"])){
            include "php/checker.php";
        }
        else{
            echo "<h2>Please input number</h2>";
        }
    }
    else{
        echo "<h2>No input</h2>";
    }
    ?>

</body>
</html>
