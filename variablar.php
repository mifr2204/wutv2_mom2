<?php
    //inkluderar allt innan body
    include("includes/html_pre.php");
    //sidans titel
    $page_title = "Variablar";
    //variablar
    $name = "Mikaela Frendin";
    $mail = '<a href="mailto:mifr2204@student.miun.se">mifr2204@student.miun.se</a>';
    $age = "37";
?>

<body>

    <?php  
        //inkluderar header
        include("includes/header.php");
    ?>

    <div class=mainbox>
 
        <h3 id=var>Variabler</h3>
        <h4 id=uts>Utskrift</h4>

        <div id="message">
            <?php
                //Skriver ut meddelandet
                echo "Hej! Jag heter " . $name . ". Jag är " . $age . " år och kan nås på e-post adressen: " . $mail . ".";
            ?>
        </div>
        <?php
            //inkluderar footer
            include("includes/footer.php");
        ?>
    </div>
    
    <?php
    //inkluderar allt efter body
     include("includes/html_post.php");
    ?>
