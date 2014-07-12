#Overview
This is my blog source. I made it using HTML5, CSS3, Javascript.

#If you want to make Guestbook
> I used PHP 5.5 and MySQL 5.5 in Ubuntu 14.04LTS.

If you want to make Guestbook. You have to make table in your own database.



```
SQL>> CREATE TABLE guestbook (
  id int NOT NULL AUTO_INCREMENT Primary key,
  name varchar(50) NOT NULL,
  email varchar(255),
  password varchar(50) NOT NULL,
  comment text NOT NULL,
  regDate datetime NOT NULL
);
```


After create table, you have to modify 'config.php'

```
  $host = "localhost";  // or your IP address. 127.0.0.1 O.K!
  $user = "ybin";       // your database username
  $password = "000000"; // your database user's password
  $db = "blog";         // your database name
  $conn = new mysqli($host, $user, $password, $db);
```
> NOTE :
>
> The MySQL extension is deprecated in PHP 5.5.x. So, use the MySQLi or PDO_MySQL extensions.
> [PHP document link] (http://php.net/manual/en/migration55.deprecated.php)
>
