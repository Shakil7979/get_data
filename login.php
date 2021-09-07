

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        $successMsg{
            display: none;
        }
        $errorMsg{
            display: none;
        }
    </style>
</head>
<body>
<form mathod="POST" id="login_form">
    
<div id="successMsg">
                                        
</div>
<div id="errorMsg">
    
</div>
    <label for="user">User Name: </label>
    <input type="text" name="user" id="user"> <br>
    <label for="user">Password: </label>
    <input type="password" name="password" id="password"> <br>
 
    <button type="submit">Send</button>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
 
$('#login_form').on('submit',function(event){
            event.preventDefault();

    var user = $('#user').val();
    var password = $('#password').val();
 
    if(user.length == 0){
        $('#errorMsg').show().text('User is Wrong'); 
    }else if(password.length == 0){
        $('#errorMsg').show().text('Password is Wrong');
    }else{
        $('#errorMsg').hide(); 

        // $.post("http://faylab.com/API/api.php", {username:user,password:password,action:"login" }, function(result){
        //     // $("span").html(result);

        //    // var json_data =  JSON.parse(result);
        //    var json_data = result;
        //    // alert(json_data.status);
        //     var status  = json_data.status;

        //     if(status == 200){
        //         alert('Login Successs');
        //     }  else{
        //         alert('Login not found');
        //     }


             
        // });

        $.ajax({
            url: 'http://faylab.com/API/api.php',
            type: "POST",
            data: {
                username:user,
                password:password,
                action:'login'
            },
            success: function(data, textStatus, jqXHR) {
                // alert('Success!');
                var status  = data.status;

                if(status == 200){
                    alert('Login Successs');
                    
                    
                    .location.replace("https://www.google.com/");
                }  else{
                    alert('Login not found!');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error occurred!');
            }

});

    }


 
 
});

// $.post("http://faylab.com/API/api.php", {username:user,password:password }, function(result){
//     $("span").html(result);
//   });


</script>


</form>

</body>
</html>
