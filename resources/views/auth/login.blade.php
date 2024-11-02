<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('{{ asset("images/fondo5.gif") }}');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 30px 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(128, 0, 128, 0.5);
            position: relative;
            width: 320px;
            text-align: center;
        }

        .container::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border-radius: 15px;
            border: 2px solid transparent;
            filter: blur(10px);
            z-index: -1;
            animation: neon 2s ease-in-out infinite alternate;
        }

        @keyframes neon {
            0% {
                box-shadow: 0 0 20px rgba(128, 0, 128, 0.5), 0 0 40px rgba(128, 0, 128, 0.5), 0 0 60px rgba(128, 0, 128, 0.5);
                border-color: rgba(128, 0, 128, 0.5);
            }
            100% {
                box-shadow: 0 0 30px rgba(0, 0, 255, 0.8), 0 0 60px rgba(0, 0, 255, 0.8), 0 0 80px rgba(0, 0, 255, 0.8);
                border-color: rgba(0, 0, 255, 0.8);
            }
        }

        form {
            background-image: url('{{ asset('images/form-background.gif') }}');
            background-size: cover;
            background-position: center;
            padding: 20px;
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            color: #b0b0b0;
        }

        input {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            font-size: 14px;
            padding: 8px;
        }

        button {
            background-color: #6f42c1;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #5a36a0;
        }

        .alert {
            margin-top: 20px;
        }

        /* Estilo del enlace de registro */
        .register-link {
            font-size: 14px;
            color: #00ffcc;
            text-decoration: none;
        }

        .register-link:hover {
            color: #00cc99;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Iniciar Sesión</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-block">Iniciar Sesión</button>
        </form>

        <p class="mt-3">
            ¿No tienes una cuenta? <a href="{{ route('register') }}" class="register-link">Regístrate aquí</a>
        </p>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
