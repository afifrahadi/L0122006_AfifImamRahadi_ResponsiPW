<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f8ff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .centered {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #333;
        }
        .centered h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .centered p {
            font-size: 1.25rem;
            color: #666;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            font-size: 1.25rem;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .btn-custom a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container centered">
        <h1>Selamat Datang Dalam Web Pendataan Mahasiswa</h1>
        <p>Silakan login atau register untuk melanjutkan.</p>
        <div class="mt-4">
            <button class="btn btn-custom mx-2">
                <a href="/login">Login</a>
            </button>
            <button class="btn btn-custom mx-2">
                <a href="/register">Register</a>
            </button>
        </div>
    </div>
</body>
</html>
