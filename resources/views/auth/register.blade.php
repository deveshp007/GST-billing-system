<div class="login-container">
    <div>
        <h2>GST-Invoice-Genius</h2>
    </div>
    <p>Create your account to access the dashboard.</p>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </div>
    </form>

    <!-- Additional "Login" link -->
    <div class="reg">
        <p>Already have an account? <a href="{{ route('login') }}" style="color:#0000EE">Log In</a></p>
    </div>
</div>



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