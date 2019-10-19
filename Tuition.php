
<html>
<head>
<meta charset="UTF-8">
<style>
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Mobile Styles */
@media only screen and (max-width: 400px) {
  body {
    background-color: #F09A9D; /* Red */
  }
}

/* Tablet Styles */
@media only screen and (min-width: 401px) and (max-width: 960px) {
  body {
    background-color: #F5CF8E; /* Yellow */
  }
}

/* Desktop Styles */
@media only screen and (min-width: 961px) {
  body {
    background-color: #B2D6FF; /* Blue */
  }
}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
if(isset($_POST['ab'])){
$pre=$_POST['pd'];
$cre=$_POST['cre'];
$wai=$_POST['waiver'];
$lab=$_POST['lf'];
$other=$_POST['of'];

$a=$pre*$cre;
$b=$wai/100;
$c=$b*$a;
$cal=$a-$c;
$total=$cal+$lab+$other;
echo "Per Credit:".$pre;
echo " Tk";
echo "<br>";
echo "Credit:".$cre;
echo "<br>";
echo "Tuition :".$a;
echo" Tk";
echo "<br>";
echo "Rebate :".$wai;
echo "<br>";
echo "Rebate Amount:".$cal;
echo " Tk";
echo "<br>";





echo "Total Amount:".$total;
echo " Tk";
}
else{
?>

<div class="container">
<div class="sub-container">
<form action="" method="post" style="border:1px solid #ccc">
  
    <h1>Tuition fees calculator</h1>
	
    <p></p>
    <hr>
<div class="input-fields">
    <label for="p"><b>Per Credit Taka</b></label>
	<input type="text"name="pd" required>
	</div>
      <div class="input-fields">
    <label for="psw"><b>Credits</b></label>
	<input type="text"name="cre" required>
	</div>
      <div class="input-fields">
<label for="c"><b>Waiver</b></label>
    <select  name="waiver" id ="" required>
    <option value="0%">Selected the waiver</option>
      <option value="10%">10%</option>
      <option value="15%">15%</option>
      <option value="20%">20%</option>
      <option value="25%">25%</option>
      <option value="30%">30%</option>
      <option value="45%">45%</option>
      <option value="55%">55%</option>
      <option value="60%">60%</option>
      <option value="75%">75%</option>
    </select>
	 </div>
	 <div class="input-fields">
    <label for="psw1-repeat"><b>Lab Fees</b></label>
	<input type="text" name="lf" required>
    </div>
    <div class="input-fields">
	<label for="psw3-repeat"><b>Other Fees</b></label>
    <input type="text" name="of" required>
	</div>
    <br>
          <button type="submit" name="ab" class="registerbtn">Calculation</button>

    
	  
    </div>
  </div>
</form>
<?php } ?>


</body>
</html>
