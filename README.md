# Template para criação de ambiente de desenvolvimento com PHP e Docker

Este template serve como ponto de partida para criação de projetos desenvolvidos com PHP e MySQL, sendo executados sobre um servidor web Apache, ambiente conhecido popularmente como LAMP (Linux + Apache + MySQL + PHP). Nos arquivos Dockerfile e docker-compose.yml foram configurados os recursos mínimos necessários para que seja possível rodar uma aplicação PHP com uma base de dados MySQL. Caso haja a necessídade de adicionar novos recursos, como mais extensões do PHP, você pode modificar estes arquivos.

## Requisitos

É necessário que estejam instalados em sua máquina os seguintes programas:

- Docker
- Git

## Tecnlogias Utilizadas

Após montar seu container você terá um ambiente configurado com as seguintes tecnologias

- PHP (Versão 7.4)
- MySQL (Versão 5.7)
- Apache