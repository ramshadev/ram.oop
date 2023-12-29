<?php
class user {
    public $id;
    public $name;
    public $email;
    public $contact;
    public $type;
    
    public function __construct($name, $id, $email, $contact, $type) {
        $this->name = $name;
        $this->id = $id;
        $this->email = $email;
        $this->contact = $contact;
        $this->type = $type;
    }
}

class Student extends user {
    public $courseEnrolled;
    
    public function __construct($name, $id, $email, $contact, $type, $courseEnrolled) {
        parent::__construct($name, $id, $email, $contact, $type);
        $this->courseEnrolled = $courseEnrolled;
    }

    public function displayIntro() {
        echo "Hello, I am a student.<br>";
        echo "ID: " . $this->id . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Contact: " . $this->contact . "<br>";
        echo "Type: " . $this->type . "<br>";
        echo "Enrolled in: " . $this->courseEnrolled . "<br>";
    }
}

class Teacher extends user {
    public $courseTaught;
    
    public function __construct($name, $id, $email, $contact, $type, $courseTaught) {
        parent::__construct($name, $id, $email, $contact, $type);
        $this->courseTaught = $courseTaught;
    }

    public function displayIntro() {
        echo "Hello, I am a teacher.<br>";
        echo "ID: " . $this->id . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Contact: " . $this->contact . "<br>";
        echo "Type: " . $this->type . "<br>";
        echo "Teaching: " . $this->courseTaught . "<br>";
    }
}

$student = new Student("Harris", 123, "muhammadharris@123.com", "5551234", "Student", "web development");
$student->displayIntro();
echo "<br>";
$teacher = new Teacher("Harris",1234 , "muhammadharris@123.com", "5554321", "Teacher", "web development");
$teacher->displayIntro();
?>