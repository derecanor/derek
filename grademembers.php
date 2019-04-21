
<?php

include_once 'server/connection.php';

class GradeMembers

{

    public function createReview($label,$link,$document_id,$member_id)
    {
        /*connect to database*/
        $conn = (new connection())->connect();

        $query = "INSERT INTO student_review(label,link, document_id, member_id, time_created) ".
            "VALUES('".$label."','".$link."', '".$document_id."', '".$member_id."', present())";

        $results = $conn->query_database($query);

        return $results;
    }

    public function setTransferredReviews($review_id,$link)
    {

        /*connect to database*/

        $conn = (new connection())->connect();

        $query = "UPDATE student_review SET document_link = '". $link . "'".
            " WHERE id = ". $review_id;

        $results = $conn->query($query);

        return $results;
    }


    public function grabStudentReviewForm($formid)
    {

        /*connect to database*/

        $conn = (new connection())->connect();

        $query = "SELECT * FROM student_review WHERE form_id = ".
            $formid;

        $results = $conn->query($query);

        $returnedResults = [];

        if($results->num_rows > 0)
        {
            while($row = $results->fetch_assoc())
            {
                array_push($returnedResults, $row);
            }
        }

        return $returnedResults;
    }

    public function grabReviewPerStudent($studentid)
    {
        $conn = (new connection())->connect();

        $query = "SELECT * FROM student_review WHERE assigned_to = ".
            $studentid;

        $results = $conn->query($query);

        $returnedResults = [];

        if($results->num_rows > 0)
        {
            while($row = $results->fetch_assoc())
            {
                array_push($returnedResults, $row);
            }
        }

        return $returnedResults;
    }


}