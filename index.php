<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;

        }
    </style>
</head>
<body>
    <h1>
        <?php 
            $name = "Dark Matter";
            $read = false;
            if($read){
                $message = "You have read $name";
            }else{
                $message = "You havent read anything";
            }          
        ?>
        <h1>
             <?php 

            echo $message;
            
            ?>
            <?= $message ?>
        </h1>
    </h1>    
</body>
</html>