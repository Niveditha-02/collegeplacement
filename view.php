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
        .div-img{  
    display:flex;
    padding-top:5%;
    padding-left:5%;
}
img{
    transition: transform .2s;
    width:70px;
    height:70px;
}
img:hover{
    transform:scale(2);
}
  </style>
</head>
<body>
<font face='Nunito Sans'>;

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
/*         .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        } */
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
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
<body>
    <div class="container">
        <h2>Search Students</h2>
        <form action="search.php" method="POST">
            <label for="branch">name:</label>
            <select name="branch" id="branch">
                <option value="">Select Branch</option>
                <option value="CSE">CSE</option>
                <option value="ECE">ECE</option>
                <option value="ME">ME</option>
                <option value="CE">CE</option>
            </select>
            <label for="sid">Sid:</label>
            <select name="sid" id="sid">
                <option value="">Select Sid</option>
                <option value="1">169</option>
                <option value="2">176</option>
                <option value="3">188</option>
<!--                 <option value="4"></option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option> -->
            </select>
            <button type="submit">Search</button>
        </form>
    </div>
</body>

                    
<?php
$query = ''; // Initialize the query variable

if (isset($_GET['branch'])) {
    $query = htmlspecialchars($_GET['branch']); // Get the search query and sanitize it

    // Connect to the database (replace with your database connection details)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "placement"; // Replace with your actual database name

    $conn = new mysqli("localhost", "root", "", "placement");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to search the database for studentname and sid
    $sql = "SELECT * FROM student WHERE branch LIKE '%$query%' OR sid LIKE '%$query%'";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="search-container">
        <h1>Search Results</h1>
        <form action="view.php" method="GET" class="search-form">
            <input type="text" name="branch" class="search-input" value="<?php echo htmlspecialchars($query); ?>" placeholder="Search...">
            <button type="submit" class="search-button">Search</button>
        </form>
        
        <?php
        if (isset($result)) {
            if ($result->branch > 0) {
                echo "<ul>";
                while ($row = $result->fetch_assoc()) {
                    echo "<li>" . htmlspecialchars($row['branch']) . " (ID: " . htmlspecialchars($row['sid']) . ")</li>";
                }
                echo "</ul>";
            } else {
                echo "No results found.";
            }
        }
        if (isset($conn)) {
            $conn->close();
        }
        ?>
    </div>
</body>
</html>



                    

    <?php echo $deleteMsg??''; ?>
      <table class="table table-bordered" border="2">
       <thead>
        <tr bgcolor="#D3D3D3">
         <th>S.N</th>
         <th>Name</th>
         <th>Last Name </th>
         <th>Student ID </th>
         <th>Password </th>
         <th>Semester </th>
         <th>Branch </th>
         <th>Branch ID </th>
         <th>Gender</th>
         <th>Mobile Number</th>
         <th>Email</th> 
         <th>Address</th>  
    </thead>
    <tbody>
    <?php
     $conn = mysqli_connect("localhost", "root", "", "placement");
     $query="select * from student"; 
     $r=mysqli_query($conn,$query);
     $sn=1;
     while($row=mysqli_fetch_row($r)) 
     {
          echo "<tr>";  echo "<td>";
          echo $sn; echo "</td>";
          $sn++;

         echo "<td>";
         echo $row[0]; echo "</td>";
       
         echo "<td>";
         echo $row[1]; echo "</td>";

         echo "<td>";
         echo $row[2]; echo "</td>";

         echo "<td>";
         echo $row[3]; echo "</td>";

         echo "<td>";
         echo $row[4]; echo "</td>";

         echo "<td>";
         echo $row[5]; echo "</td>";

         echo "<td>";
         echo $row[6]; echo "</td>";

         echo "<td>";
         echo $row[7]; echo "</td>";

         echo "<td>";
         echo $row[8]; echo "</td>";

         echo "<td>";
         echo $row[9]; echo "</td>";

         echo "<td>";
         echo $row[10]; echo "</td>";
     }
 ?>
 
</tr>

</table>
    </font>
</body>
</html>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>
