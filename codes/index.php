<?php

include 'config.php';

// Initialize the variable
$username = "";
$studentid = "";

// Validate user input
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
$studentid = htmlspecialchars($_POST['studentid'], ENT_QUOTES, 'UTF-8');

    $sql = "SELECT * FROM voter WHERE studentid = '$studentid' AND username = '$username'";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['studentid'] = $studentid;
        $_SESSION['username'] = $username;
        header("Location: election.php"); // Redirect to a protected page upon successful login
        exit();
    } else {
        $error = "Invalid studentid or username.";
    }
}
?>
<!-- // HTML form for login -->
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="windicss flex justify-center bg-blue-200">
    <h2>Login</h2>
    <?php if (isset($error)) {
        echo "<p>$error</p>";
    } ?>
    <form method="POST" action="index.php" class="mx-auto md:w-1/2">
        <label for="studentid">Student ID:</label>
        <input type="text" id="studentid" name="studentid" class="w-full border-2 border-gray-300 rounded px-4 py-2" required><br><br>
        <label for="username">Username:</label>
        <input type="password" id="username" name="username" class="w-full border-2 border-gray-300 rounded px-4 py-2" required><br><br>
        <input type="submit" value="Login" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    </form>
</body>

</html>

<?php
$con->close();
?>