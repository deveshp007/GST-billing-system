<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | GST Billing Software</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
            width: 400px;
            max-width: 100%;
            padding: 30px;
            text-align: center;
        }

        h2 {
            color: #3498db;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            margin-bottom: 30px;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #3498db;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease-in-out;
        }

        input:focus {
            border-color: #2980b9;
        }

        button {
            background-color: #2ecc71;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease-in-out;
            display: block;
            margin: 0 auto;
        }

        .reg {
            text-align: center;
        }

        button:hover {
            background-color: #27ae60;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div>
            <h2>GST-Invoice-Genius</h2>
        </div>
        <p>Enter your email address and password to access the dashboard.</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="emailaddress">Email address</label>
                <input type="email" id="emailaddress" name="email" value="{{ old('email') }}" required placeholder="Enter your email">

                @error('email')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div>
                <label for="password">Password</label>
                <div>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                    <div data-password="false">
                        <div>
                            <span class="password-eye"></span>
                        </div>
                    </div>
                </div>

                @error('password')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div>
                <button type="submit">Log In </button>
                <div class="reg">
                    <p>Don't have an account? <a href="{{ route('register') }}" style="color:#0000EE"> Register </a></p>
                </div>
            </div>

        </form>
    </div>

    <!-- end page -->

    <!-- Vendor js -->
    <script src="{{ asset('assets/js2/vendor.min.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('assets/js2/app.min.js') }}"></script>
</body>

</html>