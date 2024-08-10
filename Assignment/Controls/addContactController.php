<?php
include '../Models/Conect.php';
include '../Models/ContactModel.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $contact_name = $_POST['contact_name'];
    $contact_info = $_POST['contact_info'];
    $contact_subject = $_POST['contact_subject'];
    $contact_content = $_POST['contact_content'];

    // Create a ContactModel instance and call the addContact method
    $contactModel = new ContactModel($conn);
    $result = $contactModel->addContact($contact_name, $contact_info, $contact_subject, $contact_content);

    // Deal with the results accordingly
    if ($result === true) {
        print "<script>alert('Contact information added successfully!');</script>";

        
    } else {
        print "<p class='form-message mt-10 success'>$result</p>";
    }
}
?>
