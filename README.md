# php7-strict-types-testing
Testing the new behaviour of strict type hints

Requirements:
- you need to have installed [vagrant](http://docs.vagrantup.com/v2/installation/) and [virtualbox](https://www.virtualbox.org/wiki/Downloads)


How to install

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


if not you have to repeat steps changing first to the branch you want.


See the rest of the samples to check how to use the new strict types hint


