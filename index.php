<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of Clients</h2>
        <a class="btn btn-primary" href="/Latihan1/create.php" role="button">New Client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>created at</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "myshop";

                    // Create connection
                    $connection = new mysqli($servername, $username, $password, $database);

                    // Check connection
                    if ($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }

                    // Read all row from database table
                    $sql = "SELECT * FROM clients";
                    $result = $connection->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $connection->error);
                    }

                    // Read data of each row
                    while($row = $result->fetch_assoc()) { 
                        echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[email]</td>
                            <td>$row[phone]</td>
                            <td>$row[address]</td>
                            <td>$row[created_at]</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='/Latihan1/edit.php?id= $row[id]'>Edit</a>
                                <a class='btn btn-danger btn-sm' href='/Latihan1/delete.php?id= $row[id]'>Delete</a>
                            </td>
                        </tr>
                        ";
                    }
                ?>

                <!-- <tr>
                    <td>10</td>
                    <td>bill gates</td>
                    <td>bill.gates@microsoft.com</td>
                    <td>+1122334455</td>
                    <td>new york, USA</td>
                    <td>18/05/2022</td>
                    <td>
                        <a href="btn btn-primary btn-sm" href="/Latihan1/edit.php">Edit</a>
                        <a href="btn btn-danger btn-sm" href="/Latihan1/delete.php">Delete</a>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>
</body>
</html>