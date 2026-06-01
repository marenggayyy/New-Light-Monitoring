<x-app-layout>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4">

            @if (session('success'))
                <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex justify-between items-center mb-6">

                <h1 class="text-2xl font-bold">
                    Members
                </h1>

                <a href="{{ route('members.create') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                    Add Member
                </a>

            </div>

            <div class="bg-white rounded-lg shadow overflow-hidden">

                <table class="min-w-full">

                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-3 text-left">Name</th>
                            <th class="px-4 py-3 text-left">Status</th>
                            <th class="px-4 py-3 text-left">Spiritual Status</th>
                            <th class="px-4 py-3 text-left">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($members as $member)
                            <tr class="border-t">

                                <td class="px-4 py-3">
                                    {{ $member->first_name }}
                                    {{ $member->last_name }}
                                </td>

                                <td class="px-4 py-3">
                                    {{ ucfirst($member->status) }}
                                </td>

                                <td class="px-4 py-3">
                                    {{ ucfirst(str_replace('_', ' ', $member->spiritual_status)) }}
                                </td>

                                <td class="px-4 py-3">
                                    <a href="{{ route('members.show', $member) }}"
                                        class="bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1 rounded text-sm">
                                        View
                                    </a>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-4 py-6 text-center text-gray-500">
                                    No members found.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</x-app-layout>
