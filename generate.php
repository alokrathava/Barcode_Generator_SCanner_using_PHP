<?php 
require 'config.php';
require "vendor/autoload.php";

if (!$_GET['product_id'] && $_GET['product_name'] &&$_GET['price']) {
    header("location: index.php");
    die();
}
$id = $_GET['product_id'];
$name = $_GET['product_name'];
$price = $_GET['price'];

$Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
$code = $Bar->getBarcode($_GET['product_id'], $Bar::TYPE_CODE_128);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate Bar Codes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <style>
        body, html {
            height: 100%;
        }
        .bg {
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #qrbox>div {
            margin: auto;
        }
    </style>
</head>
<body class="bg">
    <div class="container" id="panel">
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="background: white; padding: 20px; box-shadow: 10px 10px 5px #888888;">
                <div class="panel-heading">
                </div>
                <hr>
                <div id="qrbox">
                    <?php echo $code ?>
                </div>
                <div style="align-content: center;">
                	<!-- <h4>Product Details</h4>	 -->
                	<?php 
                		// echo $id;
                		// echo $name;
                		// echo $price;


                		$insert_sql = "INSERT INTO items (name,price,barcode_id) VALUES('$name','$price','$id')";
                		// echo $insert_sql;
                		$result = $conn->query($insert_sql);

                		if($result){
                			echo "Data Inserted";
                			
                		}else{
                			echo "Error In Data Insertion";
                		}




                ?></div>
            <a href="scan.php">Scan</a>
                <hr>
            </div>
        </div>
    </div>
</body>
</html>

