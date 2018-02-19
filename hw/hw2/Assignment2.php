<!DOCTYPE html>
<html>
    
    <head>
        
        <title> Character Randomizer </title>
        <style>
            @import url(css/styles.css);
            body{
                background-image:url(imgs/deathstar.jpg);
            }
        </style>
    
    </head>
    
    <body>
        <h1>Star Wars: Name Randomizer </h1>
        
        <div>
              <?php
                
                       $race_ = ["Padwan", "Senator", "Commander", "Darth", "Admiral", "Jar Jar", "Solo", "General", "Prince/Princess"];
                        $class_ =["Chewie", "Grevious", "Solo", "The Hutt", "Leia", "Windu", "Kenobi", "Yoda", "Han"];
                    
                        for ($i = 0; $i < 6; $i++) {
                                echo "<table>";
                                echo "<td>";
                            for ($j = 0; $j < 1; $j++) {
                                echo $race_[rand(0,7)];
                                echo " ";
                                echo $class_ [rand(0,7)];
                                }
                                echo "</td>";
                                echo "<td>";
                                echo "<img src ='imgs/random/".rand(1,3).".png'/";
                                echo "</td>";
                                echo "</table>";
                            }
                ?>
</div>
    </body>
    <footer>
        2017 &copy; Abby Packham. <br /> Disclaimer: All material above is used for teaching purposes. Information may be innacurate.
        <br/>
    </footer>
</html>
