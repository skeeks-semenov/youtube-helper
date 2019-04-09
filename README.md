Youtube helper
===================================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist skeeks/youtube-helper "*"
```

or add

```
"skeeks/youtube-helper": "*"
```

Examples
----------

```php

$youtube = new \skeeks\youtubeHelper\YoutubeHelper('https://www.youtube.com/watch?v=xr1kXiEtCmo');
$youtube = new \skeeks\youtubeHelper\YoutubeHelper('https://youtu.be/xr1kXiEtCmo');
$youtube = new \skeeks\youtubeHelper\YoutubeHelper('<iframe width="640" height="360" src="https://www.youtube.com/embed/xr1kXiEtCmo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>');
if ($youtube->getId())
{
    print_r($youtube->getId());
    print_r($youtube->getEmbedUrl());
    print_r($youtube->getImageUrl());
    print_r($youtube->getWatchUrl());
} else
{
    print_r('Parsing code error');
}

```

```php

$youtube = new \skeeks\youtubeHelper\YoutubeHelper('https://www.youtube.com/watch?v=xr1kXiEtCmo');

if ($youtube->getId()
{
    echo '<iframe width="560" height="315" src="<?= $youtube->getEmbedUrl(); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
}

```



___

> [![skeeks!](https://skeeks.com/img/logo/logo-no-title-80px.png)](https://skeeks.com)  
<i>SkeekS CMS (Yii2) — quickly, easily and effectively!</i>  
[skeeks.com](https://skeeks.com) | [cms.skeeks.com](https://cms.skeeks.com)
