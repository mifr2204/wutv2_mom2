<?php 
    //Inkluderar allt innan body
    include("includes/html_pre.php");
    //Sidans titel
    $page_title = "Upprepningar";
    $coursers= array("Webbutveckling I","Introduktion till programmering i Javascript", "Grafisk teknik för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III");

    //Variablar
?>

<body>

    <?php  
        //inkluderar header med nav
        include("includes/header.php");
    ?>

    <div class=mainbox>
    
        <h3 class=margin >Upprepningar</h3>
        <h4 class=margin >Del 1</h4>

        <div id="counter">
            <?php
            //Räknare 10 till 1 som skriver ut värderna 
            // Källa: https://www.w3schools.com/php/php_looping_for.asp
                for ($n = 10; $n >=1; $n--) {
                    echo "$n <br />";
                } 
            ?>
        </div>

        <h4 class= margin >Del 2</h4>

        <div id="coursersul">
            <P>Kurslistan i den ordning kurserna ges:</P>
            <ul>
                <?php        
                    foreach ($coursers as $course) {
                        echo "<li> $course </li>";
                    }
                ?>
            </ul>
        </div>

        <h4 class=margin >Del 3</h4>

        <div id= "coursersol">
            <P>kurslistan i bokstavsordning</P>
            <ul>
                <?php
                    sort($coursers);
                    foreach ($coursers as $course) {
                        echo "<li> $course </li>";
                    }
                ?>
            </ul>
        </div>
    </div>
    
    <?php
        //inkluderar footer
        include("includes/footer.php");
    ?>
    
    <?php
    //Inkluderar allt efter body
     include("includes/html_post.php");
    ?>
