<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contoh Modularisasi</title>
    <link href="style.css" rel="stylesheet" type="text/stylesheet" media="screen" />
    <style>
        body {
            margin: 0;
            background-color:mintcream;
        }

        nav {
            display: flex;
            justify-content:space-around;
            align-items: center;
            background-color: darkcyan;
            padding: 10px;
            box-shadow:2px 2px 5px 1px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }


        @media screen and (max-width: 768px) {
            .nav-links {
                display: none;
            }
        }

    </style>
</head>

<body>
    <div>
        <header>
            <h1 align="center">Modularisasi Menggunakan Require</h1>
        </header>
        <nav>
            <div class="nav-links">
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="kontak.php">Contact</a>
            </div>
        </nav>