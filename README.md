phalcon_testing
===============
###Preamble: 
A sample Phalcon App that demonstrates CodeCeption testing options.  One day I needed to learn about testing my phalcon app and this repo stores a working demonstration of what I learned.  You too can test your Phalcon apps.



###Setup Notes:
- Created from phalcon-dev tools scaffolding
- Might need to give the web server RW permissions on app/cache
- Might need to configure mod_rewrite or other clean url type functionality
- Codeception installed via composer, commands will be based on this method.
- Assumes you already installed composer


Clone this repo
```sh
$ git clone HTTP://PATH-TO-REPO
```

```sh
$ cd PATH-TO-REPO
```
   
Initialize Composer
```sh
$ composer install
```

Initialize Composer
```sh
$ ./vendor/bin/codecept bootstrap
```
*You might need to first make the codecept shell script to be executable*
```sh
$ chmod +x vendor/codeception/codeception/codecept
```

Run the built in tests
```sh
$ ./vendor/bin/codecept run
```


##Errors


1) Failed to perform actions and see result in funcSampleCept (/code/phalcon_testing/tests/functional/funcSampleCept.php)
Can't be on page "/":
PDOException: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)

You get this error because Phalcon has DB configuration options in addition to those set by codeception.  
DB connection information in codeception.yml takes a back seat to the DB config values you set in Phalcon (ie. app/config/config.php) 

2) 