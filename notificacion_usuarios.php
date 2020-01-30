<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="comentarioFB/push.js/push.min.js"></script>



    

    <style>
        #alert_popover {
            display: block;
            position: absolute;
            bottom: 50px;
            left: 50px;
        }

        .wrapper {
            display: table-cell;
            vertical-align: bottom;
            height: auto;
            width: 200px;
        }

        .alert_default {
            color: #333333;
            background-color: #f2f2f2;
            border-color: #cccccc;
        }
    </style>
</head>
<body>
<br/><br/>
<div class="container">
    <br/>
   
    <br/>
    <form method="post" id="form">
        
       
       
    </form>


    <div id="alert_popover">
        <div class="wrapper">
            <div class="content">
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
$(document).ready(function () {
 setInterval(function () {
     cargar();
 },5000);



});
function cargar () {
    $.ajax({
        url:'comentarioFB/comentario.php',
        type:'POST',
        success:function (data) {
            $('.content').html(data);
        }
    });

}
</script>