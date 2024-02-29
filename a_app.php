<!DOCTYPE html>
<html>
<head>
<style>  
  .div-img{  
    display:flex;
    padding-top:5%;
    padding-left:5%;
}
img{
    transition: transform .1s;
    width:70px;
    height:70px;
}
img:hover{
    transform:scale(1.5);
}
        .container {
          display: flex;
          justify-content: center;
          align-items: start;
          flex-wrap: wrap;
          width: 80vw;
          margin: 0 auto;
          min-height: 10vh;
          padding-top:8%;
          padding-right:15%;
          font-family: 'Poppins';
          font-size: 25px;
         
       }
.btn {
  flex: 1 1 auto;
  margin: 10px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: white;
  box-shadow: 0 0 20px #eee;
  border-radius: 10px;
 
 }

.btn:hover {
  background-position: right center;  
}

.btn-1 {
  background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%); 
}

.btn-2 {
  background-image: linear-gradient(to right, #fbc2eb 0%, #a6c1ee 51%, #fbc2eb 100%);
}

.btn-3 {
  background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%);
}
  
</style>
</head>
<body>
      <?php include('templates/header.php'); ?>

    <div class="div-img">              
    <img src="images/student.png"/>
    <h4><b>STUDENT:</b></h4>
    <div class="container">
     <a class="btn btn-1" href="add.html">Add</a>
     <a class="btn btn-2" href="delete.html">Delete</a>
     <a class="btn btn-3" href="view.php">View</a> 
    </div> 
    </div>

    <div class="div-img">              
    <img src="images/company.png"/>
    <h4><b>COMPANY:</b></h4>
    <div class="container">
     <a class="btn btn-1" href="addc.html">Add</a>
     <a class="btn btn-2" href="deletec.html">Delete</a>
     <a class="btn btn-3" href="viewc.php">View</a> 
    </div> 
    </div>

    <div class="div-img">              
    <img src="images/course.png"/>
    <h4><b>TRAINING:</b></h4>
    <div class="container">
     <a class="btn btn-1" href="addt.html">Add</a>
     <a class="btn btn-2" href="deletet.html">Delete</a>
     <a class="btn btn-3" href="viewt.php">View</a> 
    </div> 
    </div>
    <br>
    <br>
    
    <div class="div-img">              
    <img src="images/place.png"/>
    <h4><b>Placed Students:</b></h4>
    <div class="container">
     <a class="btn btn-1" href="addp.html">Add</a>
     <a class="btn btn-2" href="deletep.html">Delete</a>
     <a class="btn btn-3" href="viewp.php">View</a> 
    </div> 
    </div>
    <br>
    <br>

    <div class="div-img">              
    <img src="images/stu.png"/>
    <h4><b>Registered Students:</b></h4>
    <div class="container">
      <br>
            <a class="btn btn-1" href="rview.php">view</a>
    </div> 
    </div>
    <br>
    <br>
    <br>

</body>
</html>

