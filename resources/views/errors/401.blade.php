<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>404</title>
</head>
<body class="bg-[#101329] text-white">
    <div class="flex md:flex-row flex-col w-full items-center justify-center bg-center bg-cover h-screen" style="background-image: url('{{asset('img/site/bg1.png')}}')">
        <h1 class="text-center md:text-[270px] text-[150px] font-bold shadown-md shadow-white">401</h1>
        <div class="flex flex-col max-w-[600px] md:ml-7 ml-0 md:text-left text-center">
            <span class="md:text-[30px] text-[25px] font-semibold mb-2">Oops. You do not have permission to perform this action...</span>
            <span class="text-[14px]">You are probably trying to perform an unexpected action or it is due to an internal error.</span>
            <x-site.url model="default" value="Back to Home" href="{{route('welcome')}}" class="text-white text-[16px] md:mx-0 mx-auto mt-4 px-4 py-3 bg-purple-500 w-max hover:bg-purple-600 hover:scale-105" />
        </div>
    </div>
</body>
</html>
