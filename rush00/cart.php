<?PHP

    include('nav_bar.php');
	session_start();
	var_dump($_SESSION['cart']); 			//make sure this works at school and finish the video that needa watch 
?>
<html>
	<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		span {
			text-align:left;
		}
		td {
			text-align: center;
		}
        body {
            background-image: url('https://images.unsplash.com/photo-1571101281124-93ab00fb9643?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=564&q=80');
               background-repeat: no-repeat;
               background-size:cover;
        }
        h1 {
            font-style: italic;
            text-align: center;
        }
        p{
            display:inline-flex;
            padding:5px;
        }
        span {
            float:right;
            margin-right:3%;
        }
        .promo {
            background-color:#bbb;
            height: 15%;
            width: 20%;
            margin-left:2%;
            margin-bottom:-5%;
        }
        .products {
            height: 35%;
        }
		</style>
	</head>
	<body>
        <u><h1>Your shopping cart</h1></u>
        <p style = "margin-left:2%;">Product</p><span>Qty</span><span>Remove</span><span>Total</span>

        <hr>
            <div class = "products">
            middle part with added things here
    
            </div>
    
            <div class = "promo">
                <center>
                    <p style = "font-size: 20px; float:center">Promo Code</p><br/>
                    <input style = "width: 60%; float:center; height:20%;" type="text" name="login"/>
                </center>
            </div>
            <input style = "float:right; margin-right:2%; margin-bottom: 5%; height:100px; width:15%; background-color:#53CDC7; border-radius: 25px;" type = "submit" name = "checkout" value = "CheckOut">
	</body>
</html>
