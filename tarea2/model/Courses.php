<?php
class Courses
{
    private $_course_id;
    private $_name;
    private $_credits;
    private $_professor_id;

    public function __construct($course_id, $name, $credits, $professor_id)
    {
        $this->_course_id = $course_id;
        $this->_name = $name;
        $this->_credits = $credits;
        $this->_professor_id = $professor_id;
    }
    public function getCourseId()
    {
        return $this->_course_id;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function getCredits()
    {
        return $this->_credits;
    }
    public function getProfessorId()
    {
        return $this->_professor_id;
    }
    public function setCourseId($course_id)
    {
        $this->_course_id = $course_id;
    }
    public function setName($name)
    {
        $this->_name = $name;
    }
    public function setCredits($credits)
    {
        $this->_credits = $credits;
    }
    public function setProfessorId($professor_id)
    {
        $this->_professor_id = $professor_id;
    }
}
?>
