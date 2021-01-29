<?
function __autoload($User){
    require "classes/$User.class.php";

}


$user1 = new User('Иван','Ivan', 'Ivan123');
$user1->showInfo();


$user2 = new User('Петр','Petr','Petr123');
$user2->showInfo();


$user3 = new User('Василий','Vasia','Vasia123');
$user3->showInfo();

$superUser1 = new SuperUser('SUPER_User','root','toor123','admin');
$superUser1->showInfo();



