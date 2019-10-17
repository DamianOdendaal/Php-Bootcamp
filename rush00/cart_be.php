<?PHP

	session_start();
	if (empty($SESSION['cart']))
		$_SESSION['cart'] = array();

	array_push($_SESSION['cart'], $_GET['id']);

?>

<p>
	Product was successfully added to your cart.
	<a href = "cart.php">View cart</a>
</p>

<!-- add the part to your html for you to be able to catch the data and manipulate it here -->
