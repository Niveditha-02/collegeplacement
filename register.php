<html>
<head>
<style>
table
{
   padding-top:10px;
   padding-left:10px;
}

img{
    transition: transform .1s;
    width:150px;
    height:60px;
    text-align: center;
}
img:hover{
    transform:scale(1.5);
}
</style>
</head>
<body>

<form action="" method="post">
<table class="table1" border="2">
       <thead>
        <tr bgcolor="#D3D3D3">
         <th>S.N</th>
         <th>TID</th>
         <th>Course Name </th>
         <th>Start_date</th>
         <th>Link </th>
         <th>...</th>
    </thead>
    <tbody>
      
<?php
     include('templates/header.php');
     $conn = mysqli_connect("localhost", "root", "", "placement");
     $query="select * from training"; 
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
         echo "<a href='reg.php'><img class='enlarge' src='images/reg.jpg'/></a>";
         echo "</td>";

     }
 ?>
 
  </tr>
</table>
 


 
    </form>
</body>
</html>











