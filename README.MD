[![Codacy Badge](https://app.codacy.com/project/badge/Grade/e93b7b6486eb4d58ba2e54db25fa432a)](https://www.codacy.com/gh/Jalal-Eddine/p07_oc/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Jalal-Eddine/p07_oc&amp;utm_campaign=Badge_Grade)

Projet 7 API-REST Openclassrooms Bilmo

## Env project development :
```
- PHP : 8.0.2
- Symfony : 6.0
- Composer : 2.3.5

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
