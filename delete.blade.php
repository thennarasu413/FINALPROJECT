<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #e8eff1; /* Soft blue background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .header {
            width: 100%;
            background-color: #007bff; /* Blue background for header */
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 24px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: absolute;
            top: 0;
            left: 0;
        }
        .form-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
            width: 350px;
            margin-top: 80px; /* Add margin to account for the header */
        }
        .form-group {
            margin-bottom: 25px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus, input[type="email"]:focus {
            border-color: #007bff; /* Highlight focus with blue */
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        Delete Student
    </div>
    <div class="form-container">
        <form action="/delete" method="POST">
          @csrf
            <div class="form-group">
              
                <label for="roll">Student Roll NO:</label>
                <input type="text" id="roll" name="roll" required>
            </div>
            <div class="form-group">
                <label for="remark">Remark:</label>
                <input type="text" id="remark" name="remark">
            </div>
            <button type="submit">Delete Student</button>
        </form>
    </div>
</body>
</html>
