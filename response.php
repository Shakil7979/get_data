<?php 

    $data = array(
        'user'   => 'Sadbin',
        'password'   => 1234,
        'address'    => 'Dhaka',
        'designation'   => 'WordPress Developer',
        'id'       => 01,
        'HomeTown'    => 'Dinajpur',
        'status'   => '200'
    );
    
     echo $json_data = json_encode($data);

    


    // echo $json_data;


// echo file_get_contents('https://www.prothomalo.com/feed');

?>