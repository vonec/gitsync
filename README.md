<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


<h1 align="center">Gitsync</h1>

<p align="center">
<a href="https://packagist.org/packages/vonec/gitsync"><img src="https://poser.pugx.org/vonec/gitsync/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/vonec/gitsync"><img src="https://poser.pugx.org/vonec/gitsync/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/vonec/gitsync"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
<hr>

Laravel Package to deploy code automatically from git to multiple autoscaling EC2 instances on AWS using Github/Bitbucket webhooks.

## Installation

Open your terminal(CLI), go to the root directory of your Laravel project, then follow the following procedure.
1. Install Through Composer
    ```bash
    composer require vonec/gitsync
    ```

2. Add to `config/app.php`:
	```php
	'providers' => [    ...
		Vonec\Gitsync\GitsyncServiceProvider::class,
	],
	```
3. Publish the config file
    ```bash
    php artisan  vendor:publish --provider="Vonec\Gitsync\GitsyncServiceProvider"
    ```


## Configuration

Edit "/config/gitsync.php"

## Usage

Add webhook in Github or Bitbucket

http(s)://your-project/gitsync?key=YOURKEY

YOURKEY can be defined in configuration

Multiple servers require queue workers.


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

Gitsync is an open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).