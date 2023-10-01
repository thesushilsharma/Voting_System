<?php
include 'config.php';

$result4 = mysqli_query($con, "select * from candidate where position='Sports'");
$result5 = mysqli_query($con, "select * from candidate where position='slate'");
$result6 = mysqli_query($con, "select * from candidate where position='GM'");

$studentid = $_SESSION['studentid'];
$username  = $_SESSION['username'];
$result2   = mysqli_query($con, "select * from voter where studentid='$studentid' and username='$username'");

$count2 = 0;
$count1 = 0;
while ($row = mysqli_fetch_array($result2)) {
    $vid = $row["vid"];
}

echo $studentid = $_SESSION['studentid'];

$dt      = date("Y-m-d");
$result1 = mysqli_query($con, "select * from voting where date='$dt'");

while ($row1 = mysqli_fetch_array($result1)) {
    $count1++;
    
}
if ($count1 > 0) {
    $result3 = mysqli_query($con, "select * from results where vid=$vid and date='$dt'");
    while ($row2 = mysqli_fetch_array($result3)) {
        $count2++;
    }
    if ($count2 > 0) {
        echo "<script type='text/javascript'>alert('You have already Voted');window.location='menu.php';</script>";
        
    }
} else {
    echo "<script type='text/javascript'>alert('There is no Elections today.. ');window.location='menu.php';</script>";
}

if (isset($_POST['btnSave'])) {
    $id   = $_POST['r1'];
    $id2  = $_POST['r2'];
    
    $gm  =  $_POST["r3"];
    $id3= implode(",",$gm);
    
    $str1 = "select * from results where vid='$vid' ";
    $res  = mysqli_query($con, $str1);
    echo $str1;
    $result3 = mysqli_query($con, $str1);
    
    $count = 0;
    while ($row = mysqli_fetch_array($result3)) {
        $count++;
    }
    if ($count > 0) {
        echo "<script type='text/javascript'>alert('You have already Voted');window.location='menu.php';</script>";
        
    } else {
        
        $str = "INSERT INTO `results` (`id`, `sid`, `slateid`,`gmid`,`sportsid`,`vid`, `date`) VALUES (NULL, 431605, $id2,'$id3',$id, $vid,'$dt');";
        $res = mysqli_query($con, $str);
        echo "<script type='text/javascript'>alert('Thank you.. ');window.location='menu.php';</script>";
        
    }
    
}
?>
   <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Voting</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            div.redTable {
                border: 2px solid #A40808;
                background-color: #EEE7DB;
                width: 100%;
                text-align: center;
                border-collapse: collapse;
            }
            
            .divTable.redTable .divTableCell,
            .divTable.redTable .divTableHead {
                border: 1px solid #AAAAAA;
                padding: 3px 2px;
            }
            
            .divTable.redTable .divTableBody .divTableCell {
                font-size: 13px;
            }
            
            .divTable.redTable .divTableRow:nth-child(even) {
                background: #F5C8BF;
            }
            
            .divTable.redTable .divTableHeading {
                background: #A40808;
            }
            
            .divTable.redTable .divTableHeading .divTableHead {
                font-size: 19px;
                font-weight: bold;
                color: #FFFFFF;
                text-align: center;
                border-left: 2px solid #A40808;
            }
            
            .divTable.redTable .divTableHeading .divTableHead:first-child {
                border-left: none;
            }
            
            .redTable .tableFootStyle {
                font-size: 13px;
            }
            
            .redTable .tableFootStyle .links {
                text-align: right;
            }
            
            .redTable .tableFootStyle .links a {
                display: inline-block;
                background: #FFFFFF;
                color: #A40808;
                padding: 2px 8px;
                border-radius: 5px;
            }
            
            .redTable.outerTableFooter {
                border-top: none;
            }
            
            .redTable.outerTableFooter .tableFootStyle {
                padding: 3px 5px;
            }
           
            
            .divTable {
                display: table;
            }
            
            .divTableRow {
                display: table-row;
            }
            
            .divTableHeading {
                display: table-header-group;
            }
            
            .divTableCell,
            .divTableHead {
                display: table-cell;
            }
            
            .divTableHeading {
                display: table-header-group;
            }
            
            .divTableFoot {
                display: table-footer-group;
            }
            
            .divTableBody {
                display: table-row-group;
            }
        </style>
        <style>
        

