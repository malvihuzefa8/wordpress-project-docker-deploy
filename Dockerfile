FROM wordpress:php8.2-apache

COPY --chown=www-data:www-data wp-content/themes/computer-services /var/www/html/wp-content/themes/computer-services
COPY --chown=www-data:www-data wp-content/plugins/computer-services-custom-posttype /var/www/html/wp-content/plugins/computer-services-custom-posttype