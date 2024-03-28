<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Personal Information</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100">
    <div class="container mx-auto">
        <div class="flex justify-center mt-8">
            <div class="bg-white rounded-lg shadow-md w-full lg:w-2/3">
                <div class="p-6">
                    <h1 class="text-2xl font-bold mb-4">Personal Information</h1>
                    @livewire('create-personal-information')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
