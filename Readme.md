# Require
## Composer

```shell
mkdir -p ~/bin
cd ~/bin
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
mv composer.phar composer
curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o ~/bin/docker-compose
# macOS avec processeurs ARM M1
# curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-x86_64" -o ~/bin/docker-compose
chmod +x ~/bin/docker-compose
source ~/.bashrc
# vérifier qu'on a docker-compose installé et qui tourne bien
docker-compose --version
# Docker Compose version 1.29.2
```

# Install

```shell
composer install
```