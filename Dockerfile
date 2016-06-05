FROM php:5.6-apache

MAINTAINER Michael Palmer <michael@michaeldpalmer.com>

COPY recaptchalib.php /var/www/
COPY html/ /var/www/html/
COPY html/php.ini /usr/local/etc/php/
WORKDIR /var/www/html

RUN a2enmod rewrite headers

EXPOSE 80 443