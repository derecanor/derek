<?php

include('includes/reviews.php');

?>
<form action="review.php" method="post" accept-charset="utf-8">
    <fieldset>
        <legend>Review</legend>
        <p><label for="rating">Rating</label>
            <input type="radio" name="rating" value="5" /> 5
            <input type="radio" name="rating" value="4" /> 4
            <input type="radio" name="rating" value="3" /> 3
            <input type="radio" name="rating" value="2" /> 2
            <input type="radio" name="rating" value="1" /> 1</p>
        <p><label for="reviews">Comments(Optional)</label>
            <textarea name="review" rows="8" cols="40">
       </textarea></p>
        <p>
            <input type="submit" value="Submit Review">
        </p>
        <input type="hidden" name="jobdone_type" value="actual_jobdone_type" id="jobdone_type">
        <input type="hidden" name="jobdone_id" value="actual_jobdone_id" id="jobdone_id">
    </fieldset>
</form>
<?php ?>
