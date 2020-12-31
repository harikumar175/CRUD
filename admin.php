<!DOCTYPE html>
<html>
<head>
<title>Customer Relation Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" id="topNav" >
  </div>
    </div>

    <!-- Navbar on small screens -->

   <div class="bgimg-2 w3-display-container w3-opacity-min"id="projects">
      <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide"><u><b>PROJECT QUEUE</b></u></span>
      </div>
    </div>
  <div class="w3-content w3-container w3-padding-64" id="about">
    <h2 class="w3-center">List of Customer Products Queue <i class="fa fa-line-chart" style="font-size:25px;color:green"></i></h2>
    <h3 class="w3-center">Customer Relation Management</h3>
    <p class="w3-center"><em>Analyse.Manage</em></p>
    <p>These are some of the projects queue </p>

</div>

    <style>
 table {
   font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
   border-collapse: collapse;
   width: 100%;
 }

 table td, table th {
   border: 1px solid #ddd;
   padding: 8px;
 }

 table tr:nth-child(even){background-color: #f2f2f2;}

 table tr:hover {background-color: #ddd;}

 table th {
   padding-top: 10px;
   padding-bottom: 10px;
   text-align: left;
   background-color: #4CAF50;
   color: white;
 }
 </style>

 <body>

 <?php
   include('dbh.inc.php');
   $sqlget="SELECT*FROM data";
   $sqldata=mysqli_query($conn,$sqlget);
 echo"<table>";
  echo" <tr>
     <th>Si.No</th>
      <th>Name</th>
      <th>Customer Product</th>
      <th>Address</th>
      <th>Consignment Number</th>
      <th>Count</th>
      <th>Phone Number</th>
      <th>Emailid</th>
      <th>Actions</th>
       </tr>";
  while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
  {
    echo"<tr><td>";
    echo $row['id'];
    echo"</td><td>";
    echo $row['name'];
    echo"</td><td>";
    echo $row['product'];
     echo"</td><td>";
    echo $row['address'];
     echo"</td><td>";
    echo $row['number'];
     echo"</td><td>";
    echo $row['counts'];
     echo"</td><td>";
    echo $row['phnumber'];
    echo"</td><td>";
    echo $row['emailid'];
    echo"</td><td>";
?>

   






    <a href='crud.php?delete=<?php echo $row['id'];?>'";
    <?php
    echo"<button class='w3-button w3-red' type='submit' name='delete' >";
    echo"Delete";
    echo"</td></tr>";
   }
  echo"</table>";
  ?>
  <br>
<center><a href="update.php"> <button class='w3-button w3-green' type='submit' name='edit'>Update Data</button></a></center><br/><br/>


    </body>
    </html>
