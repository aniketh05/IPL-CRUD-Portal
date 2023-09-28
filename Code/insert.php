<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <title>Insert Data</title>
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
          <li class="nav-item active">
            <a class="nav-link" href="insert.php">Insert</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view.php">View</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="update.php">Update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="delete.php">Delete</a>
          </li>
        </ul>
        <span class="navbar-text">
          Mumbai Indians
        </span>
      </div>

    </nav>
    <h3 style="text-align:center; color: firebrick ">Insert Data of the Player into Mumbai Indians Database</h3>
    <hr><h3 style="text-align:center; color: steelblue">Batting Statistics of the Player</h3><hr>

  <form method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" id="inputEmail4" name="fname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last Name</label>
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

 <hr><hr><h3 style="text-align:center; color: steelblue">Bowling Statistics of the Player</h3><hr>

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
 
  <button type="submit" class="btn btn-primary">Submit</button><hr>
</form>

<?php

$conn = mysqli_connect("localhost","root","","form");

    if(mysqli_connect_error()){
      die("Not connected to MySQL Database. Error! :("."<br>");
}

//print_r ($_POST);

if(array_key_exists("fname",$_POST)){
  $insertQuery = "INSERT INTO info (fname,lname,Matches,Runs,HighestScore,BatAverage,StrikeRate,Hundreds,Fifties,Fours,Sixes,Wickets,BBM,BowlAverage,Econ) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[Matches]','$_POST[Runs]','$_POST[HighestScore]','$_POST[BatAverage]','$_POST[StrikeRate]','$_POST[Hundreds]','$_POST[Fifties]','$_POST[Fours]','$_POST[Sixes]','$_POST[Wickets]','$_POST[BBM]','$_POST[BowlAverage]','$_POST[Econ]')";

 //echo $insertQuery;

 $result = mysqli_query($conn,$insertQuery);

 if($result){
   echo "Data inserted successfully!";
 }else{
   echo "Data NOT inserted successfully!";
 }

}

?>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
                  if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
    </script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
