<?php
class Professors
{
    private $_professor_id;
    private $_name;
    private $_email;
    private $_department_id;

    public function __construct($professor_id, $name, $email, $department_id)
    {
        $this->_professor_id = $professor_id;
        $this->_name = $name;
        $this->_email = $email;
        $this->_department_id = $department_id;
    }
    public function getProfessorId()
    {
        return $this->_professor_id;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function getEmail()
    {
        return $this->_email;
    }
    public function getDepartmentId()
    {
        return $this->_department_id;
    }
    public function setProfessorId($professor_id)
    {
        $this->_professor_id = $professor_id;
    }
    public function setName($name)
    {
        $this->_name = $name;
    }
    public function setEmail($email)
    {
        $this->_email = $email;
    }
    public function setDepartmentId($department_id)
    {
        $this->_department_id = $department_id;
    }
}
?>
