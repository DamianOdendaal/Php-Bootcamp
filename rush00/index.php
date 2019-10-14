<html>
    <head>
        <style>
           body {
                background-image: url('https://images.unsplash.com/photo-1571033880684-bb60998c9f9c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                font-family: calibri;
                font-size: 24px;
           }
           .menu_bar {
               background-color: #0F0C01;
               text-align: center;
               opacity: 0.9;
               height: 100px;
           }
           .menu_bar ul {
               display: inline-flex;
               list-style: none;
               color: black;
           }
           .menu_bar li{
               width: 120px;
               margin: 15px;
               padding: 15px;
           }
           .active, .menu_bar ul li:hover
           {
               background-color: #C8B40C;
               border-radius: 3px;

           }
           .first{
                display: none; 
           }
           .active, .menu_bar ul li:hover .first
           {
                display: block;
                position: absolute;
                background-color: #0F0C01;
                margin-top: 15px;
                margin-left: -15px;
           }
           .active, .menu_bar ul li:hover .first ul
           {
               display: block;
               margin: 10px;
           }
        </style>
        <title>ft_minishop</title>
    </head>
    <body>
        <div class = "menu_bar">
            <ul>
                <li class = "active"><a href = "">Login</a></li>
<!--                <li><a href = "">Sign Up</a></li>   -->
                <li><a href = "">Cart</a></li>
                <li><a href = "">Products</a>
                    <div class = "first">
                        <ul>
                            <li><a href = "">Dresses</a></li>
                            <li><a href = "">Jeans</a></li>
                            <li><a href = "">Caps</a></li>
                            <li><a href = "">Shoes</a></li>
                        </ul>

                    <div>
                </li>
                <li><a href = "">About Us</a></li>
                <li><a href = "">Contacts</a></li>
            </ul>
        </div>
    </body>
<!-- 


Take a look at takealot and make some fixes tomorrow

-->
</html>
