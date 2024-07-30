<x-app-layout>
    <section class="flex flex-col w-full">
        <div class="m-auto bg-green-700 text-white w-full lg:w-1/2 p-5 rounded-xl">
            <h1 class="text-center font-bold">Add Team</h1>
            <form id="team-form" class="p-5">
                <div class="w-full">
                    <label for="teamname" class="block text-sm font-medium leading-6">Team Name</label>
                    <div class="mt-2">
                        <div
                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-slate-600">
                            <input type="text" name="teamname" id="teamname" autocomplete="teamname"
                                class="block flex-1 border-1 rounded-md bg-transparent py-1.5 pl-1 text-white w-full placeholder:text-slate-300 focus:ring-0 sm:text-sm sm:leading-6"
                                placeholder="Enter Team Name">
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <label for="teamacro" class="block text-sm font-medium leading-6">Team Name Acronym (Max of 5
                        letters ex. FITEC)</label>
                    <div class="mt-2">
                        <div
                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-slate-600">
                            <input type="text" name="teamacro" id="teamacro" autocomplete="teamacro"
                                class="block flex-1 border-1 rounded-md bg-transparent py-1.5 pl-1 text-white w-full placeholder:text-slate-300 focus:ring-0 sm:text-sm sm:leading-6"
                                placeholder="Enter Team Name">
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <label for="sportcategory" class="block text-sm font-medium leading-6">Sport Category</label>
                    <div class="mt-2">
                        <div
                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-slate-600">
                            <select name="sportcategory" id="sportcategory"
                                class="block flex-1 border-1 rounded-md bg-transparent py-1.5 pl-1 text-white w-full placeholder:text-slate-300 focus:ring-0 sm:text-sm sm:leading-6">
                                <option class=" text-black" value="" disabled selected>Select a Sport Category
                                </option>
                                <option class=" text-black" value="basketball">Basketball</option>
                                <option class=" text-black" value="soccer">Soccer</option>
                                <option class=" text-black" value="baseball">Baseball</option>
                                <option class=" text-black" value="tennis">Tennis</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="m-auto mt-4 border w-full lg:w-1/2 p-5 rounded-xl">
            <h1 class="text-2xl font-bold mb-4">Team Members</h1>
            <div id="team-members-list">
                <!-- Team members will be added here -->
                <div id="hidethis">There are no players added yet.</div>
            </div>
            <div class="w-full flex justify-center">
                <button id="add-player-btn-modal"
                    class="hover:bg-green-700 mt-2 hover:text-white transition duration-200 px-4 py-2 rounded-full border"
                    type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span class="bg-green-700 text-white rounded-full px-1">+</span> Add Player
                </button>
            </div>
        </div>
        <div class="w-full flex justify-center mt-4">
            <button id="submit"
                class="bg-green-700 font-bold text-white transition duration-200 px-4 py-2 rounded-full border">
                Proceed
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Player</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="player-form">
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="first_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" name="middle_name">
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="last_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="birthday" class="form-label">Birthday</label>
                                <input type="date" class="form-control" id="birthday" name="birthday">
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" id="save-player-btn" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Initialize player array
        var player = [];
        var counter = 0;
        document.getElementById('save-player-btn').addEventListener('click', function() {
            if(counter==0){
                document.getElementById('hidethis').style.display = 'none';
                counter++;
            }
            // Get player details from the form
            var firstName = document.getElementById('firstName').value;
            var middleName = document.getElementById('middleName').value;
            var lastName = document.getElementById('lastName').value;
            var birthday = document.getElementById('birthday').value;
            var gender = document.getElementById('gender').value;

            // Create a player object
            var newPlayer = [firstName, middleName, lastName, birthday, gender];

            // Add the new player to the player array
            player.push(newPlayer);

            // Add the new player to the team members list
            var playerList = document.getElementById('team-members-list');
            var playerItem = document.createElement('div');
            playerItem.className = 'p-4 mb-4 border rounded flex';
            playerItem.innerHTML = `
                <div class="w-10/12">
                    <p class="text-green-700"><strong>${firstName} ${lastName}</strong></p>
                    <p>${middleName}</p>
                    <p>${birthday}</p>
                    <p>${gender}</p>
                </div>
                <div class="w-2/12">
                    <button class="bg-green-700 text-white px-4 py-2 rounded-full w-full">Edit</button>
                </div>
            `;
            playerList.appendChild(playerItem);

            // Close the modal
            var modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
            modal.hide();

            // Clear the form
            document.getElementById('player-form').reset();
        });

        document.getElementById('submit').addEventListener('click', function() {
            // Get team form data
            var teamForm = document.getElementById('team-form');
            var formData = new FormData(teamForm);
            var teamData = {
                teamName: formData.get('teamname'),
                teamAcronym: formData.get('teamacro'),
                sportCategory: formData.get('sportcategory'),
                players: player
            };

            // Submit teamData (e.g., send it to the server)
            console.log('Submitting team data:', teamData);

            // Perform AJAX or fetch request to send data to the server
            // Example:
            /*
            fetch('/save-team', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(teamData)
            }).then(response => response.json())
              .then(data => console.log(data))
              .catch(error => console.error('Error:', error));
            */

            /*
            //sample controller
            {
        // Validate the incoming request
        $request->validate([
            'teamName' => 'required|string|max:255',
            'teamAcronym' => 'required|string|max:5',
            'sportCategory' => 'required|string',
            'players' => 'array',
            'players.*.0' => 'required|string|max:255', // first_name
            'players.*.1' => 'nullable|string|max:255', // middle_name
            'players.*.2' => 'required|string|max:255', // last_name
            'players.*.3' => 'nullable|date', // birthday
            'players.*.4' => 'nullable|string|in:Male,Female' // gender
        ]);

        // Create or find the team
        $team = Team::updateOrCreate(
            ['name' => $request->input('teamName')],
            [
                'acronym' => $request->input('teamAcronym'),
                'sport_category' => $request->input('sportCategory')
            ]
        );

        // Save players
        if ($request->has('players')) {
            foreach ($request->input('players') as $playerData) {
                Player::updateOrCreate(
                    [
                        'team_id' => $team->id,
                        'first_name' => $playerData[0],
                        'last_name' => $playerData[2]
                    ],
                    [
                        'middle_name' => $playerData[1],
                        'birthday' => $playerData[3],
                        'gender' => $playerData[4]
                    ]
                );
            }
        }

        // Return a response
        return response()->json(['message' => 'Team and players saved successfully!']);
    }
            
            */
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</x-app-layout>
