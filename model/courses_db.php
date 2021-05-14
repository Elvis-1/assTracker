<?php
function get_courses(){
global $db;

$query = 'SELECT * FROM courses ORDER BY courseID';

$statement = $db->prepare($query);
$statement->execute();
$courses = $statement->fetchAll();

$statement->closeCursor();
return $courses;
var_dump($course);
}
$yea = get_courses();

function get_course_name($course_id){
    global $db;
    if(!$course_id){
         return 'All Courses';
    }else{
        $query = 'SELECT * FROM courses WHERE courseID = :courseID';
        $statement = $db->prepare($query);
        $statement -> bindValue(':courseID', $course_id);
        $statement->execute();
        $course = $statement->fetch();
        $statement->closeCursor();
        $courseName = $course['courseName'];
        
        return $courseName;
    }
    
    
    }


    function delete_course($course_id){
        global $db;
        
            $query = 'DELETE FROM courses WHERE courseID = :courseID';
            $statement = $db->prepare($query);
            $statement -> bindValue(':courseID', $course_id);
            $statement->execute();
            $statement->closeCursor();
        
        }
        function add_course($course_name){
            global $db;
            
                $query = 'INSERT INTO courses (courseName) VALUES (:courseName)';
                $statement = $db->prepare($query);
                $statement -> bindValue(':courseName', $course_name);
                $statement->execute();
                $statement->closeCursor();
            
            }























