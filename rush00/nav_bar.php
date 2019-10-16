<html>
    <head>
        <style>
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
           h4 {
               text-align:right;
               margin-right: 2%;
           }
        </style>
    </head>
            <div class = "header">
                <h1 style = "margin-top:1%;">The Budd Doctor</h1>
                <h4><a href = "login.php">Login</a> &nbsp <a href = "register.php">Register</a> &nbsp<a href = "cart.php">View Cart</a></h4>
            </div>

        <div class = "menu_bar">
            <ul>
                <li class = "active" id = "login"><a href = "index.php">Home</a></li>
                <li><a href = "">Sign Up</a></li>  
                <li><a href = "products.php">Products</a>
                <div class = "first">
                    <ul>
                        <li class = "strains" style = "margin-left:0%;"><a href = "sativa.php">Sativa</a></li>
                        <li class = "strains" style = "margin-left:0%;"><a href = "indica.php">Indica</a></li>
                        <li class = "strains" style = "margin-left:0%;"><a href = "hybrid.php">Hybrid</a></li>
                    </ul>
                    <div>
                        </li>
                        <li><a href = "user_details.php">My Account</a>
               <li><a href = "https://web.whatsapp.com/">Contact us</a></li>
            </ul>
        </div>
</html>