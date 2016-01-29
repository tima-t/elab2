<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="../public/css/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/font-awesome/css/font-awesome.min.css">


</head>
<body>
<div id="main">
    <div class="row marginTop">
        <div class=" col-sm-4 col-md-1 col-md-offset-1">
            <img src="../public/img/logo.png" alt="logo">
        </div>

        <div class="col-md-3">
            <h1>eLab Library</h1>
        </div>

        <div class="col-md-2 col-sm-1 col-md-offset-1 " id="all">
            <a href="./" class="btn btn-success">Go back to home &nbsp<i class="fa fa-home"></i></i></a>
        </div>
        <div class="col-md-2 col-sm-1 col-sm-offset-2 col-md-offset-1" id="add">
            <a href="login" class="btn btn-success">Login &nbsp &nbsp <i class="fa fa-key"></i></a>
        </div>

    </div>
    {% if error_msg %}
    <div  class="row alert-danger clearPadMar"  style="text-align: center">

        <h2 class="marginBottom">{{error_msg |nl2br}}</h2>
    </div>
    {% endif%}

    {% if success%}
    <div class="row alert-success clearPadMar"  style="text-align: center">
        <h2 class="marginBottom">{{success}}</h2>


    </div>
    {% endif%}

</div>
</body>
<script src="../public/js/jquery/dist/jquery.min.js"></script>
<script src="../public/css/bootstrap/dist/js/bootstrap.min.js"></script>
<script src='../public/js/jquery-input-file-text.js'></script>
<script>
    $(document).ready(function() {
        $('#chooseF').inputFileText( { text: 'Browse' } );
    });
</script>


</html>