FROM ubuntu:18.04

ARG PHP_VERSION=7.2
ARG WITH_XDEBUG=false

WORKDIR /var/www/app
EXPOSE 80
RUN ln -sf /usr/share/zoneinfo/EST5EDT /etc/localtime \
 && apt-get update -y  \
 && apt-get upgrade -y \
 && apt-get install -y \
    screen \
    curl \
    git \
    nginx \
    php-fpm \
    php-curl php-gd php-xmlrpc php-mbstring php-mysql

COPY ./docker/server-github.pem /root/.ssh/id_rsa
RUN chmod go-rwx /root/.ssh/id_rsa
RUN curl -s https://getcomposer.org/installer | php; mv composer.phar /usr/local/bin/composer;
COPY ./docker/nginx.conf /etc/nginx/
COPY ./docker/php.ini /etc/php/7.2/fpm/php.ini
COPY ./docker/www.conf /etc/php/7.2/fpm/pool.d/www.conf
COPY . /var/www/app

RUN sed -i "s/error_reporting = .*/error_reporting = E_ALL/" /etc/php/${PHP_VERSION}/cli/php.ini; \
    sed -i "s/display_errors = .*/display_errors = On/" /etc/php/${PHP_VERSION}/cli/php.ini; \
    sed -i "s/memory_limit = .*/memory_limit = 512M/" /etc/php/${PHP_VERSION}/cli/php.ini; \
    sed -i "s/;date.timezone.*/date.timezone = UTC/" /etc/php/${PHP_VERSION}/cli/php.ini; \
    sed -i "s/.*daemonize.*/daemonize = no/" /etc/php/${PHP_VERSION}/fpm/php-fpm.conf; \
    sed -i "s/error_reporting = .*/error_reporting = E_ALL/" /etc/php/${PHP_VERSION}/fpm/php.ini; \
    sed -i "s/display_errors = .*/display_errors = On/" /etc/php/${PHP_VERSION}/fpm/php.ini; \
    sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php/${PHP_VERSION}/fpm/php.ini; \
    sed -i "s/memory_limit = .*/memory_limit = 512M/" /etc/php/${PHP_VERSION}/fpm/php.ini; \
    sed -i "s/;date.timezone.*/date.timezone = UTC/" /etc/php/${PHP_VERSION}/fpm/php.ini; \
    if [ $WITH_XDEBUG = "true" ] ; then \
        apt-get install php-xdebug; \
        echo "zend_extension=xdebug.so" >> /etc/php/${PHP_VERSION}/fpm/conf.d/20-xdebug.ini; \
        echo "xdebug.idekey=PHPSTORM" >> /etc/php/${PHP_VERSION}/fpm/conf.d/20-xdebug.ini; \
        echo "xdebug.remote_enable = 1" >> /etc/php/${PHP_VERSION}/fpm/conf.d/20-xdebug.ini; \
        echo "xdebug.remote_host=10.254.254.254" >> /etc/php/${PHP_VERSION}/fpm/conf.d/20-xdebug.ini; \
        echo "xdebug.remote_autostart = 1" >> /etc/php/${PHP_VERSION}/fpm/conf.d/20-xdebug.ini; \
        echo "xdebug.remote_connect_back = 0" >> /etc/php/${PHP_VERSION}/fpm/conf.d/20-xdebug.ini; \
        echo "xdebug.remote_port = 9089" >> /etc/php/${PHP_VERSION}/fpm/conf.d/20-xdebug.ini; \
        echo "xdebug.var_display_max_depth = -1" >> /etc/php/${PHP_VERSION}/fpm/conf.d/20-xdebug.ini; \
        echo "xdebug.var_display_max_children = -1" >> /etc/php/${PHP_VERSION}/fpm/conf.d/20-xdebug.ini; \
        echo "xdebug.var_display_max_data = -1" >> /etc/php/${PHP_VERSION}/fpm/conf.d/20-xdebug.ini; \
        echo "xdebug.max_nesting_level = 500" >> /etc/php/${PHP_VERSION}/fpm/conf.d/20-xdebug.ini; \
        phpdismod -s cli xdebug; \
    fi ;

ENTRYPOINT ["/var/www/app/docker/start.sh"]
