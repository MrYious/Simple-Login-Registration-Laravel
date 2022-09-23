<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>
<body>
    <div class="flex flex-col items-center justify-start w-full h-screen bg-gradient-to-r from-green-700 to-green-900"  >
        <div class="flex items-center justify-between w-full gap-5 p-2 shadow-sm bg-gradient-to-r from-green-200 to-green-300 shadow-black">
            <a href="dashboard" class="text-4xl font-semibold">Dashboard</a>
            <a href="logout" class="flex items-center gap-2 p-2 text-lg font-semibold border-2 border-black rounded-lg shadow-sm cursor-pointer shadow-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                </svg>
                Logout
            </a>
        </div>
        <div class="flex flex-col items-center justify-center w-full h-full gap-5 p-8 text-white">
            <div class="text-3xl">Welcome</div>
            <div class="text-3xl"></div>
        </div>
    </div>
</body>
</html>