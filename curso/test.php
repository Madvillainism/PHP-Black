
<?php

$ini = "Sore ";
$fin = " tqm";
$todo = $ini.$fin;
echo $todo;

echo "<br>";

echo "<table border=1>";
    $n=1;
        for ($n1=1; $n1<=10; $n1++)
    {
        echo "<tr>";
            for ($n2=1; $n2<=10; $n2++)
        {
            echo "<td>", $n, "</td>";
                $n=$n+1;
            }
echo "</tr>";
}
echo "</table>";

    if(isset($_GET['god'])){
        $get = $_GET['god'];

        echo "<br>";
        echo $get;
    }

?>


<!DOCTYPE html>
<html>
  <head>
  <title><?php echo "Page Tile"; ?> </title>
  </head>
  <body>

  <h1>This is a Heading</h1>
  <p><?php echo "this is our paragraph"; ?></p>

  <a href="test.php?god=xd">CLICK ME</a>
  </body>
</html>


<?php

echo 9 + 8;