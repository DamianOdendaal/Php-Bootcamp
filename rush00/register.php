
<html>
    <head>
        <style>
            body {
            background-image: url('https://images.unsplash.com/photo-1478071679616-f10bd38b812a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80');
            background-repeat: no-repeat;
           background-size: cover;
        }
        p {
        color: lightblue;
        font-size: 29px;
        font-family: calibri;
		text-align: left;
        }
        button {
            border-radius: 40%;
            height: 25px;
        }
		a {
			color: white;
			font-size: 20px;
			text-align: center;
		}
        </style>
    </head>
   <body>
      <form>
           <p>First Name  <input type="text" name="f_name"/></p>
           <p>Last Name  <input  type="text" name="l_name"/></p>
           <p>Email   <input type="email" name = "email"/></p>
           <p>Password   <input type="password" name="password"/></p>
           <p>Retype Password  <input type="password" name="password" /></p>
           <input type = "submit" action ="php-bootcamp/rush00/index.php">
			<br/><br/>
       </form>
   </body>
</html>
<!-- add php to make sure there are no less than 8 chars in password -->
<!-- add these files to the main one via links  -->
