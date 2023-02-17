# Create a simple website to fetch data from the API.

1. `json_decode()` function is used to decode string into json

2. service name from docker-compose.yml can be used as a domain name

docker-compose.yml
```
version: '3'

services:
  product-service:
    build: ./product
    volumes:
      -  ./product:/usr/src/app
    ports:
      - 5001:80
  
  website:
    image: php:apache
    volumes:
      - ./website:/var/www/html
    ports:
      - 5000:80
    depends_on:
      - product-service
```

website/index.php
```
<?php
  $json = file_get_contents('http://product-service');
  $obj = json_decode($json);
  $products = $obj->products;
?>

...
```