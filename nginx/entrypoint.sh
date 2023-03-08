#!/bin/bash

chmod 777 /app/prestashop/

php-fpm7.4
#php-fpm8.1

/usr/sbin/nginx -g 'daemon off;'