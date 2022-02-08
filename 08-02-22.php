<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>
<body>

<form id="form">
    <div>
        <label for="name">Name</label>
        <input id="name" name="name" type="text" placeholder="Enter name" >
        <div id="error"></div>
    </div>
    <div>
        <label for="email">Email</label>
        <input id="email" name="username" type="text" placeholder="Enter email" >

    </div>
    <div>
        <label for="password">password</label>
        <input id="password" name="password" type="password" placeholder="Enter passord" >

    </div>

        <input type="submit" value="Register">
</form>
</body>

<script type="text/javascript">


    var form = document.getElementById('form')

    var error =[]

    form.addEventListener('submit',function(e){
        e.preventDefault()

        if (username.value == ""){
            Error.push("please enter user name")
        }
        if(password.value == ""){
            error.push("please enter the password")
        }

    })

</script>
</html>
