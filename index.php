<?php
 

//  get data for array
 $data = file_get_contents('http://localhost/get_data/response.php'); 
 $json_decode_data = json_decode($data,1); 
 echo $json_decode_data['address'];

 

// get data for object
 $data = file_get_contents('http://localhost/get_data/response.php'); 
 $json_decode_data = json_decode($data); 
 echo $json_decode_data->id;




    // if(isset($_REQUEST['Click_btn'])){
    //     $data = $_REQUEST[$ajax_data];
    //     echo $data;
    // }



?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    

$.get( "response.php", function( data ) { 
    var json_data = JSON.parse(data);
  alert( json_data.name );
});


$.post("demo_ajax_gethint.asp", {suggest: txt}, function(result){
    $("span").html(result);
  });


 

</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button id="Click_btn"> Store Data</button>

<ul>
    <li id="title_id"><?php  echo $json_decode_data->id;?> </li>
    <li id="content_id"></li>
</ul>



<script>



    function get_data(){

        $.get( "http://localhost/get_data/response.php", function( data ) {
            $( ".result" ).html( data );
            alert((data).find('title'));
        });

        // $.get( "http://localhost/get_data/response.php", function( data ) {

        //     var title_id = document.getElementById("title_id").innerHTML;  
        //     var content_id = document.getElementById("content_id").innerHTML;  

        //     var data_title = $(data).find('title');
 

        //     alert(data_title);

        //     $( "#title_id" ).each(function( index ) {
        //         $(data).find('title').each(function(){  
        //         var html_data = this.innerHTML; 
        //         $('#title_id').append('<li>'+html_data+'</li>');
                

        //     }) ;
                
        //     });

            

        //     });

    }

//     $('#Click_btn').click(function(){
//         get_data();
 
// $(document.body).append('hello');
 
//     });


</script>
</body>
</html>