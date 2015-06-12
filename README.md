Laravel Video API
=================

[![Latest Stable Version](https://poser.pugx.org/Vovanmix/video-api/v/stable.png)](https://packagist.org/packages/Vovanmix/video-api)
[![Total Downloads](https://poser.pugx.org/Vovanmix/video-api/downloads.png)](https://packagist.org/packages/Vovanmix/video-api)
[![Coverage Status](https://coveralls.io/repos/Vovanmix/video-api/badge.png)](https://coveralls.io/r/Vovanmix/video-api)


## Installation

### 1. Install with Composer

```bash
composer require "Vovanmix/video-api": "dev-master"
```

### 2. Add to `app/config/app.php`

```php
    'providers' => array(
        // ...
        'Vovanmix\VideoApi\VideoApiServiceProvider',
    ),
```

And:

```php
    'aliases' => array(
        // ...
        'VideoApi'          => 'Vovanmix\VideoApi\Facades\VideoApi',
    ),
```

## Usage


```php
<?php

Route::get('video/youtube/{id}', function ($id) {

    //$data = VideoApi::setType('youtube')->getVideoDetail($id); // video detail
    $data = VideoApi::setType('youtube')->getVideoList($id);     // video list

    var_dump($data);
});

Route::get('video/vimeo/{id}', function ($id) {

    //$data = VideoApi::setType('vimeo')->getVideoDetail($id);
    $data = VideoApi::setType('vimeo')->getVideoList($id);

    var_dump($data);
});

```

## Licence

[MIT license](http://opensource.org/licenses/MIT)
