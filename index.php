<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>JSBND</title>
    <style>
      body {
        padding: 0;
        margin: 0;
        background: #fff;
        color: #000;
        font-size: 20px;
        line-height: 1.5;
        font-family: Helvetica, Arial;
      }
      .wrapper {
        position: relative;
        overflow: hidden;
        padding: 50px 100px 80px;
      }
      @media (max-width: 800px) {
        body {
          font-size: 18px;
        }
        .wrapper {
          padding: 50px 50px 80px;
        }
        .wrapper:after {
          right: 30px;
        }
      }
      @media (max-width: 500px) {
        body {
          font-size: 16px;
        }
        .wrapper {
          padding: 30px 20px 50px;
        }
        .wrapper:after {
          width: 80%;
          right: 10%;
        }
      }
      .logo {
        margin-bottom: 3em;
        position: relative;
      }
      .logo:before {
        content: '';
        display: block;
        position: absolute;
        bottom: 34%;
        left: -50%;
        width: 9999px;
        background: #f7df1e;
        height: 9999px;
        z-index: -1;
      }
      p, h2 {
        max-width: 700px;
      }
      p, .p {
        margin: 0;
        margin-top: 0.75em;
      }
      p:first-child {
        margin-top: 0;
      }
      h2 + p, h2 + .p {
        margin-top: 0.8em;
      }
      img {
        max-width: 100%;
      }
      h2 {
        margin: 0;
        font-size: 1.6em;
        margin-top: 1.5em;
        line-height: 1.3;
      }
      .team {
        display: flex;
        flex-flow: row wrap;
        margin-bottom: -1.5em;
        margin-top: 1.5em;
      }
      .teammate {
        width: 240px;
        margin-right: 1.5em;
        margin-bottom: 1.5em;
      }
      .teammate:last-child {
        margin-right: 0;
      }
      .teammate img {
        margin-bottom: 0.5em;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <p class="logo"><img src="images/logo.png" width="319"></p>
      <h2>Создаём IT-продукты для себя и&nbsp;для&nbsp;других</h2>
      <p>Разработаем MVP для вашего стартапа: проанализируем, спроектируем, нарисуем, сверстаем, запрограммируем, задеплоим. Хоть сайт, хоть приложение.</p>
      <p>Если после выпуска MVP вы получите инвестирование или просто решите продолжить разработку, мы соберём для вас команду, которая продолжит развитие и поддержание продукта.</p>
      <p>Проконсультируем по вопросам разработки IT-продуктов.</p>
      <h2>⚙️ Технологии</h2>
      <p>Разрабатываем на JS, Node.js, React, Apllo, GraphQL, ModnogDB, Docker. Дизайн рисуем в Sketch, Figma. Прототипируем в inVision. Настраиваем SaaS аналитику в Mixpanel.</p>
      <h2>✊ Команда</h2>
      <p>Мы — слаженная команда из 4 человек. Закрываем все вопросы разработки в стартапе: проектирование, дизайн, вёрстка, программирование, настройка серверов, аналитика, найм персонала. Последним проектом делали платформу для создания и прохождения онлайн-курсов.</p>
      <div class="team p">
        <div class="teammate"><img src="images/iserdmi.png"><b>Сергей Дмитриев</b><br>Менеджер продукта, проектировщик, фулстек JS разработчик</div>
        <div class="teammate"><img src="images/oct8cat.png"><b>Сергей Елсуков</b><br>Бэкенд JS разработчик, системный администратор</div>
        <div class="teammate"><img src="images/maxsolovev.png"><b>Максим Соловьёв</b><br>Фронтенд JS разработчик</div>
        <div class="teammate"><img src="images/nikulin.jpg"><b>Александр Никулин</b><br>Дизайнер</div>
      </div>
      <h2>📮 Контакты</h2>
      <p>Нужен MVP, команда, хотите что-то спросить?<br>Звоните или пишите Сергею&nbsp;Дмитриеву:<br>+7 917 011-90-30<br>iserdmi@gmail.com</p>
    </div>
  </body>
</html>
