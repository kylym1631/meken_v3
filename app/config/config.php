<?php
  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '123456');
  define('DB_NAME', 'meken');

  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://mekenavia.ru');
  // Site Name
  define('SITENAME', 'Мекен Авиа');
// App Version
define('APPVERSION', '2.1.0');


// links
define('TRAVEL_SITE', 'https://travel.mekenavia.ru/');

//main links
const MAIN_LINKS = [
    0=>array('icon'=>'icon-whatsapp',
                        'link'=>'https://api.whatsapp.com/send?phone=79268453222',
                        'title'=>'whatsapp',
                    ),
    1=>array('icon'=>'icon-instagram',
        'link'=>'https://www.instagram.com/mekenavia.ru/',
        'title'=>'instagram',

    ),
    2=>array('icon'=>'icon-odnoklassniki',
        'link'=>'https://mobile.ok.ru/profile/575859186582',
        'title'=>'odnoklassniki',

    ),
];
//secondary links
const SECONDARY_LINKS = [
    0=>array('icon'=>'icon-paper-plane',
        'link'=>'https://t.me/meken_avia',
        'title'=>'telegram',
    ),
    1=>array('icon'=>'icon-facebook',
        'link'=>'https://www.facebook.com/people/Мекен-Авиа/100027435827969',
        'title'=>'facebook',
    ),
    2=>array('icon'=>'icon-youtube',
        'link'=>'https://www.youtube.com/channel/UCTrFk3PcNtGEXWbA-F_OyOg',
        'title'=>'youtube',
    ),
];

const MENU = [
    0=>array('icon'=>'icon-ticket',
        'link'=>TRAVEL_SITE,
        'descr'=>'Купить билет'
    ),
    1=>array('icon'=>'icon-cart',
        'link'=>URLROOT.'/shops',
        'descr'=>'Покупки'
    ),
    2=>array('icon'=>'icon-bubbles4',
        'link'=>URLROOT.'/helps',
        'descr'=>'Вопросы и ответы'
    ),
    3=>array('icon'=>'icon-quill',
        'link'=>URLROOT.'/blogs',
        'descr'=>'Блог'
    ),
    4=>array('icon'=>'icon-compass2',
        'link'=>URLROOT.'/contacts',
        'descr'=>'Адреса'
    ),
    5=>array('icon'=>'icon-newspaper',
        'link'=>URLROOT.'/orders',
        'descr'=>'Проверить заказ'
    ),

    6=>array('icon'=>'icon-info',
        'link'=>URLROOT.'/infos',
        'descr'=>'Информации'
    ),
    7=>array('icon'=>'icon-location1',
        'link'=>URLROOT,
        'descr'=>'Главная'
    ),


];

const FOOTER = [
    0=>array('title'=>'Купить авиабилеты',
            'link'=>TRAVEL_SITE),
    1=>array('title'=>'Товары для путешествия',
        'link'=>URLROOT.'/shops#goods'),
    2=>array('title'=>'Добавить услуги',
        'link'=>URLROOT.'/shops#service'),
    3=>array('title'=>'Проверка заказа',
        'link'=>URLROOT.'/orders'),
    4=>array('title'=>'Акции и скидки',
        'link'=>URLROOT.'/blogs#sales'),
    5=>array('title'=>'Новости',
        'link'=>URLROOT.'/blogs#news'),
    6=>array('title'=>'Аэропорты',
        'link'=>URLROOT.'/infos#airports'),
    7=>array('title'=>'Авиакомпании',
        'link'=>URLROOT.'/infos#avia'),
    8=>array('title'=>'Посольство',
        'link'=>URLROOT.'/infos#embassies'),
    9=>array('title'=>'Частые вопросы',
        'link'=>URLROOT.'/helps#faq'),
    10=>array('title'=>'О нас',
        'link'=>URLROOT.'/contacts'),
    11=>array('title'=>'Контакты',
        'link'=>URLROOT.'/contacts#address'),
    12=>array('title'=>'Адреса',
        'link'=>URLROOT.'/contacts#address'),
    13=>array('title'=>'Блог',
        'link'=>URLROOT.'/blogs#blogs'),
    14=>array('title'=>'Отзывы',
        'link'=>URLROOT.'/contacts#reviews'),
];

const FOOTER_HEAD = [
    0=>array('title'=>'Сервисы и услуги'),
    1=>array('title'=>'Информация'),
    2=>array('title'=>'О компании'),
];