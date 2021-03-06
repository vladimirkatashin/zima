<head>
<html lang ="en">
	<link rel="stylesheet" href="css/style.css">
	<meta charset="UTF-8">
	<title>Myscale magazine - Main</title>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<style type="text/css">
/* Окна */
.modal_div {
	width: 600px; 
	height: 400px; /* Размеры должны быть фиксированы */
	border-radius: 5px;
	border: 3px #000 solid;
	background: #fff;
	position: fixed; /* чтобы окно было в видимой зоне в любом месте */
	top: 45%; /* отступаем сверху 45%, остальные 5% подвинет скрипт */
	left: 50%; /* половина экрана слева */
	margin-top: -150px;
	margin-left: -150px; /* тут вся магия центровки css, отступаем влево и вверх минус половину ширины и высоты соответственно =) */
	display: none; /* в обычном состоянии окна не должно быть */
	opacity: 0; /* полностью прозрачно для анимирования */
	z-index: 5; /* окно должно быть наиболее большем слое */
	padding: 20px 10px;
}
/* Кнопка закрыть для тех кто в танке) */
.modal_close {
	width: 21px;
	height: 21px;
	position: absolute;
	top: 10px;
	right: 10px;
	cursor: pointer;
	display: block;
}
/* Подложка */
#overlay {
	z-index: 3; /* подложка должна быть выше слоев элементов сайта, но ниже слоя модального окна */
	position: fixed; /* всегда перекрывает весь сайт */
	background-color: #000; /* черная */
	opacity: 0.8; /* но немного прозрачна */
	width: 100%; 
	height: 100%; /* размером во весь экран */
	top: 0; 
	left: 0; /* сверху и слева 0, обязательные свойства! */
	cursor: pointer;
	display: none; /* в обычном состоянии её нет) */
}
</style>
<script type="text/javascript">
$(document).ready(function() { // запускаем скрипт после загрузки всех элементов
    /* засунем сразу все элементы в переменные, чтобы скрипту не приходилось их каждый раз искать при кликах */
    var overlay = $('#overlay'); // подложка, должна быть одна на странице
    var open_modal = $('.open_modal'); // все ссылки, которые будут открывать окна
    var close = $('.modal_close, #overlay'); // все, что закрывает модальное окно, т.е. крестик и оверлэй-подложка
    var modal = $('.modal_div'); // все скрытые модальные окна

     open_modal.click( function(event){ // ловим клик по ссылке с классом open_modal
         event.preventDefault(); // вырубаем стандартное поведение
         var div = $(this).attr('href'); // возьмем строку с селектором у кликнутой ссылки
         overlay.fadeIn(400, //показываем оверлэй
             function(){ // после окончания показывания оверлэя
                 $(div) // берем строку с селектором и делаем из нее jquery объект
                     .css('display', 'block') 
                     .animate({opacity: 1, top: '50%'}, 200); // плавно показываем
         });
     });

     close.click( function(){ // ловим клик по крестику или оверлэю
            modal // все модальные окна
             .animate({opacity: 0, top: '45%'}, 200, // плавно прячем
                 function(){ // после этого
                     $(this).css('display', 'none');
                     overlay.fadeOut(400); // прячем подложку
                 }
             );
     });
});
</script>
</head>
<body>
	<div class="header">
		<div class="center">
          <div class="top">
            <div class="headernetwork">
             <div class="footernetwork">
                    <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/instaicon.png"></a> </div>
                     <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/pinteresticon.png"></a> </div>
                      <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/twittericon.png"></a> </div>
                       <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/facebookicon.png"></a> </div>
                        <div class="footernetworkico"><a href="cat/kafer1.html"><img src="img/youtubeicon.png"></a> </div>

                </div>
              


<div id="overlay"></div><div class="login">
  <a href="#login" class="open_modal"><p>Hello, $firstline</p></a>
  <a href="auth.php?exit=true"><p>$twoline</p></a>
  </div>
  <div id="login" class="modal_div">
  <a href="edit.php"><p>Edit</p></a>
  <a href="auth.php?orders=view"><p>Orders</p></a>
  <a href="auth.php?orders=users"><p>Users</p></a>
  <span class="modal_close">X</span>
  </div>


<div id="overlay"></div>
  <div class="login">
  <a href="#login" class="open_modal"><p>Hello, $firstline</p></a>
  <a href="auth.php?exit=true"><p>$twoline</p></a>
  </div>
  <div id="login" class="modal_div">
  <a href="auth.php?orders=view"><p>Orders</p></a>
  <span class="modal_close">X</span>
  </div>

<div id="overlay"></div>
  <div class="login">
  <a href="#login" class="open_modal"><p>Hello, $firstline</p></a>
   <div id="login" class="modal_div">
       <form name="login" method="post" action="auth.php">
     <input type="hidden" name="log" value="1">
   <p>
    <label>Login</label>
    <input type="text" name="login">
  </p>
  <p>
    <label>Password</label>
    <input type="password" name="password">
  </p>
  <p>
    <input type="submit" value="Enter">
  </p>
</form>
  <span class="modal_close">X</span>
  </div>

  <a href="#reg" class="open_modal"><p>$twoline</p></a>
   <div id="reg" class="modal_div">
       <form name="login" method="post" action="auth.php">
       <input type="hidden" name="log" value="2">
   <p>
    <label>Login</label>
    <input type="text" name="login">
  </p>
  <p>
    <label>First name</label>
    <input type="text" name="first_name">
  </p>
  <p>
    <label>Last name</label>
    <input type="text" name="last_name">
  </p>
  <p>
    <label>Email</label>
    <input type="email" name="email">
  </p>
  <p>
    <label>Phone</label>
    <input type="tel" name="phone">
  </p>
  <p>
    <label>Password</label>
    <input type="password" name="password">
  </p>
  <p>
    <label>Confirm password</label>
    <input type="password" name="password_confirm">
  </p>
  <p>
    <input type="submit" value="Registration">
  </p>
</form>
  <span class="modal_close">X</span>
  </div>
  </div>;

            </div>

            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
			<div class="welcome">
                <h2>WELCOME TO MYSCALE</h2>
                <p>The only online store you will ever need for all your diecast hobby</p>
            </div>   

<div class="headertext">
    <h2>NEW SHUCO DIECAST<br>2018</h2>
    <p>Only with us, buy first</p>
     <input type="button" class="yellowbutton" value="BUY NOW">
</div>     

		</div>
		</div>	
      </div>
    </div>

	<div class="main">
		<div class="center">
            <div class="menu">
                <ul>
                            <li class="menu-item"><a href="index.php">MAIN</a></li>
                            <li class="menu-item"><a href="#">NEWS</a></li>
                            <li class="menu-item"><a href="#">DIECAST</a></li>
                            <li class="menu-item"><a href="#">BRANDS</a></li>
                            <li class="menu-item"><a href="#">CATEGORIES</a></li>
                            <li class="menu-item"><a href="#">AUCTION</a></li>
                            <li class="menu-item"><a href="#">HISTORY</a></li>
                            <li class="menu-item"><a href="#">ACCESSORIES</a></li>
                            <li class="menu-item"><a href="#">SALE</a></li>
                            <li class="menu-item"><a href="#">ABOUT</a></li>
                            <li class="menu-item"><a href="#">CONTACT</a></li>
                        </ul>
            </div>
        <div class="now">
            <p>NOW<br>IS<br>OPEN!</p>
            </div>
