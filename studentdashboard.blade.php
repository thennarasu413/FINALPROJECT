<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif; /* Simple and clean font */
            margin: 0;
            padding: 0;
            background-color: #f4f7f6; /* Soft background color */
            display: flex;
            flex-direction: column; /* Stack elements vertically */
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .header {
            width: 100%; /* Full width */
            background-color: #5c677d; /* Matching header color */
            color: white; /* Text color */
            text-align: center; /* Center the text */
            padding: 20px 0; /* Padding for aesthetic spacing */
            font-size: 30px; /* Larger font size for visibility */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }
        .dashboard {
            width: 80%;
            max-width: 960px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px; /* Space between header and dashboard */
        }
        .section {
            border-bottom: 1px solid #ccc;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .section:last-child {
            border-bottom: none; /* No border at the bottom of the last section */
        }
        h2 {
            margin: 0; /* Remove default margin */
            color: #5c677d;
            font-size: 24px;
        }
        .button-link {
            padding: 10px 15px;
            border: none;
            background-color: #5c677d;
            color: white;
            border-radius: 5px;
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Allow padding and border modification */
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .button-link:hover {
            background-color: #424c5e;
        }
        .icon {
            display: inline-block;
            width: 50px;
            height: 50px;
            background-color: #e4e7eb;
            border-radius: 50%;
            text-align: center;
            line-height: 50px;
            font-size: 24px;
            color: #5c677d;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="header">Student Dashboard</div>
            <form action="/studentbalance" method="post">
                @csrf
    <div class="dashboard">
        <div class="section">
            <h2><span class="icon">&#x1F4C8;</span> View History</h2>
            <a href="storehistory" class="button-link">Go to History</a>
        </div>
        <div class="section">
            <h2><span class="icon">&#x1F4B8;</span> Change PIN</h2>
            <a href="changepassword" class="button-link">Change PIN</a>
        </div>
        <div class="section">
            <h2><span class="icon">&#x1F4B5;</span> View Balance</h2>
            <a href="studentbalance" class="button-link">View Balance</a>
        </div>
    </form>
    </div>
</body>
</html>
