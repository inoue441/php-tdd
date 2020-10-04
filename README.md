**インストール**

```shell
◆ make コマンドが使える場合
$ make install

◆ make コマンドが使えない場合
$ docker-compose run --rm composer composer install 
```

**テスト**

```shell
◆ make コマンドが使える場合
$ make test

◆ make コマンドが使えない場合
$ docker-compose run --rm php ./vendor/bin/phpunit
```

**環境**

```
$ php --version
PHP 7.4.9 (cli) (built: Aug  7 2020 19:23:06) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.9, Copyright (c), by Zend Technologies

$ vendor/bin/phpunit --version
PHPUnit 9.4.0 by Sebastian Bergmann and contributors.
```

