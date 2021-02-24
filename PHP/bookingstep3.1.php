<?php

include 'conect.One.php';

$Sqldisplay="SELECT * FROM `Booking.Table`";


$result= mysqli_query($connection,$Sqldisplay);
$row= mysqli_fetch_array($result,MYSQLI_ASSOC);


echo " 
<div class='col-lg-3 col-md-4 col-sm-12 col-xs-12 whitecream float-left pt-2 m-0 no-gutters' id='booking''>
<div class='card text-center'>
<h1 class='card-header backgroundred whitecream text-center py-4 americana'>
<strong>Your booking details</strong>
</h1>
<!--Card content-->
    <div class='card-body text-dark px-lg-5 pt-0 no-gutters'>

    <!-- Location -->
        <div class='md-form p-0 m-0 mb-0'>
        <span><strong>Location</strong><span>
        <p class='mb-0 ptext'>".$row['Booking.Location']."</p>
        </div>

        <!-- People -->
        <div class='md-form p-0 m-0 mb-0'>
        <span><strong>Number of people</strong><span>
            <p class='mb-0 ptext'>".$row['Booking.People']."</p>
            </div>
        
            <!-- Date -->
            <div class='md-form p-0 m-0 mb-0'>
            <span><strong>Date</strong><span>

            <p class='mb-0 ptext'>".$row['Booking.Date']."</p>

            </div>
            <!-- Time -->
            <div class='md-form p-0 m-0 mb-0'>
            <span><strong>Time</strong><span>
            <p class='mb-0 ptext'>".$row['Booking.Time']."</p>
<hr>
<!-- Location -->
        <div class='md-form p-0 m-0 mb-0'>
        <span><strong>Name</strong><span>
        <p class='mb-0 ptext'>".$row['Booking.Name']." ".$row['Booking.Surname']."</p>
        </div>

        <!-- Email -->
        <div class='md-form p-0 m-0 mb-0'>
        <span><strong>Email</strong><span>
        <p class='mb-0 ptext'>".$row['Booking.Email']."</p>
        </div>

        <!-- Phone -->
        <div class='md-form p-0 m-0 mb-0'>
        <span><strong>Location</strong><span>
        <p class='mb-0 ptext'>".$row['Booking.Phone']."</p>
        </div>

        <!-- Send button -->
        <button class='text-small  btn whitecream backgroundred m-0 p-2' type='submit'>Previous</button>
        <button class='text-mall btn whitecream backgroundred m-0 p-2' type='submit'>Confirm</button>
        
    </div>
</div>
</div>";





?>