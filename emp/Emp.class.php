<?php
class Emp
{
    private $id;
    private $name;
    private $grade;
    private $email;
    private $salary;
    public function setid($id)
    {
        $this->id=$id;
    }
    public function getid()
    {
        return $this->id;
    }
    public function setname($name)
    {
        $this->name=$name;
    }
    public function getname()
    {
        return $this->name;
    }
    public function setgrade($grade)
    {
        $this->grade=$grade;
    }
    public function getgrade()
    {
        return $this->grade;
    }
    public function setemail($email)
    {
        $this->email=$email;
    }
    public function getemail()
    {
        return $this->email;
    }
    public function setsalary($salary)
    {
        $this->salary=$salary;
    }
    public function getsalary()
    {
        return $this->salary;
    }
}
?>