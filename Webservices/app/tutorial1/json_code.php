<?php
// header('Content-Type: /json' );
require_once('StudentDB.php');

$json_data = json_decode('{"firstname": "Dale"}');
var_dump($json_data);


class Address{
    public $street = "";
    public $city = "";
    public $state = "";

    function __construct($street,$city,$state){
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
    }
}


class Student {
    public $first_name = "";
    public $last_name = "";
    public $age = 0;
    public $enrolled = false;
    public $married = null;
    public $address;
    public $phone;
    function __construct($first_name, $last_name, $age, $enrolled,
        $married, $street, $city, $state, $ph_home, $ph_mobile){

        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->enrolled = $enrolled;
        $this->married = $married;
        $this->address = new Address($street, $city, $state);
        $this->phone = array("home" => $ph_home,

                            "mobile" => $ph_mobile);

    }

}

// Example 
$dale_cooper = new Student("Dale", "Cooper", 35, true, null,"123 Main St", "Seattle", "WA", "4125551212", "4125552121");
echo "<br /><br />";
$dale_data = json_encode($dale_cooper);
echo $dale_data ."<br /><br />";


require_once("config.php");
// Check the connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$query = "SELECT * FROM students WHERE student_id IN (1,2)";
$student_array = array();

if($result = $dbc->query($query)){
    while ($obj = $result->fetch_object()){
        printf("%s %s %s %s %s %s %s %s %s %s %s %s %s <br />",
            $obj->first_name, $obj->last_name, $obj->email,
            $obj->street, $obj->city, $obj->state, $obj->zip,
            $obj->phone, $obj->birth_date, $obj->sex,
            $obj->date_entered, $obj->lunch_cost, $obj->student_id);
        $temp_student = new StudentDB($obj->first_name,
            $obj->last_name, $obj->email, $obj->street,
            $obj->city, $obj->state, $obj->zip, $obj->phone,
            $obj->birth_date, $obj->sex, $obj->date_entered,
            $obj->lunch_cost, $obj->student_id);
        $student_array[] = $temp_student;
    }
    echo "<br /><br />";
    // Surround the student data
    echo '{"students":[';

    // Check if there are any elements in the array
    if (!empty($student_array)) {
        // Take data array created and convert into JSON
        $dale_data = json_encode($student_array[0]);
        echo $dale_data;
        
        // Check if there are multiple elements in the array before adding a comma
        if (count($student_array) > 1) {
            echo ',<br />';
            $dale_data = json_encode($student_array[1]);
            echo $dale_data . "<br />";
        }
    }

    // Close the JSON data
    echo ']}';

    // Close the database connection
    $result->close();
    $dbc->close();
}


?>
