
<center><h1>Faculty of Medicine</h1></center>
<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
<link href ="<?php echo base_url();?>/css/side_nav.css" rel="stylesheet" type="text/css" media="all" />
<link href ="<?php echo base_url();?>/css/top_bar.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/side_nav.js"></script>

<style>
body {
    background-color:#3c3c3c;
    font-family: 'Advent Pro';font-size: 22px;
}
h1 {
    color:#FFF8DC;
    
    font-family: 'Advent Pro';font-size: 40px;
}
h2{
  color:#FFF8DC;
    
    font-family: 'Advent Pro';font-size: 25px;
}
</style>




<div class="topnav" id="myTopnav">
  <a href="#home">Home</a>
  <a href="#news">Location</a>
  <a href="#contact">Services</a>
  <a href="#about">Contact us</a>
</div>

<center><img src="<?php echo base_url();?>/template1/images/MEDI.jpg" alt="medical canteen" width="1000" height="600"></center><br><br>


<center><h2>We are open on Week days!</h2></center>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Breakfast</a>
  <a href="#">Lunch</a>
  <a href="#">Dinner</a>
  <a href="#">Other</a>
  </div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Monday</span><br>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Tuesday</span><br>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Wednesday</span><br>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Thursday</span><br>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Friday</span><br>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

