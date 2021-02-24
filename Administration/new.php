<script type='text/javascript'>
  $(document).ready(function(){
        var size;
        $('#cropbox').Jcrop({
          aspectRatio: 1,
          onSelect: function(c){
           size = {x:c.x,y:c.y,w:c.w,h:c.h};   
           $('#crop').css('visibility', 'visible');  
          }
        });
     
        $('#crop').click(function(){
            var img = $('#cropbox').attr('src');
            $('#cropped_img').show();
            $('#cropped_img').attr('src','#?x='+size.x+'&y='+size.y+'&w='+size.w+'&h='+size.h+'&img='+img);
        });
  });
</script>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title>50,s</title>
    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.11.2/css/all.css'>
    <!-- Bootstrap core CSS -->
    <link href='../css/bootstrap.min.css' rel='stylesheet'>
    <!-- Material Design Bootstrap -->
    <link href='../css/mdb.min.css' rel='stylesheet'>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Your custom styles (optional) -->
    <link href='../css/style.css' rel='stylesheet'>


<style>
body {
    width: 550px;
    font-family: Arial;
}

input#crop {
    padding: 5px 25px 5px 25px;
    background: lightseagreen;
    border: #485c61 1px solid;
    color: #FFF;
    visibility: hidden;
}

#cropped_img {
    margin-top: 40px;
}
</style>
</head>

<?php
$img_r = imagecreatefromjpeg($_GET['img']);
$dst_r = ImageCreateTrueColor( $_GET['w'], $_GET['h'] );

imagecopyresampled($dst_r, $img_r, 0, 0, $_GET['x'], $_GET['y'], $_GET['w'], $_GET['h'], $_GET['w'],$_GET['h']);

header('Content-type: image/jpeg');
imagejpeg($dst_r);

exit;
?>
<body>

    <div>
        <img src="img.jpg" id="cropbox" class="img" /><br />
    </div>
    <div id="btn">
        <input type='button' id="crop" value='CROP'>
    </div>
    <div>
        <img src="#" id="cropped_img" style="display: none;">
    </div>

</body>
</html>