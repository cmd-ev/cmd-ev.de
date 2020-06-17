FROM php:7.4-apache

RUN apt-get update && \
   apt-get install -y unzip msmtp-mta &&  \
   apt-get clean

# add custom entrypoint that sets up msmtp
COPY entrypoint.sh /entrypoint.sh
RUN chmod 755 /entrypoint.sh

# enable apache rewrite module for nice urls
RUN a2enmod rewrite

# Setting up composer
RUN mkdir -p /root/.composer/ && \
   curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# create picocms files with composer
RUN composer create-project picocms/pico-composer:2.1.x .

# PHP mail settings
RUN echo 'sendmail_path = "/usr/sbin/sendmail -t -i"' > /usr/local/etc/php/conf.d/mail.ini

ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2-foreground"]