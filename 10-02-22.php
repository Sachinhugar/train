<!DOCTYPE html>
<html>
<head>
    <title>forms</title>
    <style>
        body{
    background: linear-gradient(to right,#f3f5f7,#9ea1a1,#2c5364);
}



#form{
    width: 100px;
    margin: 20vh auto 0 auto;
    border: #f3f5f7;
}

#form button{
    padding: 10px;
    margin-top: 10px;
    margin-left: 50px;
}

    select{
            width: 12vw;
            height: 5vh;
            border: grey solid 2px;
            border-radius: 7px;
        }
        .form input{
            width: 15vw;
            height: 4vh;
            border: grey solid 2px;
            border-radius: 7px;
        }

    </style>


</head>
<body>
    <form id="form" action="index.php" class="form">

 
        <label for="name">Name</label>
        <input type="text"   id ="name"   placeholder="Name" > <br><br>
        <label for="email">Email</label>
        <input type="text"   id="email"   placeholder="Email"><br><br>
        <label for="phone">phone number</label>
        <input type="number"   id="phone"    placeholder="Phone number"> <br><br>
        <select>
            <option>select state</option>
            <option>Goa</option>
            <option>karnataka</option>
            <option>punjab</option>
            <option>Maharashtra</option>
        </select> <br> <br>
        <select>
            <option>select city</option>
            <option>Belagavi</option>
            <option>Bengalore</option>
            <option>Gadag</option>
            <option>Mangalore</option>
        </select> <br> <br>

        <button type="submit"  onclick="Valid()">submit</button>

    </form>
    <script type="text/javascript">
        function Valid(){
            var name=document.getElementById('name').value;
            var phone=document.getElementById('phone').value;
            var email=document.getElementById('email').value; 

            if(name=='')
        {
            alert("enter name");
            return false;
        }
       else if(name.length<5)
        {
            alert("name should be above 5 characters");
            return false;
        }
        else if(email =="")
        {
            alert("enter email");
            return false;
        }
        // else if(!(x.test(email)))
        // {
        //     alert("enter valid email");
        //     return false;
        // }
        else if(phone =='')
        {
            alert("enter phone number");
            return false;
        }
        else if(tel.length<10)
        {
            alert("name should 10 number valid phone number");
            return false;
        }
        else if(!(y.test(tel))){
            alert("don't enter text enter valid phone number");
            return false;
        }
    }




</script>
</body>
</html>
