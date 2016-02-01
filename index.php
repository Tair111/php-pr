<?php

require_once __DIR__ . '/models/news.php';

//$news = News_getAll();

$news = [
  [
    'title'=>'Новость первая',
    'text'=>'В лесу родилась елочка',
  ],
  [
      'title'=>'Новость вторая',
      'text'=>'В лесу она росла',
  ],
];

include 'view/index.php';