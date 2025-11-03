<?php
require_once 'bootstrap/app.php';

// App\Controller::greeting();
// App\Payments\Fawry\Live\Pay::payNow();
// 

$employees = App\Models\Employee::all();

dd($employees);

echo 'I had the Employees';
