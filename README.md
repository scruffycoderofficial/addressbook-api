# Address Book API #

## Start PHP-FPM Session ##

NB: `be-stack` containers should be running.

To check if your services are running correctly perform 
the following:

```bash
WORKING_APP_DIR $ docker-compose ps 
```

The command above should give you a list of *services* defined 
within your `WORKING_APP_DIR` workspace.

- Step 1

```bash
WORKING_APP_DIR $ docker exec -it be-stack_php_1 bash 
```

- Step 2

```bash
www@0a7abbb5aa5a:/app/public $ cd .. 
```

You can verify if you are on your Application's root directory 
by just listing your directory contents.

```bash
ww@0a7abbb5aa5a:/app$ ls -l
total 776
-rw-r--r--  1 www  www     465 Feb  3 21:10 README.md
drwxr-xr-x  3 www  www      96 Feb  3 19:00 app
-rw-r--r--  1 www  www    1094 Jan 27 20:19 artisan
drwxr-xr-x  3 www  www      96 Jan 27 20:19 bootstrap
-rw-r--r--  1 www  www    1137 Jan 28 22:31 composer.json
-rw-r--r--  1 www  www  196084 Jan 27 20:51 composer.lock
drwxr-xr-x  3 www  www      96 Feb  3 20:34 config
drwxr-xr-x  5 www  www     160 Jan 27 20:44 database
-rw-r--r--  1 www  www    1551 Jan 27 20:19 docker-compose.yml
-rw-r--r--  1 www  www     414 Jan 27 20:19 nginx.conf
-rw-r--r--  1 www  www      56 Jan 27 20:19 nginx.docker
-rw-r--r--  1 www  www  550138 Jan 27 20:19 package-lock.json
-rw-r--r--  1 www  www     985 Jan 27 20:19 package.json
-rw-r--r--  1 www  www    1205 Jan 27 20:19 php.docker
-rw-r--r--  1 www  www     179 Jan 28 22:29 phpspec.yml
-rw-r--r--  1 www  www     874 Jan 28 22:34 phpunit.xml
drwxr-xr-x  4 root root    128 Jan 27 20:19 public
drwxr-xr-x  3 www  www      96 Jan 27 20:19 resources
drwxr-xr-x  3 www  www      96 Jan 27 20:19 routes
drwxr-xr-x  4 www  www     128 Feb  3 19:00 src
drwxr-xr-x  5 www  www     160 Jan 27 20:19 storage
drwxr-xr-x  6 www  www     192 Jan 28 22:29 tests
drwxr-xr-x 30 www  www     960 Jan 27 20:51 vendor
-rw-r--r--  1 www  www     796 Jan 27 20:19 webpack.mix.js
```

