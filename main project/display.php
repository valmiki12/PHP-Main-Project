<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "robots" content = "noindex, nofollow">
    <meta name = "description" content = "display-php">
    <title>Registered Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Registered Users: </h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
       <?php
            include './inc/database.php';
            $sql="select * FROM admin1";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    $name=$row['Name'];
                    $email=$row['email'];
                    $pass=$row['pass'];
                    echo'<tr>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$pass.'</td>
                    </tr>';
                }
            }
       ?>
        </tbody>
    </table>
</div>
</body>
</html>
