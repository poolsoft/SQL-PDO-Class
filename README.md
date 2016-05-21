# PHP PDO MySQL Class
Connect and execute queries/updates with ease.

#Example
    // Require your file
    require("database.class.php");
    
    // Create a new instance of database
    $database = new database();
    
    // Set our query variable
    $query = "SELECT * FROM users WHERE username='" . $username . "'";
    
    // Use specific function
    $result = $database->query_select($query);
    
    foreach($result as $row) {
    	$firstname = $row['firstname'];
    	$lastname = $row['lastname'];
    }
    
    if($result != NULL) {
    	echo 'My first name is: ', $firstname, '.';
    	echo 'My last name is: ', $lastname, '.';
    }
