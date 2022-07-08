<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Users Kota Depok</title>

    <script>
        function hapususers(pesan){
            if (confirm(pesan)){
                return true;
            }else{
                return false;
            }
        }
    </script>
</head>

<div class="container">
<body>
    <div>
    <h3>Kelola Users Kota Depok</h3>
    <table border="1" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Last Login</th>
                <th>Status</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($users as $usr) {
            ?>
            <tr>
                <td><?php echo $nomor?></td>
                <td><?php echo $usr -> username?></td>
                <td><?php echo $usr -> password?></td>
                <td><?php echo $usr -> email?></td>
                <td><?php echo $usr -> created_at?></td>
                <td><?php echo $usr -> last_login?></td>
                <td><?php echo $usr -> status?></td>
                <td><?php echo $usr -> role?></td>
                <td>                    
                    <a href=<?php echo base_url("index.php/users/delete/$usr->id")?>
                    class="btn btn-danger active" onclick="return hapususers('Apakah anda yakin ingin menghapus users <?php echo $usr->username?>?')">Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href=<?php echo base_url("index.php/registrasi/index")?> 
    class="btn btn-primary active">Daftar</a>
    </div>
</body>
</div>
</html>