<DOCTYPE html>
    <html>
        <head>
            <title> Introduction to object-Oriented Programing </title>
        </head>
        <body>
            <p>
                <?php
                // Create Class
                class Person {
                    // Create properties - {Variables tied to objects}
                    public $firstName;
                    public $lastName;
                    public $age;

                    // Assigning Values to the Property Variable
                    public function __construct($firstName, $lastName, $age) {
                        $this->firstName = $firstName;
                        $this->lastName = $lastName;
                        $this->age = $age;
                    }

                    // Create a Method {Function tied to an Object}
                    public function hello() {
                        return " I am " . $this->firstName . " " . $this->lastName . " " . ", my age is: " . $this->age . "";

                    }
                }

                // Creating a new person named "John Smith" who is 25 years old
                $person1 = new Person("John", "Smith", 25);
                $person2 = new Person("Joe", "Bob", 35);

                // Print out what the hello method returns
                echo $person1->hello();
                echo "<br>";
                echo $person2->hello();
               
            </p>


  
?>
        </body>
    </html>

    