<?php

class Comments 
{
    protected $arr;

    public function ReadFromDB($connect,$id)
    {
        $query = mysqli_query($connect,"SELECT * FROM comments WHERE 'post_id' = '$id'");
        $arr = [];
        while ($result = mysqli_fetch_assoc($query)) 
        {
            $arr = [];
        }
        $this->arr=$arr;
    }

    public function getArrComments() 
    {
        return $this->arr;
    }
}


?>