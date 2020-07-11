#!/bin/bash

# setup development environment on Linux
# tested on Ubuntu Desktop 18.04.4 LTS

sudo apt install php-cli curl

if [[ ! -f "composer.phar" ]]; then
    curl -sS "https://getcomposer.org/installer" | php
fi

php composer.phar install --no-interaction --prefer-source

if [[ ! -d "phpbb" ]]; then
    git clone "https://github.com/phpbb/phpbb.git"
fi
