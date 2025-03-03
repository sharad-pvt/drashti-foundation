<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Form</title>
</head>
<body>
    <pre>
        @php
        print_r($errors->all()); // print all errors
        @endphp
    </pre>
    {{$errors->first('username')}}<br>
    {{$errors->first('name')}}<br>
    {{$errors->first('email')}}<br>
    {{$errors->first('city')}}<br>
    {{$errors->first('skill')}}<br>
    <center>
        
        
        <h1>Form</h1>
        <form action="/form-data" method="post">
            @csrf
            <label for="username">username</label>
            <input type="text" name="username" id="username" placeholder="{{$errors->first('username')}}"><br><br>
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" placeholder="{{$errors->first('name')}}"><br><br>
            <label for="email">email</label>
            <input type="email" name="email" id="email"><br><br>
            <label for="city">city</label>
            <input type="text" name="city" id="city"><br><br>
            skill:<br>
            <label for="java">java</label>
            <input type="checkbox" name="skill[]" id="java" value="java">
    
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="php" value="PHP">
    
            <label for="Python">Python</label>
            <input type="checkbox" name="skill[]" id="python" value="python">
            <label for="Cpp">c++</label>
            <input type="checkbox" name="skill[]" id="Cpp" value="C++"><br><br>
    
            <button>Register</button>
            
    
        </form>
    </center>
   
    
</body>
</html>