<?php
$hide = "";
session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");
} else {
    if ($_SESSION['role'] == "admin") {
        $hide = "";
    } else {
        $hide = "hide";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <style>
        :root {
            --blue: #0E86D4;
            --dark-color: #055C9D;
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
            background-color: #055C9D;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">Faqja kryesore</div>
        <nav>
            <ul class="navbar">
                <li><a href="logout.php">Log out</a></li>
                <li><a href="../shop/menuDashboard.php" class="<?php echo $hide ?>">Dashboard-i</a></li>
                <li><a href="../shop/create-menu.php" class="<?php echo $hide ?>">Krijoni</a></li>
                <?php if($_SESSION['role'] == 'admin'){
                    echo("");
                } ?>
            </ul>
        </nav>
    </header>

    <div class="content">
        <h2>Këshilltarët</h2>
        <table>
            <tr>
                <th>Username</th>
                <td><?php echo $_SESSION['username']; ?></td>
            </tr>
            <!-- Add more table rows with relevant information -->
        </table>

        <a href="../home/index.php" class="back-btn">Kthehu në Kryefaqe</a>
    </div>

</body>

</html>