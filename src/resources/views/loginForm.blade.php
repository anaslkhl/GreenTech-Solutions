<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white shadow-lg rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Create Account</h2>

        <form action="/register" method="POST" class="space-y-5">

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" name="name" required
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" name="email" required
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Role -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                <select name="role" required
                    class="w-full px-4 py-2 border rounded-lg bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="">Select Role</option>
                    <option value="admin">Admin</option>
                    <option value="agent">Agent</option>
                    <option value="user">User</option>
                </select>
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-200">
                Register
            </button>

            <p class="text-center text-sm text-gray-600 mt-4">
                Already have an account?
                <a href="/login" class="text-blue-600 hover:underline">Login</a>
            </p>
        </form>
    </div>

</body>

</html>