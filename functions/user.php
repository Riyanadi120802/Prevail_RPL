<?php
// cek data login
function cek_data($username, $password)
{
    global $data3;

    foreach ($data3 as $row) :
        if ($row["username"] == $username && $row["password"] == $password) {

require_once "core/init.php";

function register_user($name, $email, $username, $password)
{
    global $conn;
    
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $username = mysqli_real_escape_string($conn, $username);

    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO customer VALUES ('0','$name','$email','$username','$password')";

    if (mysqli_query($conn, $query)) {
        return true;
    } else {
        return false;
    }
};

function cek_data($username, $password){
    global $data3;

    foreach($data3 as $row):
        if ( $row["username"] == $username && $row["password"] == $password){
            $_SESSION['user'] = $username;
            return header('Location: dashboard.php');
        }
    endforeach;
}

class firebaseRDB
{
    function __construct($url = null)
    {
        if (isset($url)) {
            $this->url = $url;
        } else {
            throw new Exception("Database URL must be specified");
        }
    }

    public function grab($url, $method, $par = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if (isset($par)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $par);
        }
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 120);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $html = curl_exec($ch);
        return $html;
        curl_close($ch);
    }


    public function insert($table, $data)
    {
        $path = $this->url . "/$table.json";
        $grab = $this->grab($path, "POST", json_encode($data));
        return $grab;
    }

    public function update($table, $uniqueID, $data)
    {
        $path = $this->url . "/$table/$uniqueID.json";
        $grab = $this->grab($path, "PATCH", json_encode($data));
        return $grab;
    }

    public function delete($table, $uniqueID)
    {
        $path = $this->url . "/$table/$uniqueID.json";
        $grab = $this->grab($path, "DELETE");
        return $grab;
    }
}

function login_cek_email($username){
    global $conn;
    $username = mysqli_real_escape_string($conn, $username);

    $query = "SELECT email FROM customer WHERE username = '$username'";

    if ($result = mysqli_query($conn, $query)) {
        if (mysqli_num_rows($result) != 0) return true;
    } else { 
        return false;
    }
};
        }