<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login WeBook</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .container{
            margin-top: 50px; 
            width: 30%; 
            padding: 20px;
        }
        .background-image{
            position:absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background: url('assets/library.jpg');
            background-size: cover;
            -webkit-filter: blur(10px);
            -moz-filter: blur(10px);
            -o-filter: blur(10px);
            -ms-filter: blur(10px);
            filter: blur(5px); 
        }
        .form-login{
            position: absolute;
            z-index: 3;
            margin-top: 50px; 
            width: 30%; 
            padding: 20px;
        }
        h1 {
            text-align: center;
            font-family: 'Nunito Sans', sans-serif;
            margin-bottom: 40px;
            color: white;
            font-weight: 800;
        }
        p {
            color: white;
            padding-top: 3%;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="background-image"></div>
		<!-- login -->
        <div class="form-login">
        <h1>Log In WeBook</h1>
        <form action="proses_login.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label" style="color: white;">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="Masukkan username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" style="color: white;">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password">
            </div>
            <center><button type="submit" name="login" class="btn btn-primary"><a href="dashboard.php" style="color: white; text-decoration: none;">Masuk</a></button></center>
        </form>
        </div>
	</div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>