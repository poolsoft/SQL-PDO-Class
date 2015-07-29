<?php
    require("database.class.php");

    // Create a new instance of database
    $database = new database();

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

    // Set our query variable
    $query = "INSERT INTO names (firstname, lastname) VALUES (:firstname, :lastname)";

    // Set our firstname & lastname variables
    $firstname = "Joel";
    $lastname = "Evans";

    // Set our query_params variable
    $query_params = array(':firstname' => $firstname, ':lastname' => $lastname);

    // Use our function
    $database->query_insert($query, $query_params);

    // Set our query variable
    $query = "UPDATE names SET firstname='Alex' WHERE firstname='Joel'";

    // Use our function
    $database->query_update($query);

    // Set our query variable
    $query = "DELETE FROM users WHERE firstname='Joel'";

    // Use our function
    $database->query_delete($query);
?>
