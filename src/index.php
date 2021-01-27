<?

class User{
    public $name;
    public $login;
    public $password;

    function showInfo(){
        echo "<hr>Name: {$this->name}<br>";
        echo "Login: {$this->login}<br>";
        echo "Password: {$this->password}<br>";
    }
}

$user1 = new User();



$user1->name='Иван';
$user1->login='Ivan';
$user1->password='Ivan123';
$user1->showInfo();


$user2 = new User();
$user2->name='Петр';
$user2->login='Petr';
$user2->password='Petr123';
$user2->showInfo();


$user3 = new User();
$user3->name='Василий';
$user3->login='Vasia';
$user3->password = "Vasia123";
$user3->showInfo();
