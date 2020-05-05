<?php
include "config.php";
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style type="text/css">
            .Table {
                display: table;
            }
            
            .Title {
                display: table-caption;
                text-align: center;
                font-weight: bold;
                font-size: larger;
            }
            
            .Heading {
                display: table-row;
                font-weight: bold;
                text-align: center;
            }
            
            .Row {
                display: table-row;
            }
            
            .Cell {
                display: table-cell;
                border: solid;
                border-width: thin;
                padding-left: 5px;
                padding-right: 5px;
            }
        </style>
    </head>

    <body>
        <div class="Table">
            <fieldset>
                <legend class="Title">General Member</legend>
                <?php
$sql = "SELECT name, Representative FROM candidates where Representative='gm'";
$result = mysqli_query($con, $sql);
$resultcheck = mysqli_num_rows($result);
if($resultcheck > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
 echo"      <div class='Heading'>
               <div class='Cell'>";
 echo"                 <p>".$row['name']."</p>";
 echo"             </div>
                <div class='Cell'>";
 echo"                <p>". $row['Representative']."</p>";
 echo"           </div>
                <div class='Cell'>";
 echo"               <p>Button</p>
                </div>
            </div>";
    }
} else {
    echo "0 results";
}
        ?>
            </fieldset>
            <fieldset>
                <legend class="Title">Slate</legend>
                <?php

$sql = "SELECT name, Representative FROM candidates where Representative='slate'";
$result = mysqli_query($con, $sql);
$resultcheck = mysqli_num_rows($result);
if($resultcheck > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

 echo"      <div class='Heading'>
               <div class='Cell'>";
 echo"                 <p>".$row['name']."</p>";
 echo"             </div>
                <div class='Cell'>";
 echo"                <p>". $row['Representative']."</p>";
 echo"           </div>
                <div class='Cell'>";
 echo"               <p>Button</p>
                </div>
            </div>";
    }
} else {
    echo "0 results";
}
?>
            </fieldset>
            <fieldset>
                <legend class="Title">Sports</legend>
                <?php
$sql = "SELECT name, Representative FROM candidates where Representative='Sports'";
$result = mysqli_query($con, $sql);
$resultcheck = mysqli_num_rows($result);
if($resultcheck > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
 echo"      <div class='Heading'>
               <div class='Cell'>";
   echo"                 <p>".$row['name']."</p>";
   echo"             </div>
                <div class='Cell'>";
    echo"                <p>". $row['Representative']."</p>";
     echo"           </div>
                <div class='Cell'>";
     echo"               <p>Button</p>
                </div>
            </div>";
    }
} else {
    echo "0 results";
}
?>
            </fieldset>
        </div>
    </body>

    </html>