<?
$row = 8;


    if (isset($_COOKIE["game"])) {
        setcookie("game", 4);

    }

    $game =$_COOKIE["game"];

    if (isset($_GET["up"])) {
        $game--;
        if($game<0 || $game>7){
          $game = 7;
            echo "bak evlat sinirlarin disina cikma<br/>";
        }
        else{
            echo "Aferin burda oyna<br/>";
        }

        setcookie("game", $game);
    }
    if (isset($_GET["down"])) {
        $game++;
        if($game>7 || $game<0){
            $game = 0;
            echo "bak evlat sinirlarin disina cikma<br/>";
        }
        else{
            echo "Aferin burda oyna<br/>";
        }
        setcookie("game", $game);
    }


    echo'<a href="?up">up</a>';
echo "<table border='2'>";
for($i=0;$i<$row;$i++){
    echo "<tr>";
        echo "<td>";
        if($i == $game) {
            echo "A";
        }
    echo "&nbsp;</td>";
    echo "</tr>";

    }

echo "</table>";
echo'<a href="?down">down</a>';
?>
