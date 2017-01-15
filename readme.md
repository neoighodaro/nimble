<p align="center"><img src="https://cloud.githubusercontent.com/assets/807318/21964943/c2a4edfa-db55-11e6-9ae6-6532bf984599.png"></p>

<p align="center">Nimble is a super fast mini-framework for PHP built on top of optional loose components.</p>

<br/><br/>

### Installation

Clone the repository

```shell
$ git clone git@github.com:neoighodaro/nimble.git
```

CD into your projects directory and run `composer install` if you don't have composer installed, install it.

```shell
php composer install
```

Start building. Some of the components are Illuminate components, each of them have a readme file in their directory on how to use the component or a link to the authors documentation.

### Running your application
you can easily get up and running. Using PHP's in-built php server. cd to your projects directory and run

```shell
$ php -S localhost:8234 -t public
```

Now you open [http://localhost:8234](http://localhost:8234) in your browser to see your application.

### Your first hello world.
Open your `routes.php` file, and add a new route

```php
$router->get('/greetings', function () {
    return 'Hello world';
});
```

Visit [http://localhost:8234/greetings](http://localhost:8234/greetings). You're done.

<br/><br/>

<p align="center">
    <a href="https://neoighodaro.com" target="_blank">Creator</a> |
    <a href="https://github.com/neoighodaro/nimble/graphs/contributors" target="_blank">Contributors</a>
</p>
