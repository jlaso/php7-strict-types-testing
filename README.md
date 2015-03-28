# php7-strict-types-testing

Testing the new behaviour of strict type hints

In order to test my article published in [dzone](http://www.dzone.com/links/php_7_scalar_type_hinting_finally_approved.html).

Requirements:
- you need to have installed [vagrant](http://docs.vagrantup.com/v2/installation/) and [virtualbox](https://www.virtualbox.org/wiki/Downloads)


How to install PHP7

```ssh
git clone https://github.com/jlaso/php7-strict-types-testing.git

cd php7-strict-types-testing

vagrant up
```

once vagrant machine provisioned to enter into the machine:

```ssh
vagrant ssh
```

first update the system and install needed packages:

```ssh
sudo apt-get update
sudo apt-get install build-essential
sudo apt-get install openssl libssl-dev openssl-blacklist openssl-blacklist-extra  bison autoconf automake libtool re2c flex 
sudo apt-get install libxml2-dev libssl-dev libbz2-dev libcurl3-dev libdb5.1-dev libjpeg-dev libpng-dev libXpm-dev libfreetype6-dev libt1-dev libgmp3-dev libc-client-dev libldap2-dev libmcrypt-dev libmhash-dev freetds-dev libz-dev libmysqlclient15-dev ncurses-dev libpcre3-dev unixODBC-dev libsqlite-dev libaspell-dev libreadline6-dev librecode-dev libsnmp-dev libtidy-dev libxslt-dev libt1-dev
```

in order to install php from sources you need to clone the repo (be patient):
```ssh
git clone https://github.com/php/php-src.git
cd php-src/
```

and now, following the official [documentation](http://us1.php.net/git.php):
```ssh
./buildconf
./configure
make
sudo make install
```

check now if the version installed matches:
```ssh
php -v
```


if not apears the expected version, you have to repeat the steps changing firstly to the [branch](https://github.com/php/php-src/branches) you want.

In order to pass the tests you need to install PHPUnit. Following the official [documentation](https://phpunit.de/manual/current/en/installation.html):

```ssh
wget https://phar.phpunit.de/phpunit.phar
chmod +x phpunit.phar
sudo mv phpunit.phar /usr/local/bin/phpunit
```


See the rest of the samples to check how to use the new strict types checking.

Inside the machine, sample code is located at /var/www/source.



