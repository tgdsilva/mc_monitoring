<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>System Monitoring</title>
        <!-- Bootstrap -->
        <link href="assets/css/main/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="assets/css/custom/tbs_login.css" type="text/css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="assets/js/custom/jquery.js"></script>
    </head>
    <body>

        <!-- Top Banner for Monitoring -->
        <div class="container-fluid">
            <div class="row">
                <div class="jumbotron login_jumbotron-top">
                </div>
            </div>
        </div>


        <!-- Content Login for Monitoring -->
        <div class="container-fluid">
            <div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please sign in on Nemesis</h3>
                        </div>
                        <div class="panel-body ">
                            <form accept-charset="UTF-8" role="form" method="post" action="ProcessLogin.php">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Server" name="txtServer" id="txtServer" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Enviroment" name="txtEnv" id="txtEnv" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="txtName" id="txtName" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="txtPassword" id="txtPassword" type="password">
                                    </div>
                                    
                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/dist/bootstrap.min.js"></script>
        <script src="assets/js/custom/login.js"></script> 
    </body>
</html>