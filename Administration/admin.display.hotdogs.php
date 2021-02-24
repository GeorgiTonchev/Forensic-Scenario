<?php include 'adminsesion.php';
    include '../PHP/conect.One.php';?>
<?php

// Display Starters 
$Sqldisplay="SELECT * FROM Hotdogs";


$result= mysqli_query($connection,$Sqldisplay);

echo "
<h3>Hot dogs</h3>
<table class='table table-striped table-bordered table-sm pt-1 m-0 border-dark tableFixHead '
cellspacing='0' width='auto'>
<thead class='sticky-top'>
  <tr display='block' class='black white-text'>
    <th>Name
    </th>
    
    <th>Description
    </th>
    <th>Category</th>
    <th></th>
    <th class='d-none'></th>
    

  </tr>
</thead>
<tbody>
  <tr>";

 while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){      
                echo "<form class='' action='displayitem.edit.php' method='post'>";
                echo "<td><input  type='text' name='Name' value='".$row['Name']."'></td>";
                
                echo "<td><input type='text-area' name='Description' value='".$row['Description']."'></td>";
                echo "<td><input type='text-area' name='Category' value='".$row['Category']."'></td>";
                
                echo "<td class='d-none'><input class='form-control d-none ' type='hidden' name='hidden' value='".$row['ID']."'></td>";
                echo "<td><button class='blue'type='submit' name='selectusr' >Select</button></td>";
                echo "</form>";

                echo "</tr>";
 }
                echo "</tbody>
                </table>";



?>