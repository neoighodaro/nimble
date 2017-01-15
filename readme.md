# Nimble
Nimble is a super fast mini-framework for PHP built on top of optional loose components.

### Installation

Clone the repository

```shell
$ git clone git@github.com:neoighodaro/nimble.git
```
Start building. Some of the components are Illuminate components, each of them have a readme file in their directory on how to use the component or a link to the authors documentation.

### Running your application
you can easily get up and running. Using PHP's in-built php server. cd to your projects directory and run

```shell
$ php -S localhost:8234 -t public
```

Now you open http://localhost:8234 in your browser to see your application

### Your first hello world.
Open your `routes.php` file, and add a new route

```php
$router->get('/greetings', function () {
    return 'Hello world';
});
```

Visit http://localhost:8234/greetings