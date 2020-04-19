
<?php

$conn = new mysqli("localhost","root","fav1997","login");


	$sql="SELECT area FROM offices;";
	$result = mysqli_query($conn,$sql);
	$resultcheck = mysqli_num_rows($result);
	$emptyArray = [];
	if($resultcheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			$emptyArray[]=$row['area'];
		} 

	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enquiry Form</title>
	<script src="modal.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>
<h1 class="display-2" align="center">S.A.F.E.</h1>
				<h3 align="center">Enquiry Form</h3>
<form style="width:500px; margin: auto;">


</form>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("appointedemp").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("appointedemp").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","loadAppointment.php?area="+str,true);
        xmlhttp.send();
    }
}

</script>
<p id="msg"></p>
<form style="width:500px; margin: auto;" action="SendMsg.php" method="POST">



<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Enquiry ID</label>
      <input type="text" readonly class="form-control" id="inputEmail4" placeholder="Enquiry ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <textarea name="address" class="form-control" id="inputAddress" placeholder="1234 Main St"></textarea>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Subject</label>
    <textarea name="subject" class="form-control" id="inputAddress2" placeholder="eko,dpu,milking machine,etc."></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
	

    <div class="form-group col-md-6">
      <label for="inputZip">Contact</label>
      <input name="contact" type="text" class="form-control" id="inputZip">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Region</label>
      <select name="areacode" class="form-control" onchange="showUser(this.value)">
        <option selected>Choose...</option>
        <?php
        for($x=0;$x<count($emptyArray);$x++)
        {
        	?>

        	<option>
        	<?php
        		echo $emptyArray[$x]
        	?>
        </option>
<?php
        }
        
        ?>

      </select>
    </div>

  <script>
  	var content = document.getElementById("appointedemp").html;
  </script>
  </div>
    <div class="form-group col-md-7" id="appointedemp">

  </div>
  <div class="form-group" align="center">
	<button type="submit" class="btn btn-primary">Enter</button>
  </div>
  


 </form>


</body>
</html>