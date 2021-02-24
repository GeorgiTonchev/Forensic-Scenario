<?php

$location=$_POST['Location'];
$date=$_POST['Date'];
$time=$_POST['Time'];
$people=$_POST['People'];


echo"

            <div class='col-lg-8 col-md-8 col-sm-12 col-xs-12 whitecream pt-2 m-0 no-gutters ' id='booking''>
                 <div class='card text-center'>

                 <h1 class='card-header backgroundred whitecream text-center m-0 py-4 americana'>
                 <strong>Book a Table</strong>
             </h1>
         

                            <!--Card content-->
                                <div class='card-body px-lg-5 pt-0 no-gutters '>

                            <!-- Form -->
                                     <form class='text-left' style='color: #757575;' action='Bookatablefinalstep.php?id=$location&id2=$date&id3=$time&id4=$people' method='post'>

                             <!-- Name -->
                                    <div class='md-form'>

                                        <label for='Name' required>Name</label>
                                        <input type='text' name='Name' class='form-control' maxlength='25' required>
               
                                    </div>

                            <!-- Surname -->
                                    <div class='md-form'>

                                        <label for='surname'>Surname</label>
                                        <input type='text' name='Surname' class='form-control' maxlength='25' required>
               
                            </div>

                            <!-- E-mail -->
                                    <div class='md-form'>

                                        <label for='Email'>E-mail</label>
                                        <input maxlength='150' type='email' pattern='/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/' name='Email' class='form-control' required>
                
                            </div>

                            <!-- Phone-->
                                    <div class='md-form'>

                                        <label  for='Phone'>Phone</label>
                                        <input type='number' maxlength='10' name='Phone' class='form-control' required>
                
                                    </div>

                            <!-- Send button -->
                            
                            <button class='text-small btn whitecream backgroundred'name='Next' type='Next'>Confirm</button>
                            

                         
                                <hr>
                
                                <!-- Default unchecked -->
                                <div class='custom-control custom-radio'>
                                    <input type='radio' class='custom-control-input' id='defaultUnchecked'
                                        name='defaultExampleRadios' required>
                                    <label class='custom-control-label black-text text-center' for='defaultUnchecked'>No, I do not want to register.</label>
                                </div>

                                <!-- Default checked -->
                                <div class='custom-control custom-radio'>
                                    <input type='radio' class='custom-control-input' id='defaultChecked'
                                        name='defaultExampleRadios' checked>
                                    <label class='custom-control-label black-text text-center' for='defaultChecked'>Yes, I agree</strong> that <strong>Patty Valantine's</strong> may contact me via Email with news,
                                    special offers & promotions. I have also read and acknowledged the Terms of Use and Privacy Notice.</label>
                                </div>

                                </form>

                                
                                <!-- Form -->
                        
                    </div>

               
        
    </div>
</div>";

if(isset($_POST["Next"])){

    header('refresh:1;url=../../Bookatablefinalstep.php');
    echo 'next';

}

else{

}
?>