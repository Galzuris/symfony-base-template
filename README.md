# Symfony-base
Представляет собой шаблон проекта Symfony с предварительно настроенными авторизацией и админкой.
## Включенные модули:
* [EasyAdminBundle](https://symfony.com/doc/master/bundles/EasyAdminBundle/index.html)
* [EasyAdminExtensionBundle](https://github.com/alterphp/EasyAdminExtensionBundle)
* [LiipImagineBundle](https://symfony.com/doc/2.0/bundles/LiipImagineBundle/index.html)
* [FOSUserBundle](https://symfony.com/doc/current/bundles/FOSUserBundle/index.html)
* [VichUploaderBundle](https://symfony.com/doc/master/bundles/EasyAdminBundle/integration/vichuploaderbundle.html)
* [WhiteOctoberPagerfantaBundle](https://github.com/whiteoctober/WhiteOctoberPagerfantaBundle)
* [FriendsOfPHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
* [select2entity-bundle](https://github.com/tetranz/select2entity-bundle)
* [select2-bootstrap4-theme](https://ttskch.github.io/select2-bootstrap4-theme/)
* [BsMultiSelect](https://dashboardcode.github.io/BsMultiSelect/)
## Установка:
```
composer install
```
```
php bin/console doctrine:database:create
```
```
php bin/console doctrine:migrations:migrate
```
```
php bin/console fos:user:create --super-admin
```
```
yarn install
```
```
yarn encore dev
```
```
mkdir -p config/jwt
openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096
openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout
```
```
php bin/console server:run
```
