

<?php

$a = 0;
$b = 0;
if (isset($_GET['a'])) {
    $a =$_GET['a'];
}
if (isset($_GET['b'])) {
    $b = $_GET['b'];
}
echo $a + $b;
?>


<?php
//include 'data.php';
$nav = [
    ['id' => 'home', 'name' => 'Home', 'type' => 'text'],
    ['id' => 'about', 'name' => 'About', 'type' => 'text'],
    ['id' => 'blog', 'name' => 'Blog', 'type' => 'list'],
    ['id' => 'contact', 'name' => 'Contact', 'type' => 'text'],
   
];
$content = [
    'home'    => ['title' => 'Home Page', 'body' => 'home page content'],
    'about'   => ['title' => 'About Us', 'body' => 'About content'],
    'blog'    => ['title' => 'Blog', 'body' => 
    '<ul>
     <li><a href="websiteworking.php?list"</a> fffffffffff</li>
     <li><a href="websiteworking.php?list"</a>nnnnnnnnnn</li>
     <li><a href="websiteworking.php?list"</a>hhhhhhhhhhh</li>
     <li><a href="websiteworking.php?list"</a>jjjjjjjjjjj</li>
     
    </ul>'




    ],
    'contact' => ['title' => 'Contact', 'body' => 'Contact content'],
    
];


$list = [
            ['title' => 'sadf', 'body' => 'asfsd1'],
            ['title' => 'sadf', 'body' => 'asfsd2'],
            ['title' => 'sadf', 'body' => 'asfsd3'],
            ['title' => 'sadf', 'body' => 'asfsd4'],
        ];

?>


<ul>
    <?php foreach ($nav as $v): ?>
    <li><a href="websiteworking.php?page=<?=$v['id']?>"><?=$v['name']?></a></li>
    <?php endforeach;?>
</ul>







<?php
// home about blog contact 
if (isset($_GET['page']) && isset($content[$_GET['page']])):
?>
    <h1><?=$content[$_GET['page']]['title']?></h1>
    <p><?=$content[$_GET['page']]['body']?></p>

<?php else: ?>
  <h2>404</h2> 
<?php endif;?>



 
