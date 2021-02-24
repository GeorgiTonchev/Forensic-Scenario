<?php
echo"

<div class='col-lg-8 col-md-8 col-sm-12 col-xs-12 whitecream float-left pt-2  m-0 no-gutters ' id='booking''>
<div class='card text-center'>

    <h1 class='card-header backgroundred whitecream text-center py-4 americana'>
        <strong>Book a Table</strong>
    </h1>

    <!--Card content-->
    <div class='card-body px-lg-5 pt-0 no-gutters '>

        <!-- Form -->
        <form class='text-center' style='color: #757575;' action='Booktablestep2.php' method='post'>

            <!-- Location -->
            <div class='md-form'>
            <span><strong>Location</strong><span>
            <select class='mdb-select border border-0 form-control' name='Location' >
            <option value='Edinburgh'>Edinburgh</option>
            <option value='Other'>Other</option>
            </select>
               
            </div>

            <!-- Date -->
            <div class='md-form'>
            <label class='p-2' for='Date'></label>
                <input type='date' id='' name='Date' class='form-control p-1' required>
                
            </div>

            <!-- Subject -->
        
            <div class='md-form border border-0 text-'>
            <span><strong>Time</strong></span>
            <select name='Time' pattern='(?:(?:0\[1-9\]|1\[0-2\])(?:30))|(?:(?:0\[13578\]|1\[02\])-31))-(?:0\[1-9\]|1\[0-9\]|2\[0-9\])|(?:(?!02)(?:0\[1-9\]|1\[0-2\])-
            (?:19|20)\[0-9\]{2}' class='mdb-select border-0 form-control' required>
                <option value='' disabled>Choose option</option>
                <option value='09:00-09:30'>09:00-09:30</option>
                <option value='09:30-10:00'>09:30-10:00</option>
                <option value='10:00-10:30'>10:00-10:30</option>
                <option value='10:30-11:00'>10:30-11:00</option>
                <option value='11:00-11:30'>11:00-11:30</option>
                <option value='11:30-12:00'>11:30-12:00</option>
                <option value='12:00-12:30'>12:00-12:30</option>
                <option value='12:30-13:00'>12:30-13:00</option>
                <option value='13:00-13:30'>13:00-13:30</option>
                <option value='13:30-14:00'>13:30-14:00</option>
                <option value='14:00-14:30'>14:00-14:30</option>
                <option value='14:30-15:00'>14:30-15:00</option>
                <option value='15:00-15:30'>15:00-15:30</option>
                <option value='15:30-16:00'>15:30-16:00</option>
                <option value='16:00-16:30'>16:00-16:30</option>
                <option value='16:30-17:00'>16:30-17:00</option>
                <option value='17:00-17:30'>17:00-17:30</option>
                <option value='17:30-18:00'>17:30-18:00</option>
                <option value='18:00-18:30'>18:00-18:30</option>
                <option value='18:30-19:00'>18:30-19:00</option>
                <option value='19:00-19:30'>19:00-19:30</option>
                <option value='19:30-20:00'>19:30-20:00</option>
                <option value='20:00-20:30'>20:00-20:30</option>
                <option value='20:30-21:00'>20:30-21:00</option>
                <option value='21:00-21:30'>21:00-21:30</option>

            </select>
            </div>
            
            <!-- People -->

            <div class='md-form border border-0 text-'>
            <span><strong>People</strong></span>
            <select name='People' class='mdb-select border-0 form-control' required>
                <option value='' disabled>Choose option</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='+8'>+8</option>

                </select>
            </div>
            <!-- Send button -->
            <button class='btn whitecream backgroundred' type='submit'>Next</button>

        </form>
        <!-- Form -->

    </div>

</div>
</div>";


if(isset($_POST["submit"])){

    header('refresh:0;url=PHP\bookingtablestep2.php');
    

}




?>