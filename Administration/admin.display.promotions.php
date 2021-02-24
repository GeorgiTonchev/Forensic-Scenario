 
    
<?php

include '../PHP/conect.One.php';

if(isset($_POST['Delete'])){
  $uhid = $_POST['hidden'];
  $Delete="DELETE FROM Promotions WHERE ID='$uhid'";
  mysqli_query($connection,$Delete);
  
}
// Display Starters 
$Sqldisplay="SELECT * FROM Promotions";


$result= mysqli_query($connection,$Sqldisplay);

echo "
<h3> Promotions</h3>
<table class='table table-striped table-bordered table-sm pt-1 m-0 border-dark tableFixHead '
cellspacing='0' width='auto'>
<thead class='sticky-top'>
  <tr display='block' class='black white-text'>
    <th>Title
    </th>
    
    <th>Description
    </th>
    <th>Price</th>
    <th></th>
    <th class='d-none'></th>
    

  </tr>
</thead>
<tbody>
  <tr>";

while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){ 
    echo "<form class='' action='' method='post'>";
    echo "<td><input  type='text' name='Name' value='".$row['title']."'></td>";
    
    echo "<td><input type='text-area' name='Description' value='".$row['description']."'></td>";
    echo "<td><input type='text-area' name='Category' value='".$row['price']."'></td>";
    
    echo "<td class='d-none'><input class='form-control d-none ' type='hidden' name='hidden' value='".$row['ID']."'></td>";
  
    echo"<td><button class='red' type='submit' name='Delete'>delete</button></td>";

                   
    echo "</form>";

    echo "</tr>";
}
    echo "</tbody>
    </table>";

 ?>


