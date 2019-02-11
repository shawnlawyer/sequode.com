#!/bin/bash

set -x

service nginx start
service php7.2-fpm start

#tail -f logs/error.log & logs/access.log
tail -f /dev/null
