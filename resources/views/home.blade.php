
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Videojuegos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos personalizados */
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
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(128, 0, 128, 0.5);
            width: 100%;
            max-width: 1000px;
            text-align: center;
        }
        .game-card {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 15px;
        }
        .game-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .game-card .card-body {
            padding: 15px;
        }
        .game-card .btn {
            background-color: #6f42c1;
            color: white;
            border: none;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .game-card .btn:hover {
            background-color: #5a36a0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Bienvenido a la Tienda de Videojuegos</h2>
        <div class="row">
            @foreach ($games as $game)
                <div class="col-md-4">
                    <div class="card game-card">
                        <img src="{{ asset($game['image']) }}" alt="{{ $game['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $game['title'] }}</h5>
                            <p class="card-text">Precio: ${{ number_format($game['price'], 2) }}</p>
                            <a href="{{ $game['trailer'] }}" class="btn" target="_blank">Ver Tráiler</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
