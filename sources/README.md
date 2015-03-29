# Sources folder to test new improvements on PHP7

### Spaceship operator.

You can see the code [here](https://github.com/jlaso/php7-strict-types-testing/blob/master/sources/Spaceship.php).

And the result of its execution is:

![result of spaceship operator demo](https://github.com/jlaso/php7-strict-types-testing/blob/master/sources/result-spaceship.jpg)

### Speed improvement, PHP Next-Gen

I have prepared a simple repetitive calculation to test the speed improvement.

Executing the test file in a vagrant machine with 1 core and 2Gb of RAM the result was:

```
vagrant@vagrant-ubuntu-trusty-64 /vagrant/sources (master *) $ php testing-speed-php6.php
Note: checking out 'tags/1.0'.

You are in 'detached HEAD' state. You can look around, make experimental
changes and commit them, and you can discard any commits you make in this
state without impacting any branches by performing another checkout.

If you want to create a new branch to retain commits you create, you may
do so (now or later) by using -b with the checkout command again. Example:

  git checkout -b new_branch_name

HEAD is now at c155983... Merge pull request #1 from jlaso/develop
Total time spent in calculate 10000000 distances is 24.720041
vagrant@vagrant-ubuntu-trusty-64 /vagrant/sources (master *) $
```

Note that the fact to change GPS module to release 1.0 (no strict type hints) does not affect to speed.


And in the host machine, a Macbook Pro retina with PHP 5.4 the result was:


```
-> php testing-speed-php6.php
Note: checking out 'tags/1.0'.

You are in 'detached HEAD' state. You can look around, make experimental
changes and commit them, and you can discard any commits you make in this
state without impacting any branches by performing another checkout.

If you want to create a new branch to retain commits you create, you may
do so (now or later) by using -b with the checkout command again. Example:

  git checkout -b new_branch_name

HEAD is now at c155983... Merge pull request #1 from jlaso/develop
Total time spent in calculate 10000000 distances is 358.095130

jlaso: ~/php_projects/php-sources/php7-strict-types-testing/sources 
```
