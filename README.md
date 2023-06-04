# MVCSTAX

Version 8.0.1.
Simple PHP MVC framework.

## Installation

1. Download the latest version of [MVCSTAX](https://github.com/Haqimzuhari/mvcstack/archive/refs/heads/master.zip).
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

## Simple but reliable
#### Easy access model eloquent and relationship
```php
// UserModel
public function profile () {
    // hasOne(modal-name, target-model-column, current-model-column)
    // hasOne will continue get all related method
    return $this->hasOne('ProfileModel', 'user_id', 'id');
}

public function students () {
    // hasMany(modal-name, target-model-column, current-model-column)
    // hasMany will continue get all related method
    return $this->hasMany('StudentModel', 'user_id', 'id');
}

public function staff () {
    // hasOneOnly(modal-name, target-model-column, current-model-column)
    // hasOneOnly will only get target classes data with ignoring their methods
    return $this->hasOneOnly('StaffModel', 'user_id', 'id');
}

public function classes () {
    // hasManyOnly(modal-name, target-model-column, current-model-column)
    // hasManyOnly will only get target classes data with ignoring their methods
    return $this->hasManyOnly('ClassModel', 'user_id', 'id');
}
```
You can access `profile` from `users` model.
```php
<?php foreach($users as $user): ?>
    <p>First Name: <?=$user->profile->fullname?></p>
<?php endforeach; ?>
```

#### Component solution for repeatable design. This component is stackable
On your `view` page
```php
// When you need to have slot
<?php $button = new Elem('button.primary', ['id' => 'edit-button']) ?>
    Edit
<?php $button->close() ?>

// When you dont need to have slot
<?php $navbar = new Elem('nav.topbar'); $navbar->close() ?>
```

On your `components/button/primary.php` page
```html
<button 
    type="button" 
    class="transition duration-300 ease-in-out focus:outline-none"
    id="<?=$id?>">
    @slot
</button>
```