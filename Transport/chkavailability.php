<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="bus.css">
<body>
  <?php 

function checkSeat($seatno){
$host="localhost";
$username="root";
$dbname="vreg";
$pass="";
$con=mysqli_connect($host,$username,$pass,$dbname);
if (!$con) {
  # code...
  echo "NOT connected";
}

$sql="SELECT * FROM btable WHERE seatno ='$seatno'";
$result= mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $status=$row['status'];
   $seatno=$row['seatno'];
    
  echo "red";
  }

} else {
  echo "green";
}

}
  ?>
  <header>
    <h1>CUEA Transport </h1>
      
   
    <nav>
      <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="Transportation.html">Transportation</a></li>
        <li><a href="drivers.html">Drivers</a>
          
        </li>
        <li><a href="vehicle.html">Vehicles</a></li>
        <li><a href="report.html">Reports</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <include file="chk.php">

  <div class="p"><br>
<label><B>SELECT SEATS<B></label>
<form style=" border: 0px solid black;
  width: 100%;
  left :-150 %;

 padding: 0px;
  padding-top: 0px;
  background-color: transparent;
  max-width: 300px;"  
   action="chk.php" method="post">
   
<div class="bus seat2-2 border-0 p-0">
  <div class="seat-row-1">
    <ol class="seats">
      <li class="seat" style="background-color: <?php  checkSeat(1); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-1" value="1" required="" type="radio">
        <label for="seat-radio-1-1">1</label>
      </li>

      <li class="seat" style="background-color: <?php  checkSeat(2); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-2" value="2" required="" type="radio">
        <label for="seat-radio-1-2">2</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(3); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-3" value="3" required="" type="radio">
        <label for="seat-radio-1-3">3</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(4); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-4" value="4" required="" type="radio">
        <label for="seat-radio-1-4">4</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(5); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-5" value="5" required="" type="radio">
        <label for="seat-radio-1-5">5</label>
      </li>
    </ol>
  </div>
  <div class="seat-row-2">
    <ol class="seats">
      <li class="seat" style="background-color: <?php  checkSeat(6); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-6" value="6" required="" type="radio">
        <label for="seat-radio-1-6">6</label>
      </li>
       <li class="seat" style="background-color: <?php  checkSeat(7); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-7" value="7" required="" type="radio">
        <label for="seat-radio-1-7">7</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(8); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-8" value="8" required="" type="radio">
        <label for="seat-radio-1-8">8</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(9); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-9" value="9" required="" type="radio">
        <label for="seat-radio-1-9">9</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(10); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-10" value="10" required="" type="radio">
        <label for="seat-radio-1-10">10</label>
      </li>
    </ol>
  </div>
  <div class="seat-row-3">
    <ol class="seats" >
      <li class="seat" style="background-color: <?php  checkSeat(11); ?>" >
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-11" value="11" required="" type="radio">
        <label for="seat-radio-1-11">11</label>
      </li>
