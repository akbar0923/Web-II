<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Portal Perpustakaan</title>
    <style>
        body {
            background-image: url(bg.jpg);
            background-size: cover;
            background-position: center;
        }


        .list-group {
            max-width: 350px;
            width: 100%;
            background-color: blue;
            height: 250px;
            margin: 0 auto;
            margin-top: 200px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
        }

        .list-group h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            height: 25%;
        }

        .list-group a {
            /* display: block; */
            padding: 10px 15px;
            margin-bottom: 10px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .list-group a:hover {
            background-color: #0056b3;
        }

        .container {
            height: 75%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container a {
            width: 60%;
        }

        /* .center {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;

    } */
    </style>
</head>

<body>
    <div class="center">
        <div class="list-group">
            <h1>Portal Perpustakaan</h1>
            <div class="container">
                <a href="Member.php" class="bg-primary">Member</a>
                <a href="Buku.php" class="bg-secondary">Buku</a>
                <a href="Peminjaman.php" class="bg-info">Peminjaman</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>