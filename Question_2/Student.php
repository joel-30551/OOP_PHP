<?php
class Student{
    private $studentId;
    private $name;
    private $score;

    public function __construct(string $studentId,string $name,float $score)
    {
        $this->studentId = $studentId;
        $this->name = $name;
        $this->score = $score;
    }

    public function getStudentId(){
        return $this->studentId;
    }
    public function setStudentId(){
        $this->studentId;
    }

    public function getName(){
        return $this->name;
    }
    public function setName(){
        $this->name;
    }

    public function getScore(){
        return $this->score;
    }
    public function setScore($score){
        if($score < 0 || $score > 100){
            echo"Invalid score";
        }else{
            $this->score = $score;
        }
    }

    public function getGrade(){
        if($this->score >= 70){
            return "A";
        }elseif($this->score >= 60){
            return "B";
        }elseif($this->score >= 50){
            return "C";
        }elseif($this->score >= 45){
            return "D";
        }else{
            return "F";
        }
    }

}
?>