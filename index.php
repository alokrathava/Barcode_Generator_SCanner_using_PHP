<?php 
  require'config.php';
?>

<!doctype html>
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
   <div style="margin-top: 150px;margin-left:100px;margin-right: 100px;">
    
  <form action="generate.php" method="GET">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Id</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_id">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"  >Product Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="product_name">
  </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input type="number" class="form-control" id="exampleInputPassword1"  name="price">
  </div>
  <button type="submit" class="btn btn-primary" onclick="clearForm();">Submit</button>
</form>
   </div>
   <script type="text/javascript">
function clearForm(){
    alert("Thanks, we will be in touch shortly");
    document.getElementById("contactForm").reset();
}
   </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>