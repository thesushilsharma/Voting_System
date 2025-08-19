<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="windicss">

  <h2>Dashboard</h2>

  <div class="flex flex-col justify-center items-center md:flex-row">
    <a class="active hover:underline" href="./menu.php">Home</a>
    <a class="hover:underline" href="./admin.php">Admin Login</a>
    <a class="hover:underline" href="./index.php">Student Login</a>
    <a class="hover:underline" href="https://www.linkedin.com/in/thesushilsharma">About me</a>
    <a class="hover:underline" href="https://github.com/thesushilsharma">Work with me</a>
  </div>

  <div class="flex justify-center items-center">
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>