<html>
    <head>
        <style>
            body {
            background-image: url('https://images.unsplash.com/photo-1533577059201-70fbca82b2a1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-repeat: no-repeat;
           background-size: cover;
           background-position: center;
        }
        p {
        color: #fff;
        font-size: 29px;
        font-family: calibri;
        }
        form {
            margin-top: 9%;
            margin-left:-70%;
        }
        button {
            border-radius: 40%;
            height: 25px;
            background-color: lightblue;
        
        }
		a {
			color: white;
			font-size: 20px;
		}
        </style>
    </head>
   <body>
      <center><form>
           <p>Username: <input type="text" name="login"/></p>
           <p>Password: <input  type="password" name="passwd"/></p>
           <a href = "index.php"><input type = "submit"></a>
			<br/><br/><br/>
			<a href = "register.php">Don't have an account?  Sign Up now</a>
       </form></center>
   </body>
</html>
<!-- add php to make sure there are no less than 8 chars in password -->
<!-- add these files to the main one via links  -->
