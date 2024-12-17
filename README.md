@danudilanjalee ➜ /workspaces/Haven_Hunt (main) $ mysql -h 127.0.0.1 -
pERROR 1045 (28000): Access denied for user 'vscode'@'127.0.0.1' (using password: NO)
@danudilanjalee ➜ /workspaces/Haven_Hunt (main) $ mysql -h 127.0.0.1 -P 3306 -u root -p
Enter password: 
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 9
Server version: 10.4.34-MariaDB-1:10.4.34+maria~ubu2004 mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> create databaseCREATE DATABASE havenhunt;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'databaseCREATE DATABASE havenhunt' at line 1
MariaDB [(none)]> CREATE DATABASE havenhunt;
Query OK, 1 row affected (0.000 sec)

MariaDB [(none)]> USE havenhunt;
Database changed
MariaDB [havenhunt]> CREATE TABLE users (
    ->     user_id INT AUTO_INCREMENT PRIMARY KEY,
    ->     username VARCHAR(50) NOT NULL UNIQUE,
    ->     email VARCHAR(100) NOT NULL UNIQUE,
    ->     password VARCHAR(255) NOT NULL,
    ->     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    -> );
Query OK, 0 rows affected (0.007 sec)

MariaDB [havenhunt]> INSERT INTO havenhunt(    user_id INT AUTO_INCREMENT PRIMARY KEY,
    -> 
    -> ';
    '> :;
    '> ,;
    '> ;'
    -> ';
    '> .';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'INT AUTO_INCREMENT PRIMARY KEY,

';
:;
,;
;'
';
.'' at line 1
MariaDB [havenhunt]> INSERT INTO havenhunt( user_id, username, email, password)
    -> VALUES
    -> ('996870995V','Danu','danudilanjalee@gmail.com','12346');
ERROR 1146 (42S02): Table 'havenhunt.havenhunt' doesn't exist
MariaDB [havenhunt]> select * from havenhunt;
ERROR 1146 (42S02): Table 'havenhunt.havenhunt' doesn't exist
MariaDB [havenhunt]> INSERT INTO users( user_id, username, email, password) VALUES ('996870995V','Danu','danudilanjalee@gmail.com','12346');

ERROR 1265 (01000): Data truncated for column 'user_id' at row 1
MariaDB [havenhunt]> INSERT INTO users( user_id, username, email, password) VALUES ('996870995','Danu','danudilanjalee@gmail.com','12346');
Query OK, 1 row affected (0.001 sec)

MariaDB [havenhunt]> select * from users;
+-----------+----------+--------------------------+----------+---------------------+
| user_id   | username | email                    | password | created_at          |
+-----------+----------+--------------------------+----------+---------------------+
| 996870995 | Danu     | danudilanjalee@gmail.com | 12346    | 2024-12-17 03:35:13 |
+-----------+----------+--------------------------+----------+---------------------+
1 row in set (0.000 sec)

MariaDB [havenhunt]> 
