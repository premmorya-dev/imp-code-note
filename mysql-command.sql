########################################################################################################################################################################################################
mysql command  for Database Import
zcat robomart_v3.sql.gz | pv | mysql --user=root --password=ok8gdnd387GC@D26dl --database=robomart_v3
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
This command is used to import a compressed MySQL database file (`robomart_v3.sql.gz`) into the MySQL database named `robomart_v3`. Here's a breakdown of the command:

1. `zcat robomart_v3.sql.gz`: This command reads the compressed file `robomart_v3.sql.gz` and decompresses it (`zcat` is similar to `cat` but for compressed files).

2. `pv`: This command is a pipe viewer used to monitor the progress of data through a pipeline. It provides a progress bar for the data being transferred.

3. `mysql --user=root --password=ok8gdnd387GC@D26dl --database=robomart_v3`: This command pipes the decompressed SQL data into the `mysql` command-line tool. It specifies the username (`root`), password (`ok8gdnd387GC@D26dl`), and the target database (`robomart_v3`) where the SQL data will be imported.

So, the entire command reads the compressed SQL file, displays the progress using `pv`, and then imports the decompressed SQL data into the specified MySQL database.'


########################################################################################################################################################################################################
mysql command  for Database Export
mysqldump -uroot -pok8gdnd387GC@D26dl --no-create-db --single-transaction robomart_v3  | gzip > robomart_v3.sql.gz
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

This command is used to create a compressed backup of a MySQL database named robomart_v3. Here's a breakdown of the command:

mysqldump -uroot -pok8gdnd387GC@D26dl --no-create-db --single-transaction robomart_v3: This command uses mysqldump to export the contents of the MySQL database robomart_v3.

-uroot: Specifies the username (root) to connect to the MySQL server.
-pok8gdnd387GC@D26dl: Specifies the password (ok8gdnd387GC@D26dl) for the MySQL user.
--no-create-db: Excludes the database creation statements from the dump.
--single-transaction: Ensures that the dump is consistent by using a single transaction.
robomart_v3: Specifies the name of the database to be dumped.
| gzip > robomart_v3.sql.gz: This part of the command takes the output from mysqldump and pipes it to gzip for compression. The compressed output is then redirected (>) to a file named robomart_v3.sql.gz.

So, the entire command creates a compressed backup (robomart_v3.sql.gz) of the MySQL database robomart_v3 while excluding the database creation statements and ensuring data consistency using a single transaction.'