<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include'links.php' ?>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h3 id="head">
    <div  id="schoolname">X High School</div>
    <div id="eiin">School Code : 7759 | EIIN : 111925</div>
  </h3>
  <div class="logout">
    <a href="logout.php">Logout</a>
  </div>
  <div class="menu">
  <ul>

    <li>Home</li>

    <li>About Us
      <ul>
        <br>
        <li>At a Glance</li>
        <li>History</li>
        <li>Infrustructure</li>
        <li>Mission & Vision</li>
        <li>Achievements</li>
      </ul>
    </li>

    <li>Academic
      <ul>
        <br>
        <li>Class Routine
          <ul>
            <li>class 6</li>
            <li>class 7</li>
            <li>class 8</li>
            <li>class 9</li>
            <li>class 10</li>
          </ul>

        </li>

        <li>Exam Routine</li>
        <li>Syllabus</li>
      </ul>
    </li>

    <li>Administration
      <ul>
        <br>
        <li>Governing Body</li>
        <li>Message from Chairman</li>
        <li>Message from Headmaster</li>
        <li>Teachers' List</li>
        <li>Officers & Stuffs</li>
      </ul>
    </li>

    <li>Admission
      <ul>
        <br>
        <li>Admission Circular</li>
        <li>Prospectus</li>
        <li>Selected List</li>
        <li>Waiting List</li>
      </ul>
    </li>

    <li>Result
      <ul>
        <br>
        <li>JSC</li>
        <li>SSC</li>
        <li>Academic Result
        </li>
      </ul>
    </li>

    <li>Notice</li>

    <li>Contact</li>

  </ul>
  </div>


  

</body>
</html>