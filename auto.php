<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <form method="POST" action="">
  <div class="login-box">
    <!-- Иконка стрелочки -->
    <div class="login-icon">
      <span>&#x2192;</span>
    </div>
    <!-- Текст над полем -->
    <p class="login-text">Вход в аккаунт</p>
    <!-- Поле для ввода электронной почты -->
    <input type="email" name="email_auto" class="input-line" placeholder="Введите вашу электронную почту"  >

  

    <!-- Кнопка -->
    <button class="login-button">Далее ></button>
    <img src="img/logo.png" alt="Logo" class="logo"> 
    <?php

// Инициализируем переменные как пустые строки
$email_auto = '';
$error = '';

// Проверка, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Присваиваем значение из формы, если оно было отправлено
    if (isset($_POST["email_auto"])) {
        $email_auto = $_POST["email_auto"];
    }

    // Логика проверки ошибок
    if (empty($email_auto)) {
        $error = "Ошибка: Электронный адрес не может быть пустым!";
    }

    // Если ошибка есть, выводим её    
    if (!empty($error)) {
        echo "<div class='error-box'>$error</div>"; 
    }
}
?>


  <!-- ПЛАВНОСТЬ ОШИБКИ -->
<script>
    
    window.addEventListener('DOMContentLoaded', (event) => {
        const errorBox = document.querySelector('.error-box');
        if (errorBox) {
            errorBox.classList.add('show'); 
        }
    });
</script>

    
    <!-- Блок для текста и кнопки на одной строке -->
    <div class="register-container">
        <p class="acc-text">Нет аккаунта?</p>
        <a href="reg.php" class="register-button">Зарегистрироваться</a>
      </div>
    </div>
  </div>
</form>
</div>
</body>
</html>
