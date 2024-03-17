<?php 
    //Inkluderar allt innan body
    include("includes/html_pre.php");
    //Sidans titel
    $page_title = "Upprepningar";
    //Variablar
?>

<body>

    <?php  
        //inkluderar header med nav
        include("includes/header.php");
    ?>

    <div class=mainbox>
 
        <h3 class="margin">Inäsning av extern textfil</h3>

        <ul id=fileread>
            <?php
                //Reads the txt file line by line. The @ removes the warning if the file can't be found, 
                //källa https://code.tutsplus.com/tutorials/read-a-file-line-by-line-with-php--cms-92971 , https://thisinterestsme.com/removing-warnings-php/
                @$txt= file("txt_filer/coursers.txt"); 
                $count = 0;

                if (empty($txt)) {
                    echo "Filen kunde inte hittas"; 
                }
                else {
                    foreach($txt as $tx) {
                        echo "<li>  $tx  </li>" ;
                    }
                }
            ?>    
        </ul>
    </div>

    <?php
        //inkluderar footer
        include("includes/footer.php");
    ?>

    <?php
    //Inkluderar allt efter body
     include("includes/html_post.php");
    ?>
