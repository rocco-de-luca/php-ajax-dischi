<?php
$db = [
    [
      'title' => 'the martin garrix collection',
      'author' => 'martin garrix',
      'year' => 2017,
      'poster' => 'https://img.discogs.com/Rmw81IwLLUvcTdSn6AIFuUXgHB4=/fit-in/600x595/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-12015516-1551722678-5552.jpeg.jpg'
    ],
    [
      'title' => 'Nothing but the beat',
      'author' => 'David Guetta',
      'year' => 2011,
      'poster' => 'https://m.media-amazon.com/images/I/710ZkhTLgJL._SS500_.jpg'
    ],
    [
      'title' => 'Happier Marshmello Bastille',
      'author' => 'Marshmello',
      'year' => 2018,
      'poster' => 'https://images-eu.ssl-images-amazon.com/images/I/41PWIdhCiRL._SX342_QL70_ML2_.jpg'
    ],
    [
      'title' => 'Bringing Home The Madness',
      'author' => 'Dimitry & Vegas',
      'year' => 2013,
      'poster' => 'https://img.discogs.com/o63IxAKHoBgpt8aPuM0gj8UJElA=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-5483824-1394547519-3352.png.jpg'
    ],
    [
      'title' => 'United we are',
      'author' => 'Hardwell',
      'year' => 2015,
      'poster' => 'https://www.nuovecanzoni.com/wp-content/uploads/2015/01/United-We-Are-hardwell-cd-cover.jpg'
    ],
    [
      'title' => 'Just be',
      'author' => 'Tiesto',
      'year' => 2004,
      'poster' => 'https://img.discogs.com/FlmyMY6uGURzXeYOfRXFLl9owgw=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-266228-1298228337.jpeg.jpg'
    ],
    [
      'title' => 'Kolony',
      'author' => 'Steve Aoky',
      'year' => 2017,
      'poster' => 'https://img.discogs.com/zufzK3u3BORUF1rWdFkRloG7AWU=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-10608771-1500873183-5172.jpeg.jpg'
    ],
    [
      'title' => 'forget the world',
      'author' => 'afrojack',
      'year' => 2014,
      'poster' => 'https://upload.wikimedia.org/wikipedia/en/2/21/Afrojack_Forget_the_World.jpg'
    ],
    [
      'title' => 'Stories',
      'author' => 'Avicii',
      'year' => 2009,
      'poster' => 'https://www.nuovecanzoni.com/wp-content/uploads/2015/10/stories-album-cover-avicii.jpg'
    ],
    [
      'title' => 'Like home',
      'author' => 'Nicky Romero',
      'year' => 2012,
      'poster' => 'https://img.discogs.com/zd3tADbjYm3bfM65xIoSFAmyiM4=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-4076667-1377949044-7657.jpeg.jpg'
    ],
  ];

    header('Content-Type: application/json');
    
    echo json_encode($db); 
