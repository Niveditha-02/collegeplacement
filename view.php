<?php
include("config/db_connect.php");
include("templates/header.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    .div-img {
        display: flex;
        padding-top: 5%;
        padding-left: 5%;
    }
    img {
        transition: transform .2s;
        width: 70px;
        height: 70px;
    }
    img:hover {
        transform: scale(2);
    }
</style>
</head>
<body>
<font face='Nunito Sans'>

<section class="intro">
  <div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                  <table class="table table-striped mb-0">
                  
<div class="div-img">
<a href="a_app.php"><img src="images/back.png"></a>
</div>

<title>Search</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    label, select, input {
        display: block;
        width: 100%;
        margin-bottom: 10px;
    }
    button {
        padding: 10px 20px;
        background-color: #28a745;
        color: white;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #218838;
    }
</style>
<div class="container">
    <h2>Search Students</h2>
    <form method="POST" action="">
        <label for="branch">Branch:</label>
        <select name="branch" id="branch">
            <option value="">Select Branch</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="ME">ME</option>
            <option value="CE">CE</option>
        </select>
        
        <label for="semester">Semester:</label>
        <select name="semester" id="semester">
            <option value="">Select Semester</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>
        
        <button type="submit" name="search">Search</button>
    </form>
</div>

<?php
if(isset($_POST['search'])){
    $branch = $_POST['branch'];
    $semester = $_POST['semester'];
    
    $query = "SELECT * FROM student WHERE 1";
    
    if($branch != ""){
        $query .= " AND branch='$branch'";
    }
    
    if($semester != ""){
        $query .= " AND semester='$semester'";
    }
    
    $result = mysqli_query($conn, $query);
}
else{
    $query = "SELECT * FROM student";
    $result = mysqli_query($conn, $query);
}

echo $deleteMsg??'';
?>
<table class="table table-bordered" border="2">
<thead>
<tr bgcolor="#D3D3D3">
    <th>S.N</th>
    <th>Name</th>
    <th>Last Name</th>
    <th>Student ID</th>
    <th>Password</th>
    <th>Semester</th>
    <th>Branch</th>
    <th>Branch ID</th>
    <th>Gender</th>
    <th>Mobile Number</th>
    <th>Email</th>
    <th>Address</th>
</tr>
</thead>
<tbody>
<?php
$conn = mysqli_connect("localhost", "root", "", "placement");
$query="select * from student"; 
$r=mysqli_query($conn,$query);
$sn = 1;
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $sn++ . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['student_id'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['semester'] . "</td>";
    echo "<td>" . $row['branch'] . "</td>";
    echo "<td>" . $row['branch_id'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['mobile_number'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "</tr>";
}
?>
</tbody>
</table>

</font>
</body>
</html>
