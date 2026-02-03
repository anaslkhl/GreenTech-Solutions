<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gray-100">

    <form action="/login" method="POST"
        class="bg-white p-8 rounded-xl shadow-md w-full max-w-sm space-y-4">

        <!-- Laravel -->
        @csrf

        <h2 class="text-2xl font-bold text-center">Login</h2>

        <input type="email" name="email" placeholder="Email"
            class="w-full border p-2 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none" required>

        <input type="password" name="password" placeholder="Password"
            class="w-full border p-2 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none" required>

        <button type="submit"
            class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700">
            Sign In
        </button>

    </form>

</body>

</html>