<?php
function get_assignments_by_course($course_id){
    global $db;

    if($course_id){
        $query ='SELECT A.ID, A.description, C.courseName FROM assignments A LEFT JOIN courses C ON A.courseID = C.courseID WHERE A.courseID =:course_id ORDER BY A.ID';

    }else{
        $query ='SELECT A.ID, A.description, C.courseName FROM assignments A LEFT JOIN courses C ON A.courseID = C.courseID  ORDER BY C.courseID';

    }
    
    $statement = $db->prepare($query);
    $statement -> bindValue(":course_id",$course_id);
    $statement->execute();
    $assignments = $statement->fetchAll();

    $statement->closeCursor();
    var_dump($assignments);
    return $assignments;
}

//$ass = get_assignments_by_course(1);
function delete_assignment($assignment_id){
    global $db;

    $query = 'DELETE FROM assignments WHERE ID =:assign_id';
    $statement = $db->prepare($query);
    $statement -> bindValue(':assign_id', $assignment_ID);
    $statement->execute();

    $statement->closeCursor();

}


function add_assignment($course_id, $description){
    global $db;

    $query = 'INSERT INTO assignments (description,courseID) VALUES (:descri, :courseID)';
    $statement = $db->prepare($query);
    $statement -> bindValue(':descri', $description);
    $statement = bindValue(':courseID', $course_id);
    $statement->execute();

    $statement->closeCursor();

}













