<?php
include "config.php";

$result1= mysqli_query($con,"select * from voting ");

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>SRC</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            div.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  height: 100px;
  text-align: center;
  border-collapse: collapse;
}
.divTable.blueTable .divTableCell, .divTable.blueTable .divTableHead {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
.divTable.blueTable .divTableBody .divTableCell {
  font-size: 13px;
}
.divTable.blueTable .divTableRow:nth-child(even) {
  background: #D0E4F5;
}
.divTable.blueTable .divTableHeading {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
.divTable.blueTable .divTableHeading .divTableHead {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: center;
  border-left: 2px solid #D0E4F5;
}
.divTable.blueTable .divTableHeading .divTableHead:first-child {
  border-left: none;
}

.blueTable .tableFootStyle {
  font-size: 14px;
}
.blueTable .tableFootStyle .links {
	 text-align: right;
}
.blueTable .tableFootStyle .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
.blueTable.outerTableFooter {
  border-top: none;
}
.blueTable.outerTableFooter .tableFootStyle {
  padding: 3px 5px; 
}

.divTable{ display: table; }
.divTableRow { display: table-row; }
.divTableHeading { display: table-header-group;}
.divTableCell, .divTableHead { display: table-cell;}
.divTableHeading { display: table-header-group;}
.divTableFoot { display: table-footer-group;}
.divTableBody { display: table-row-group;}
        </style>

        <style>
            * {
                box-sizing: border-box;
            }
            
            body {
              height:auto;
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }
            
            .header {
                overflow: hidden;
                background-color: #f1f1f1;
                padding: 20px 10px;
            }
            
            .header a {
                float: left;
                color: black;
                text-align: center;
                padding: 12px;
                text-decoration: none;
                font-size: 18px;
                line-height: 25px;
                border-radius: 4px;
            }
            
            .header a.logo {
                font-size: 25px;
                font-weight: bold;
            }
            
            .header a:hover {
                background-color: #ddd;
                color: black;
            }
            
            .header a.active {
                background-color: dodgerblue;
                color: white;
            }
            
            .header-right {
                float: right;
            }
            
            @media screen and (max-width: 500px) {
                .header a {
                    float: none;
                    display: block;
                    text-align: left;
                }
                .header-right {
                    float: none;
                }
            }

        </style>
    </head>

    <body>
        <div>
            <center>
                <h2>Polls</h2></center>
        </div>
        <div class="header">
            <a href="https://github.com/thesushilsharma" class="logo">Sushil</a>
            <div class="header-right">
                <a class="active" href="result.php">Election RESULTS</a>
                <a href="votingsession.php">New Elections</a>
                <a class="active" href="Menu.php">Logout</a>
            </div>
        </div>
        <div >
            <form method="post" enctype="multipart/form-data">
                <center>
                    <br>
                    <h2>Select Election Date to View Result</h2>
                    <br>
                    <br>
                    <div class="divTable blueTable">
                    <div class="divTableHeading">
                    <div class="divTableRow">
                    <div class="divTableHead">Date </div>
                    <div class="divTableHead">View Result</div>
                    </div>
                    </div>
                    
                    <div class="divTableBody">

<?php
while($row=mysqli_fetch_array($result1))
{
echo "    <div class='divTableRow'>
<div class='divTableCell' style='color: black;'>".$row{'date'}."</div> <div class='divTableCell' ><a href='electionpoll.php?id=".$row{'id'}."' style='color: Red;'>VIEW!</a></div>
</div>";
}
?>
</div>
</div>
                </center>
            </form>
        </div>
        <div id="footer">

        <?php include 'footer.php';?>
        </div>

    </body>

    </html>
    