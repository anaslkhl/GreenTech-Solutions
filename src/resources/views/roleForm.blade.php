<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Role</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-2xl bg-white shadow-xl rounded-2xl p-8">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Create Role</h1>
            <p class="text-gray-500 text-sm mt-1">
                Define a role and assign permissions
            </p>
        </div>

        <!-- Form -->
        <form action="#" method="POST" class="space-y-6">

            <!-- Role Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Role Name
                </label>
                <input
                    type="text"
                    name="name"
                    placeholder="Example: Admin"
                    class="w-full px-4 py-2.5 border rounded-xl focus:ring-2 focus:ring-black focus:outline-none">
            </div>

            <!-- Permissions -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Permissions
                </label>

                <div class="grid grid-cols-2 gap-4">

                    <!-- Users -->
                    <label class="flex items-center gap-2 bg-gray-50 p-3 rounded-xl">
                        <input type="checkbox" name="permissions[]" value="create-user"
                            class="rounded border-gray-300 text-black focus:ring-black">
                        <span class="text-sm text-gray-700">Create User</span>
                    </label>


                </div>
            </div>

            <!-- Actions -->
            <div class="flex gap-4 pt-4">

                <button
                    type="submit"
                    class="flex-1 bg-black text-white py-2.5 rounded-xl hover:bg-gray-800 transition">
                    Save Role
                </button>

                <button
                    type="button"
                    class="flex-1 border border-gray-300 py-2.5 rounded-xl hover:bg-gray-50 transition">
                    Cancel
                </button>

            </div>

        </form>
    </div>

</body>

</html>