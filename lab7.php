<?php
$n = (int)readline("Enter the total number of students 
in the class:");
$subject = array( "Physics", "Chemistry",
"Mathematics", "English", "Hindi");
echo "\n";
for($i=0; $i<$n; $i++){
foreach($subject as $sub){
$mark=(int)readline("Enter the mark in subject 
$sub for student ".($i+1).":");
$subMarks[$i][$sub]=$mark;
}
echo "\n";
}
foreach($subject as $sub){
$tot=0;
for($i=0; $i<$n; $i++){
$tot+=$subMarks[$i][$sub];
}
$avg=$tot/$n;
echo "\nAverage of Students in subject $sub is $avg.";
}
?>