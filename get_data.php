  <?php 
  require 'config.php';

$barcode_id = $_POST['barcode_id'];
  			
//$sq = "select * from stockin where stockin_id='$stockin_id'";

	$sq = "select * from items where barcode_id='$barcode_id'";
	
	$qu=mysqli_query($conn,$sq)or die(mysqli_error());
		$row1=mysqli_fetch_array($qu);
		
		$name=$row1['name'];
		$price=$row1['price'];
		$barcode_id=$row1['barcode_id'];
		 
	//	echo $price;
	
		echo $name."/".$price."/".$barcode_id; 
		
		
?>
