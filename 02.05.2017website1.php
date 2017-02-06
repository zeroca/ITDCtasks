<p><a href="index.php">to index</a> </br> </br></p>

<?php
$nav = [
    ['id' => 'home', 'name' => 'Home', 'type' => 'text'],
    ['id' => 'about', 'name' => 'About', 'type' => 'text'],
    ['id' => 'blog', 'name' => 'Blog', 'type' => 'list'],
    ['id' => 'contact', 'name' => 'Contact', 'type' => 'text'],
];
$content = [
    'home'    => ['title' => 'Home Page', 'body' => 'home page content','type' => 'text'],
    'about'   => ['title' => 'About Us', 'body' => 'About content','type' => 'text'],
    'blog'    => [
        'title' => 'Blog',
        'list'  => [
            ['title' => 'sadf1', 'body' => 'asfsd'],
            ['title' => 'sadf2', 'body' => 'asfsd'],
            ['title' => 'sadf3', 'body' => 'asfsd'],
            ['title' => 'sadf4', 'body' => 'asfsd'],
        ],
        'type' => 'list'
    ],
    'contact' => ['title' => 'Contact', 'body' => 'Contact content','type' => 'text'],
];







?>


<ul>
   <?php foreach ($nav as $v):?> 
        <li><a href="02.05.2017website1.php?page=<?=$v['id']?>"> <?=$v['name']?></a>  </li>
   <?php endforeach; ?> 

</ul>

<?php foreach ($nav as $v):?> 
        <?php if (isset($_GET['page']) && ($v['id'] == $_GET['page'])):?>
<?php $item1 = $v['type'];     
//print_r($item1);
//print_r($_GET['page']);
?>

 <?php endif; ?> 

   <?php endforeach; ?> 




<?php if (isset($_GET['page']) && isset($content[$_GET['page']])):?>
            <h1> <?=$content[$_GET['page']]['title']?></h1>
        <?php if ($item1 == 'text'):?>
            <p> <?=$content[$_GET['page']]['body']?></p> 
<?php elseif($item1 == 'list'):?>
    <ul>   
        <?php foreach ($content[$_GET['page']]['list'] as $item):?> 
            <li><a href="02.05.2017website1.php?link=<?=$item['title']?>"><?=$item['body']?></a></li> 
        <?php endforeach; ?> 
    </ul>
<?php endif;?>  
             <?php if (isset($_GET['link']) && isset($content[$_GET['page']]['list'])):?>
 <h1> <?=$content[$_GET['page']]['title']['list']?></h1>
            <?php endif;?>   
<?php else: ?>
  <h2>404</h2> 
<?php endif;?>

<pre>

</pre>





















































