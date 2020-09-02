<?php
Class MyDb {
    public function __construct()
    {
        $host = "localhost";
        $dbname = "db_warga";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM data_warga");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
   

}

?>