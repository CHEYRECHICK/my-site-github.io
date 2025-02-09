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

    
  

    <div class="login-icon">
      <span>&#x2192;</span>
    </div>
    
    <p class="login-text">Зарегистрироваться</p>
    <input type="text" name="name_reg" class="input-line" placeholder="Имя">
    <input type="email" name="email_reg" id="email_reg" class="input-line" placeholder="Введите вашу электронную почту" >
    <!-- Кнопка -->
    <button class="login-button">Далее ></button>
    
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

<script>
    // Плавно показываем ошибку после загрузки страницы
    window.addEventListener('DOMContentLoaded', (event) => {
        const errorBox = document.querySelector('.error-box');
        if (errorBox) {
            errorBox.classList.add('show');  // Добавляем класс show
        }
    });
</script>
    
    
    


    <img src="img/logo.png" alt="Logo" class="logo"> 
    
    <div class="register-container">
        <p class="acc-text">Есть аккаунт?</p>
        <a href="auto.php" class="register-button">Войти</a>
      </div>
      
    </div>
  </div>
  </form>
</body>
</html>

</body>
</html>