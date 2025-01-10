<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">



    <meta name="viewport" content="width=device-width, initial
scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #808080;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .login-container input {
            width: calc(100% - 24px);
            /* Adjust to match padding */
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            display: block;
            /* Ensure block alignment */
            margin-left: auto;
            margin-right: auto;
        }

        .login-container button {
            width: calc(100% - 24px);
            /* Adjust to match padding */
            padding: 12px;
            background-color: #007bff;
            color: #ffffff;
            border: none;



            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
            /* Ensure block alignment */
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            /* Add margin between buttons */
        }

        .login-container button:hover {
            background-color: #0056b3;
        }

        .login-container .icon {
            background-color: #007bff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin: 0 auto 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container .icon svg {
            fill: #ffffff;
            width: 24px;
            height: 24px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48
10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59
8-8 8z" />
            </svg>
        </div>
        <h2>Login</h2>
        <form action="{{ route('login.process') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Masukkan Email Anda" required>
            <input type="password" name="password" placeholder="Masukkan Passworanda" required>
            <button type="submit">Login Admin</button>
        </form>   
    </div>
</body>

</html>
