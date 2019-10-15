<html>
    <head>
        <style>
           body {
                background-image: url('https://images.unsplash.com/photo-1513462533974-d5eea7f8cac5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
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
               background-color: #0C7331;
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
                margin-left: -15px;
           }
           .active, .menu_bar ul li:hover .first ul
           {
               display: block;
               margin: 10px;
           }
           .active, .menu_bar ul li a
           {
               color: #2CE3AB;
               border-radius: 2px;
               margin-bottom: 10px;
               margin-left: -15px;
           }
           .header{
               padding: 10px auto;
               text-align:center;
           }
           #login
           {
               color: white;
           }
        </style>
        <title>ft_minishop</title>
        <link rel = "stylesheet" href = " https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class = "header">
            <i><h1 style = "margin-top:1%;">The Budd Doctor</h1></i>
        </div>
        <!-- <img src = "https://www.youtube.com/watch?v=ZFy7RdZWwj8"> -->
        <div class = "menu_bar">
            <ul>
                <li class = "active" id = "login"><a href = "login.php"><i class="fas fa-bong"></i>Login</a></li>
               <li><a href = "">Sign Up</a></li>  
                <li><a href = "">Cart</a></li>
                <li><a href = "">Products</a>
                    <div class = "first">
                        <ul>
                            <li><a href = "">Sativa</a></li>
                            <li><a href = "">Indica</a></li>
                            <li><a href = "">Hybrid</a></li>
                            <li><a href = "">Da Good Good</a></li>
                        </ul>

                    <div>
                </li>
                <li><a href = "">About Us</a></li>
                <li><a href = "">Contact us</a></li>
            </ul>
        </div>
    </body>
<!-- 


Take a look at takealot and make some fixes tomorrow

-->
</html>
