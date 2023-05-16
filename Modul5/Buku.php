<?php
require "Koneksi.php";
require "Model.php";

if (!empty($_GET['id_buku'])) {
    $id_buku = $_GET['id_buku'];
    deletedata("buku", $id_buku, "id_buku");
    header('location:buku.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Daftar Buku</title>
    <style>
    h1 {
        text-align: center;
    }

    .container {
        margin-top: 5rem;
    }

    .btn {
        display: inline-block;
        padding: 0.5rem 1rem;
        font-size: 1rem;
        text-align: center;
        text-decoration: none;
        border: none;
        border-radius: 0.25rem;
        cursor: pointer;
        color: #fff;
        background-color: #007bff;
    }

    .btn-primary {
        background-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-danger {
        background-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #b02a37;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 0.75rem;
        text-align: left;
        border-bottom: 1px solid #dee2e6;
    }

    th {
        background-color: #f8f9fa;
    }

    tbody tr:nth-child(even) {
        background-color: #f8f9fa;
    }

    .table {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 1000px;
        margin: 0 auto;
    }

    .btn-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1rem;
    }

    .btn-container .btn-primary {
        margin-right: 1rem;
    }

    .float-end {
        float: right;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Daftar Buku</h1>
        <div class="row justify-content-center">
            <div class="col-md-8"></div>
            <table class="table table-striped table-hover text-center rounded shadow">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun </th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = selectalldata("buku");
                    while ($data = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td>
                            <?php echo $data['id_buku'] ?>
                        </td>
                        <td>
                            <?php echo $data['judul_buku'] ?>
                        </td>
                        <td>
                            <?php echo $data['penulis'] ?>
                        </td>
                        <td>
                            <?php echo $data['penerbit'] ?>
                        </td>
                        <td>
                            <?php echo $data['tahun_terbit'] ?>
                        </td>
                        <td><a href="FormBuku.php?id_buku=<?php echo $data['id_buku']; ?>"><button
                                    class="btn btn-success btn-sm">Edit</button></a>
                            <a href="Buku.php?id_buku=<?php echo $data['id_buku']; ?>"
                                onclick="return confirm('Hapus data?')"><button
                                    class="btn btn-danger btn-sm">Hapus</button></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="col-md-8 text-center mt-4">
                <div class="btn-container">
                    <a href="index.php" class="btn btn-primary">Kembali</a>
                    <a href="FormBuku.php" class="btn btn-primary btn-sm">Tambah Data Baru</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>