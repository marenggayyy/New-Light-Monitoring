<x-app-layout>

    <div class="py-6">
        <div class="max-w-4xl mx-auto px-4">

            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">
                    Add Member
                </h1>

                <a href="{{ route('members.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">
                    Back
                </a>
            </div>

            <div class="bg-white rounded-lg shadow p-6">

                <form action="{{ route('members.store') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <div>
                            <label class="block mb-1 font-medium">
                                First Name
                            </label>

                            <input type="text" name="first_name" value="{{ old('first_name') }}"
                                class="w-full border rounded px-3 py-2" required>

                            @error('first_name')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div>
                            <label class="block mb-1 font-medium">
                                Last Name
                            </label>

                            <input type="text" name="last_name" value="{{ old('last_name') }}"
                                class="w-full border rounded px-3 py-2" required>

                            @error('last_name')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label class="block mb-1 font-medium">
                                Position
                            </label>

                            <select name="position_id" class="w-full border rounded px-3 py-2">
                                <option value="">Select Position</option>

                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}"
                                        {{ old('position_id') == $position->id ? 'selected' : '' }}>
                                        {{ $position->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('position_id')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                    </div>

                    <div class="mt-6">
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded">
                            Save Member
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>
