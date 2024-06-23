<?php
Class IPAddress{
    
    private $db; // Database connection

    // Constructor to initialize the database connection
    public function __construct($db)
    {
        $this->db = $db;
    }

    // Function to check if an IP address exists in the database
    public function getByIP($ip) {
        // Prepare the SQL statement to select the IP address
        $stmt = $this->db->prepare("SELECT * FROM ip_addresses WHERE ip_address = :ip_address");
        // Execute the statement with the provided IP address
        $stmt->execute(['ip_address' => $ip]);
        // Fetch the result and return true if the IP address exists, false otherwise
        return $stmt->fetch(PDO::FETCH_OBJ) ? true : false;
    }

    // Function to add a new IP address to the database
    public function addIP($ip){
        // Prepare the SQL statement to insert the IP address
        $stmt = $this->db->prepare("INSERT INTO ip_addresses (ip_address) VALUES (:ip_address)");
        // Execute the statement with the provided IP address
        return $stmt->execute(['ip_address' => $ip]);
    }

    // Function to remove an IP address from the database
    public function removeIP($ip){
        // Prepare the SQL statement to delete the IP address
        $stmt = $this->db->prepare("DELETE FROM ip_addresses WHERE ip_address = :ip_address");
        // Execute the statement with the provided IP address
        return $stmt->execute(['ip_address' => $ip]);
    }
}
?>
