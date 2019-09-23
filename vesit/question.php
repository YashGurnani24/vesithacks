<?php

include "connection.php";
$conn=Opencon();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="master.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.ip{
	height:50vw;
	width:50vw;
	margin-bottom:400px;
	margin-left:350px;
	margin-right:850px;
	margin-top:0px;
	border:1px solid;
	background-color:rgba(0,0,0,0.9);
	color:white;
	padding-left:35px;
  padding-top: 30px;
	
}
.welcome{
	background-image:url("report.jpg");
	background-attachment:fixed;
  background-size: cover;
  height:100%;
  padding-top: 25px;

}
body{
  margin:0px;
}
input[type="text"]{
	width:25%;
	height:50%;
	border-radius:5px;
	padding-left:5px;
	
	
}
p{
	font:20px ComicsSans;
	padding-left:195px;
}
button{

  height:30px;
  width:80px;
  font-size: 20px;
}
.topnav {
  overflow: hidden;
  background-color: black;
  position: -webkit-sticky; /* Safari */
  position:relative;
  top: 0;
  margin-top: 0px;
  height: 60px;
}

.topnav a {
  float: left;
  color: rgb(128, 129, 196);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  background-color: red;
  height:70px;
  padding-top:25px;
  text-decoration: none;
  color: white;
  width:60px;
}

.topnav a:hover {
  background-color: rgb(0, 0, 0);
  color: rgb(218, 230, 228);
}

</style>
</head>
<body>

<div class="topnav">
  <div id="mySidenav" class="sidenav">
    <a href="associate.php" id="logout">Back</a>
  </div>
</div>
<div class="welcome">
<form action="" method="post"class ='ip'>
<p>Name:<input type="text" name="fname"><br><br></p>

  <div>
    <label for="CONTRIBUTION"><b>CONTRIBUTION OF MEMBER TO THE PROJECT</b></label>
	</div>
	<div>
	
    <input type="radio" id="col1" name="rad" value="0">Poor
	
    
  </div>
  
  <div>
    <input type="radio" id="col2" name="rad" value="1">Good 
    
  </div>

  
  <div>
    <input type="radio" id="col3" name="rad" value="2">V.Good 
    
  </div>

  <div>
    <input type="radio" id="col4" name="rad" value="3">Excellent
   </div>

  <br><br><div>
    <label for="CONTRIBUTION"><b>SUBBISSION OF PROJECT</b></label>
	</div>
	<div>
    <input type="radio" id="color-1" name="color1" value="0">delayed
    </div>
  
  <div>
    <input type="radio" id="color-2" name="color1" value="1">late
    
  </div>

  
  <div>
    <input type="radio" id="color-3" name="color1" value="2">ontime 
    
  </div>

  <div>
    <input type="radio" id="color-4" name="color1" value="3">beforetime
    
  </div>
  <br><br>

  <div>
    <label for="CONTRIBUTION"><b>ACCURACY OF WORK DONE</b></label>
	</div>
	<div>
    <input type="radio" id="colo" name="color2" value="0">25%
    </div>
  
  <div>
    <input type="radio" id="colo1" name="color2" value="1">50%
    
  </div>

  
  <div>
    <input type="radio" id="colo3" name="color2" value="2">75%
    
  </div>

  <div>
    <input type="radio" id="colo4" name="color2" value="3">100%
    
  </div>
  
  <br><br><div>
    <label for="CONTRIBUTION"><b>CONTRIBUTION OF MEMBER TO THE PROJECT</b></label>
	</div>
	<div>
    <input type="radio" id="color-1" name="color0" value="0">25%
    </div>
  
  <div>
    <input type="radio" id="color-2" name="color0" value="1">50%
    
  </div>

  
  <div>
    <input type="radio" id="color-3" name="color0"value="2">75%
    
    </label>
  </div>

  <div>
    <input type="radio" id="color-4" name="color0"value="3">100%
    
  </div>
  <br><br>
  <div>
    <button type="submit" name="submit"> submit </button>

  </div>
  </form>
</div>
 
</body>
</html>
<?php

if(isset($_POST['submit'])){
  if(isset($_POST['fname'])){
  if(isset($_POST['rad'])){
    if(isset($_POST['color1'])){
      if(isset($_POST['color2'])){
      if(isset($_POST['color0'])){
        

         $ques1= $_POST['rad'];
         $ques2= $_POST['color1'];
         $ques3= $_POST['color2'];
         $ques4=$_POST['color0'];
         $fname=$_POST['fname']
         $sql1=$conn->query("update report_1 set question_1=$ques1,question_2=$ques2,question_3=$ques3,question_4=$ques4 where student_name=$fname");
 

    }
  }
}
  }
}
else{
  echo"Enter NAME";
}
}


?>


















