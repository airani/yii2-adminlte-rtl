Yii2 AdminLte Rtl
=================
RTL (Right to Left) [AdminLte](https://github.com/almasaeed2010/AdminLTE) theme for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist airani/yii2-adminlte-rtl
```

or add

```
"airani/yii2-adminlte-rtl": "~1.0"
```

to the require section of your `composer.json` file.

Usage
----

Please read [this](https://github.com/dmstr/yii2-adminlte-asset) manual usage and then for using rtl theme register `AdminLteRtlAsset` in main layout instead `AdminLteAsset`

```php
airani\AdminLteRtlAsset::register($this);
```