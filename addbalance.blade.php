<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Balance</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
            color: #5c677d;
        }
        form {
            margin-top: 20px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box; /* Include padding and border in the element's width */
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #5c677d;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        button:hover {
            background-color: #424c5e;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Balance</h2>
        <form action="/addbalance" method="POST">
            @csrf
            <div class="input-group">
                <label for="roll">Roll No:</label>
                <input type="text" id="roll" name="roll" required>
            </div>
            <div class="input-group">
                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
