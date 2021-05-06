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

<?php
    function admin(){
        $akunAdmin = read("SELECT * FROM admin");
        foreach($akunAdmin as $akun){
            if(
                $_POST['username'] === $akun['username']
                &&
                $_POST['password'] === $akun['password']
            ){
                return true;
            }
        }
        return false;
    }
?>