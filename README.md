Hello World
===========
Just A Hello World Yii2 Widget  

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist tejrajs/yii2-helloworld "*"
```

or add

```
"tejrajs/yii2-helloworld": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php 
<?php
use tejrajs\helloworld\HelloWorld;
?>
<?= HelloWorld::widget(['message' => ' Yii2.0']) ?>
```