# Create a DockerFile and requirements file

1. To share changes made in a folder with docker container, use `volumes` property in docker-compose.yml

```
version: '3'

services:
  product-service:
    build: ./product
    volumes:
      -  ./product:/usr/src/app
```

2. 