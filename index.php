<!--

Trista Huang
A00902090
Set O
COMP 4711 LAB 1
Jan 13, 2017

-->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<?php
			include('Student.php');

			$students = array();

			// Insert Student records
			$first = new Student();
			$first->surname = "Doe";
			$first->first_name = "John";
			$first->add_email('home','john@doe.com');
			$first->add_email('work','jdoe@mcdonalds.com');
			$first->add_grade(65);
			$first->add_grade(75);
			$first->add_grade(55);
			$students['j123'] = $first;

			$second = new Student();
			$second->surname = "Einstein";
			$second->first_name = "Albert";
			$second->add_email('home','albert@braniacs.com');
			$second->add_email('work1','a_einstein@bcit.ca');
			$second->add_email('work2','albert@physics.mit.edu');
			$second->add_grade(95);
			$second->add_grade(80);
			$second->add_grade(50);
			$students['a456'] = $second;

			// Insert my own record
			$third = new Student();
			$third->surname = "Huang";
			$third->first_name = "Trista";
			$third->add_email('home','trista@home.ca');
			$third->add_grade(95);
			$third->add_grade(80);
			$third->add_grade(50);
			$students['a123'] = $third;

			ksort($students); // one of the many sort functions

			// Output all records
			foreach($students as $student)
			    echo $student->toString();
		?>
	</body>
</html>