<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Реєстрація </title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: wheat;
            animation: change-color 10s infinite alternate;
        }

        @keyframes change-color {
            0% {
                background-color: gray;
            }

            50% {
                background-color: orange;
            }

            100% {
                background-collor: wheat;
            }
        }

        .container {
            width: 40%;
            margin: auto;
            justify-content: center;
            align-items: center;
        }

        .registration-block {
            background-color: palegoldenrod;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        button {
            background-color: green;
            color: wheat;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: yellowgreen;
        }

        .naholovnu {
            display: inline-block;
            position: fixed;
            padding: 10px 20px;
            background-color: silver;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            top: 0;
            right: 0;
        }

        .naholovnu:hover {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="registration-block">
            <h2> Реєстрація </h2>
            <form>
                <label for="name">Ім'я</label>
                <input type="text" id="name" name="name" required>

                <label for="surname">Прізвище</label>
                <input type="text" id="surname" name="surname" required>

                <label for="email">Електронна пошта</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm-password">Підтвердження пароля</label>
                <input type="password" id="confirm-password" name="confirm-password" required>

                <button type="submit">Зареєструватися</button>
            </form>
            <button class="naholovnu" onclick="location.href='home_page.php'"> На головну </button>
        </div>
        <?php
        // Підключення до бази даних
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Отримання даних з форми
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Збереження даних у базі даних
        $sql = "INSERT INTO users (name, surname, email, password)
VALUES ('$name', '$surname', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        