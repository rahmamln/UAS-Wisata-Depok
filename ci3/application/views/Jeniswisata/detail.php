<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Tempat Wisata</title>
</head>
<br>
<div class="container">
<body>
<div class="card">
        <div class="col-md-12">
            <h3>Jenis_wisata</h3>
                <table border="1"  class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $jeniswisata -> id ?></td>
                            <td><?= $jeniswisata -> nama ?></td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
</div>
</html>