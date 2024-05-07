<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body, html {
            margin: 10px;
            padding: 10px;
            height: 40%;
            font-family: 'Arial', sans-serif;
        }
        .dashboard-header {
            background: khaki;
            color: goldenrod;
            font-size: 24px;
            text-align: center;
            padding: 10px 20px;
        }
        .dashboard-content {
            display: flex;
            justify-content: space-around;
            padding: 50px;
            background: #f9f9f9;
            height: calc(100% - 60px); /* Adjust height accounting for header */
        }
        .dashboard-link {
            text-decoration: none;
        }
        .dashboard-action {
            padding: 20px;
            background: white;
            border: none;
            color: #4CAF50;
            text-transform: uppercase;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            text-align: center;
            width: 100%; /* Specify width for uniform size */
            display: block; /* Make div behave like a link */
        }
        .dashboard-action:hover {
            background: #4CAF50;
            color: white;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <div class="dashboard-header">
        Admin Dashboard
    </div>
    <div class="dashboard-content">
        <a href="delete" class="dashboard-link">
            <div class="dashboard-action">Delete Student</div>
        </a>
        <a href="addbalance" class="dashboard-link">
            <div class="dashboard-action">Pay to Student</div>
        </a>
        <a href="viewhistory" class="dashboard-link">
            <div class="dashboard-action">View History</div>
        </a>
    </div>
</body>
</html>
