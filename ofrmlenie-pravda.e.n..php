<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wildtex</title>
</head>
<body>
    <div class="navigation">
        <div class="navigation-top">
        <a href="index.html"><img alt="картинк" class="logo" src="WildTex.png"></a>
            <a href="" class="tel">+7(926)9261187</a>
        </div>
        <div class="navigation-bottom">
            <div class="navigation-bottom-list">
                <a href=""><div class="navigation-list">Каталог</div></a>
                <a href="#"><div class="navigation-list">Акции</div></a> 

            </div>
            <form>
                <input type="text" placeholder="Искать здесь...">
                <button class="search" type="submit"></button>
              </form>
            <div class="icon">
            <a href="cart.html"><img alt="картинк" src="Контур4.png"></a>
            <a href=""><img alt="картинк" src="Сгруппировать5.png"></a>
            </div>
        </div>
    </div>
    <div class="slider">
        <a href=""><img alt="картинк" src="Сгруппировать94.png"></a>
    </div>
    <div class="header">Ваши товары</div>
    <div class="cart-list">
        <div class="cart-list-tovar">
            <div class="cart-list-tovar-number">1</div>
            <div class="cart-list-tovar-name">Комплектующая</div>
            <div class="cart-list-tovar-price">Цена</div>
        </div>
        <div class="cart-list-tovar">
            <div class="cart-list-tovar-number">1</div>
            <div class="cart-list-tovar-name">Комплектующая</div>
            <div class="cart-list-tovar-price">Цена</div>
        </div>
        <div class="cart-list-tovar">
            <div class="cart-list-tovar-number">1</div>
            <div class="cart-list-tovar-name">Комплектующая</div>
            <div class="cart-list-tovar-price">Цена</div>
        </div>
    </div>
    <div class="oformlenie-delivery">
        <button class="oformlenie-delivery-out">Самовывоз по адресу г. Москва, Жигулевская д.6</button>
        <button class="oformlenie-delivery-out">Доставка почтой России</button>

    </div>
    <div class="form-oformlenie"> 
    <label for="fname"><i class="fa fa-user"></i>Имя</label>
            <input  type="text" id="fname" name="firstname" placeholder="Щипунов Андрей Леонидович">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="and-shhipunov@mail.ru">
            <label for="adr"><i class="fa fa-address-card-o"></i>Адрес</label>
            <input type="text" id="adr" name="address" placeholder="Томская 44-39">
            <label for="city"><i class="fa fa-institution"></i>Город</label>
            <input type="text" id="city" name="city" placeholder="Пермь">
            <div class="row">
                <div class="col-50">
                  <label for="state">Государство</label>
                  <input type="text" id="state" name="state" placeholder="Россия">
                </div>
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" placeholder="10001">
                </div>
              </div>
            <label for="cname">Имя на карте</label>
            <input type="text" id="cname" name="cardname" placeholder="Щипунов Андрей Леонидович">
            <label for="ccnum">Номер кредитной карты</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">

           

            <div class="row">
              <div class="col-50">
                <label  for="expyear">Годен год</label>
                <input class="GOD" type="text" id="expyear" name="expyear" placeholder="2021">
              </div>
              <label for="expmonth">Годен месяц</label>
            <input class="month" type="text" id="expmonth" name="expmonth" placeholder="Сентябрь">
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input class="cvv" type="text" id="cvv" name="cvv" placeholder="352">
                
            </div>
           
            </div>
            <label for="expmonth1">Комментарий</label>
            <input type="text" id="expmonth1" name="expmonth1" placeholder="Пожелания">
        </div>
        <div class="footer">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="450" height="300" id="gmap_canvas" 
                    src="https://maps.google.com/maps?q=%D0%B6%D0%B8%D0%B3%D1%83%D0%BB%D0%B5%D0%B2%D1%81%D0%BA%D0%B0%D1%8F%206&t=&z=13&ie=UTF8&iwloc=&output=embed">
                </iframe>
            </div>
        </div>
            <div class="footer-text">Адрес: Жигулевская 6<br> 
                ( выдача товара не производится)<br>Телефон: +7(926)9261187</div>
        </div>
</body>
</html>