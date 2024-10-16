



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;

        } */
    </style>
</head>
<body>
    

        
    
    <h1>

    Recommended books author
            
    </h1>   
    <ul>
        <?php foreach($filteredBooks as $book) : ?>
            
                
                <li>
                    <a href="<?= $book['URL']; ?>">
                            <?= $book['name']; ?>
                    </a> 
                </li>

        

        
        <?php endforeach ?>
    
    </ul> 
</body>
</html>