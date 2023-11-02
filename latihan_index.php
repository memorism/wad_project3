<?php
$conn = mysqli_connect("localhost", "root", "", "wad_project3");
$result = mysqli_query($conn, "SELECT*FROM students");

// var_dump($result);
// $data = mysqli_fetch_object($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan index</title>
</head>

<body>
    <h1>Ini adalah halaman index data</h1>
    <table border="1px solid black">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>nim</th>
            <th>address</th>
        </tr>
        <?php while ($data = mysqli_fetch_object($result)) { ?>
            <tr>
                <td>
                    <?php
                    echo $data->id
                        ?>
                </td>
                <td>
                    <?php
                    echo $data->name
                        ?>
                </td>
                <td>
                    <?php
                    echo $data->nim
                        ?>
                </td>
                <td>
                    <?php
                    echo $data->addres
                        ?>
                </td>
            <?php } ?>
        </tr>
    </table>
</body>

</html>                  