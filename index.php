<?php
       $books= [
        [
            'name'=>'Book 1',
            'author'=>'john cena',
            'releaseYear'=>1968,
            'URL'=>'johncena@example.com'
        ],
        [
            'name'=>'Book 2.5',
            'author'=>'batista',
            'releaseYear'=>1969,
            'URL'=>'batista@example.com'
        ],
        [
            'name'=>'Book 2',
            'author'=>'batista',
            'releaseYear'=>1970,
            'URL'=>'batista@example.com'
        ]

        ];

        // function filter($items,$fn){
        //     $filteredArray = [];
        //     foreach($items as $item){
        //         if($fn($item)){
        //             $filteredArray[]=$item;
        //         }
        //     }

        //     return $filteredArray;
        // }

        $filteredBooks = array_filter($books,function($book){
            return $book['releaseYear'] < 1970 and $book['releaseYear'] > 1968 ;
        });


require "index.view.php";
     
?>



