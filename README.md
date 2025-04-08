# Gestão e Qualidade de Software - Atividade TDD (07/04/2025)
Projeto simples em PHP com PHPUnit para prática de Test Driven Development (TDD).

## Pré-requisitos

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)


## Como executar

1. Suba os containers:
```bash
docker compose up -d
```

2. Acesse o container:
```bash
docker compose exec app bash
```

3. Execute os testes:
```bash
phpunit test
```

