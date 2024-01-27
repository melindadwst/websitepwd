<!DOCTYPE html>
<html>
<head>
    <title>Website Title</title>
    <style>
        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        @keyframes gradient {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        nav {
        height: 60px;
        line-height: 60px;
        background: rgb(90, 126, 120);
        background: linear-gradient(
          83deg,
          rgba(90, 126, 120, 1) 35%,
          rgba(127, 179, 106, 0.9673366172640931) 56%,
          rgba(158, 201, 141, 0.9673366172640931) 83%
        );
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
      }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav li {
            float: left;
        }

        nav li a {
            display: block;
            color: black; /* Updated color to black */
            text-align: center;
            padding: 0 20px;
            text-decoration: none;
            transition: 0.3s;
        }

        nav li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        nav ul {
        display: flex;
        justify-content: space-between;
    }

    nav ul .right {
        display: flex;
    }
    </style>
</head>
<body>
<nav>
        <ul>
            <li><a href="welcome.php"><i class="fas fa-home" style="color: black;"></i><b> Welcome!</b></a></li>
                <div class="right">
                <li><a href="logout.php"><i class="fas fa-sign-out-alt" style="color: black;"></i> Logout</a></li>
            </div>
        </ul>
    </nav>
</body>
</html>