# PHP-PDO-Database-Class
Makes connecting to your database and executing MySQL statements easier.

Available Functions:
query_select($query) - Select from a table and then use the data.
query_insert($query, $query_params) - Insert into a table. $query_params are optional.
query_update($query) - Update rows in a table.
query_delete($query) - Delete rows in a table.

Example of Use:
<?php

    // Grab your class file
    require("database.class.php");
    
    // Create a new instance of database
    $database = new database();
    
    // ######### query_select function #########
    // Set our query variable
    $query = "SELECT * FROM users WHERE username='" . $username . "'";
    
    // Use our function
    $result = $database->query_select($query);
    foreach($result as $row)
    {
        // Use the data that we get from the table
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
    }
    echo 'My first name is: ', $firstname, '.';
    echo 'My last name is: ', $lastname, '.';
    // ######### end of query_select function #########
    
    // ######### query_insert function #########
    // Set our query variable
    $query = "INSERT INTO names (firstname, lastname) VALUES (:firstname, :lastname)";
    
    // Set our firstname & lastname variables
    $firstname = "Joel";
    $lastname = "Evans";
    
    // Set our query_params variable
    $query_params = array(':firstname' => $firstname, ':lastname' => $lastname);
    
    // Use our function
    $database->query_insert($query, $query_params);
    // ######### end of query_insert function #########
    
    // ######### query_update function #########
    // Set our query variable
    $query = "UPDATE names SET firstname='Alex' WHERE firstname='Joel'";
    
    // Use our function
    $database->query_update($query);
    // ######### end of query_update function #########
    
    // ######### query_delete function #########
    // Set our query variable
    $query = "DELETE FROM users WHERE firstname='Joel'";
    
    // Use our function
    $database->query_delete($query);
    // ######### end of query_delete function #########
    
?>

configuration.php:
[SQL]
// Your MySQL Host
host = localhost
// Your MySQL Username
user = root
// Your MySQL Password
password = 
// Your Database Name
dbname = socialnetwork
