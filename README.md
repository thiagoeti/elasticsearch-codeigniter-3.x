# ElasticSearch - CodeIgniter 3.x

This library executes Query DSL (Domain Specific Language) based on JSON, of extremely simple format to comunicate with the ElasticSearch.
Also contain  a **Scroll**  function for the execute of paginate in queries.
It's develop for used integrated in [CodeIgniter](https://codeigniter.com).

> This library support ALL methods GET, PUT, POST, DELETE ... :heart_eyes:

### Config

Create file.

```sh
$ touch /application/config/elasticsearch.php
```

Add code.

```php
$config['es_server']='http://127.0.0.1:9200';
```

### Core

In constructor of application add code.

```php
public function __construct()
{
  parent::__construct();

  // elastic
  $this->load->library('elasticsearch');

  // model
  Model::$elastic=$this->elasticsearch;
}
```

### Library

Copy library in CodeIgniter.

```
/application/libraries/Elasticsearch.php
```

### Example

Example of use in Model.

```php
public function example()
{
  // execute
  self::$elastic->method='GET';
  self::$elastic->path='/_stats';
  self::$elastic->query='{}';
  self::$elastic->result=self::$elastic->execute(self::$elastic->method, self::$elastic->path, self::$elastic->query);

  // debug
  header('content-type: text/plain;');
  print_r(self::$elastic->result);
  exit;
}
```

For **BigData** execute Scroll.

```php
self::$elastic->result=self::$elastic->scroll(self::$elastic->path, self::$elastic->query);
```

> This is very good :sunglasses:

For _GET_ execute.

```php
self::$elastic->get('/index/_doc/_search', '{"size":9}');
```

For _PUT_ execute.

```php
self::$elastic->put('/index/_doc/:id', '{}');
```

For _POST_ execute.

```php
self::$elastic->post('/index/_doc/:id', '{}');
```

For _DELETE_ execute.

```php
self::$elastic->delete('/index/_doc/:id');
```
