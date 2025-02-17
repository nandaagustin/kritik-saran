<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="relative h-screen bg-gray-50 overflow-hidden">
        <div
            class="absolute top-20 left-2 w-[500px] h-[500px] bg-[#c4e7f8] rounded-full mix-blend-multiply filter blur-[150px] opacity-70 animate-blob">
        </div>
        <div
            class="absolute top-20 right-32 w-[500px] h-[500px] bg-[#acddf5] rounded-full mix-blend-multiply filter blur-[150px] opacity-70 animate-blob animation-delay-2000">
        </div>
        <div
            class="hidden xl:block absolute bottom-10 left-32 w-[500px] h-[500px] bg-[#b3e6d5] rounded-full mix-blend-multiply filter blur-[150px] opacity-70 animate-blob animation-delay-4000">
        </div>
        <div
            class="absolute bottom-10 right-52 w-[500px] h-[500px] bg-[#c4e7f8] rounded-full mix-blend-multiply filter blur-[150px] opacity-70 animate-blob animation-delay-4000">
        </div>
        <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">

                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to your account!
                </h2>

            </div>

            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    <form class="space-y-6 " action="proses_login.php" method="POST">
                        <div>
                            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                            <div class="mt-1">
                                <input id="username" name="username" type="username" autocomplete="username" required=""
                                    class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-green-500 focus:outline-none focus:ring-green-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="mt-1">
                                <input id="password" name="password" type="password" autocomplete="current-password"
                                    required=""
                                    class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-green-500 focus:outline-none focus:ring-green-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="flex items-center  justify-between">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500 z-50 relative">

                                <label for="remember-me" class="ml-2 block text-sm   text-gray-900">Remember me</label>
                            </div>
                            <div class="text-sm">
                                <a href="#" class="font-medium z-50 relative text-green-600 hover:text-green-500">Forgot your
                                    password?</a>
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="flex w-full justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Sign
                                in</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

</body>

</html>