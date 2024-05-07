<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E9ECEF; /* Light gray-blue background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #4a4a4a;
        }
        
        .register-form {
            background: #BDC3C7;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
            border-color: #007bff; /* Highlight focus with blue */
            outline: none;
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 1rem;
        }
        button:hover {
            background-color: #0056b3;
        } 
        .header {
            width: 100%;
            background-color: #E9ECEF; /* Blue background for header */
            color: black;
            text-align: center;
            padding: 20px 0;
            font-size: 24px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        Register Student
    </div>
    <div class="register-form">
        <h2>Register</h2>
        <form action="/register" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="roll">Roll No:</label>
                <input type="text" id="roll" name="roll" required>
            </div>
            <div class="form-group">
                <label for="emailid">Email:</label>
                <input type="email" id="emailid" name="emailid" required>
            </div>
            <div class="form-group">
                <label for="password">PIN:</label>
                <input type="password" id="password" name="password" required>
            </div>
                <button type="submit">Register</button>
                <br>

            <div id="login-link" class="text-right">
                <a href="/login" class="text-info">Login here</a>
            </div>
        </form>
    </div>
</body>
</html>
