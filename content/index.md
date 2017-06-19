---
view:
  extends: index
  yields: content
---

## The idea behind Fistlab
**Fistlab** is a project for creating components in different
languages, its purpose is to make the method and objects feels
similar over the different set of programming languages so it
becomes easier to lean and convert scripts from one language to
another. We try to build a simple, yet powerful set of components
in a variety of languages that will allow any developer to jump on board.
Let’s say for example you want to connect to your database and get
the user with the email `john@example.com`.

**PHP**
```php
// Create connection
$database = new Database;
$database->addConnection([
    'hostname' => '127.0.0.1',
    'database' => 'database',
    'username' => 'root',
    'password' => '',
]);

// Get specific user
$email = 'john@example.com';
$user = $database->table('users')
    ->where('email', $email)
    ->first();
```

**Javascript** `- database component coming soon to Javascript`
```js
// Create connection
var database = new Database;
database.addConnection({
    'hostname': '127.0.0.1',
    'database': 'database',
    'username': 'root',
    'password': ''
});

// Get specific user
var email = 'john@example.com';
var user = database.table('users')
    .where('email', email)
    .first();
```

The usage of the components is almost identical, which makes it
easier to remember even when programming in multiple languages.
We are focused on the following in our codebase:

- **Simplicity:** We are focused on making the components as easy to use as possible.
- **Cross language:**  Our main goal is to make everything work almost identical across multiple programming languages.
- **Automatic tests:** Automatic tests are the best way to ensure maximum stability.
- **Extendable:** We try to make all components extendable in different ways to ensure that it can do exactly what you need it to do.

- - - - - - - - - - - - - - - - - - -
[Check out the documentation for more information](/docs)
