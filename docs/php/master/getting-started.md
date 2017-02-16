# Getting Started

- [Requirements](#requirements)
- [Installation](#installation)


{#requirements}
## [](#requirements) Requirements
Fistlab PHP has a few requirements. Make sure your machine meets
the following requirements.

- PHP >= 5.6

Please note that each component can have additional requirements.

{#installation}
## [](#installation) Installation
Fistlab PHP components uses [Composer](https://getcomposer.com)
to manage its dependencies. So, before installing the components,
make sure you have composer installed on your machine.

You can install a component to you application by running
```
composer require fist/COMPONENT
```

Where `COMPONENT` is the name of the component you would like
to install. Let's say in order to get the `database` component
then you would have to run
```
composer require fist/database
```

#### Autoload Component
In order to autoload the component you must include Composers
autoload script.
```
require __DIR__.'/vendor/autoload.php';
```

<br><br><br>
- - - - - - - - - -
[Edit this page on Github](https://github.com/fistlab/php-docs/edit/master/getting-started.md)