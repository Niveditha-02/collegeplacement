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
    .search-container {
        margin: 20px 0;
    }
    .search-input {
        width: 80%;
        padding: 10px;
        margin-right: 10px;
    }
    .search-button {
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
    }
    .search-button:hover {
        background-color: #218838;
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

<div class="search-container">
    <form action="view.php" method="GET" class="search-form">
        <input type="text" name="q" class="search-input" value="<?php echo htmlspecialchars($query ?? ''); ?>" placeholder="Search by Name or ID...">
        <button type="submit" class="search-button">Search</button>
    </form>
</div>

<?php
$query = ''; // Initialize the query variable

if (isset($_GET['q'])) {
    $query = htmlspecialchars($_GET['q']); // Get the search query and sanitize it

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "placement"; // Replace with your actual database name

    $conn = new mysqli("localhost", "root", "", "placement");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to search the database for studentname and sid
    $sql = "SELECT * FROM student WHERE branch LIKE '%$query%' OR semester LIKE '%$query%'";
    $result = $conn->query($sql);

    if ($result === false) {
        echo "Error: " . $conn->error;
    }
}
?>

<?php echo $deleteMsg??''; ?>
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
    if (isset($result) && $result !== false) { // Check if the result is set and the query execution was successful
        $sn = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $sn . "</td>";
            $sn++;

            echo "<td>" . htmlspecialchars($row['studentname']) . "</td>";
            echo "<td>" . htmlspecialchars($row['lastname']) . "</td>";
            echo "<td>" . htmlspecialchars($row['sid']) . "</td>";
            echo "<td>" . htmlspecialchars($row['password']) . "</td>";
            echo "<td>" . htmlspecialchars($row['semester']) . "</td>";
            echo "<td>" . htmlspecialchars($row['branch']) . "</td>";
            echo "<td>" . htmlspecialchars($row['branch_id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
            echo "<td>" . htmlspecialchars($row['mobile_number']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['address']) . "</td>";
            echo "</tr>";
        }
    }
    if (isset($conn)) {
        $conn->close();
    }
    ?>
    </tbody>
</table>
</font>
</body>
</html>
