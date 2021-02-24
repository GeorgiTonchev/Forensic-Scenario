<?php include '../PHP/conect.One.php';?>
<?php

// Display Customers
$Sqldisplay="SELECT * FROM Customers";


$result= mysqli_query($connection,$Sqldisplay);

echo "
<h3>Suscribers</h3>
<table class='table table-striped table-bordered table-sm pt-1 m-0 border-dark tableFixHead '
cellspacing='0' width='auto'>
<thead class='sticky-top'>
  <tr display='block' class='whitecream backgroundred'>
    <th>Email
    </th>
    
    
    <th></th>
    <th class='d-none'></th>
    

  </tr>
</thead>
<tbody>
  <tr>";

 while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){      
                echo "<form class='' action='#' method='post'>";
                echo "<td><input  type='text' name='Name' value='".$row['Email']."'></td>";
                
                
                echo "<td class='d-none'><input class='form-control d-none ' type='hidden' name='hidden' value='".$row['ID']."'></td>";
                echo "<td><button class='blue'type='submit' name='selectusr' >Select</button></td>";
                echo "</form>";

                echo "</tr>";
 }
                echo "</tbody>
                </table>";
               




?>