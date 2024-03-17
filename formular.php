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
    
        <!--formulär-->
        <h3 class=margin>Formulär</h3>
        <h4 class=margin >Del 1- Skicka data med GET</h4>
        
        <div class=formbox >
            <form id= "del1form"  method="get">
                <label class= "first">Förnamn:</label>
                <input class= "second" type="text" name="fname">
                <label class= "third">Efternamn:</label>
                <input class= "forth" type="text" name="lname">

                <input class= "fifth" type= "submit" name="submit" value= "submit">
            </form>
        
            <div id=warning>

                <?php
                    if (empty($_GET["submit"]))
                    {
                        $submitbg= false;
                    }
                    else
                    {
                        $submitbg= $_GET["submit"];
                    }
                    //Kollar om båda fälten är ifyllda och retunerar värden beroende på svar 
                
                    if($submitbg) {
                        
                        $prname= $_GET["fname"]." " . $_GET["lname"];
                        $fname=$_GET["fname"];
                        $lname=$_GET["lname"];
                    
                        if(empty($fname)) {
                            echo "Både förnammn och efternamn måste fyllas i";
                        }
                        else if(empty($lname)) {
                            echo "Både förnammn och efternamn måste fyllas i";
                        }
                        else {
                            echo "Hej " . $prname . "!";
                        }
                    }
                ?>
            </div>   
        </div>
    </div>
    <h4 class=margin>Del 2- Skicka data med POST</h4>

    <div class=formbox>

        <form id=del2form action="calculate.php" method="post">
            <label class= "first">Längd:</label>
            <input class= "second" type="text" name="length">
            <label class= "third">Bredd:</label>
            <input class= "forth" type="text" name="width">

            <input class= "fifth" type= "submit" name="submit" value= "submit">
        </form>

    </div>

    <?php
        //inkluderar footer
        include("includes/footer.php");
    ?>

    
    <?php
    //Inkluderar allt efter body
     include("includes/html_post.php");
    ?>
