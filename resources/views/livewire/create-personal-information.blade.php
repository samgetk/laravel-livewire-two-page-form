<div class="max-w-2xl mx-auto">
    <div class="bg-white shadow-lg rounded-lg px-4 py-6 pt-6">
        @if ($errors->any())
            <div class="text-red-500 pt-2">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        @if($currentPage === 1)
            <form wire:submit.prevent="submitPage1" class="grid grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <label for="first_name" class="block">First Name:</label>
                        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" type="text" id="first_name"
                               wire:model.defer="firstName"
                               class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block">Address:</label>
                        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" type="text" id="address"
                               wire:model.defer="address"
                               class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="country" class="block">Country:</label>
                        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" type="text" id="country"
                               wire:model.defer="country"
                               class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <label for="last_name" class="block">Last Name:</label>
                        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" type="text" id="last_name"
                               wire:model.defer="lastName"
                               class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="city" class="block">City:</label>
                        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" type="text" id="city"
                               wire:model.defer="city"
                               class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label class="block">Date of Birth:</label>
                        <div class="flex">
                            <select wire:model.defer="dobMonth"
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mr-2">
                                <option value="">Month</option>
                                @foreach ($months as $month)
                                    <option value="{{ $month }}">{{ $month }}</option>
                                @endforeach
                            </select>
                            <select wire:model.defer="dobDay"
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mr-2">
                                <option value="">Day</option>
                                @foreach ($days as $day)
                                    <option value="{{ $day }}">{{ $day }}</option>
                                @endforeach
                            </select>
                            <select wire:model.defer="dobYear"
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mr-2">
                                <option value="">Year</option>
                                @foreach ($years as $year)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between col-span-2">
                    <button type="button" wire:click="nextPage"
                            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Next
                    </button>
                </div>
            </form>

        @elseif($currentPage === 2)
            <form wire:submit.prevent="submitPage2">
                <div class="mb-4">
                    <label class="block">Are you married?</label>
                    <div class="flex items-center">
                        <button type="button" wire:click="toggleMarried('yes')"
                                class="{{ $married === 'yes' ? 'bg-indigo-500 text-white' : 'bg-gray-300 text-gray-700' }} font-bold py-2 px-4 rounded-l">
                            Yes
                        </button>
                        <button type="button" wire:click="toggleMarried('no')"
                                class="{{ $married === 'no' ? 'bg-indigo-500 text-white' : 'bg-gray-300 text-gray-700' }} font-bold py-2 px-4 rounded-r ml-1">
                            No
                        </button>
                    </div>
                </div>
                @if($married === 'yes')
                    <div class="mb-4">
                        <label class="block">Date of Marriage:</label>
                        <div class="flex">
                            <select wire:model.defer="marriageMonth"
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mr-2">
                                <option value="">Month</option>
                                @foreach ($months as $month)
                                    <option value="{{ $month }}">{{ $month }}</option>
                                @endforeach
                            </select>
                            <select wire:model.defer="marriageDay"
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mr-2">
                                <option value="">Day</option>
                                @foreach ($days as $day)
                                    <option value="{{ $day }}">{{ $day }}</option>
                                @endforeach
                            </select>
                            <select wire:model.defer="marriageYear"
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mr-2">
                                <option value="">Year</option>
                                @foreach ($years as $year)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="country_of_marriage" class="block">Country of Marriage:</label>
                        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" type="text"
                               id="country_of_marriage" wire:model.defer="countryOfMarriage"
                               class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    </div>
                @endif
                @if($married === 'no')
                    <div class="mb-4">
                        <label class="block">Are you widowed?</label>
                        <div class="flex items-center">
                            <button type="button" wire:click="toggleWidowed('yes')"
                                    class="{{ $widowed === 'yes' ? 'bg-indigo-500 text-white' : 'bg-gray-300 text-gray-700' }} font-bold py-2 px-4 rounded-l">
                                Yes
                            </button>
                            <button type="button" wire:click="toggleWidowed('no')"
                                    class="{{ $widowed === 'no' ? 'bg-indigo-500 text-white' : 'bg-gray-300 text-gray-700' }} font-bold py-2 px-4 rounded-r ml-1">
                                No
                            </button>
                        </div>
                    </div>
                @endif
                @if($widowed === 'no')
                    <div class="mb-4">
                        <label class="block">Have you ever been married in the past?</label>
                        <div class="flex items-center">
                            <button type="button" wire:click="togglePreviouslyMarried('yes')"
                                    class="{{ $previouslyMarried === 'yes' ? 'bg-indigo-500 text-white' : 'bg-gray-300 text-gray-700' }} font-bold py-2 px-4 rounded-l">
                                Yes
                            </button>
                            <button type="button" wire:click="togglePreviouslyMarried('no')"
                                    class="{{ $previouslyMarried === 'no' ? 'bg-indigo-500 text-white' : 'bg-gray-300 text-gray-700' }} font-bold py-2 px-4 rounded-r ml-1">
                                No
                            </button>
                        </div>
                    </div>
                @endif
                <div class="flex justify-between">
                    <button type="button" wire:click="prevPage"
                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">Previous
                    </button>
                    <button type="submit"
                            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Submit
                    </button>
                </div>
            </form>

        @endif
    </div>
</div>


