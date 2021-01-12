#!/bin/sh

git submodule init && git submodule update
php artisan october:up
php artisan config:cache