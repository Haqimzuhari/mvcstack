# MVCSTACK

Version 5.0.0.
Simple PHP MVC framework.

## Installation

1. Download the latest version of [MVCSTACK](https://github.com/Haqimzuhari/mvcstack/archive/refs/heads/master.zip).
2. Extract and rename to title to your project.
3. Place anywhere in your favorite directory or in your local server directory such as `htdoc` for XAMPP.
4. No other installation is needed. Simply plug-and-play.
5. Copy file `env.php.example` and rename it to `env.php`.
6. Edit `env.php` file.
```php
/* GENERAL */
define('URL', '/'); // If you're using Xampp, change to your folder name such as /mvcstack/
define('TITLE','MVCSTACK'); // Your desired default title


/* DATABASE */
define('DB_CONNECTION', 'mysql');
define('DB_HOST', '127.0.0.1'); // DB Host
define('DB_USER', 'root'); // DB username
define('DB_PASS', 'P@ssw0rd'); // DB password
define('DB_NAME', 'mvcstack'); // DB name
```
7. Restore database using given default mysql database file `database.sql`.
8. Try run on your browser or just `php -S 127.0.0.1:8000` for PHP-built-in-server.

## Default CSS Framework

MVCSTACK using [TailwindCSS](https://tailwindcss.com/) as default CSS Framework. This framework is installed using `npm` and can use `@apply` function for pre-build classes.

## Default Javascript Framework

MVCSTACK using [AlpineJS](https://github.com/alpinejs/alpine) as default javascript framework.

## Default Fonts & Icons
1. MVCSTACK using google font `Inter Tight` for sans, `Lora` for serif, `Overpass Mono` as mono as default font-family.
2. MVCSTACK using `Hero Icons` as default icon family

## Simple but reliable
#### Easy access model eloquent and relationship
```php
// UserModel
public function Profile()
{
    // return $this->hasOne('target-model-name', 'target-column', 'source-column');
    return $this->hasOne('ProfileModel', 'user_id', 'id');
}

public function Students()
{
    // return $this->hasMany('target-model-name', 'target-column', 'source-column');
    return $this->hasMany('ProfileModel', 'user_id', 'id');
}
```
You can access `profile` from `users` model.
```php
<?php foreach($users as $user): ?>
    <p>First Name: <?=$user->getProfile?></p>
<?php endforeach; ?>
```

#### Component solution for repeatable design. This component is stackable
On your `view` page
```php
// With Content
<?php $modal_trigger = new Component('buttons.modal-trigger', ['class' => 'button primary']) ?>
    Open Modal
<?php $modal_trigger->close() ?>

// Without Content
<?php $navbar = new Component('nav.topbar'); $navbar->close() ?>
```

On your `components/buttons/model-trigger.php` page
```html
<button 
    type="button" 
    class="transition duration-300 ease-in-out focus:outline-none <?= $class ?>">
    @content
</button>
```