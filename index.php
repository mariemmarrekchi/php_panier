<?php
    session_start();
    $produit=array(array("id"=>0,"des"=>"nike1","prix"=>200,"image"=>"assets/item-14.jpg"),
    array("id"=>1,"des"=>"nike3","prix"=>300,"image"=>"assets/item-13.jpg"),
    array("id"=>3,"des"=>"nike2","prix"=>250,"image"=>"assets/item-11.jpg"))
    ;
    //test session cart vide ou non pour création array
    if(empty($_SESSION['cart']))
    {
        $_SESSION['cart']=array();	

         $_SESSION['prix']=array();
        $_SESSION['des']=array();	
    }
        //test id dess prix vide ou non pour remplir tableau session

    if(isset($_GET['id']) && isset($_GET['dess'] )&& isset($_GET['prix'])) {
        array_push($_SESSION['cart'],$_GET['id']);
        array_push($_SESSION['des'],$_GET['dess']);
        array_push($_SESSION['prix'],$_GET['prix']);
    }

?>
   
   <!doctype html>
    <html>
        <head>
            <meta charset="utf-8"/>
        </head>
        <body>
            <header>
                <img src="assets/icone.png" width="50px" height="50px"/><span> <?php if (isset($_SESSION['des'])){echo sizeof($_SESSION['des']);} ?></span>
            </header>
            <main>
                <table>
                    <tr>
                    <?php
                      foreach ($produit as $key => $value) {
                        echo "<td>".$value['des']."</td>"; 

                    }?>
                    </tr>
                    <tr>
                    <?php
                      foreach ($produit as $key => $value) {
                       ?>
                       <td> <img src="<?php echo $value['image']?>" width="80px"/>
                            <p><?php echo $value['prix']?></p>
                            <p><a href="index.php?id=<?php echo $value['id']?>&prix=<?php echo $value['prix']?>&dess=<?php echo $value['des']?>"><button  > ajouter panier </buutton> </a>
                            </p>
                    </td>
                       <?php

                    }?>
                    </tr>
                </table>

                    <a href ="add_cart.php"><button>vider panier</button></a>
                   

           
            </main>
        </body>

    </html>