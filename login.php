<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            width: 35%;
            margin-top: 10%;
            box-shadow: 0 3px 20px;
            padding: 40px;
            margin-left: 33%;
            margin-bottom: 25%;
        }

        * {
            box-sizing: border-box;
        }

        .input-container {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            width: 100%;
            margin-bottom: 15px; 
        }

        .icon {
            padding: 10px;
            background: green;
            color: white;
            min-width: 50px;
            text-align: center;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }

        .input-field:focus {
            border: 2px solid green;
        }

        /* Set a style for the submit button */
        .btn {
            background-color: green;
            color: white;
            padding: 13px 46.2%;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }
    </style>
</head>

<body>


        <form action="config/login.php" name="form" method="POST">
        <h2>Silahkan Login</h2>
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Nama Lengkap" name="username">
        </div>

        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="password">
        </div>

        <button type="submit" class="btn" name="login">Login</button>
        <div class="container signup">
            <p>Not have an account? <a href="register.html">Register</a>.</p>
        </div>
    </form>
    <p class="margin-t text-whitesmoke"><small> @Copyright by 18111141_RifkyMuhammadFadilah_TIFRP18CIDA_UASWEB1</small> </p>


<script language ="javascript">
    // var login = document.getElementById("login")
    // login.addEventListener("click", () => {
    //   var username = document.forms["form"]["username"].value;
    //   var password = document.forms["form"]["password"].value;
         
    //       if (username === "Rifky" && password === "123") {
    //           window.location.href="halamansesudahlogin.html"
    //       } else {
    //           alert("Username atau Password anda salah");
    //           // window.location.href="login.html"
    //       }
    });
        
      
  </script>
</body>
</html>