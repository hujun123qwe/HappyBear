<?php
class Admin 
{
    private $id;
    private $name;
    private $password;
    public function getid()
    {
        return $this->id;
    }
    public function setid($id)
    {
        $this->id=id;
    }
    public function getname()
    {
        return $this->name;
    }
    public function setname($name)
    {
        $this->name=$name;
    }
    public function getpassword()
    {
        return $this->password;
    }
    public function setpassword($password)
    {
        $this->password=$password;
    }
}
?>