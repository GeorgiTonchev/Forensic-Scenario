<?php session_start();?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Patty Valantine's</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
    <!-- Navbar -->
    <link href='css/style.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
</head>


<body class='ligthblack'>
<?php include 'PHP/navbar.php';?>


<!-- Menu display -->

<div class="container-fluid py-3 pb-2" id="accordion_menu">

<div class="accordion py-3" id="accordionExample">

            <!-- FIRST ACCORDION CARD1 -->

  <div class="card">
    <div class="card-header" id="starters_menu">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseStarters" aria-expanded="true" aria-controls="collapseOne">
          Starters
        </button>
      </h2>
    </div>

    <div id="collapseStarters" class="collapse show" aria-labelledby="starters_menu" data-parent="#accordionExample">
      <div class="card-body">

        <!-- LIST OF STARTERS ITEMS-->
        <div class="row">
                    <a class="pl-5" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Cesar Salad
                    </a>

                    <div class="collapse" id="collapseExample">
                    <div class="pl-5 pt-1">
                         Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
        </div>
   
        <!-- END LIST STARTERS-->


      </div>
    </div>
  </div>

  <!-- END OF ACCORDION CARD 1 -->

  <!-- FIRST ACCORDION CARD 2 -->
  
  <div class="card">
    <div class="card-header" id="mains_menu">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseMain" aria-expanded="false" aria-controls="collapseTwo">
          Mains
        </button>
      </h2>
    </div>
    <div id="collapseMain" class="collapse" aria-labelledby="mains_menu" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>

  <!-- END OF ACCORDION CARD 2 -->

 <!-- FIRST ACCORDION CARD 2 -->

  <div class="card">
    <div class="card-header" id="desserts_menu">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseDesserts" aria-expanded="false" aria-controls="collapseThree">
          Desserts
        </button>
      </h2>
    </div>
    <div id="collapseDesserts" class="collapse" aria-labelledby="desserts_menu" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>

  <!-- END OF ACCORDION CARD 3 -->
</div>
 
<!-- End Menu Display-->
    
</div>









</main>
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" defer>
</script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"
    defer>
</script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js" defer></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js" defer>
</script>
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
    "palette": {
        "popup": {
            "background": "#aa0000",
            "text": "#ffdddd"
        },
        "button": {
            "background": "#ff0000"
        }
    },
    "position": "top",
    "content": {
        "href": "https://www.termsfeed.com/live/cfa7796a-2de8-4ebc-aa87-4e715eea0a89"
    }
});
</script>

<?php include 'PHP/footer.php';?>
</body>

</html>