<?php 

	require 'config.php';


?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>IMS</title>
  </head>
  <body>
   <div style="margin-top: 50px;margin-left:100px;margin-right: 100px;">
    
  <form action="scan.php" method="GET">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Id</label>
    <input type="text" class="form-control" id="barcode_id" aria-describedby="emailHelp" name="barcode_id" autofocus autocomplete="off">
  </div>
</form>

<h3 id="pname"></h3>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("input").keydown(function(){
    //$("input").css("background-color", "yellow");
barcode_id = $('input:text[name=barcode_id]').val();
//alert(barcode_id);

  $.ajax({
        type: "POST",
        url: "get_data.php",
        data: {'barcode_id':barcode_id},
        success: function(result) {
          //  alert(result);
          var res = result;
          var fields = res.split('/');
         //alert(res);
		 
             var x = $("#pname").html(fields[0]);
            //alert(x);
			
			 console.log(result);
        }
    });
	
	
  });
  
  $("input").keyup(function(){
	 
    //$("input").css("background-color", "green");
	
	    //$("input").css("background-color", "yellow");
barcode_id = $('input:text[name=barcode_id]').val();
//alert(barcode_id);

  $.ajax({
        type: "POST",
        url: "get_data.php",
        data: {'barcode_id':barcode_id},
        success: function(result) {
          //  alert(result);
          var res = result;
          var fields = res.split('/');
         //alert(res);
		 
             var x = $("#pname").html(fields[0]);
            //alert(x);
			
			 console.log(result);
        }
    });
	
  });
});

 

</script>
 