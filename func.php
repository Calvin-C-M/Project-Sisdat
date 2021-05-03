<?php
    $konek = mysqli_connect("localhost", "root", "", "be_cipcer");

    function read($query){
        global $konek;

        $result = mysqli_query($konek, $query);

        $rows = [];

        while($dept = mysqli_fetch_assoc($result)){
            $rows[] = $dept;
        }

        return $rows;
    }
?>