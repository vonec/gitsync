<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/vonec/gitsync"><img src="https://poser.pugx.org/vonec/gitsync/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/vonec/gitsync"><img src="https://poser.pugx.org/vonec/gitsync/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/vonec/gitsync"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
<hr>

# Gitsync

Laravel Package to deploy code automatically from git to multiple autoscaling EC2 instances on AWS using Github/Bitbucket webhooks.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```json
bin/        
config/
src/
tests/
vendor/
Install
```

### Via Composer

```json
$ composer require vonec/gitsync
```

### Usage

```json
$skeleton = new League\Skeleton();
echo $skeleton->echoPhrase('Hello, League!');
```
### Change log

Please see <a href="https://github.com/vonec/gitsync/blob/HEAD/CHANGELOG.md" rel="nofollow noopener external">CHANGELOG</a> for more information on what has changed recently.

### Testing

$ composer test

## Contributing

Please see <a href="https://github.com/vonec/gitsync/blob/HEAD/CONTRIBUTING.md" rel="nofollow noopener external">CONTRIBUTING</a> and 
<a href="https://github.com/vonec/gitsync/blob/HEAD/CONDUCT.md" rel="nofollow noopener external">CONDUCT</a> for details.

## Security Vulnerabilities

If you discover a security vulnerability within Gitsync, please send an e-mail to Vamsi Krishnan at vamsi@vonectech.com. All security vulnerabilities will be promptly addressed.

## Credits

<ul>
<li><a href="https://github.com/vonec">Vonec Technologies</a></li>
<li><a href="https://github.com/vonec/gitsync/contributors">All Contributors</a></li>
</ul>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

