<?php
include 'config.php';
session_start();
$sid      = $_REQUEST['id'];

$slate00="SELECT COUNT(slateid) as ct,(SELECT cname FROM candidate WHERE id= r.slateid) as cname FROM results r WHERE sid='431605' GROUP BY slateid;";
$result   = mysqli_query($con,$slate00);

$gm00 = "SELECT COUNT(gmid) as ct,(SELECT cname FROM candidate WHERE id= r.gmid) as cname FROM results r WHERE sid='431605' GROUP BY gmid;";
$result02 = mysqli_query($con,$gm00);

// SELECT id, SUBSTRING_INDEX(gmid,',',1) AS GM1, SUBSTRING_INDEX(SUBSTRING_INDEX(gmid,',',2),',',-1) AS GM2 FROM results;
//create table sushil SELECT id, SUBSTRING_INDEX(gmid,',',1) AS GM1, SUBSTRING_INDEX(SUBSTRING_INDEX(gmid,',',2),',',-1) AS GM2, sid FROM results

$sr00="SELECT COUNT(sportsid) as ct,(SELECT cname FROM candidate WHERE id= r.sportsid) as cname FROM results r WHERE sid='431605' GROUP BY sportsid;";
$result03 = mysqli_query($con,$sr00);

?>
   <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>SRC</title>
        <style>
            * {
                box-sizing: border-box;
        }
            
            .navbar {
                overflow: hidden;
                background-color: #333;
                position: fixed;
                top: 0;
                width: 100%;
            }
            
            .navbar a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }
            
            .navbar a:hover {
                background: #ddd;
                color: black;
            }
            
            .main {
                padding: 16px;
                margin-top: 30px;
                height: 1500px;
                /* Used in this example to enable scrolling */
            }
        </style>
        <style>
            div.darkTable {
                font-family: "Arial Black", Gadget, sans-serif;
                border: 2px solid #000000;
                background-color: #4A4A4A;
                width: 100%;
                height: 200px;
                text-align: center;
                border-collapse: collapse;
            }
            
            .divTable.darkTable .divTableCell,
            .divTable.darkTable .divTableHead {
                border: 1px solid #4A4A4A;
                padding: 3px 2px;
            }
            
            .divTable.darkTable .divTableBody .divTableCell {
                font-size: 13px;
                color: #E6E6E6;
            }
            
            .divTable.darkTable .divTableRow:nth-child(even) {
                background: #888888;
            }
            
            .divTable.darkTable .divTableHeading {
                background: #000000;
                border-bottom: 3px solid #000000;
            }
            
            .divTable.darkTable .divTableHeading .divTableHead {
                font-size: 15px;
                font-weight: bold;
                color: #E6E6E6;
                text-align: center;
                border-left: 2px solid #4A4A4A;
            }
            
            .divTable.darkTable .divTableHeading .divTableHead:first-child {
                border-left: none;
            }
            
            .darkTable .tableFootStyle {
                font-size: 12px;
            }
            /* DivTable.com */
            
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
    </head>

    <body >
        <div>
            <div class="navbar">
                <a class="active" href="elctionpoll.php">Home</a>
                <a href="result.php">Back</a>
                <a href="menu.php">Logout</a>
            </div>
            <center>
                <br>
                <br>
                <h2>Election Results</h2>
                <br>
                <br>
                <div class="divTable darkTable">
                    <div class="divTableHeading">
                        <div class="divTableRow">
                            <div class="divTableHead">Name</div>
                            <div class="divTableHead">Total no of votes</div>
                        </div>
                    </div>
                    <div class="divTableBody">
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<div class='divTableRow'>
                                                        <div class='divTableCell'>" . $row['cname'] . "</div> <div class='divTableCell'>" . $row['ct'] . "</div>
                                                            </div>";
                        }
                        ?>
                        <?php
                        while ($row = mysqli_fetch_array($result02)) {
                            echo "<div class='divTableRow'>
                                                        <div class='divTableCell'>" . $row['cname'] . "</div> <div class='divTableCell'>" . $row['ct'] . "</div>
                                                            </div>";
                        }
                        ?>
                        <?php
                        while ($row = mysqli_fetch_array($result03)) {
                            echo "<div class='divTableRow'>
                                                        <div class='divTableCell'>" . $row['cname'] . "</div> <div class='divTableCell'>" . $row['ct'] . "</div>
                                                            </div>";
                        }
                        ?>
                   </div>
                </div>
            </center>
        </div>
        <div id="footer">

            <?php
include 'footer.php';
?>
       </div>
    </body>

    </html>