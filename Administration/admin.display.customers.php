<?php include 'adminsesion.php';
   include '../PHP/conect.One.php';?>
<?php

// Display Customers
$Sqldisplay="SELECT * FROM Customers";


$result= mysqli_query($connection,$Sqldisplay);

echo "
<h3>Customers</h3>
<table class='table table-striped table-bordered table-sm pt-1 m-0 border-dark tableFixHead '
cellspacing='0' width='auto'>
<thead class='sticky-top'>
  <tr display='block' class='black white-text'>
    <th>Name
    </th>
    
    <th>Surname
    </th>
    <th>Phone</th>
    <th>Postcode</th>
    <th>Address</th>
    <th></th>
    <th class='d-none'></th>
    

  </tr>
</thead>
<tbody>
  <tr>";

 while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){      
                echo "<form class='' action='#' method='post'>";
                echo "<td><input  type='text' name='Name' value='".$row['Name']."'></td>";
                
                echo "<td><input type='text-area' name='Description' value='".$row['Surname']."'></td>";
                echo "<td><input type='text-area' name='Category' value='".$row['Phone']."'></td>";
                echo "<td><input type='text-area' name='Category' value='".$row['Postcode']."'></td>";
                echo "<td><input type='text-area' name='Category' value='".$row['Address']."'></td>";
                echo "<td><input type='text-area' name='Category' value='".$row['Email']."'></td>";
                
                
                echo "<td class='d-none'><input class='form-control d-none ' type='hidden' name='hidden' value='".$row['ID']."'></td>";
              
                echo "</form>";

                echo "</tr>";
 }
                echo "</tbody>
                </table>";
               




?>