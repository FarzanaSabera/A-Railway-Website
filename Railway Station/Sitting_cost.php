<body>


<h2> Ticket Price </h2>
<style>
body {
    background-color: lightblue;
}


table {
	
    border-collapse: collapse;
    width: 50%;
}

th, td {
    text-align: left;
    padding: 10px;
}

tr:nth-child(even){background-color: lightgreen}



</style>





</body>




<?php
$cn=mysql_connect("127.0.0.1","root","");

mysql_select_db("station",$cn);


$q="select * from cost ";
$mq=mysql_query($q,$cn);


echo"<table>";
echo"<tr>";
echo"<th>Route_Name</th>";
echo"<th>Ticket_Price</th>";
echo"<th>Selected_Railway</th>";

echo"</tr>";

while($row=mysql_fetch_array($mq))
{
 echo"<tr>";
 echo"<td>".$row['Route_Name']."</td>";
 echo"<td>".$row['Ticket_Price']."</td>";
 echo"<td>".$row['Selected_Railway']."</td>";

 
 
 echo"</tr>";
}
?>