<?php
class ContactModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addContact($contact_name, $contact_info, $contact_subject, $contact_content) {
        try {
            // Prepare SQL statements to insert data into the contacts table
            $sql = "INSERT INTO contacts (contact_name, contact_info, contact_subject, contact_content) VALUES (:contact_name, :contact_info, :contact_subject, :contact_content)";
            $stmt = $this->conn->prepare($sql);

         // Bind parameters and execute SQL statements
            $stmt->bindParam(':contact_name', $contact_name);
            $stmt->bindParam(':contact_info', $contact_info);
            $stmt->bindParam(':contact_subject', $contact_subject);
            $stmt->bindParam(':contact_content', $contact_content);
            $stmt->execute();

            return true;
        } catch(PDOException $e) {
          // Output error message
            return "Failed to add contact information: " . $e->getMessage();
        }
    }
}
?>
