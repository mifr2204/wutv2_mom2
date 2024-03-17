<?php 
    //Inkluderar allt innan body
    include("includes/html_pre.php");
    //Sidans titel
    $page_title = "villkor";
    //Variablar
    $day = "sunday";

?>

<body>

    <?php  
        //inkluderar header med nav
        include("includes/header.php");
    ?>

    <div class=mainbox>
    
        <div id=VilCont>

            <h3> Villkor </h3>

            <h4>Del 1</h4>
            <div id="del1">
                
                <p id=datum>Datum/klockslag</p>
                <div id=date>
                    <?php      
                        echo  date("o-m-d:H.i");
                    ?>
                </div>
            </div>

            <h4>Del 2</h4>
            <div id="del2">
                <?php
                    if (date("l") === $day) {
                        echo "Idag är det Söndag";
                    }    
                    else {
                        echo "idag är det inte Söndag";
                    }
                ?>  
            </div>
            

            <h4>Del 3</h4>
            <div id="del3">
                <?php
                //If sats för att tala om vilken period på dygnet det är
                //Källa: http://www.zoopable.com/php-code-to-check-if-a-variable-is-between-two-numbers/
                if (number_format(date("H"))==6) {  
                    echo "Det är Morgon";
                }
                else if (number_format(date("H"))==7) {
                    echo "Det är Morgon";
                }  
                else if (number_format(date("H"))==8) {
                    echo "Det är Morgon";
                } 
                else if (number_format(date("H"))==9) {
                    echo "Det är Förmiddag";
                } 
                else if (number_format(date("H"))==10) {
                    echo "Det är Förmiddag";
                } 
                else if (number_format(date("H"))==11) {
                    echo "Det är Förmiddag";
                } 
                else if (number_format(date("H"))==12) {
                    echo "Det är Eftermiddag";
                } 
                else if (number_format(date("H"))==13) {
                    echo "Det är Eftermiddag";
                } 
                else if (number_format(date("H"))==14) {
                    echo "Det är Eftermiddag";
                } 
                else if (number_format(date("H"))==15) {
                    echo "Det är Eftermiddag";
                } 
                else if (number_format(date("H"))==16) {
                    echo "Det är Eftermiddag";
                } 
                else if (number_format(date("H"))==17) {
                    echo "Det är Eftermiddag";
                } 
                else if (number_format(date("H"))==18) {
                    echo "Det är Kväll/natt";
                } 
                else if (number_format(date("H"))==19) {
                    echo "Det är Kväll/natt";
                } 
                else if (number_format(date("H"))==20) {
                    echo "Det är Kväll/natt";
                } 
                else if (number_format(date("H"))==21) {
                    echo "Det är Kväll/natt";
                } 
                else if (number_format(date("H"))==22) {
                    echo "Det är Kväll/natt";
                } 
                else if (number_format(date("H"))==23) {
                    echo "Det är Kväll/natt";
                } 
                else if (number_format(date("H"))==0) {
                    echo "Det är Kväll/natt";
                } 
                else if (number_format(date("H"))==1) {
                    echo "Det är Kväll/natt";
                } 
                else if (number_format(date("H"))==2) {
                    echo "Det är Kväll/natt";
                } 
                else if (number_format(date("H"))==3) {
                    echo "Det är Kväll/natt";
                } 
                else if (number_format(date("H"))==4) {
                    echo "Det är Kväll/natt";
                } 
                else if (number_format(date("H"))==5) {
                    echo "Det är kväll/natt";
                } 
                ?>
            </div>

            <h4>Del 4</h4>
            <div id="del4">
                <?php
                    //switch för veckodag på svenska 
                    // källa: https://www.php.net/manual/en/control-structures.switch.php
                    switch (date("N")) { 
                        case 1:
                            echo "Idag är det måndag";
                            break;
                        case 2:
                            echo "Idag är det tisdag";
                            break;
                        case 3:
                            echo "Idag är det onsdag";
                            break;
                        case 4:
                            echo "Idag är det torsdag";
                            break;
                        case 5:
                            echo "Idag är det fredag";
                            break;
                        case 6:
                            echo "Idag är det lördag";
                            break;    
                        case 7:
                            echo "Idag är det söndag";
                            break;
                    }
                ?>
            </div>
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
