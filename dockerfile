FROM php:7.4-fpm
RUN apt-get update && apt-get install -y nginx
COPY login.html /var/www/html/
COPY login.php /var/www/html/
COPY welcome.php /var/www/html/
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
