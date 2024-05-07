<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change PIN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Change Your PIN</h2>
        <form action="/changepassword" method="POST">
            @csrf
            <div class="input-group">
                <label for="roll">Enter Roll No:</label>
                <input type="text" id="roll" name="roll" required minlength="7" maxlength="8" placeholder="roll">
            </div>
            <div class="input-group">
                <label for="oldpin">Enter Old PIN:</label>
                <input type="password" id="oldpin" name="oldpin" required minlength="4" maxlength="4" placeholder="Old PIN">
            </div>
            <div class="input-group">
                <label for="newpin">Enter New PIN:</label>
                <input type="password" id="newpin" name="newpin" required minlength="4" maxlength="4" placeholder="New PIN">
            </div>
            <button type="submit">Change PIN</button>
        </form>
    </div>
</body>
</html>
