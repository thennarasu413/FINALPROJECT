<!DOCTYPE html>
<html>
<head>
    <title>Barcode Input</title>
</head>
<body>
    <form action="{{ url('read-barcode') }}" method="POST">
        @csrf
        <label for="barcode">Scan Barcode:</label>
        <input type="text" id="barcode" name="barcode" autofocus>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
