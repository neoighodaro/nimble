 # Config Component
This is the database component. It uses the Illuminate database component and **relies on the config component**. If you are using eloquent then it **requires the events component**.

## Installation
Add the component to the list of the Components in your `app/components.php` file.

```php
return [
    Nimble\Component\Database\DatabaseComponent::class,

    //...
];
```

Create the database you want to connect to and update the database configuration file `app/config/database.php` to match your database configuration.

```php
<?php
// Using an eloquent model
$users = User::all();

// Using query builder
use Illuminate\Database\Capsule\Manager as DB;

$user = DB::table('users')->where('id', 1)->get();
```

You can now access the configuration in your application.

```
config('app.foo'); // returns "bar"
```

You can add more configuration files. For example `app/config/services.php`

```php
<?php

return [
    'name' => 'Facebook'
];
```

Then access it as thus

```
config('services.name'); // returns "Facebook"
```