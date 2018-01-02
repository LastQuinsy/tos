<?php

require 'views/header.php'; //Хэадер нашего сайта

//массив страниц нашего сайта!!!
//при добавлении новой страницы её всего лишь нужно будет добавить в этот массив и кинуть страницу в нужную папку. 
$pages = ["main","cart","ledenec","about"];

// isset - проверка существует ли в массиве GET переменная page.
if(isset($_GET['page'])) { 
    //проверка кукую страницу передали в массив GET 
    if(in_array($_GET['page'], $pages)) {
        include 'pages/' . $_GET['page'] . '.php';
    } 
    //написание ошибки если страницы нет в массиве страниц (т.е. на сайте)
    else {
        include 'pages/error.php';
    }
//выдача ошибки в случае если переменная page нет в адресе (т.е. нет запроса не на одну из страниц сайта.
} else {
    include 'pages/error.php';
}



// switch ($_GET['page']) {
//     case 'main':
//         include 'pages/main.php';
//         break;
    
//     case 'cart':
//         include 'pages/cart.php';
//         break;

//     case 'about':
//         include 'pages/about.php';
//         break;

//     default:
//         include 'pages/error.php';
//         break;
// }


 
require 'views/footer.php'; //Футер нашего сайта
