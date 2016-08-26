# PHP PDO MySQL Class
Connect and execute queries/updates with ease.

#Example
    // Grab the class
    require("database.class.php");
    
    // Create a new instance of the class
    $database = new database();
    
    // (Optional) Create a query variable
    $query = "SELECT * FROM users WHERE username='" . $username . "'";
    
    // Execute your statement
    $result = $database->query_select($query);
    
    // Use your data!
    foreach($result as $row) {
    	$firstname = $row['firstname'];
    	$lastname = $row['lastname'];
    }
    
    if($result != NULL) {
    	echo 'My first name is: ', $firstname, '.';
    	echo 'My last name is: ', $lastname, '.';
    }
