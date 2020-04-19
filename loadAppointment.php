<?php
$area=$_GET['area'];
$conn = new mysqli("localhost","root","fav1997","login");


	$sql="SELECT * FROM offices WHERE area='$area';";
	$result = mysqli_query($conn,$sql);
	$resultcheck = mysqli_num_rows($result);
	
	if($resultcheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			
			?>
			    <div class="form-group">
     			 	<label for="inputCity">Name</label>
      				<input type="text" name="appe" class="form-control" readonly id="inputCity" value="<?php echo $row["name"];  ?>">
    			</div>
				<div class="form-group">
     			 	<label for="inputCity">Contact</label>
      				<input type="text" name="appen" class="form-control" readonly id="inputCity" value="<?php echo $row["contact"];  ?>">
    			</div>
			
			<?php 
		} 

	}

?>