#!/bin/bash

cp /vagrant/sys/bash.tpl /home/vagrant/.profile

sudo apt-get -y update
sudo apt-get -y install build-essential > ~/log1.txt
sudo apt-get -y install openssl libssl-dev openssl-blacklist openssl-blacklist-extra  bison autoconf automake libtool re2c flex > ~/log2.txt
sudo apt-get -y install zlibc zlib1g zlib1g-dev libxml2-dev libssl-dev libbz2-dev libcurl3-dev libdb5.1-dev libjpeg-dev libpng-dev libXpm-dev libfreetype6-dev libt1-dev libgmp3-dev libc-client-dev libldap2-dev libmcrypt-dev libmhash-dev freetds-dev libz-dev libmysqlclient15-dev ncurses-dev libpcre3-dev unixODBC-dev libsqlite-dev libaspell-dev libreadline6-dev librecode-dev libsnmp-dev libtidy-dev libxslt-dev libt1-dev > ~/log3.txt

sudo apt-get -y install git-core > ~/log4.txt

git clone https://github.com/php/php-src.git ~/php-src

cd ~/php-src/

./buildconf

./configure \
    --with-mcrypt \
    --enable-mbstring \
    --with-openssl \
    --with-mysql \
    --with-mysql-sock \
    --with-gd \
    --with-jpeg-dir=/usr/lib \
    --enable-gd-native-ttf  \
    --with-pdo-mysql \
    --with-libxml-dir=/usr/lib \
    --with-mysqli=/usr/bin/mysql_config \
    --with-curl \
    --enable-zip  \
    --enable-sockets \
    --with-zlib \
    --enable-exif \
    --enable-ftp \
    --with-iconv \
    --with-gettext \
    --enable-gd-native-ttf \
    --with-t1lib=/usr \
    --with-freetype-dir=/usr

make

sudo make install

cd ~
wget -nv https://phar.phpunit.de/phpunit.phar
chmod +x phpunit.phar
sudo mv phpunit.phar /usr/local/bin/phpunit

sudo curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin

