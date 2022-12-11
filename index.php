<?php

//PHP question 1.1

/*require_once 'Application/Module/Widget.php';
require_once 'Support/Module/Widget.php';

$appWidget = new ApplicationWidget();
$supportWidge = new SupportWidget();
echo $appWidget->showInfo(' ');
echo $supportWidge->showInfo(null);

//PHP question 1.2
require_once './Exam.php';

$attributes = ['time' => Date("Y-m-d H:i:s"), 'place' => "Sonny's", 'timeLimit' => null];

$exam = new Exam();
$exam->setAttributes($attributes);

$exam->score;

echo $exam->time . "\n";
echo $exam->place . "\n";
echo $exam->timeLimit . "\n";
echo $exam->candidate;*/


//PHP question 1.3
/*require_once './Greeting.php';

$greeter = new Greeting;

echo "Greeting " . $greeter->getTarget() . "...";
$greeter->printHello('?');
echo "\n\n\n";

echo "Greeting " . $greeter->getTarget() . "...";
$greeter->printHello('');
echo "\n\n\n";*/


//PHP question 2.1
//A

/*require_once './Person.php';
$person = new Person();
//no middle name
$person->set_name('Dustin','Cox');
echo $person->get_name();
echo "\n";

//with middle nameS
$person->set_name('Dustin','Cox','Lee');
echo $person->get_name();
echo "\n";

//B
//Person has employee id
$person->set_name('Dustin','Cox','Lee');
$employee = new Employee();
echo $employee->is_employee($person,'01');
echo "\n";

//Person does not have employee id and no middle name
$person->set_name('Dustin','Cox');
echo $employee->is_employee($person);
echo "\n";

//C
//Pet with firstname only
$pet = new Pet();
$pet->set_name('Fluffy');
echo $pet->get_name();
echo "\n";
//Pet with firstname and lastname
$pet->set_name('Fluffy','','Smith');
echo $pet->get_name();
echo "\n";
//Per with firstname, middlename and lastname
$pet->set_name('Fluffy','R.','Smith');
echo $pet->get_name();
echo "\n";


//PHP Question 2.3
require_once './TV.php';
$user = new RemoteControllUsers();
//User does not have remote
$user->set_remoteUser('Bob', false);
if ($user->get_remoteUser() != null) {
    //turn tv on
    $tv = new Television();
    $tvremote = new TVRemote($tv);
    $tvremote->powerOn();
    //use universal remote
    $cablebox = new CableBox();
    $universalRemote = new UniversalRemote($cablebox, $tv);
    $universalRemote->powerOn();
}
//User does have remote
$user->set_remoteUser('Dustin', true);
if ($user->get_remoteUser() != null) {
    $tv = new Television();
    $tvremote = new TVRemote($tv);
    $tvremote->powerOn();
    //use universal remote
    $cablebox = new CableBox();
    $universalRemote = new UniversalRemote($cablebox, $tv);
    $universalRemote->powerOn();
}*/

//PHP Question 2.3
require_once './Pagasys.php';
$pegasus = new Pagasys();
$pegasus->flying();
