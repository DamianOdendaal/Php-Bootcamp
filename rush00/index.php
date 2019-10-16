<html>
    <head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
           body {
               background-image: url('https://images.unsplash.com/photo-1571101281124-93ab00fb9643?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=564&q=80');
               background-repeat: no-repeat;
               background-size:cover;
                background-color:white; 
                font-family: calibri;
                font-size: 20px;
           }
           .menu_bar {
               margin-top: 60px;
               background-color: #0F0C01;
               text-align: center;
               opacity: 0.9;
               height: 75px;
           }
           .menu_bar ul {
               display: inline-flex;
               list-style: none;
               color: black;
               margin-top: 2px;
               margin-left: -15px; 
           }
           .menu_bar li{
               width: 120px;
               margin: 15px;
               padding: 15px;
           }
           .active, .menu_bar ul li:hover
           {
               background-color: purple;
               border-radius: 3px;
           }
           .first{
                display: none; 
           }
           .active, .menu_bar ul li:hover .first
           {
                display: block;
                position: absolute;
                background-color: #0C7331;
                margin-top: 15px;
				float: left
           }
           .active, .menu_bar ul li:hover .first ul
           {
               display: block;
               margin: 10px;
			   width: 100px;
           }
           .active, .menu_bar ul li a
           {
               color: #2CE3AB;
               border-radius: 2px;
               margin-bottom: 10px;
           }
           .header{
               padding: 10px auto;
               text-align:center;
           }
           .column {
            float: center;
            width: 33.33%;
            padding: 50px;
            height: 300px; 
            }
            .row {
                display: table;
            }
			.first a {
				text-align:center;
			}
           .active, .menu_bar ul li:hover .first ul li{
		   	width:150px;
			padding:10px;
		   }
			.strains {
				text-align: left;
			}
            td {
                text-align:center;
            }
        </style>
        <title>ft_minishop</title>
    </head>
    <body>
        <div class = "header">
            <h1 style = "margin-top:1%;">The Budd Doctor</h1>
        </div>
        <div class = "menu_bar">
            <ul>
                <li class = "active" id = "login"><a href = "login.php">Login</a></li>
                <li><a href = "">Sign Up</a></li>  
                <li><a href = "cart.php">Cart</a></li>
                <li><a href = "products.php">Products</a>
                    <div class = "first">
                        <ul>
                            <li class = "strains"><a href = "sativa.php">Sativa</a></li>
                            <li class = "strains"><a href = "indica.php">Indica</a></li>
                            <li class = "strains"><a href = "hybrid.php">Hybrid</a></li>
                        </ul>
                    <div>
                 </li>
                <li><a href = "">About Us</a></li>
               <li><a href = "https://web.whatsapp.com/">Contact us</a></li>
            </ul>
        </div>
        </br></br></br>
		<table>
				<tr>
					<td><img src = "https://cdn.shopify.com/s/files/1/1090/7524/products/flower-space-nugs-high-potency-cannabis-2.jpg?v=1544594796" height = "20%" width = "40%"><br/><span>Space Nugs</span></td>
					<td><img src =  "http://catnews.org/weed/wp-content/uploads/2017/02/202-5.jpg" height = "20%" width = "40%"><br/><span>Cannabis Chocolate Bar</span></td>
					<td><img src = "https://live.staticflickr.com/5558/30200040824_b1538c1ebd_b.jpg" height = "20%" width = "40%"><br/><span>Grape Fruit</span></td>
				</tr>
				<tr>
					<td><img src = "https://www.mailorder-marijuana.ca/wp-content/uploads/2018/10/IMG_0410.jpg" height = "20%" width = "40%"><br/><span>White Widow</span></td>
					<td><img src = "https://cdn.shopify.com/s/files/1/2636/1928/products/upload-100240-00628242050203-00_1200x.jpg?v=1567085995" height = "20%" width = "40%"><br/><span>Northern Lights</span></td>
					<td><img src = "https://i2.wp.com/www.420curefam.com/wp-content/uploads/2018/05/420curefam-Sour-Diesel-Marijuana.jpg?fit=1292%2C969&ssl=1" height = "20%" width = "40%"><br/><span>Sour Diesel</span></td>
                </tr>
                <tr>
					<td><img src = "https://potcargo.com/uploads/2019/02/gold-flowers-triangle-kush-group-190208-1200x1200.jpg" height = "20%" width = "40%"><br/><span>WTF</span></td>
					<td><img src = "https://cdn.greenrush.com/media/8/4/8/1576848/triangle-kush-24-thc-5297.jpg" height = "30%" width = "40%"><br/><span>Barck O Bubba</span></td>
					<td><img src = "https://shop.herbalremediesil.com/wp-content/uploads/2019/01/flower-bermudatriangle-img-2865-1.jpg" height = "20%" width = "40%"><br/><span>Laughing Grass</span></td>
				</tr>
            </table>
    
    </body>
</html>
