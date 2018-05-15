<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Спасибо, ты помог!</title>
  <style>
  /* http://meyerweb.com/eric/tools/css/reset/ 
     v2.0 | 20110126
     License: none (public domain)
  */

  html, body, div, span, applet, object, iframe,
  h1, h2, h3, h4, h5, h6, p, blockquote, pre,
  a, abbr, acronym, address, big, cite, code,
  del, dfn, em, img, ins, kbd, q, s, samp,
  small, strike, strong, sub, sup, tt, var,
  b, u, i, center,
  dl, dt, dd, ol, ul, li,
  fieldset, form, label, legend,
  table, caption, tbody, tfoot, thead, tr, th, td,
  article, aside, canvas, details, embed, 
  figure, figcaption, footer, header, hgroup, 
  menu, nav, output, ruby, section, summary,
  time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
  }
  /* HTML5 display-role reset for older browsers */
  article, aside, details, figcaption, figure, 
  footer, header, hgroup, menu, nav, section {
    display: block;
  }
  body {
    line-height: 1;
  }
  ol, ul {
    list-style: none;
  }
  blockquote, q {
    quotes: none;
  }
  blockquote:before, blockquote:after,
  q:before, q:after {
    content: '';
    content: none;
  }
  table {
    border-collapse: collapse;
    border-spacing: 0;
  }

  a {
    color: inherit;
    text-decoration: none;
  }

  html {
    box-sizing: border-box;
  }
  *, *:before, *:after {
    box-sizing: inherit;
  }
    @font-face {
        font-family: 'gilroy-black';
        src: url('fonts/gilroy-black-webfont.eot');
        src: url('fonts/gilroy-black-webfont.eot?#iefix') format('embedded-opentype'),
             url('fonts/gilroy-black-webfont.woff2') format('woff2'),
             url('fonts/gilroy-black-webfont.woff') format('woff'),
             url('fonts/gilroy-black-webfont.ttf') format('truetype'),
             url('fonts/gilroy-black-webfont.svg#gilroy-black') format('svg');
        font-weight: normal;
        font-style: normal;
    }




    @font-face {
        font-family: 'gilroy-regular';
        src: url('fonts/gilroy-regular-webfont.eot');
        src: url('fonts/gilroy-regular-webfont.eot?#iefix') format('embedded-opentype'),
             url('fonts/gilroy-regular-webfont.woff2') format('woff2'),
             url('fonts/gilroy-regular-webfont.woff') format('woff'),
             url('fonts/gilroy-regular-webfont.ttf') format('truetype'),
             url('fonts/gilroy-regular-webfont.svg#gilroy-regular') format('svg');
        font-weight: normal;
        font-style: normal;
    }    

    body {
      font-family: 'gilroy-regular';
      padding-top: 115px;
      margin-bottom: 60px;
    }
    .container {
      max-width: 730px;
      margin: 0 auto;
      text-align: center;
    }

    h1 {
      font-size: 80px;
      text-align: center;
      color: #120C0E;
      font-family: 'gilroy-regular';
      text-transform: uppercase;
      margin-top: 0;
      line-height: 1;
      margin-bottom: 67px;
    }

    .price {
      font-size: 140px;
      font-family: 'gilroy-black';
      border: 4px solid #ed1c24;
      border-radius: 37px;
      margin-left: 2px;
      text-align: right;
      padding: 0 16px;
      height: 130px;
      color: #ED1C24;
      line-height: 1;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      font-weight: 900;
    }

    .price-text {
    }

    .day-text {
      margin-left: 12px;
      letter-spacing: 0.7px;
      font-size: 27px;
      text-align: center;
      font-family: 'gilroy-regular';
      margin-top: 5px;
      margin-bottom: 40px;
    }

    .logos {
      margin-bottom: 45px;
    }

    .copyright {
      font-size: 7px;
      font-family: 'Helvetica Neue', Arial;
      max-width: 583px;
      text-align: center;
      margin: 0 auto;
    }

    @media (max-width:  980px) {
      .container {
        padding-right: 50px;
        padding-left: 50px;
      }
      h1 {
        font-size: 50px;
        margin-bottom: 48px;
      }
      .logos {
        margin-bottom: 35px;
        max-width: 100%;
      }
      .price {
        font-size: 40px;
        height: 46px;
        letter-spacing: 5px;
        margin-left: auto;
        margin-right: auto;
      }
      .day-text {
        font-size: 12px;
      }
      .copyright {
        font-size: 5px;
        max-width: 400px;
      }
    }
    @media (max-width: 380px) {
      h1 {
        font-size: 38px;
      }
      h1 img {
        width: 40px;
      }
    }
  </style>
</head>
<body>
  <?php $counter = file_get_contents('counter.txt') ?>
  <div class="container">

    <h1>Спа<img src="moon.png" alt="spasibo" width="60">ибо,<br>ты помог</h1>
    <div class="price"><span class="price-text" data-price="<?php echo empty($counter) ? '40560' : $counter ?>"><?php echo empty($counter) ? '40 560' : $counter ?></span>₽</div>
    <p class="day-text"><span class="js-day">1</span> день с начала акции</p>
    <img src="logos.png" alt="real2" class="logos">
    <p class="copyright">Спасибо. Реал два. Не является публичной офертой. Цены указаны в российских рублях. Организаторы акции: ИП "Севостьянова Екатерина Рудиеновна", ИНН 056009206016, ОГРНИП 310057019500097, Благотворительный фонд "ИНСАН", ИНН: 0572001481, ОГРН: 1120500000576 В период проведения акции с 15.05.2018 - 15.06.2018 года компания REAL2 отчисляет 20 рублей с каждой товара в чеке в благотворительный фонд "Инсан". 20 рублей с товара не отчисляется с оптовых покупок и покупок смартфонов, планшетов, умных часов и ноутбуков. 20 рублей отчисляется с покупок, совершенных в розничных магазинах REAL2 на территории РД, покупок в колл-центре по тел. 55-51-51 и на сайте www.real2.ru. Подробную информацию вы можете получить по тел.: 8 8722 55-51-51.</p>
  </div>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script>
    var priceText = document.querySelector('.price-text');
    var price = +priceText.dataset['price'];
    var step = 20;
    var interval = 20;
    var startDate = new Date(2018, 4, 14, 9);
    var nowDate = new Date()

    document.querySelector('.js-day').textContent = nowDate.getDate() - startDate.getDate();

    setInterval(function() {
      price += step;
      priceText.textContent = price;
      $.post('post.php', {price: price}, function(data) {
      });
    }, interval * 1000)
  </script>
</body>
</html>