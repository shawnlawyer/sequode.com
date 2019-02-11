#!/bin/bash

set -x

if [ ! -d "logs" ]; then
    mkdir logs
fi
if [ ! -d "mysql_data" ]; then
    mkdir mysql_data
fi

service nginx start
service php7.2-fpm start

#tail -f logs/error.log & logs/access.log
tail -f /dev/null
