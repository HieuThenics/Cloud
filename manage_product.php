<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<title></title>
</head>
<body>
 <title>Manage songs</title>
 <h1>Manage songs</h1>
<div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php" style="padding: 10px 20px;">Home</a>
</li></ul>
          </div>

<table border="1 solid black">
	<tr>
		<th>Song Id</th>
		<th>Song Name </th>
		<th>Price </th>
		<th>Images </th>
		<th>Singer Name </th>
		<th>Action </th>
		<th> DELETE </th>
	 </tr>

	 
	 	<?php 
	 	include("connect.php");
	 	$sql = "SELECT * FROM product";
		$result = mysqli_query($connect, $sql);
		while($row= mysqli_fetch_array($result)){
 

			 $product_id = $row['product_id'];
              $product_name = $row['product_name'];
              $product_price =$row['product_price'];
              $product_image =$row['product_image'];
              $product_description = $row['product_description'];
              $audio = $row['audio'];

			?>
		<tr>
			<td> <?php echo $product_id ?></td>

			<td> <?php echo $product_name ?></td>
			<td> <?php echo $product_price ?></td>
			<td> <img src="Images/<?php echo $product_image ?>" style ="width: 100px;"></td>
			
			<td> <?php echo $product_description ?></td>
			<td> <a href="editsong.php?id=<?php echo $product_id ?>">Update Song </a></td>
			<td> <a href="?id=<?php echo $product_id ?>">Delete Song </a></td>
	 		</tr>
	 		<?php
	 		}
	 		?> 

	 
</table>
<?php 
if(isset($_GET["id"])){
	$id = $_GET["id"];
	$sql="DELETE FROM product where product_id = $id";
	$result=mysqli_query($connect,$sql);
	if($result) {
		echo "<script> alert ('Xóa thành công!')</script>";
	}
}

?>
</body>
</html>