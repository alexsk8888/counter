<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="timer">
        <div class="end_time">
            2022-09-12 11:15:50
            <?php echo  carbon_get_theme_option( 'date_and_time' ) ?>
        </div>
        <div class="timer__items">
          <div class="timer__item timer__days">00</div>
          <div class="timer__item timer__hours">00</div>
          <div class="timer__item timer__minutes">00</div>
          <div class="timer__item timer__seconds">00</div>
        </div>
      </div>
</body>
<script src="app.js"></script>
</html>