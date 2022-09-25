    <?php
    //SIMILAR AL 04
        function showTableDefault(){
            require './templates/header.php';
            $mult = 4;
            for($i=1;$i<=$mult;$i++){
                echo "<tr>";
                for($j=1;$j<=$mult;$j++){
    
                    if($i == $j || ($i*$j)==$i || ($i*$j)==$j){
                        echo "<td class='colorear'>". $i * $j . "</td>" ;//td
                    }
                    else{
                        echo "<td>". $i * $j . "</td>" ;//td
    
                    }


                    
                }
                echo "<tr>";
            }

            require './templates/footer.php';
        }
        
        function showTableOf(){
            require './templates/header.php';

            $mult = $_GET['limiteTabla'];
            for($i=1;$i<=$mult;$i++){
                echo "<tr>";
                for($j=1;$j<=$mult;$j++){
    
                    if($i == $j || ($i*$j)==$i || ($i*$j)==$j){
                        echo "<td class='colorear'>". $i * $j . "</td>" ;//td
                    }
                    else{
                        echo "<td>". $i * $j . "</td>" ;//td
    
                    }


                    
                }
                echo "<tr>";
            }

            require './templates/footer.php';
        }

    //     if(!empty($_GET['limiteTabla'])){
    //         $mult = $_GET['limiteTabla'];
    //         for($i=1;$i<=$mult;$i++){
    //             echo "<tr>";
    //             for($j=1;$j<=$mult;$j++){
    
    //                 if($i == $j || ($i*$j)==$i || ($i*$j)==$j){
    //                     echo "<td class='colorear'>". $i * $j . "</td>" ;//td
    //                 }
    //                 else{
    //                     echo "<td>". $i * $j . "</td>" ;//td
    
    //                 }


                    
    //             }
    //             echo "<tr>";
    //         }
    //     }else{
    //         echo "Formulario vacio";
    //     }
    // ?>

    