<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Médico</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        header {
            background: #1e88e5;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }

        .card {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 6px;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            background: #1e88e5;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn:hover {
            background: #1565c0;
        }
    </style>
</head>
<body>

<header>
    <h1>🏥 Sistema de Citas Médicas</h1>
</header>

<div class="container">
    @yield('content')
</div>

</body>
</html>