<li class="seat" style="background-color: <?php  checkSeat(12); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-12" value="12" required="" type="radio">
        <label for="seat-radio-1-12">12</label>
      </li>

      <li class="seat" style="background-color: <?php  checkSeat(13); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-13" value="13" required="" type="radio">
        <label for="seat-radio-1-13">13</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(14); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-14" value="14" required="" type="radio">
        <label for="seat-radio-1-14">14</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(15); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-15" value="15" required="" type="radio">
        <label for="seat-radio-1-15">15</label>
      </li>
    </ol>
  </div>
  <div class="seat-row-4">
    <ol class="seats" >
      <li class="seat"style="background-color: <?php  checkSeat(16); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-16" value="16" required="" type="radio" >
        <label for="seat-radio-1-16"> 16</label>
      </li>
       <li class="seat" style="background-color: <?php  checkSeat(17); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-17" value="17" required="" type="radio" >
        <label for="seat-radio-1-17"> 17</label>
      </li>

      <li class="seat" style="background-color: <?php  checkSeat(18); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-18" value="18" required="" type="radio" >
        <label for="seat-radio-1-18"> 18</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(19); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-19" value="19" required="" type="radio">
        <label for="seat-radio-1-19"> 19</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(20); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-20" value="20" required="" type="radio">
        <label for="seat-radio-1-20">20</label>
      </li>
     
    </ol>
  </div>
  <div class="seat-row-5">
    <ol class="seats">
      <li class="seat" style="background-color: <?php  checkSeat(21); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-21" value="21" required="" type="radio">
        <label for="seat-radio-1-21"> 21</label>
      </li>
       <li class="seat" style="background-color: <?php  checkSeat(22); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-22" value="22" required="" type="radio">
        <label for="seat-radio-1-22"> 22</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(23); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-23" value="23" required="" type="radio">
        <label for="seat-radio-1-23">23</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(24); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-24" value="24" required="" type="radio">
        <label for="seat-radio-1-24"> 24</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(25); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-25" value="25" required="" type="radio">
        <label for="seat-radio-1-25">25</label>
      </li>
    </ol>
  </div>
  <div class="seat-row-6">
    <ol class="seats">
      <li class="seat" style="background-color: <?php  checkSeat(26); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-26" value="26" required="" type="radio">
        <label for="seat-radio-1-26">26</label>
      </li>
       <li class="seat" style="background-color: <?php  checkSeat(27); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-27" value="27" required="" type="radio">
        <label for="seat-radio-1-27">27</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(28); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-28" value="28" required="" type="radio">
        <label for="seat-radio-1-28">28</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(29); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-29" value="29" required="" type="radio">
        <label for="seat-radio-1-29">29</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(30); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-30" value="30" required="" type="radio">
        <label for="seat-radio-1-30"> 30</label>
      </li>
    </ol>
  </div>
  <div class="seat-row-7">
    <ol class="seats" >
      <li class="seat" style="background-color: <?php  checkSeat(31); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-31" value="31" required="" type="radio">
        <label for="seat-radio-1-31"> 31</label>
      <li class="seat" style="background-color: <?php  checkSeat(32); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-32" value="32" required="" type="radio">
        <label for="seat-radio-1-32"> 32</label>
      <li class="seat" style="background-color: <?php  checkSeat(33); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-33" value="33" required="" type="radio">
        <label for="seat-radio-1-33">33</label>

        <li class="seat" style="background-color: <?php  checkSeat(34); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-34" value="34" required="" type="radio">
        <label for="seat-radio-1-34"> 34</label>
      </li>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(35); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-35" value="35" required="" type="radio">
        <label for="seat-radio-1-35"> 35</label>
      </li>

      
    </ol>
  </div>
  <div class="seat-row-8">
    <ol class="seats" >
       <li class="seat" style="background-color: <?php  checkSeat(36); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-36" value="36" required="" type="radio">
        <label for="seat-radio-1-36">36</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(37); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-37" value="37" required="" type="radio">
        <label for="seat-radio-1-37">37</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(38); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-38" value="38" required="" type="radio">
        <label for="seat-radio-1-38"> 38</label>
      </li>
      <li class="seat" style="background-color: <?php  checkSeat(39); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-39" value="39" required="" type="radio" >
        <label for="seat-radio-1-39">39</label>
      </li>

      <li class="seat" style="background-color: <?php  checkSeat(40); ?>">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-40" value="40" required="" type="radio" >
        <label for="seat-radio-1-40">40</label>
      </li>
    </ol>
  </div>
</div>

<div class="text-left mt-2">
 <button style="position: absolute;
top: 40%;
left: -70%;
height:50px;
width:40%;
transform: translate(-50%, -50%);"  
 class="btn1" type="submit" action="chk.php">Check Availability</button>

</div>
</div>
</form>
</main>

  <footer>
    <div class="cont">
      <div class="item"><strong>Main Campus(Lang’ata)<br></strong>
P.O BOX 62157-00200<br>
Nairobi, Kenya<br>

Email: admissions@cuea.edu<br>
Mobile: (+254) (0) 709-691000<br>

Bogani East Road, off Magadi Road,<br> Next to Galleria Mall,<br> 23km from the Jomo Kenyatta International Airport in Nairobi, Kenya.

 </div>
      <div class="item"><strong>Gaba Campus (Eldoret)<br></strong>
P.O BOX 908-30100<br>
Eldoret, Kenya<br>

Email: registrygaba@cuea.edu<br>
SMS: +(254) (0) 729 742-791<br>
Mobile: +(254) (0) 728 458-276<br>

Kisumu Road, next to Eldoret Polytechnic, 12km from the Eldoret International Airport in Eldoret, Kenya.

</div>
      <div class="item"><strong>Quick & Important Links<br></strong>
Jobs@cuea<br>
Call for Papers<br>
Scholarships<br>
Quality Assuarance<br>
Academic Calendar<br>
AMECEA<br>
DVC Academic Complaint<br>
VC Feedback<br>
Facilities@cuea</div>
      <div class="item"><strong>Social Platforms<br></strong>
Twitter<br>
Facebook<br>
LinkedIn<br>
Instagram<br>
Youtube<br>
We are here to serve you during the following business hours: Monday to Friday: 8am to 5pm</div>

    </div>
    <p>&copy; 2023 Transport Management System</p>
  </footer>
</body>
</html>