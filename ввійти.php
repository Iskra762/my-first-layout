<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Вхід у ваш кабінет </title>
    <link rel="stylesheet" href="style.css">
    <style>
      #video-background {
        position: fixed;
        top: 0;
        left: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -1;
      }
      #content {
        position: relative;
        z-index: 1;
      }
      .conteiner {
        width: 40%;
        margin: auto;
        justify-content: center;
        align-items: center;
      }
      .authorize-block {
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
        background-color: darkgreen;
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
    <video id="video-background" src="https://player.vimeo.com/external/583264842.sd.mp4?s=3c8965b9e86b621a77775bc319f80bb5faa69234&profile_id=164&oauth2_token_id=57447761" autoplay muted loop></video>
    <div id="content">
      <div class="conteiner">
        <div class="authorize-block">
          <h1> Вхід у ваш кабінет </h1>
          <form action="login.php" method="post">
            <label for="email"> Ваш email: </label>
            <input type="email" name="email" id="email" placeholder="Введіть ваш email" required>
            <label for="password"> Ваш пароль: </label>
            <input type="password" name="password" id="password" placeholder="Введіть ваш пароль" required>
            <button type="submit"> Увійти </button>
          </form>
          <button class="naholovnu" onclick="location.href='home_page.php'"> На головну </button>
        </div>
      </div>
    </div>
  </body>
</html>
