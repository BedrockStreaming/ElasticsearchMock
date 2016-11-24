# Elasticsearch Mock [![Build Status](https://secure.travis-ci.org/M6Web/ElasticsearchMock.png)](http://travis-ci.org/M6Web/ElasticsearchMock)

This PHP 5.4+ library provides a Elasticsearch-php mock for your tests.  

## Installation

Add this line in your `composer.json` :

```json
{
    "require-dev": {
        "m6web/elasticsearch-mock": "dev-master"
    }
}
```

Update your vendors :

```
$ composer update m6web/elasticsearch-mock
```

## Running the tests

```shell
$ php composer.phar install
$ ./vendor/bin/atoum -d tests
```

## Credits

Developped by [M6 Web](http://tech.m6web.fr/).  
Tested with [atoum](http://atoum.org).

## License

ElasticsearchMock is licensed under the [MIT license](LICENSE).
