    <!--©Brandon v dongen 2017-->
<?php

class Auth
{
    const SESSION_VAR = "id_user";
    private $database;
    private $id_user;
    private $username;
    private $nickname;

    public function __construct($database)
    {

        if ($database instanceof Database) {
            $this->database = $database;
        }else{
            return false;
        }
        if (isset($_SESSION[self::SESSION_VAR])) {
            $this->id_user = $_SESSION[self::SESSION_VAR];
            $this->verify_login();
        } else {
            unset($this->id_user);
            unset($_SESSION[self::SESSION_VAR]);
        }
    }

    public function verify_login()
    {
        if (!is_numeric($id = $this->id_user)) {
            return false;
        } else {
            $result = $this->database->prepared_query('SELECT id_user, username FROM users WHERE users.id_user=?', [$this->id_user]);
            if ($result) {
                $this->username = $result->username;
                $this->nickname = $result->nickname;
                return true;
            } else {
                return false;
            }
        }
    }

    public function login($username, $password)
    {
        $result = $this->database->prepared_query("SELECT * FROM users WHERE username=?", [$username]);
        if ($result) {
            print_r($result);
            if (password_verify($password, $result->password)) {
                $_SESSION[self::SESSION_VAR] = $result->id_user;
                $this->id_user = $result->id_user;
                $this->username = $result->username;
                $this->nickname = $result->nickname;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function get_id()
    {
        if (isset($this->id_user)) {
            return $this->id_user;
        } else {
            return false;
        }

    }
    public function get_username()
    {
        return $this->username;
    }
}