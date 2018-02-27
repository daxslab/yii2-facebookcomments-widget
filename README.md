Yii2 Facebook Comments
======================

[![Latest Stable Version](https://poser.pugx.org/daxslab/yii2-facebookcomments-widget/v/stable.svg)](https://packagist.org/packages/daxslab/yii2-facebookcomments-widget)
[![Total Downloads](https://poser.pugx.org/daxslab/yii2-facebookcomments-widget/downloads)](https://packagist.org/packages/daxslab/yii2-facebookcomments-widget)
[![Latest Unstable Version](https://poser.pugx.org/daxslab/yii2-facebookcomments-widget/v/unstable.svg)](https://packagist.org/packages/daxslab/yii2-facebookcomments-widget)
[![License](https://poser.pugx.org/daxslab/yii2-facebookcomments-widget/license.svg)](https://packagist.org/packages/daxslab/yii2-facebookcomments-widget)

Yii2 widget to include the Facebook widget for comments in views.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist daxslab/yii2-facebookcomments-widget "*"
```

or add

```
"daxslab/yii2-facebookcomments-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your views by  :

```php
<?= \daxslab\facebook\CommentsBox::widget([
    'appId' => 'MY_FACEBOOK_APP_ID', //defaults to Yii::$app->paramss['facebook_app_id']
    'numPosts' => 10 //defaults to 5
]); ?>
```