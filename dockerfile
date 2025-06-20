FROM php:8.3.20-apache
RUN apt -y update && apt -y upgrade
RUN docker-php-ext-install pdo_mysql
# ajouter les variables d'environnement avec ENV NOM_VARIABLE=VALEUR
ENV MA_SUPER_VARIABLE=truc