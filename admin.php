<?php
if (isset($_POST['btnLogin'])) {
    $admin = $_POST['admin'];
    $password = $_POST['password'];
    if ($admin == "sharma" && $password == "sushil") {
        header("location: result.php");
    } else {
        echo "<script type='text/javascript'>alert('Enter Valid User id and Password');</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Administrator</title>
</head>

<body>
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
    <div class="bg-gradient-to-r from-blue-500 to-blue-700">
  <div class="container mx-auto flex justify-center items-center h-screen">
    <div class="login-page w-full max-w-md">
      <div class="form">
        <br>
        <form class="login-form" method="POST">
          <div class="mb-4">
            <h2 class="text-white text-2xl font-bold">System Admin Login</h2>
          </div>

          <div class="mb-4">
            <input type="text" name="admin" value="" placeholder="username" class="w-full border-2 border-gray-300 rounded px-4 py-2" />
          </div>

          <div class="mb-4">
            <input type="password" name="password" value="" placeholder="Password" class="w-full border-2 border-gray-300 rounded px-4 py-2" />
          </div>

          <div class="mb-4">
            <input class="admin_login" type="submit" value="Login" name="btnLogin" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


    <br>
    <div>
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>