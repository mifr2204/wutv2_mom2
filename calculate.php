<?php 
    //Inkluderar allt innan body
    include("includes/html_pre.php");
    //Sidans titel
    $page_title = "Formulär";
    //Variablar
?>

<body>
    <?php  
        //inkluderar header med nav
        include("includes/header.php");
    ?>
      
    <div class=mainbox>

        <h3 class="margin">Beräkna area</h3>
        <div id=calcbox>
            <?php
                //Rounds the input 
                $rolength = round($_POST["length"]);
                $rowidth = round($_POST["width"]);
                //Calculates the area
                $area= $rolength*$rowidth;
                //Prints the input and the area 
                echo "Längden " . $rolength . " meter och bredden " . $rowidth . " meter ger en area på " . $area . " kvadratmeter" 
            ?>
        </div>

        <a class= "margin" href="formular.php">Tillbaka till föregående sida</a>
    
        <?php
            //inkluderar footer
            include("includes/footer.php");
        ?>
    </div>

    <?php
    //Inkluderar allt efter body
     include("includes/html_post.php");
    ?>
