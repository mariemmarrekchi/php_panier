    <?php
    $total=0;
    session_start();

    if( isset($_SESSION['des'])){

         //incrimentation des quantité 
        if(isset($_GET['inc']))
        array_push($_SESSION['des'],$_GET['inc']);
        $tab= array_count_values($_SESSION['des']);
        
    //   print_r($tab) ;  
    //   print_r($_SESSION['des']);

    //décrimentation des quantité 
      if(isset($_GET['dec'])){
        $key = array_search($_GET['dec'], $_SESSION['des'], true);
        //print_r($key);
        if($key !==false){
            //print_r($_SESSION['des'][$key]);
            array_splice($_SESSION['des'], $key, 1);    
        }
        
        //  print_r($tab) ;  
        //  print_r($_SESSION['des']);
         $tab= array_count_values($_SESSION['des']);
        };
    ?>

    <h2 style="text-align:center;margin-top:50px;color:lightblue">Gestion Panier et consultation </h2>
    <table style="border-spacing: 10px;margin-left:90px;margin-top:90px" border="2">
    <th>produit panier</th>
        <?php
         foreach ($tab as $key => $value) {
         echo "<th>$key</th>";
            }
        ?>
     </tr>
     <tr >
        <td>quantité</td>
        <?php
            foreach ($tab as $key => $value) {
            echo "<td> $value";
        ?>

    <p><a href="add_cart.php?inc=<?php echo $key?>"> <button>+</button></a>
    <a href="add_cart.php?dec=<?php echo $key?>"> <button>-</button></a>
    </p>
    </td>
    <?php
        }
    ?>

         </tr>
    </table>
   
   
    <?php
    }

    ?>
 <a href ="logout.php"><button>Total</button></a> 


 
 

