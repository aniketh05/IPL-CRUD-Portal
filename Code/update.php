<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Update Data</title>
    <style>
      table {
        border-collapse: collapse;
        width: 50%;
        color: black; 
        font-size: 18px;
        text-align: left;
      } 
      th {
        background-color: darkgrey;
        color: black;
      }
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.html">MUMBAI INDIANS</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.html"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="insert.php">Insert</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view.php">View</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="update.php">Update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="delete.php">Delete</a>
          </li>
        </ul>
        <span class="navbar-text" >
          Mumbai Indians
        </span>
      </div>
    </nav>

    <img src="https://s3.india.com/wp-content/uploads/2017/03/mumbai.jpg" width="300" alt="" />
    <img src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2019/11/15/881213-twitter-6.jpg" width="320" alt="" />
    <img src="https://pbs.twimg.com/media/D6Yq2XfVUAA3Dxs.jpg" width="320" alt="" />
    <img src="https://s3.india.com/wp-content/uploads/2017/03/mumbai.jpg" width="305" alt="" /> <br><hr>
    <h3 style="text-align:center; color: firebrick ">Performance Update</h3><hr>

    <h4 style="text-align:center; color: steelblue ">View Data of Mumbai Indians Team</h4><hr>
    <form method="post"> 
      <button type="submit" style="width:200px; height:50px; margin:0 46%;position:relative;left:-50px;" class="btn btn-info" name="submit1">Click here</button>
    </form><hr>
      

    <?php
      $conn = mysqli_connect("localhost","root","","form");

      if(mysqli_connect_error()){
        die("Not connected to MySQL Database. Error! :("."<br>"); 
      }    

      if(isset($_POST['submit1'])){ 
        //print_r ($_POST);
        $selectQuery = "SELECT * FROM info"; 
        $result1 = mysqli_query($conn,$selectQuery);

        if (mysqli_num_rows($result1) > 0) 
        { 
          echo " <table>
          <tr>
          <th>id</th> 
          <th>fname</th>
          <th>lname</th> 
          <th>Matches</th>
          <th>Runs</th> 
          <th>HighestScore</th> 
          <th>BatAverage</th>
          <th>StrikeRate</th>
          <th>Hundreds</th>
          <th>Fifties</th>
          <th>Fours</th>
          <th>Sixes</th>
          <th>Wickets</th>
          <th>BBM</th>
          <th>BowlAverage</th>
          <th>Econ</th> 
          </tr>";

          while($row = mysqli_fetch_array($result1)) 
          {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["fname"]. "</td><td>" . $row["lname"] . "</td><td>" . $row["Matches"] . "</td><td>" . $row["Runs"] . "</td><td>" . $row["HighestScore"] . "</td><td>" . $row["BatAverage"] . "</td><td>" . $row["StrikeRate"] . "</td><td>" . $row["Hundreds"] . "</td><td>" . $row["Fifties"] . "</td><td>" . $row["Fours"] . "</td><td>" . $row["Sixes"] . "</td><td>" . $row["Wickets"] . "</td><td>" . $row["BBM"] . "</td><td>" . $row["BowlAverage"] . "</td><td>" . $row["Econ"] . "</td></tr>"; 
          }
          echo "</table>";
        }
        else{
        echo "No Data Available!";
        }
       
      }
    ?>
   <hr>
   <h4 style="text-align:center; color: steelblue ">Performance Update of Existing Players</h4>


 <h6 style="text-align:center; color: steelblue ">Enter Current Player ID and update the performance of the player</h6>
 

 
  <form method="POST">

    <div class="form-row">
      <div class="form-group col-md-5">
       
        <input type="text" style="width:400px; height:50px; margin:0 92%;position:relative;left:-50px;" placeholder="Enter Current ID" class="form-control" id="id" name="id">
      </div>
    </div>
    <hr><h4 style="text-align:center; color: steelblue">Batting Statistics of the Player</h4><hr>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">First Name</label>
        <input type="text" class="form-control" id="inputEmail4" name="fname">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Last name</label>
        <input type="text" class="form-control" id="inputPassword4" name="lname">
      </div>
    </div>

    <div class="form-row"> 
  <div class="form-group col-md-2">
      <label for="inputState">Matches</label>
      <input type="text" class="form-control" id="inputAddress" name="Matches">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Runs</label>
      <input type="text" class="form-control" id="inputAddress" name="Runs">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Highest Score</label>
      <input type="text" class="form-control" id="inputZip" name="HighestScore">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">Average</label>
      <input type="text" class="form-control" id="inputZip" placeholder="Enter Batting Average" name="BatAverage">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Strike Rate</label>
      <input type="text" class="form-control" id="inputZip" name="StrikeRate">
    </div>
  </div>

  <div class="form-row"> 
    <div class="form-group col-md-3">
      <label for="inputState">100</label>
      <input type="text" class="form-control" id="inputAddress" name="Hundreds">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">50</label>
      <input type="text" class="form-control" id="inputZip" name="Fifties">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">4s</label>
      <input type="text" class="form-control" id="inputZip" name="Fours">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">6s</label>
      <input type="text" class="form-control" id="inputZip" name="Sixes">
    </div>
  </div>

 <hr><hr><h4 style="text-align:center; color: steelblue">Bowling Statistics of the Player</h4><hr>

  <div class="form-row"> 
    <div class="form-group col-md-3">
      <label for="inputState">Wickets</label>
      <input type="text" class="form-control" id="inputAddress" name="Wickets">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">BBM</label>
      <input type="text" class="form-control" id="inputZip" placeholder="Enter Best Bowling in Match" name="BBM">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">Average</label>
      <input type="text" class="form-control" id="inputZip" placeholder="Enter Bowling Average" name="BowlAverage">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">Econ</label>
      <input type="text" class="form-control" id="inputZip" name="Econ">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
  </form>

  <?php
  

  $conn = mysqli_connect("localhost","root","","form");

    if(mysqli_connect_error()){
      die("Not connected to MySQL Database. Error! :("."<br>");

    }

  if (array_key_exists("Matches", $_POST)) {
    $insertQuery = "UPDATE info SET fname='$_POST[fname]',lname='$_POST[lname]',Matches='$_POST[Matches]',Runs='$_POST[Runs]',HighestScore='$_POST[HighestScore]',BatAverage='$_POST[BatAverage]',StrikeRate='$_POST[StrikeRate]',Hundreds='$_POST[Hundreds]',Fifties='$_POST[Fifties]',Fours='$_POST[Fours]',Sixes='$_POST[Sixes]',Wickets='$_POST[Wickets]',BBM='$_POST[BBM]',BowlAverage='$_POST[BowlAverage]',Econ='$_POST[Econ]' WHERE id='$_POST[id]'";
   // echo $insertQuery;
    $result = mysqli_query($conn, $insertQuery);

    if ($result) {
      echo "Data successfully updated";
    } else {
      echo "An error occurred ";
    }


  mysqli_close($conn);
  }

//$sql = "UPDATE `info` SET `fname` = '$fname' , `lname` = '$lname', `Matches` = '$Matches', `Runs` = '$Runs', `HighestScore` = '$HighestScore', `BatAverage` = '$BatAverage', `StrikeRate` = '$StrikeRate', `Hundreds` = '$Hundreds', `Fifties` = '$Fifties', `Fours` = '$Fours', `Sixes` = '$Sixes', `Wickets` = '$Wickets', `BBM` = '$BBM', `BowlAverage` = '$BowlAverage', `Econ` = '$Econ' WHERE `info`.`id` = $id";
  //$result = mysqli_query($conn, $sql);

  //  if($result){
  //    $update = true;
  //}
  //else{
  //    echo "We could not update the record successfully";
  //}
  //}
  
  ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>





</html>