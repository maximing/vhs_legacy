<?php
$domain = 'http://vhs.kz/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ru-RU">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Оцифровка видеокассет Алматы</title>

    <!--[if gte IE 7]><!-->
    <link rel="stylesheet" href="/static/css/style.css" type="text/css" media="screen"
          charset="utf-8"/>
    <!-- <![endif]-->

    <!--[if IE 7]>
    <link rel="stylesheet" href="/static/css/style_ie.css" type="text/css" media="screen"
          charset="utf-8"/>
    <![endif]-->

    <!--[if IE 6]>
    <link rel="stylesheet" type="text/css" media="screen"
          href="/static/css/styles_ie.css"/>
    <![endif]-->
    <link rel='canonical' href='<?= $domain ?>'/>
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

    <script type="text/javascript">
        VK.init({apiId: 5174596, onlyWidgets: true});
    </script>

</head>

<body>


<div id="siteWrapper">

    <h2 class="vcard author"><a href="/" title="Главная" class="fn">Оцифровка видеокассет Алматы</a></h2>

    <div id="mainNav">
        <ul>
            <?php
            $items = [
                [
                    'id'   => '/',
                    'href' => '/',
                    'name' => 'Главная страница'
                ],
                [
                    'id'   => 'price',
                    'href' => '/price',
                    'name' => 'Цены'
                ],
                [
                    'id'   => 'about',
                    'href' => '/about',
                    'name' => 'Контакты'
                ]
            ];
            foreach ($items as $item) {
                $class = '';
                if (strpos($_SERVER['REQUEST_URI'], $item['id']) > 0) {
                    $class = 'current_page_item';
                }

                echo '<li class="page_item ' . $class . '"><a href="' . $item['href'] . '">' . $item['name'] . '</a></li>';
            }
            ?>
        </ul>
    </div>

    <div id="siteDescription">
        Оцифровка видеокассет в Алматы
    </div>

    <div id="coreContent">


        <div class="post hentry single">
            <div class="postContent">
                <?php
                if (strpos($_SERVER['REQUEST_URI'], 'price') > 0) {
                    include_once 'pages/price.php';
                } elseif (strpos($_SERVER['REQUEST_URI'], 'about') > 0) {
                    include_once 'pages/about.php';
                } else {
                    include_once 'pages/main.php';
                }
                ?>
            </div>
        </div>


    </div>


</div>

<div id="footer">
    <!-- Search Field -->

    <div class="footerContent">
        <p>&copy; 2012 - <?=date('Y')?> <a href="/"><strong>Оцифровка видеокассет Алматы</strong></a>. Оцифровка видеокассет в
            Алматы</p>
    </div>
</div>

<!-- HotLog -->
<script type="text/javascript" language="javascript">
    hotlog_js = "1.0";
    hotlog_r = "" + Math.random() + "&s=2248714&im=416&r=" +
        escape(document.referrer) + "&pg=" + escape(window.location.href);
</script>
<script type="text/javascript" language="javascript1.1">
    hotlog_js = "1.1";
    hotlog_r += "&j=" + (navigator.javaEnabled() ? "Y" : "N");
</script>
<script type="text/javascript" language="javascript1.2">
    hotlog_js = "1.2";
    hotlog_r += "&wh=" + screen.width + "x" + screen.height + "&px=" +
        (((navigator.appName.substring(0, 3) == "Mic")) ? screen.colorDepth : screen.pixelDepth);
</script>
<script type="text/javascript" language="javascript1.3">
    hotlog_js = "1.3";
</script>
<script type="text/javascript" language="javascript">
    hotlog_r += "&js=" + hotlog_js;
    document.write('<a href="http://click.hotlog.ru/?2248714" target="_blank"><img ' +
        'src="http://hit41.hotlog.ru/cgi-bin/hotlog/count?' +
        hotlog_r + '" border="0" width="88" height="31" title="HotLog: показано количество посетителей за сегодня, за вчера и всего" alt="HotLog"><\/a>');
</script>
<noscript>
    <a href="http://click.hotlog.ru/?2248714" target="_blank"><img
                src="http://hit41.hotlog.ru/cgi-bin/hotlog/count?s=2248714&im=416" border="0"
                width="88" height="31" title="HotLog: показано количество посетителей за сегодня, за вчера и всего"
                alt="HotLog"></a>
</noscript>
<!-- /HotLog -->
</body>
</html>