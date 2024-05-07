<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Balance</title>
    <!-- Include Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional custom styles -->
    <style>
        body {
            background-color: #f4f4f9;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            padding-top: 50px;
            margin: auto;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2 class="text-center">Student Balance</h2>
            <form action="/studentbalance" method="post">
                @csrf
                <div class="mb-3">
                    <label for="roll" class="form-label">RollNo</label>
                    <input type="text" class="form-control" id="roll" name="roll" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">PIN</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Check Balance</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
