# docker-php-ngrok

## Requirements

- [Make](https://www.gnu.org/software/make/)
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Setup

```yaml
# docker-compose.override.yaml
services:
  postgres:
    environment:
      POSTGRES_PASSWORD: password
      POSTGRES_USER: user
      POSTGRES_DB: db
```

```yaml
# ngrok/.ngrok2/ngrok.yml
authtoken: yourpersonalauthtoken
```

## PHP

```bash
make php
```

## Ngrok

```bash
make ngrok
```

## Stop

```bash
make stop
```