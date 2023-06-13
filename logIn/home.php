<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        :root {
            --blue: #0E86D4;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: var(--blue);
            background-image: url(img1.jpg);
            margin: 0;
            padding: 0;
        }

        header {
            background-color: var(--blue);
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar li {
            margin-left: 20px;
        }

        .navbar a {
            text-decoration: none;
            color: white;
        }

        .content {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
        }

        .content h2 {
            margin-bottom: 20px;
        }

        .content table {
            width: 100%;
            border-collapse: collapse;
        }

        .content th,
        .content td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        .content th {
            background-color: var(--blue);
            color: white;
        }

        .back-btn {
            display: inline-block;
            background-color: var(--blue);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #0b6db5;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">User Dashboard</div>
        <ul class="navbar">
            <li><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </header>

    <div class="content">
        <h2>Welcome, <?php echo $_SESSION['email']; ?></h2>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Birthday</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'userController.php';
                $user1 = new userController;
                $data = $user1->readData();

                foreach ($data as $row) {
                    echo "<tr>";
                    echo "<td>{$row['firstName']}</td>";
                    echo "<td>{$row['lastName']}</td>";
                    echo "<td>{$row['emailAddress']}</td>";
                    echo "<td>{$row['birthday']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="#" class="back-btn">Go Back</a>
    </div>
</body>

</html>