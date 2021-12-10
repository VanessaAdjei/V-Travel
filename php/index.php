<html>

  <head>
    <title> Signup | V Visa </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="../css/managersignup.css">
  <link rel="stylesheet" type = "text/css" href ="../css/bootstrap.min.css">
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>

  <body>



    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../php/index.php">V Visa</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            
            <li><a href="#">Contact Us</a></li>
           
          </ul>
          <ul class="nav navbar-nav">
            
            <li><a href="clogin.php">Login here if you already have an account</a></li>
          </ul>
          
            
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
    <div class="jumbotron">
     <h1>Hi Guest, <br> Welcome to <span class="edit"> V Visa</span></h1>
     <br>
   <p>Get started by creating your account</p>
    </div>
    </div>



    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading"> Create Account </div>
        <div class="panel-body">
          
        <form role="form" action="../php/customer_registered_success.php" method="POST" id="signup_form">
         
          <div class="row">
          <div class="form-group col-xs-12">
            <label for="fullname"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
            <div class="input-group">
              <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="" onInput="validateFlname()">
              <span class="input-group-btn" id="error">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="" >
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="email"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
            <div class="input-group">
              <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="contact"><span class="text-danger" style="margin-right: 5px;">*</span> Contact: </label>
            <div class="input-group">
              <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></label>
            </span>
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="address"><span class="text-danger" style="margin-right: 5px;">*</span> Address: </label>
            <div class="input-group">
              <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="" onInput="validateA()">
              <span class="input-group-btn" id="aerror">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label>
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
            </span>
              
            </div>           
          </div>
        </div>

        

        

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" type="submit">Submit</button>
          </div>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="clogin.php">Have an account? Login.</a></label>

        </form>

        <script src="../js/validation.js"></script>
        </div>
        
      </div>
      
    </div>
    </div>
    </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> V Visa 2021 </p>

  <br>
  </footer>
</html>
