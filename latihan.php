<!DOCTYPE HTML>
<html>
    <head>
            <title> Latihan soal </title>
            <link rel = "stylesheet" type="text/css" href = "style.css">
    </head>
    <body>
        <div class="container">
            <table >
            <?php
               $day = array("Sun" , "Mon" , "Tue" , "Wed" , "Thu" , "Fri" , "Sat");
               $mont = "Maret";
               $year = 2022;
               echo "<hr>";
               echo "<h3> $bulan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $tahun</h3>"; 
               echo "<hr>";
               for($i = 1; $i <= 1; $i++) {
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++) {
                        echo "<td>". $day[$j] ."</td>";
                    }
                }
               $b = 28;
               $c = 1;
                for($i = 1; $i <= 5; $i++) {
                    echo "<tr>";
                    for($j = 1; $j <= 7; $j++) {
                        if($b >= 29) {
                            echo "<td>". $c ."</td>";
                            $c++;
                        } else {
                            echo "<td>". $b ."</td>";
                            $b++; 
                        }
                        if($c == 32) {
                            break;
                        }
                    }
                   
                }
                


            ?>
            </table>
        </div>
    </body>
