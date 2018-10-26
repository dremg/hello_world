<?php
/* Constructs Of Outcomes*/
/*The world of education is a process like many others, yet at the same time, it too
is a process unlike many.  Using a construct originally developed from the field of botany and 
another construct developed from the field of computer science, this programatic structure integrates 
an object-oriented-programming (OOP) methodology and the model-view-controller (MVC) frameworks to 
describe the complexities inherent in the educational process.*/

class University {
	
	protected $inst_name;
	public $mission = [];
	public $college = [];

	public function getInstitutionName() {
		return $this->inst_name; // returns a string
	}

	public function setInstitutionName($name){
		$this->inst_name = $name;
	}


}

class Mission {

	public $mission;

	public function getMission() {
		return $this->mission; // returns an array 
	}

	public function setMission($mission) {
		$this->mission = $mission;
	}

}


class College {

	public $college;
	protected $cMission = [];
	protected $cOutcomes = [];
	protected $program = [];

	public function getCollege() {
		return $this->college; // returns an array
	}

	public function setCollege($college) {
		$this->college = $college;
	}

	public function setcMission($mission) {
		$this->cMission[] = $mission;
	}

}

class Outcome {

	public $outcome;

	public function getOutcome() {
		return $this->outcome; // returns an array 
	}

	public function setOutcome($outcome) {
		$this->outcome = $outcome;
	}

}

class Program {

	public $program;
	protected $pOutcomes = [];
	protected $courses = [];

	public function getProgram() {
		return $this->program; // returns an array
	}

	public function setProgram($program) {
		$this->program = $program;
	}

	public function setOutcome($outcome) {
		$this->pOutcomes[] = $outcome;
	}

	public function setCourse($course) {
		$this->courses[] = $course;
	}

}

class Objective {

	public $objective;

	public function getObject() {
		return $this->objective; // returns an array
	}

	public function setObject($objective) {
		$this->objective = $objective;
	}	
}

$entity = new University;
$entity->setInstitutionName("U-Know");

$entity->mission[] = new Mission;
$entity->mission[] = new Mission;
$entity->mission[] = new Mission;
$entity->mission[0]->setMission("Mission 1");
$entity->mission[1]->setMission("Mission 2");
$entity->mission[2]->setMission("Mission 3");

$entity->college[] = new College;
$entity->college[] = new College;
$entity->college[] = new College;
$entity->college[0]->setCollege("Business");
$entity->college[1]->setCollege("Education");
$entity->college[2]->setCollege("Computer Sciences");

$entity->college[0]->setcMission("Mission #1");
$entity->college[1]->setcMission("Mission #2");
$entity->college[2]->setcMission("Mission #3");

$entity->college[0]->cOutcomes[] = new Outcome;
$entity->college[0]->cOutcomes[] = new Outcome;
$entity->college[0]->cOutcomes[] = new Outcome;
$entity->college[0]->cOutcomes[] = new Outcome;
$entity->college[0]->cOutcomes[0]->setOutcome("Outcome 1");
$entity->college[0]->cOutcomes[1]->setOutcome("Outcome 2");
$entity->college[0]->cOutcomes[2]->setOutcome("Outcome 3");
$entity->college[0]->cOutcomes[3]->setOutcome("Outcome 4");

$entity->college[0]->program[] = new Program;
$entity->college[0]->program[0]->setProgram("Corporate Accounting & Financial Analysis");

echo "<pre>";
	print_r($entity);
echo "</pre>";

?>