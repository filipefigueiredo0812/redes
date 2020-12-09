
        <?php
        $num = rand(1, 7);
        echo "<h3>Ex2</h3>";
        echo $num. '<br><br>';
        
        switch($num){
            case (1):
                echo "Domingo";
                break;
            case (2):
                echo "Segunda-feira";
                break;
            case (3):
                echo "Terça-feira";
                break;
            case (4):
                echo "Quarta-feira";
                break;
            case (5):
                echo "Quinta-feira";
                break;
            case (6):
                echo "Sexta-feira";
                break;
            case (7):
                echo "Sábado";
                break;
        }
        
        
        
        
echo "<a href='index.php'><h5><b>Ex1</b></h5></a>";
echo "<a href='Ex3.php'><h5><b>Ex3</b></h5></a>";
echo "<a href='Ex4.php'><h5><b>Ex4</b></h5></a>";
?>
    