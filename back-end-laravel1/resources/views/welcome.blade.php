<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Wi-Fi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #121212;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: #1e1e1e;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.5);
            width: 320px;
        }

        .form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #4cafef;
        }

        label {
            display: block;
            margin-top: 10px;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-radius: 5px;
            outline: none;
            background: #2c2c2c;
            color: #fff;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background: #4cafef;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #368fd6;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('login-user') }}" method="POST" class="form">
            @csrf
            <h2>Portal Wi-Fi</h2>

            <label for="nome">Nome:</label>
            <input type="text" name="nome" placeholder="Digite seu nome" required>

            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Digite seu email" required>

            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
