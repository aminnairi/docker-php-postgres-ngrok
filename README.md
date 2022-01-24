# docker-php-postgres-ngrok

## Requirements

- [Make](https://www.gnu.org/software/make/)
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Token

[Here](https://dashboard.ngrok.com/get-started/your-authtoken)

## Setup

```yaml
# docker-compose.override.yaml
services:
  postgres:
    environment: &environment
      POSTGRES_PASSWORD: password
      POSTGRES_USER: user
      POSTGRES_DB: db
  
  php:
    environment:
      <<: *environment
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