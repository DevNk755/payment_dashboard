<?php
session_start();
include 'config.php';

// Login check
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch payment data
$sql = "SELECT * FROM payments WHERE user_id = $user_id ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Dashboard</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        .card {
            background: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        th {
            background: #2c3e50;
            color: white;
        }
        .success { color: green; }
        .pending { color: orange; }
        .failed  { color: red; }
    </style>
</head>

<body>

<div class="container">

    <div class="card">
        <h2>Welcome, <?php echo $_SESSION['name']; ?> 👋</h2>
        <p>your`s Payment Dashboard </p>
        <button> <a href="logout.php">Logout</a></button>
    </div>

    <div class="card">
        <h3>Payment History</h3>

        <table>
            <tr>
                <th>ID</th>
                <th>Amount (₹)</th>
                <th>Method</th>
                <th>Status</th>
                <th>Date</th>
            </tr>

            <?php if (mysqli_num_rows($result) > 0) { ?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['amount']; ?></td>
                        <td><?php echo $row['payment_method']; ?></td>
                        <td class="<?php echo strtolower($row['status']); ?>">
                            <?php echo $row['status']; ?>
                        </td>
                        <td><?php echo $row['created_at']; ?></td>
                    </tr>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <td colspan="5">no Payment</td>
                </tr>
            <?php } ?>

        </table>
    </div>

</div>

</body>
</html>
