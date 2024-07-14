<!-- resources/views/admin-login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center min-h-screen">

    <div class="container mx-auto flex justify-start ml-96">
        <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md">
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/logorac.png')}}" alt="Logo" width ="150px">
            </div>

            
            <h3 class="text-center mb-3 text-xl font-bold">Welcome, Admin</h3>
            <p class="text-center mb-6">To continue, please sign in</p>
            
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4 flex items-center">
                    <svg class="h-10 w-10 mr-2 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div class="mt-1 flex">
                        <input id="email" name="email" type="email" required autofocus class="block w-full px-16 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="This is your email address">
                    </div>
                  </div>
                  
                  
                  

                <!-- Password -->
                <div class="mb-4 flex ">
                    <svg class="h-10 w-10 mr-2 text-green-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="5" y="11" width="14" height="10" rx="2" />  <circle cx="12" cy="16" r="1" />  <path d="M8 11v-4a4 4 0 0 1 8 0v4" /></svg>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" required class="block w-full px-16 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-4">
                    <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-800 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign-in</button>
                </div>
                
                <div class="mt-4 text-center">
                    <a href="{{ route('password.request') }}" class="underline text-sm text-gray-600 hover:text-gray-900">Forgot your password?</a>
                </div>
            </form>

            
        </div>
    </div>
    <div class="container mx-auto flex justify-start ml-96 relative bg-cover bg-no-repeat h-screen" 
    style="background-image: url('{{ asset('images/Players1.png') }}'); background-position: center;">

</div>


</body>
</html>
