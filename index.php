<?php
include("connection.php");
$con = conexion();
$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-5v7oqXygMndvPL0Kw82+b66Kw9skkyFW28V5Li8pz2EF/3b7kOiknfMzCKezMC4vbA01HflpFG+37kYUoSdxFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Usuarios CRUD</title>

</head>

<body>
    <div>
        <form action="insert_user.php" method="post">
            <h1>Crear Usuario</h1>
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellido">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="password" placeholder="PassWord">
            <input type="text" name="email" placeholder="Email">
            <input type="submit" value="Agregar Usuario">
        </form>
    </div>

    <div>
        <h2>Usuarios Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>EMAIL</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["name"] ?></td>
                        <td><?= $row["lastname"] ?></td>
                        <td><?= $row["username"] ?></td>
                        <td><?= $row["password"] ?></td>
                        <td><?= $row["email"] ?></td>


                        <td><a href="update.php?id=<?= $row['id'] ?>" class="user-action-button edit"><i class="fas fa-pencil-alt"></i> Editar</a></td>
                        <td><a href="delete_user.php?id=<?= $row['id'] ?>" class="user-action-button delete"><i class="fas fa-trash-alt"></i> Eliminar</a></td>



                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>