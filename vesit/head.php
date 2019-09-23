<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="master.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: black;
  position: -webkit-sticky; /* Safari */
  position:relative;
  top: 0;
}

.topnav a {
  float: left;
  color: rgb(128, 129, 196);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: rgb(0, 0, 0);
  color: rgb(218, 230, 228);
}

section{
  padding: 0%;
}
.first{
  background-color: #d2fafb;
  height : 350px;
  padding-top: 0px ;
  padding: 0px;
  margin: 0px;
  display:flex;
}
.footer{
  background-color: #95adbe;
  height : 100px;
  padding: 0px;
  margin: 0px;
  display: flex;
}
#mySidenav a {
  float: right;
  right: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 16px;
  color: white;
  border-radius: a 5px 5px 0;
}

#mySidenav a:hover {
  right: 0;
}


#logout {
  top: 80px;
  background-color: red;
}
.container {
  position: relative;
}

/* Bottom right text */
.text-block {
  position: absolute;
  top: 0px;
  bottom: 20px;
  background-color: #e5e5e5;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
  justify-content: center;

  margin-left: 62%;
  height: 400px;
  font-style:Arial;
  text-decoration: none;
}
.text-block1 {
  position: absolute;
  top: 0px;
  bottom: 20px;
  background-color: #f9f9f9;
  color: #504658;
  padding-left: 20px;
  padding-right: 20px;
  justify-content: center;
  margin-right:50%;
  height: 400px;
  font-style:Arial;
  text-decoration: none;
  color: #64b2cd;
}
.img{
  height: 400px;
}
.img1{
  height: 400px;
  margin-left: 50%
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.welcome{
  text-align: center;
}

.down{
  padding-top: 30px;
  padding-left: 20px;
}
</style>
</head>
<body>

<div class="topnav">
  <div id="mySidenav" class="sidenav">
    <a href="front1.html" id="logout">Logout</a>
  </div>
</div>
<h1 class="welcome">WELCOME HEAD/MANAGER</h1>

<div class="container">
  <img class="img" src="rep_head.jpg" alt="Norway" style="width:62%;">
  <div class="text-block">
    <h2>View Reports</h2>
    <br>
    <p>Tap here to see the progress and performance of each employee</p>
    <a href="#" class="button">View</a>
  </div>
</div>
<div class="container">
  <img class="img1" src="rating.jpg" alt="Norway" style="width:50%;">
  <div class="text-block1">
    <h2>Assign Rating</h2>
    <br>
    <p>Assign rating in points from 1 (Min) to 10 (Max). There may be Zero points for no work or no submissions.</p>
    <br>
    <a href="#" class="button">Assign</a>
  </div>
</div>
<div class="container">
  <img class="img" src="teams.jpg" alt="Norway" style="width:62%;">
  <div class="text-block">
    <h2><VAR>View Teams</VAR></h2>
    <br>
    <p>View Current Teams and thier Members or Shift Member to other Teams.</p>
    <br>
    <a href="#" class="button">View</a>
  </div>
</div>

    
</div>
</body>
</html>
