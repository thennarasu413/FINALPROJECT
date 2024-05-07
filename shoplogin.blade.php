<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Dashboard</title>
    <style>
        body, html {
            margin: 20px;
            padding: 20px;
            height: 40%;
            font-family: 'Arial', sans-serif;
        }
        .dashboard-header {
            background: teal;
            color: white;
            font-size: 24px;
            text-align: center;
            padding: 10px 20px;
        }
        .dashboard-content {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            background: antiquewhite;
            height: calc(100% - 60px); /* Adjust height accounting for header */
        }
        .dashboard-link {
            text-decoration: none;
        }
        .dashboard-action {
            padding: 20px;
            background: whitesmoke;
            border: none;
            color: black;
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
            background: black;
            color: gray ;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <br></br>
    <div class="dashboard-header">
        Shop Dashboard
    </div>
    <div class="dashboard-content">
        <a href="storelogin" class="dashboard-link">
            <div class="dashboard-action">StoreLogin</div>
        </a>
        <a href="cateenlogin" class="dashboard-link">
            <div class="dashboard-action">CateenLogin</div>
        </a>
        <a href="stationerylogin" class="dashboard-link">
            <div class="dashboard-action">StationeryLogin</div>
        </a>
    </div>
</body>
</html>
