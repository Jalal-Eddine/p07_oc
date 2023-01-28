# Projet 7 API-REST Openclassrooms Bilmo
[![Codacy Badge](https://app.codacy.com/project/badge/Grade/e93b7b6486eb4d58ba2e54db25fa432a)](https://www.codacy.com/gh/Jalal-Eddine/p07_oc/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Jalal-Eddine/p07_oc&amp;utm_campaign=Badge_Grade)<br>
[![SymfonyInsight](https://insight.symfony.com/projects/bbb4ef13-2254-4ea1-b50b-6c4889fef19e/mini.svg)](https://insight.symfony.com/projects/bbb4ef13-2254-4ea1-b50b-6c4889fef19e)

## Env project development :
```
- PHP : 8.2.1
- Symfony : 6.2.5
- Composer : 2.5.1

```

# Installation :
## Clone repo :
```
https://github.com/Jalal-Eddine/p07_oc.git
```
## Install Composer (dependency)
```
https://getcomposer.org/download
```
## Config .env

## Create your database
```
php bin/console doctrine:database:create
```
## Execute your migration
```
php bin/console doctrine:migrations:migrate
```
## Execute your fixtures
```
php bin/console doctrine:fixtures:load
```
## Generate your keys JWT 
```
https://github.com/lexik/LexikJWTAuthenticationBundle/blob/2.x/Resources/doc/index.rst#installation

```
## Use 
```
if you want use Postman :
https://www.postman.com/downloads

in your console :
Symfony serve -d
```
## Credentials
```
Admin: all permission : 
{
    "username":"Chester.Dicki", 
    "password":"123"
}
user: permission adapted to client need : 
{
    "username":"Jonathon.Roob39", 
    "password":"123"
}
```
