<? $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
   $menu = [
   '/' => 'Главная',
   '/about.php' => 'О комплексе',
    '/scheme.php' => 'Схема комплекса',
    '/blog.php' => 'Блог',
    '/rentals.php' => 'Арендаторам',
    '/contacts.php' => 'Связаться с нами'
   ];
?>

<? foreach($menu as $url => $title) { ?>
    <li><a <? if($path == $url) echo 'class="active"'; ?> href="<? echo $url; ?>"><? echo $title; ?></a></li>
<? } ?>