.student_logout {
	box-shadow: 3px 4px 0px 0px #2016ab;
	background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	background-color:#79bbff;
	border-radius:5px;
	border:1px solid #337bc4;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	font-weight:bold;
	padding:12px 44px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.student_logout:hover {
	background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	background-color:#378de5;
}
.student_logout:active {
	position:relative;
	top:1px;
}

.Vote_button {
	box-shadow: 0px 10px 14px -7px #276873;
	background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
	background-color:#599bb3;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	font-weight:bold;
	padding:13px 32px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.Vote_button:hover {
	background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
	background-color:#408c99;
}
.Vote_button:active {
	position:relative;
	top:1px;
}
        </style>
    </head>

    <body style="background: #ff6e7f;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #bfe9ff, #ff6e7f);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #bfe9ff, #ff6e7f); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
color:black;
">
        <div>
            <center>
                <h2>Online Voting</h2></center>
        </div>
<div style="float:right">
<a href="logout.php" class="student_logout">Logout</a>
</div>
     
        <div >
            <form method="post" enctype="multipart/form-data">
                <center>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
   <fieldset>
                <legend class="Title">Choose a Sports Representative:</legend>
                    <br>
                    <br>
                    <div class="divTable redTable">
                        <div class="divTableHeading">
                            <div class="divTableRow">
                                <div class="divTableHead">Position</div>
                                <div class="divTableHead">Name of Sports Representative</div>
                                <div class="divTableHead">Vote</div>
                            </div>
                        </div>
                        <div class="divTableBody">
                        <?php
while ($row = mysqli_fetch_array($result4)) {
    echo '<div class="divTableRow">
                              
<div class="divTableCell">' . $row["position"] . '</div>
<div class="divTableCell">' . $row["cname"] . '</div>
<div class="divTableCell"><input type="radio" name="r1" value="' . $row["id"] . '">' . '</div>

                            </div>';
}
?>
                       </div>
                    </div>
                    </fieldset>
                    <br>
                    <fieldset>
                <legend class="Title">Choose a Slate:</legend>
                    <br>
                    <br>
                    <div class="divTable redTable">
                        <div class="divTableHeading">
                            <div class="divTableRow">
                                <div class="divTableHead">Position</div>
                                <div class="divTableHead">Name of Slate</div>
                                <div class="divTableHead">Vote</div>
                            </div>
                        </div>
                        <div class="divTableBody">
                        <?php
while ($row = mysqli_fetch_array($result5)) {
    echo '<div class="divTableRow">
                              
<div class="divTableCell">' . $row["position"] . '</div>
<div class="divTableCell">' . $row["cname"] . '</div>
<div class="divTableCell"><input type="radio" name="r2" value="' . $row["id"] . '">' . '</div>

                            </div>';
}
?>
                       </div>
                    </div>
                    </fieldset>
                    <br>
                    <fieldset>
                <legend class="Title">Choose a General Member:</legend>
                    <br>
                    <br>
                    <div class="divTable redTable">
                        <div class="divTableHeading">
                            <div class="divTableRow">
                                <div class="divTableHead">Position</div>
                                <div class="divTableHead">Name of General Member</div>
                                <div class="divTableHead">Vote</div>
                            </div>
                        </div>
                        <div class="divTableBody">
                        <?php
while ($row = mysqli_fetch_array($result6)) {
    echo '<div class="divTableRow">
                              
<div class="divTableCell">' . $row["position"] . '</div>
<div class="divTableCell">' . $row["cname"] . '</div>
<div class="divTableCell"><input type="checkbox" name="r3[]" value="' . $row["id"] . '">' . '</div>

                            </div>';
}
?>
                       </div>
                    </div>
                    </fieldset>
                    <br>
                    <div style="float:right" >
                        <input  class="Vote_button" type="submit" value="VOTE!" name="btnSave" />
                    </div>
                </center>
            </form>
        </div>
        <div style="background-color: #020B13;
	color: #c0c2c4;" >

            <?php
include 'footer.php';
?>
       </div>

    </body>

    </html>