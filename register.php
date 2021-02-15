<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
            box-shadow: 0 3px 20px;
            margin-top: 5%;
            margin-left: 33%;
            width: 35%;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: green;
            color: white;
            padding: 15px 45%;
            margin: 10px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>

<body>

    <form action="config/register.php" method="POST">
        <div class="container">
            <h1>Silahkan Register</h1>

            <hr>

            <label for="email"><b>Nama Lengkap</b></label>
            <input type="text" placeholder="Masukkan Nama Lengkap"  name="username" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Masukkan Email" name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Masukkan Password" name="password" required>


            <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> 

            <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
    </form>
    <p class="margin-t text-whitesmoke"><small> @Copyright by 18111141_RifkyMuhammadFadilah_TIFRP18CIDA_UASWEB1</small></p>


</body>
<script type="text/javascript">
	// function validasi() {
	// 	var Username = document.getElementById("username").value;
	// 	var Email = document.getElementById("email").value;	
    //     var Password = document.getElementById("psw").value;
        
       
	// 	if (Username !="" && Email!="" && Password!="") {
	// 		return true;
            
	// 	}else{
	// 		alert('Anda harus mengisi data dengan lengkap !');
    //         // window.location.href="register.html"
	// 	}
	// }
</script>
</html>