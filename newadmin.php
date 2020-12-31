


<!DOCTYPE html>
<html>
<title>Customer Relation Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<body>

  <div class="bgimg-2 w3-display-container w3-opacity-min"id="gallery">
    <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide"><u>NEW USER</u></span>
    </div>
  </div>
  <br><br>

 <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
<h2 class="w3-center"><i class="fa fa-user" style="font-size:25px;color:black"></i> New Admin Form  </h2>
<p class="w3-center"><em>Customer Relation Management</em></p>

        <i class="fa fa-circle fa-fw w3-text-green w3-xlarge w3-margin-right" aria-hidden="true"></i>Enter the details to create a new account <br>

      <?php
       if(isset($_POST['submit']))
{

 include_once'dbh.inc.php';

 $name=$_POST['name'];
 $username=$_POST['username'];
 $age=$_POST['age'];
 $address=$_POST['address'];
 $gender=$_POST['gender'];
 $occupation=$_POST['occupation'];
 $pwd=$_POST['pwd'];
$sql="INSERT INTO admin(name,username,age,address,gender,occupation,pwd) VALUES('$name','$username','$age','$address','$gender','$occupation','$pwd');";
mysqli_query($conn,$sql);
echo"<h5>New Admin Account Created</h5>";
}
?>

      <form action="" target="" method="POST">
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Name" name="name">
                </div>
              </div>
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Username" name="username">
                </div>
              </div>
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Age" name="age">
                </div>
              </div>
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Address" name="address">
                </div>
              </div>
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Gender" name="gender">
                </div>
              </div>
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Occupation" name="occupation">
                </div>
              </div>
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Create Password" name="pwd">
                </div>
              </div>


              <button class="w3-button w3-green w3-left w3-section" type="submit" name="submit">
                <i class="fa fa-user"></i> Submit
              </button>
            </form>&nbsp;&nbsp;<a href="index.html"></a><button class="w3-button w3-green w3-left w3-section" type="submit" name="submit">
                <i class="fa fa-home"></i> Home</a>
    </div>
  </div>

  </body>
  </html>
