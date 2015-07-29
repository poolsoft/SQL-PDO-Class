# PHP-PDO-Database-Class
Makes connecting to your database and executing MySQL statements easier.

# Available Functions
query_select($query) - Select from a table and then use the data.
query_insert($query, $query_params) - Insert into a table. $query_params are optional.
query_update($query) - Update rows in a table.
query_delete($query) - Delete rows in a table.

# Default Configuration
configuration.php:
[SQL]

host = localhost

user = root

password = 

dbname = socialnetwork
