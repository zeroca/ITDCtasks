<?php
$nav = [
    ['id' => 'home', 'name' => 'Home'],
    ['id' => 'about', 'name' => 'About'],
    ['id' => 'blog', 'name' => 'Blog'],
    ['id' => 'contact', 'name' => 'Contact'],
];
$content = [
    'home'    => ['title' => 'Home Page', 'body' => 'home page content','type' => 'text'],
    'about'   => ['title' => 'About Us', 'body' => 'About content', 'type' => 'text'],
    'blog'    => [
        'title' => 'Blog',
        'list'  => [
            ['title' => 'sadf', 'body' => 'asfsd'],
            ['title' => 'sadf', 'body' => 'asfsd'],
            ['title' => 'sadf', 'body' => 'asfsd'],
            ['title' => 'sadf', 'body' => 'asfsd'],
            'type' => 'list'
        ],
    ],
    'contact' => ['title' => 'Contact', 'body' => 'Contact content','type' => 'text'],
];