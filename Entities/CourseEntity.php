<?php
class CourseEntity
{
    public $coursename;
    public $university;
    public $lecturer;
    public $field;
    public $track;
    public $link;
    public $overall_dif;
    public $overall_rating;
    public $image;
    
    function __construct($coursename, $university, $lecturer, $field, $track, $link, $overall_dif, $overall_rating, $image) {
        $this->coursename = $coursename;
        $this->university = $university;
        $this->lecturer = $lecturer;
        $this->field = $field;
        $this->track = $track;
        $this->link = $link;
        $this->overall_dif = $overall_dif;
        $this->overall_rating = $overall_rating;
        $this->image = $image;
    }
}
?>
