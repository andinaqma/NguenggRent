<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer PDF</title>
</head>
<body>
    <h1>Customer Details</h1>
    <p>Name: {{ $customer->firstname }} {{ $customer->lastname }}</p>
    <p>Email: {{ $customer->email }}</p>
    <p>Age: {{ $customer->age }}</p>
    <p>Car: {{ $customer->car->name }}</p>
</body>
</html>
