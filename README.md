# Simple Laravel 5 Facebook SDK

This is a very simple package that allows you to use the Facebook PHP SDK into your application. 

# What does the package do?

Basically, the package only stores your `app_id` and `app_secret` as the default access token to make API calls. 

## Installation 

The package comes with a Laravel flavoured Service Provider, a Facade and a nice helper function to make development easy. 

To install the package, just require it in composer:
```
composer require elmatella/simple-facebook-laravel-sdk
```
Update your `config/app.php` adding the following lines in your `providers` array:
```
'providers' => [
	...
	ElMatella\SimpleFacebookLaravelSdk\FacebookServiceProvider::class,
]
```
If you want to use the Facade that comes with the package, you will also have to register the facade in the same file:
```
'aliases' => [
	...
	'Facebook' => ElMatella\SimpleFacebookLaravelSdk\FacebookFacade::class,
]
```
Now that your Service Provider is registered, you can launch the following command to copy the config file into `config/facebook.php`:
```
php artisan vendor:publish
```
By default, the configuration file is going to look for a `FACEBOOK_APP_ID` and a `FACEBOOK_APP_SECRET` in your `.env` file. If you don't want to use it, just edit the `config/facebook.php` file. 
## Usage

You now have access to every function part of the Facebook Sdk. I recommend to use the Facade or the helper function. These lines do exactly the same thing:
```
$response = facebook()->sendRequest('get','/',[
    'id' => 'https://www.martar.fr'
])->getDecodedBody();

dd($response);
```
```
$response = \Facebook::sendRequest('get','/',[
    'id' => 'https://www.martar.fr'
])->getDecodedBody();

dd($response);
```
To learn more about the available methods, I suggest you to read the [Facebook PHP SDK documentation](https://developers.facebook.com/docs/php/Facebook/5.0.0)

## Disclaimer
This is my first package, please be indulgent if you find some bugs. 