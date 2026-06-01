<x-app-layout>

    <div class="py-6">
        <div class="max-w-4xl mx-auto px-4">

            <div class="flex justify-between items-center mb-6">

                <h1 class="text-2xl font-bold">
                    Member Profile
                </h1>

                <a href="{{ route('members.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">
                    Back
                </a>

            </div>

            <div class="bg-white rounded-lg shadow p-6">

                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <strong>First Name:</strong><br>
                        {{ $member->first_name }}
                    </div>

                    <div>
                        <strong>Last Name:</strong><br>
                        {{ $member->last_name }}
                    </div>

                    <div>
                        <strong>Position:</strong><br>

                        {{ $member->position?->name ?? 'Not Assigned' }}
                    </div>

                    <div>
                        <strong>Status:</strong><br>
                        {{ ucfirst($member->status) }}
                    </div>

                    <div>
                        <strong>Spiritual Status:</strong><br>
                        {{ ucfirst(str_replace('_', ' ', $member->spiritual_status)) }}
                    </div>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>
