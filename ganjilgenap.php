<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angka Ganjil dan Genap</title>
</head>
<body>    

    <?php
    
   
    $ganjil2 = array();
    $genap2 = array();

    
    
      
    for ($i = 1; $i <= 8; $i++) {
        
        if ($i % 2 == 0) {
            $genap2[] = $i;
        }
        
        else {
            $ganjil2[] = $i;
        }
    }
    ?>

    
    <table class="Tabel1">
        <h1>Ganjil = 1,3,5 dan Genap 2,4</h1>
        <tr>
            <th>Ganjil</th>
            <th>Genap</th>
        </tr>

        
        <?php
       
        for ($i = 1; $i <= 5; $i++) {
            if ($i % 2 == 1) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td></td>";
                echo "</tr>";
            } else {
                echo "<tr>";
                echo "<td></td>";
                echo "<td>$i</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>

    <table class="Tabel2">
    <h1>Ganjil = 1,3,5,7 dan Genap 2,4,6,8</h1>
        <tr>
            <th>Ganjil</th>
            <th>Genap</th>
        </tr>

        
        <?php
        $count = max(count($ganjil2), count($genap2));
        for ($a = 0; $a < $count; $a++) {
            echo "<tr>";
            if($a < count($ganjil2)){
                
                echo "<td>" .$ganjil2[$a]."</td>";
                
            }else{
                echo "<td>" .""."</td>";
            }

            if($a < count($genap2)){
            
            echo "<td>" .$genap2[$a]."</td>";
            
            }else{
                echo "<td>" .""."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <style>
table {
            border-collapse: collapse;
            width: 70%;
            margin: 30px 0;
        }

        table, th, td {
            border: 2px solid black;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }
        </style>
</body>
</html>