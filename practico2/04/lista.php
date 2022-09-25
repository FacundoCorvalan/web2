<?php   
    function createList(){
        $items=[];
        $topeMax=200;
        /* Creating an array with 200 items. */
        for($i = 1; $i<=$topeMax;$i++){
            array_push($items, $i);
        }

        return $items;
    }



    function getItems(){
        require './templates/header.php';
        echo "Get items";
        /* Creating an array with 200 items. */
        $items = createList();
        foreach($items as $item){
            echo "<li> item $item </li>";
        }
        if(isset($_GET['verTodos'])){
        }

        require './templates/footer.php';

    }

    function getCant($cant){

        require './templates/header.php';
        echo "get cant";
        $items = createList();
        for($i = 0; $i<$cant;$i++){
            echo "<li> item $items[$i] </li>";
        }

        require './templates/footer.php';

    }

    //     require 'templates/header.php';
        
    //     /* Checking if the variable `cant` is set in the URL. If it is, it will loop through the array
    //     and print the first `cant` items. */
    //     if(isset($_GET['cant'])){
            
    //     }
        

    //     require 'templates/footer.php';
    
    // ?>
   

