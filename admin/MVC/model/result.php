<?php 
    $data = array();
    $result = $this->conn->query($query);
    while($row = $result->fetch_assoc())
    {
        $data[] = $row;
    }
    return $data;

?>