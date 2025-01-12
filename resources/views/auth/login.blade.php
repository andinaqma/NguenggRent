<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            flex-direction: column; /* Ensure footer stays at the bottom */
        }

        .login-container {
            display: flex;
            background-color: #000000b3;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 600px;
            text-align: left;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column; /* Stacks items vertically */
        }

        .login-container img {
            margin-right: 20px;
        }

        .login-form {
            text-align: center;  /* Center the form content */
            margin-top: 20px;
            width: 100%;
        }

        .login-container h1 {
            font-size: 24px;
            font-weight: bold;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .login-container input {
            width: calc(100% - 24px) ;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #0000008e ;
            border-radius: 6px;
            font-size: 16px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .login-container button {
            width: calc(100% - 24px);
            padding: 12px;
            background-color: #2f5494da;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
        }

        .login-container button:hover {
            background-color: #000000;
        }

        /* Adding separator style */
        .separator {
            border-top: 2px solid #ddd;
            width: 100%;
            margin: 20px 0;
        }

        /* Footer style */
        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #000000;
            width: 100%;
            position: absolute;
            bottom: 10px;
        }
    </style>
</head>

<body style="background-image: url('/images/bgapp.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="login-container">
        <img src="{{ asset('images/logoNguengg.png') }}" alt="Icon" width="200" height="180">
        
        <div class="separator"></div>

        <div class="login-form">
            <h1>Login</h1>
            <form action="{{ route('login.process') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Enter Your Email" required>
                <input type="password" name="password" placeholder="Enter Your Password" required> 
                <button type="submit">Administration Login</button>
            </form> 
            <form action="{{ route('homeCustomer') }}" method="GET">
                @csrf
                <button type="submit">Form Rental</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Nguengg Rent. All Rights Reserved.</p>
    </footer>
</body>

</html>
