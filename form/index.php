<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form with Tailwind CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 py-12">
    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <h2 class="text-xl font-semibold mb-4">Personal Information</h2>
        <form action="submitHandler.php" method="POST">
            <div class="mb-4">
                <label for="firstName" class="block text-gray-600 mb-2">First Name</label>
                <input type="text" id="firstName" name="firstName"
                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="lastName" class="block text-gray-600 mb-2">Last Name</label>
                <input type="text" id="lastName" name="lastName"
                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="favPet" class="block text-gray-600 mb-2">Favorite Pet</label>
                <select id="favPet" name="favPet"
                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="monkey">Monkey</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Submit</button>
        </form>
    </div>
</body>

</html>