<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Drashti Foundation</title>
</head>
<body>
    @php
        $arr = ['name'=> ['sharad','sagar','sachin','sanket'],'management'=>['it','hr','admin','account']];
    @endphp
    @include('pages.header',$arr)
    <main>
        Body Data
    </main>
    @include('pages.footer')
    
</body>
</html>