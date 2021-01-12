#!/bin/sh

git submodule init && git submodule update && php artisan horizon:assets && php artisan config:cache
