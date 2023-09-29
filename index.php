<?php
require('config.php');

if(isset($_POST['submit'])){
    $studentid=stripcslashes($studentid);
    $username=stripcslashes($username);
    $studentid = mysqli_real_escape_string($con,$_POST['studentid']);
    $username = mysqli_real_escape_string($con,$_POST['username']);

    if ($username != "" && $studentid != ""){

        $sql_query = "select count(*) as cntStudent from voter where studentid='".$studentid."' and username='".$username."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntStudent'];

        if($count > 0){

            session_start();
            $_SESSION['studentid']=$studentid;
            $_SESSION['username']=$username;
            header('Location: election.php');
        }else{
            $message = "You are NOT Enrolled in Spring Semester";
           echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }

}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>SRC</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>

    <body >
        <div class="topnav">
            
        </div>
        <div>
            <div class="header">
                <h1 class="center">University of Wollongong</h1>
            </div>
            <fieldset id="page">
                <legend>Student Representative Council Election</legend>
                <div class="container">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div id="div_login">
                            <h2>Enter Student ID and Sols Username</h2>
                            <div>
                                <input type="text" class="textbox" id="studentid" name="studentid" placeholder="Student ID" required/>
                            </div>
                            <div>
                                <input type="password" class="textbox" id="username" name="username" placeholder="Sols Username" required/>
                            </div>
                            <div class="g-recaptcha" data-theme="dark" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                            <div >
                            
                                <input class="student_login" type="submit" value="Login" name="submit" id="submit" required/>
                            </div>
                        </div>
                    </form>
                </div>
            </fieldset>
        </div>
        
        <div id="footer">
            <?php include 'footer.php';?>
        </div>
    </body>

    </html>