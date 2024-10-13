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
    <?php
       $books= [
        [
            'name'=>'Book 1',
            'author'=>'john cena',
            'releaseYear'=>1968,
            'URL'=>'johncena@example.com'
        ],
        [
            'name'=>'Book 2',
            'author'=>'batista',
            'releaseYear'=>1969,
            'URL'=>'batista@example.com'
        ]

        ];

        function filter($items,$fn){
            $filteredArray = [];
            foreach($items as $item){
                if($fn($item)){
                    $filteredArray[]=$item;
                }
            }

            return $filteredArray;
        }

        $filteredBooks = filter($books,function($book){
            return $book['releaseYear'] < 2000;
        });
     
    ?>

        
    
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