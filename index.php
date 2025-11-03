<?php
require_once 'bootstrap/app.php';

// App\Controller::greeting();
// App\Payments\Fawry\Live\Pay::payNow();
// 

$employees = App\Models\Employee::all();

dump($employees);

echo 'I had the Employees';

$faker = Faker\Factory::create();

dump($faker);

$db = new \mysqli("localhost", "root", "", "classicmodels");

for ($i = 0; $i < 50; $i++) {
    $employeeNumber = $faker->randomNumber(3, true);
    $lastName = $faker->firstName;
    $firstName = $faker->lastName;
    $extension = $faker->randomNumber(4, true);
    $email = $faker->safeEmail();
    $officeCode = $faker->numberBetween(1, 7);
    $reportsTo = 1102;
    $jobTitle = $faker->randomElement([
        'Sales Rep',
        'Sales Manager',
        'Area Manager',
        'Distrect Manager',
    ]);

    $qry = "INSERT INTO `employees` (`employeeNumber`, `lastName`, `firstName`, `extension`, `email`, `officeCode`, `reportsTo`, `jobTitle`) VALUES('$employeeNumber', '$lastName', '$firstName', '$extension', '$email', '$officeCode', '$reportsTo', '$jobTitle');";

    // dd($qry);
    $db->query($qry);

}