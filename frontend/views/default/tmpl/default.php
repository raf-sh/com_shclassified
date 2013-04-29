<?php
// защита от прямого доступа
defined('_JEXEC') or die('Restricted access');
// registration info (login, password #1)


// номер заказа
// number of order
$inv_id = 0;

// описание заказа
// order description
$inv_desc = "ROBOKASSA Advanced User Guide";

// сумма заказа
// sum of order
$out_summ = "8.96";

// тип товара
// code of goods
$shp_item = "2";

// предлагаемая валюта платежа
// default payment e-currency
$in_curr = "";

// язык
// language
$culture = "ru";

// формирование подписи
// generate signature

?>

<html>
<head>


<title>Classified Ad</title>
<style>
input[type="text"], input[type="password"], input[type="email"], input[type="url"], input[type="phone"], textarea {
position: relative;
z-index: 2;
font-family: 'Source Sans Pro', 'PT Sans', Arial, "Helvetica Neue", Helvetica, Tahoma, sans-serif;
height: 23px;
border: 1px solid #ccc;
margin-top: 10;
padding: 1px 2px;
background-color: white;
color: #333;
font-size: .95em;
line-height: 1;
border-radius: 1px;
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
-webkit-transition: border ease 0.5s;
-moz-transition: border ease 0.5s;
-ms-transition: border ease 0.5s;
-o-transition: border ease 0.5s;
transition: border ease 0.5s;}
.ui-state-select a.ui-state-default {
    color:red;
    font-weight: bold;
}
</style>
</head>
<body>
<h1>Подать объявление</h1>

<div class="price">
<h3>Расценки на размещение рекламы</h3>
<table width="500px">
<tr><td>Вид объявления\рубрика</td><td>Дарю</td><td>Соболезнования, благодарности</td><td>Покупка, продажа, обмен недвижимости (кроме коммерческого); знакомства (честного хар-ра); ищу работу, ищу работника</td><td>Все отсальные (сдаю/сниму жилье, услуги и др.)</td></tr>
<tr><td>Обычное</td><td>7 руб.</td><td rowspan="5"><b>Бесплатно</b> до 25 слов, свыше - 7 руб./слово</td><td>20 руб</td><td>27 руб.</td></tr>
<tr><td>Выделенное</td><td>8 руб.</td><td>22 руб.</td><td>30 руб.</td></tr>
<tr><td>В рамке</td><td>9 руб.</td><td>24 руб.</td><td>33 руб.</td></tr>
<tr><td>Выделенное в рамке</td><td>10 руб.</td><td>26 руб.</td><td>35 руб.</td></tr>
<tr><td>Выделенная инверсия</td><td>11 руб.</td><td>28 руб.</td><td>37 руб.</td></tr>
</table>
</div>
<br />
<form action='index.php?option=com_shclassified&task=add' method=POST>
 <fieldset>
  <legend>Подать объявление</legend>
   <span>Текст Вашего объявления</span><input id="ad-text" type="text" name="ad-text" value="продаем слона. высшей категории." /><br />
   <span>Ваш контактный телефон</span><input type="text" id="phone" name="contact-phone" /><br />
   <span>Ф.И.О.</span><input type="text" id="name" name="contact-name" /><br />
    <br />
	<span>Количество выходов</span> 
<span>Quantity</span><input type="text" id="quantity" name="quantity" /><br />
	<br />
	<span>Вид объявления</span> 
	<select name="view" id="view">
     <option value="normal" selected>Обычное</option>
     <option value="bold">Выделенное</option>
     <option value="border">В рамке</option>
     <option value="bold-border">Выделенное в рамке</option>
     <option value="bold-inverse">Выделенная инверсия</option>
    </select>
	<br />
	<span>Категория</span>
    <select name="category" id="category">
     <option value="real-estate" selected>Недвижимость</option>
     <option value="computers">Компьютеры</option>
     <option value="building">Строительство</option>
     <option value="services">Услуги</option>
     <option value="job">Работа</option>
    </select>
	<input id="datepicker" type="hidden" />
	<ul id="date_list"></ul>
 </fieldset>
 
 <input type="submit" value="Оплатить!" />
 <input type="button" value="расчитать стоимость" onClick="return Button1_onclick()" />
</form>
<div id="ad-price">
</div>
<div id="ad-price2">
</div>
<script>
var dates = [];

function addZero(date) {
    return date > 9 ? date : '0' + date;
}

$("#datepicker").datepicker({
    constrainInput: true,
    showOn: 'button',
    buttonText: 'Выберете даты',

    beforeShowDay: function (date) {
        var day = addZero(date.getDate());
        var month = addZero(date.getMonth());
        var d = date.getFullYear() + "-" + month + "-" + day;
        if (dates.indexOf(d) >= 0) {
            return [true, "ui-state-select"];
        }
        return [true, ""];
    },
    onSelect: function (date, init) {
        var td = init.dpDiv.find('a.ui-state-hover').parent('td');
        var d = new Date(date);
        var day = addZero(d.getDate());
        var month = addZero(d.getMonth());
        var a = d.getFullYear() + "-" + month + "-" + day;
        var index = dates.indexOf(a);
        if (index >= 0) {
            dates.splice(index, 1);
            td.removeClass('ui-state-select');
        } else {
            dates.push(a);
            td.addClass('ui-state-select');
        }

        $.datepicker._showDatepicker();

    },
    onClose: function (date, init) {
        console.log(dates);
        var list = $("#date_list");
        list.empty();
        for (d in dates) {
            var date = $.datepicker.formatDate('yy-mm-dd', new Date(dates[d]));
            var input = $('<input/>').attr({
                'type': 'hidden',
                'name': 'field[]'
            }).val(date);

            list.append('<li>' + date + '</li>', input);

        }


    }
});
</script>
<script type="text/javascript" src="/components/com_shclassified/assets/js/classified.js"></script>
</body>
</html>