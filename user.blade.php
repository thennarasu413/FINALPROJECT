<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            color: #333;
        }
        .header {
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            overflow: hidden;
        }
        .dashboard-section {
            background: #fff;
            margin: 10px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h2 {
            color: #007bff;
        }
        input[type="password"], input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 10px 0;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Student Dashboard</h1>
    </div>

    <div class="container">
        <div class="dashboard-section" id="history">
            <div class="section-content">
                <h2>History</h2>
                <p>Here you can view your past activities and performance records.</p>
            </div>
            <button onclick="viewHistory()">View History</button>
        </div>

        <div class="dashboard-section" id="change-password">
            <h2>Change Password</h2>
            <form>
                <label for="current-password">Current Password:</label>
                <input type="password" id="current-password" name="current-password" required>
                
                <label for="new-password">New Password:</label>
                <input type="password" id="new-password" name="new-password" required>
                
                <label for="confirm-password">Confirm New Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
                
                <button type="submit">Change Password</button>
            </form>
        </div>
    </div>
</body>
</html>
