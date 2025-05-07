<?php
class Departments
{
    private $_departmentId;
    private $_name;

    public function __construct($departmentId, $name)
    {
        $this->_departmentId = $departmentId;
        $this->_name = $name;
    }

    public function getDepartmentId()
    {
        return $this->_departmentId;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setDepartmentId($departmentId)
    {
        $this->_departmentId = $departmentId;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }
}
?>