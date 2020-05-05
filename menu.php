<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  height: 640.5px;;
  background: #020B13;
  color: #c0c2c4;
}
            
.pill-nav a {
  display: inline-block;
  color: #c0c2c4;
  text-align: center;
  padding: 14px;
  text-decoration: none;
  font-size: 17px;
  border-radius: 5px;
}

.pill-nav a:hover {
  background-color: #ddd;
  color: black;
}

.pill-nav a.active {
  background-color: dodgerblue;
  color: white;
}
</style>
</head>
<body >

<h2>Sushil Login</h2>

<div class="pill-nav">
  <a class="active" href="/menu.php">Home</a>
  <a href="/admin.php">Admin Login</a>
  <a href="/index.php">Student Login</a>
  <a href="https://www.linkedin.com/in/thesushilsharma">About me</a>
  <a href="https://github.com/thesushilsharma">Work with me</a>
</div>
<div >
             <?php include 'footer.php';?>
        </div>
</body>
</html>
