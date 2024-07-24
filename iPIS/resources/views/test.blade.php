<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Your website description here">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Stylesheets -->
    @vite('resources/css/app.css') <!-- Ensure you are using Vite correctly -->

    <!-- Scripts -->
    @vite('resources/js/app.js')
</head>

<body class="font-sans antialiased bg-gray-100 min-h-screen flex">
    <div class="w-full">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-2/4 m-auto">
            <!-- Step Tracker -->
            <div class="flex mb-8">
                <div class="step-tracker flex-1 text-center">
                    <div class="w-8 h-8 bg-gray-300 rounded-full inline-flex items-center justify-center step-circle" data-step="1">1</div>
                    <div class="mt-2 text-sm step-label">Account Details</div>
                </div>
                <div class="step-tracker flex-1 text-center">
                    <div class="w-8 h-8 bg-gray-300 rounded-full inline-flex items-center justify-center step-circle" data-step="2">2</div>
                    <div class="mt-2 text-sm step-label">Team Details</div>
                </div>
                <div class="step-tracker flex-1 text-center">
                    <div class="w-8 h-8 bg-gray-300 rounded-full inline-flex items-center justify-center step-circle" data-step="3">3</div>
                    <div class="mt-2 text-sm step-label">Data Privacy</div>
                </div>
            </div>

            <form id="wizard-form" method="POST" action="">
                @csrf
                <div class="wizard-step" id="step-1">
                    <h2 class="text-xl font-bold mb-4">Account Details</h2>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="birth_date">Birth Date</label>
                        <input type="date" id="birth_date" name="birth_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">Gender</label>
                        <select id="gender" name="gender" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm_password">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="id_verification">Upload ID for Verification</label>
                        <input type="file" id="id_verification" name="id_verification" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <button type="button" class="next-step bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Next</button>
                </div>

                <div class="wizard-step hidden" id="step-2">
                    <h2 class="text-xl font-bold mb-4">Team Details</h2>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="team_name">Team Name</label>
                        <input type="text" id="team_name" name="team_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="team_acronym">Team Acronym</label>
                        <input type="text" id="team_acronym" name="team_acronym" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="sport_category">Sport Category</label>
                        <input type="text" id="sport_category" name="sport_category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="team_member">Team Members</label>
                        <div id="team_members">
                            <div class="flex mb-2">
                                <input type="text" name="team_member[][name]" placeholder="Name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-2" required>
                                <select name="team_member[][role]" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                    <option value="captain">Captain</option>
                                    <option value="player">Player</option>
                                </select>
                            </div>
                        </div>
                        <button type="button" id="add_team_member" class="mt-2 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Add Player</button>
                    </div>
                    <button type="button" class="prev-step bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Previous</button>
                    <button type="button" class="next-step bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Next</button>
                </div>

                <div class="wizard-step hidden" id="step-3">
                    <h2 class="text-xl font-bold mb-4">Data Privacy</h2>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="data_privacy">Data Privacy Agreement</label>
                        <input type="checkbox" id="data_privacy" name="data_privacy" class="shadow appearance-none border rounded leading-tight focus:outline-none focus:shadow-outline" required>
                        <label for="data_privacy" class="ml-2">I agree to the data privacy terms and conditions.</label>
                    </div>
                    <button type="button" class="prev-step bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Previous</button>
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const steps = document.querySelectorAll('.wizard-step');
            const stepCircles = document.querySelectorAll('.step-circle');
            let currentStep = 0;

            function showStep(index) {
                steps.forEach((step, i) => {
                    step.classList.toggle('hidden', i !== index);
                });
                stepCircles.forEach((circle, i) => {
                    if (i <= index) {
                        circle.classList.add('bg-blue-500', 'text-white');
                        circle.classList.remove('bg-gray-300', 'text-gray-700');
                    } else {
                        circle.classList.remove('bg-blue-500', 'text-white');
                        circle.classList.add('bg-gray-300', 'text-gray-700');
                    }
                });
            }

            document.querySelectorAll('.next-step').forEach(button => {
                button.addEventListener('click', () => {
                    currentStep = Math.min(steps.length - 1, currentStep + 1);
                    showStep(currentStep);
                });
            });

            document.querySelectorAll('.prev-step').forEach(button => {
                button.addEventListener('click', () => {
                    currentStep = Math.max(0, currentStep - 1);
                    showStep(currentStep);
                });
            });

            document.getElementById('add_team_member').addEventListener('click', () => {
                const teamMembers = document.getElementById('team_members');
                const newMember = document.createElement('div');
                newMember.classList.add('flex', 'mb-2');
                newMember.innerHTML = `
                    <input type="text" name="team_member[][name]" placeholder="Name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-2" required>
                    <select name="team_member[][role]" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="captain">Captain</option>
                        <option value="player">Player</option>
                    </select>
                `;
                teamMembers.appendChild(newMember);
            });

            showStep(currentStep);
        });
    </script>
</body>

</html>
