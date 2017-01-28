<p align="center"><img src="https://cloud.githubusercontent.com/assets/807318/21964943/c2a4edfa-db55-11e6-9ae6-6532bf984599.png"></p>

<p align="center">The Super Fast and Hackable Framework.</p>

<br/><br/>

### Contents
- [The Features](#features)
- [Installation](#installation)
- [Running the Application](#running-your-application)
- [Using the Routing component](#using-the-routing-component)
- [Using the Markdown Feature](#using-the-markdown-feature)

### Features
The Nimble framework ships with a fun set of features

- helper functon accessible all over the application
- Slender frame to facilitate development speed
- markdown rendering

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

### Using the Routing component
Open your `routes.php` file, and add a new route

```php
$router->get('/greetings', function () {
    return 'Hello world';
});
```
### Using the Markdown Feature
To create view in markdown simply write your markdown view in the extension *.md, *.md.blade.php, or *.md.php, the full markdown syntax is supported.

To use the Markdown helper function in converting markdown strings or data into html

simply call the helper function
```php
  $markdownString = "## Hello World";
  $htmlString     = markdown($markdownString); //<h2>Hello world</h2>
```

Visit [http://localhost:8234/greetings](http://localhost:8234/greetings). You're done.

<br/><br/>

<p align="center">
    <a href="https://neoighodaro.com" target="_blank">Creator</a> |
    <a href="https://github.com/neoighodaro/nimble/graphs/contributors" target="_blank">Contributors</a>
</p>
