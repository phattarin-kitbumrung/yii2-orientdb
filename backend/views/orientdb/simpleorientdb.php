<h1><center>All Product</center></h1>
<?php 
    foreach ($result as $row){
        echo "<h4><center>";
        echo $row['id']." | ".$row['name']." | ".$row['model']." | ".$row['price']." | ".$row['detail']."\n";
        echo "</h4></center>";
    }

?>

