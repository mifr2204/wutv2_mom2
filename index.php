<?php
    //Inkluderar allt innan body
    include("includes/html_pre.php");
    //Titlen för sidan
    $page_title = "Startsida"
?>

<body>

    <?php  
    //inkluderar header med nav
        include("includes/header.php");
    ?>

    <div class=mainbox>

        <div id="IndCont">
            <h3>
                Moment 2 - Frågor
            </h3>
            
            <h4>
            1. Har du tidigare erfarenhet av utveckling med PHP?
            </h4>
            <p>
                Jag är helt ny inom programering som helhet och har då heller aldrig stött på PHP innan.
            </p>
            
            <h4>
            2. Beskriv kortfattat vad du upplever är fördelarna med att använda PHP för att skapa webbplatser.
            </h4>
            <p>
                Utifrån min mycket begränsade erfarenhet av PHP och programering i helhet tycker jag hittills att PHP på många sätt förenklar genom
                att man kan lägga upprepande kod i separata filer. Detta ger en förenkling när man behöver ändra något men gör det också enklare att 
                strukturera och hålla ordning på koden. 
            </p>
            
            <h4>
                3. Hur har du valt att strukturera upp dina filer och kataloger?
            </h4>
            <p>
                Jag har strukturerat upp dom i en huvudkatalog, i den, en css katalog, en includes katalog och en katalog för textfiler
            </p>
            
            <h4>
                4. Har du följt guiden, eller skapat på egen hand?
            </h4>
            <p>
                Jag följde instruktionerna och tipsen i teori och läsanvisningarna och har strukturerat genom att använda mappar för css och includes. 
            </p>
            
            <h4>
                5. Har du gjort några förbättringar eller vidareutvecklingar av guiden (om du följt denna)?
            </h4>
            <p>
                Kommer mer behov av mappar kommer jag att lägga till fler. t.ex om jag använder node.js, men just nu har jag inte gjort några förbättringar eller
                förändringar från instruktionerna utöver att lägga till en mapp för textfiler.     
            </p>
            
            <h4>
                6. Vilken utvecklingsmiljö har du använt för uppgiften (Editor, webbserver (XAMPP, LAMP, MAMP eller liknande) etcetera)?
            </h4>
            <p>
                Jag har använt mig av xampp, apache, git och visual studio code för att genomföra uppgiften.
            </p>
            
            <h4>
                7. Har något varit svårt med denna uppgift?
            </h4>
            <p>
                Det var svårt att förstå hur jag skulle ordna med servern och i början var jag väldigt förvirrad angående PHP 
                med men nu känns det som att det har släppt och det flyter förhoppningsvis på frammåt med uppgiften
            </p>
        </div>
    </div>
    
    <?php
    //inkluderar footer
        include("includes/footer.php");
    ?>

    <?php
    //inkluderar allt efter body
        include("includes/html_post.php");
    ?>
        
