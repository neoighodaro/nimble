 # Config Component
This is the config component. It uses the Illuminate Config component.

## Installation
Add the component to the list of the Components in your `app/components.php` file.

```php
return [
    Nimble\Component\Config\ConfigComponent::class,

    //...
];
```

Create your first configuration file `app/config/app.php`.

```php
<?php

return [
    'foo' => 'bar'
];
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