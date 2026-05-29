<?php
$xml = new DOMDocument("1.0", "UTF-8");
$college=$xml->createElement("Modern_college");
$dept=$xml->createElement("Computer_application_Department");
$xml->formatOutput = true;
$xml->appendChild($college);
$college->appendChild($dept);
$course=$xml->createElement("Course","BCA");
$student=$xml->createElement("Student_strength","80");
$teacher=$xml->createElement("No_of_teacher","12");

$dept->appendChild($course);
$dept->appendChild($student);
$dept->appendChild($teacher);
$xml->save("College.xml");
echo"xml File generated Successfully!";
?>


