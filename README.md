## Idiorm Service Provider for Silex 2+

Provider for integrating [Idiorm](https://github.com/j4mie/idiorm) with [Silex](http://silex.sensiolabs.org/)

#### Registering and configuration

```php
$app->register(new \Idiorm\Silex\Provider\IdiormServiceProvider(), array(
        'idiorm.db.options' => array(
            'connection_string' => 'mysql:host=localhost;dbname=my_db',
            'username' => 'my_username',
            'password' => 'my_password',
			'id_column_overrides' => array(
				'table' =>  'primarykey'
			)
        )
);
```

For more details on configuration array see: [Idiorm configuration options](http://idiorm.readthedocs.org/en/latest/configuration.html)

#### Usage in controller

To get all records for given table:

```php
$app['idiorm.db']->for_table('my_table')->find_result_set();
```

For more query examples see: [Idiorm querying](http://idiorm.readthedocs.org/en/latest/querying.html)

#### Multiple connections

To configure multiple connections use $app['idiorm.dbs.options']

```php
$app['idiorm.dbs.options'] = array(
    'first_connection' => array(
        'connection_string' => 'mysql:host=localhost;dbname=my_db',
        'username' => 'my_username',
        'password' => 'my_password',
    ),
    'second_connection' => array(
        'connection_string' => 'sqlite:./example.db'
    )
);
```

$app['idiorm.dbs.options'] Needs to be associative array, where keys will be connection names, and value will contain configuration array

To use connections in controller:
```php
$app['idiorm.dbs']['first_connection']->for_table('my_table')->find_result_set();
$app['idiorm.dbs']['second_connection']->for_table('other_table')->find_result_set();
```
