# PHP 5.6 with Apache
FROM php:5.6-apache

# Setup environment
ADD recaptchalib.php /var/www/
ADD html/ /var/www/html/
ADD html/php.ini /usr/local/etc/php/
WORKDIR /var/www/html

# Enable apache modules
RUN a2enmod rewrite headers

# Expose ports
EXPOSE 80 443