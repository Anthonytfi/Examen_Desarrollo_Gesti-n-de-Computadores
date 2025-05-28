<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Computadores - @yield('title')</title>
    <!-- Estilos mejorados -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #35424a;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        nav {
            background-color: #e8491d;
            padding: 0.5rem;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 1rem;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            padding: 2rem;
            margin-bottom: 80px; /* Más espacio para el pie de página */
            min-height: calc(100vh - 150px); /* Asegura que el contenido ocupe al menos la altura de la ventana */
        }
        footer {
            background-color: #35424a;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .container {
            max-width: 1200px; /* Limita el ancho máximo para centrar el contenido */
            margin: 0 auto; /* Centra el contenedor */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            table-layout: auto; /* Permite que las columnas se ajusten al contenido */
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 0.5rem;
            text-align: left;
            vertical-align: top; /* Alinea el texto en la parte superior */
            word-wrap: break-word; /* Permite que el texto largo se ajuste */
            max-width: 200px; /* Limita el ancho máximo de las columnas */
        }
        table th {
            background-color: #35424a;
            color: white;
            font-size: 0.9rem;
        }
        table td {
            font-size: 0.85rem;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        table tr:hover {
            background-color: #f1f1f1;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 1.5rem;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        form div {
            margin-bottom: 1rem;
        }
        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        form input, form select, form textarea {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-sizing: border-box;
        }
        form textarea {
            height: 100px;
            resize: vertical;
        }
        form button {
            background-color: #e8491d;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #c0392b;
        }
        a.button {
            display: inline-block;
            background-color: #35424a;
            color: white;
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            border-radius: 3px;
            margin-top: 1rem;
        }
        a.button:hover {
            background-color: #2c3e50;
        }
        .success-message {
            color: green;
            font-weight: bold;
            margin: 1rem 0;
        }
        .action-link, .action-form {
            display: inline-block;
            margin-right: 0.5rem;
        }
        .action-form button {
            background-color: #c0392b;
            padding: 0.5rem 1rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Gestión de Computadores</h1>
    </header>
    <nav>
        <a href="{{ url('/') }}">Inicio</a>
        <a href="{{ url('/computadores') }}">Computadores</a>
    </nav>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>
        <p>© 2025 Gestión de Computadores</p>
    </footer>
</body>
</html>