<?php
    $konek = mysqli_connect("localhost", "root", "", "be_cipcer");

    function read($query){
        global $konek;

        $result = mysqli_query($konek, $query);

        $rows = [];

        while($data = mysqli_fetch_assoc($result)){
            $rows[] = $data;
        }

        return $rows;
    }

    function tambah_admin($data){
        global $konek;
        
        $username = htmlspecialchars($data["username"]);
        $password = htmlspecialchars($data["password"]);

        $query = "INSERT INTO admin VALUES ('$username','$password');";

        mysqli_query($konek, $query);
        return mysqli_affected_rows($konek);
    }

    function tambah_departemen($data){
        global $konek;

        $id_dept = $data["id_dept"];
        $nama = htmlspecialchars($data["nama"]);
        $singkatan = htmlspecialchars($data["singkatan"]);
        $logo = htmlspecialchars($data["logo"]);

        $query = "INSERT INTO departemen VALUES ('$id_dept','$nama','$singkatan','$logo');";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function tambah_staff($data){
        global $konek;

        $npm = htmlspecialchars($data["npm"]);
        $nama = htmlspecialchars($data["nama"]);
        $dept = htmlspecialchars($data["dept"]);
        $foto = htmlspecialchars($data["foto"]);

        $query = "INSERT INTO staff VALUES ('$npm','$nama','$dept','$foto');";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function tambah_pimpinan($data){
        global $konek;

        $npm = htmlspecialchars($data["npm"]);
        $nama = htmlspecialchars($data["nama"]);
        $jabatan = htmlspecialchars($data["jabatan"]);
        $dept = htmlspecialchars($data["dept"]);
        $foto = htmlspecialchars($data["foto"]);

        $query = "INSERT INTO pimpinan VALUES ('$npm','$nama','$jabatan','$dept','$foto');";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function tambah_proker($data){
        global $konek;

        $nama = htmlspecialchars($data["nama"]);
        $dept = htmlspecialchars($data["dept"]);

        $query = "INSERT INTO proker 
                VALUES ('$nama','$dept');";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function hapus($queryKey, $table){
        global $konek;

        $query = "";

        switch($table){
            case "admin":
                $query = "DELETE FROM $table 
                        WHERE username='$queryKey';";
                break;

            case "departemen":
                $query = "DELETE FROM $table 
                        WHERE id_dept='$queryKey';";
                break;

            case "pimpinan":
                $query = "DELETE FROM $table 
                        WHERE npm='$queryKey';";
                break;

            case "staff":
                $query = "DELETE FROM $table 
                        WHERE npm='$queryKey';";
                break;

            case "proker":
                $query = "DELETE FROM $table 
                        WHERE name='$queryKey';";
                break;
        }

        mysqli_query($konek, $query);
        
        return mysqli_affected_rows($konek);
    }

    function edit_admin($data){
        global $konek;

        $username = $data["username"];
        $password = htmlspecialchars($data["password"]);

        $query = "UPDATE admin SET 
                password='$password' 
                WHERE username='$username';";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function edit_departemen($data){
        global $konek;

        $id = $data["id_dept"];
        $nama = htmlspecialchars($data["nama"]);
        $singkatan = htmlspecialchars($data["singkatan"]);
        $logo = $data["logo"];

        $query = "UPDATE departemen SET 
                nama='$nama', 
                singkatan='$singkatan',
                logo='$logo'
                WHERE id_dept='$id';
        ";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function edit_pimpinan($data){
        global $konek;

        $npm = $data["npm"];
        $nama = htmlspecialchars($data["nama"]);
        $jabatan = htmlspecialchars($data["jabatan"]);
        $dept = $data["dept"];
        $foto = $data["foto"];

        $query = "UPDATE pimpinan SET
                nama='$nama',
                jabatan='$jabatan',
                dept='$dept',
                foto='$foto'
                WHERE npm='$npm';
        ";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function edit_staff($data){
        global $konek;

        $npm = $data["npm"];
        $nama = htmlspecialchars($data["nama"]);
        $dept = $data["dept"];
        $foto = $data["foto"];

        $query = "UPDATE staff SET
                nama='$nama',
                dept='$dept',
                foto='$foto'
                WHERE npm='$npm';
        ";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
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

<?php
    $departemen = read("SELECT * FROM departemen");
    $organisasi = read("SELECT * FROM komponen;")[0];
?>