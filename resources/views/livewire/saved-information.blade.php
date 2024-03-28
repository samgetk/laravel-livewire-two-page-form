<div>
    <h1 class="text-2xl font-bold mb4">Saved Information</h1>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <h2 class="text-lg font-semibold mb-2"> Personal Details</h2>

            <p><strong class="font-semibold"> First Name: </strong> {{ $personalInformation->first_name }} </p>
            <p><strong class="font-semibold"> Last Name: </strong> {{ $personalInformation->last_name }} </p>
            <p><strong class="font-semibold"> Address: </strong> {{ $personalInformation->address }} </p>
            <p><strong class="font-semibold"> City: </strong> {{ $personalInformation->city }} </p>
            <p><strong class="font-semibold"> Country: </strong> {{ $personalInformation->country }} </p>
            <p><strong class="font-semibold"> Date of
                    Birth: </strong> {{ $personalInformation->date_of_birth->format('Y-m-d') }} </p>
            <p><strong class="font-semibold"> Country: </strong> {{ $personalInformation->country }} </p>
        </div>

        <div>
            <h2 class="text-lg font-semibold mb-2"> Marriage Details</h2>

            <p><strong class="font-semibold">Married: </strong> {{ $personalInformation->married? 'Yes': 'No' }} </p>
            <p><strong class="font-semibold"> Date of
                    Marriage: </strong> {{ optional($personalInformation->date_of_marriage)->format('Y-m-d') ?? ''}}
            </p>
            <p><strong class="font-semibold"> Country of
                    Marriage: </strong> {{ $personalInformation->country_of_marriage }} </p>
            <p><strong class="font-semibold"> Widowed: </strong> {{ $personalInformation->widowed ? 'Yes' : 'No' }} </p>
            <p><strong class="font-semibold"> Previously
                    Married: </strong> {{ $personalInformation->previously_married ? 'Yes' : 'No' }} </p>
        </div>

    </div>
    <a href="{{ url('/') }}"> Back to Home </a>

    <div>

    </div>

