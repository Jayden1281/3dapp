<?php
class CompanyModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getFirstCompany() {
        try {
            // Query the first data of the company table
            $stmt = $this->conn->query("SELECT * FROM company LIMIT 1");
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch(PDOException $e) {
            // Output error message
            return "查询失败: " . $e->getMessage();
        }
    }
}
?>
