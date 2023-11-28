<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Overview - Bank of Crunch</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #00395D;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .content {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #EEEEEE;
        }
        .account-info {
            margin-bottom: 20px;
        }
        .account-info h2 {
            margin: 0;
        }
        .logout {
            text-align: right;
        }
        .logout a {
            color: #00395D;
            text-decoration: none;
            font-weight: bold;
        }
        .logo-image {
            max-width: 200px; /* Adjust this value as needed */
            height: auto; /* Keep the aspect ratio */
        }
    </style>
</head>
<body>
    <div class="header">
        <h1><img src="/bankofcrunch_logoV4.svg" alt="Bank of Crunch Logo" class="logo-image"></h1>
    </div>

    <div class="content">
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
        <div class="account-info">
            <h2>Your Account</h2>
            <p><strong>Account Number:</strong> 123456789</p>
            <p><strong>Balance:</strong> $10,000</p>
        </div>
        
        <h2>Recent Transactions</h2>
        <table>
            <tr>
                <th>Date</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>Nov 25, 2023</td>
                <td>Deposit</td>
                <td>$500</td>
            </tr>
            <tr>
                <td>Nov 20, 2023</td>
                <td>Grocery Store</td>
                <td>-$80</td>
            </tr>
            <!-- Add more transactions as needed -->
        </table>
    </div>
</body>
</html>
