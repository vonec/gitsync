<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
<center> <h1>Gitsync</h1> </center>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/vonec/gitsync"><img src="https://poser.pugx.org/vonec/gitsync/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/vonec/gitsync"><img src="https://poser.pugx.org/vonec/gitsync/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/vonec/gitsync"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
<hr>


Laravel Package to deploy code automatically from git to multiple autoscaling EC2 instances on AWS using Github/Bitbucket webhooks.

## Installation

Require this package with composer :

```shell
composer require vonec/gitsync
```

Add to `config/app.php`:

```php
Vonec\Gitsync\GitsyncServiceProvider::class,
```

Install configuration

```shell
php artisan vendor:publish --provider="Vonec\Gitsync\GitsyncServiceProvider"
```
Edit "/config/gitsync.php"

## Configuration

Soon

## Usage

Add webhook in Github or Bitbucket

http(s)://your-project/gitsync?key=YOURKEY



### Change log

Please see <a href="https://github.com/vonec/gitsync/blob/HEAD/CHANGELOG.md" rel="nofollow noopener external">CHANGELOG</a> for more information on what has changed recently.

## Contributing

Please see <a href="https://github.com/vonec/gitsync/blob/HEAD/CONTRIBUTING.md" rel="nofollow noopener external">CONTRIBUTING</a> and 
<a href="https://github.com/vonec/gitsync/blob/HEAD/CONDUCT.md" rel="nofollow noopener external">CONDUCT</a> for details.

## Security Vulnerabilities

If you discover a security vulnerability within Gitsync, please  create an <a href="https://github.com/vonec/gitsync/blob/HEAD/ISSUE_TEMPLATE.md" rel="nofollow noopener external">ISSUE</a>. All security vulnerabilities will be promptly addressed.

## Credits

<ul>
<li><a href="http://vonectech.com">Vonec Technologies</a></li>
<li><a href="https://github.com/vonec/gitsync/contributors">All Contributors</a></li>
</ul>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).