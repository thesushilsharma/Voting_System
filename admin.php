<?php
if(isset($_POST['btnLogin']))
{
    $admin=$_POST['admin'];
    $password = $_POST['password'];
   if($admin=="sharma" && $password=="sushil")
   {
       header ("location: result.php");
   }
   else {
                 echo "<script type='text/javascript'>alert('Enter Valid User id and Password');</script>";
        }
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Administrator</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            * {
  box-sizing: border-box;
}
            body {
                text-align: center;
                height: 648px;
                background-color: #020B13;
		        color: #c0c2c4;
            }
            
            form {
                display: inline-block;
            }
            
            input[type=text],input[type=password]
            {
                background: rgba(255, 255, 255, 0.075);
                border-color: rgba(255, 255, 255, 0.15);
                -webkit-appearance: none;
                border-radius: 4px;
                border: solid 1px;
                color: inherit;
                display: block;
                outline: 0;
                padding: 0 1em;
                text-decoration: none;
                width: 100%;
                font-family: "Signika", sans-serif;
                margin: 0;
                font: inherit;
                font-weight: 300;
                line-height: 1.65;
            }
            input[type=text]:focus,
            input[type=password]:focus {
                padding: 15px 22px;
                margin: 10px 5px;
                box-sizing: border-box;
                height: 2.75em;
            }

            .admin_login {
                box-shadow:inset 0px 0px 15px 3px #23395e;
                background:linear-gradient(to bottom, #2e466e 5%, #415989 100%);
                background-color:#2e466e;
                border-radius:17px;
                border:1px solid #1f2f47;
                display:inline-block;
                cursor:pointer;
                color:#ffffff;
                font-family:Times New Roman;
                font-size:15px;
                padding:6px 13px;
                text-decoration:none;
                text-shadow:0px 1px 0px #263666;
            }
            .admin_login:hover {
                background:linear-gradient(to bottom, #415989 5%, #2e466e 100%);
                background-color:#415989;
            }
            .admin_login:active {
                position:relative;
                top:1px;
            }

            
            img {
                margin-left: 14%;
                width: 15%;
            }
        </style>

    </head>

    <body >
        <div>
                <h2>System Admin Login</h2>
        </div>
        <div style="float:right">
            <a href="menu.php" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-log-out"></span> Back
            </a>
        </div>
<br>
<br>
        <img src="https://www.uowdubai.ac.ae/themes/uowd/images/primary-logo.png" alt="uowd">
        <div class="login-page">
            <div class="form">
                <br>
                    <form class="login-form" method="POST" >
                        <div>
                        <input type="text" name="admin" value="" placeholder="username" />
                        </div>
                        
                        <br>
                        <div>
                        <input type="password" name="password" value="" placeholder="Password" />
                        </div>
                        
                        <br>
                        <div>
                        <input class="admin_login" type="submit" value="Login" name="btnLogin" />
                        </div>    
                </form>
            </div>
        </div>
        
        <br>
        <div >
             <?php include 'footer.php';?>
        </div>
    </body>

    </html>