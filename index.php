<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- added new text-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
  </head>
  <body>
            <div class="middlePage">
        <div class="page-header">
          <h1 class="logo">Bazar <small>Welcome to our place!</small></h1>
        </div>

        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Please Sign In</h3>
          </div>
          <div class="panel-body">

          <div class="row">
            <div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
        <form class="form-horizontal" action="loignserver.php" method="post">
        <fieldset>

          <input id="uname" name="uname" type="text" placeholder="Enter User Name" class="form-control input-md">
          <div class="spacing"><input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"><small> Remember me</small></div>
          <input id="upassword" name="upassword" type="password" placeholder="Enter Password" class="form-control input-md">
          <div class="spacing"><a href="#"><small> Forgot Password?</small></a><br/></div>
          <input id="submit" type="submit" name="submit" text = "Submit" class="btn btn-info btn-sm pull-right"/>
        

        </fieldset>
        </form>
        </div>

        </div>

        </div>
        </div>
      </div>

  </body>
</html>
