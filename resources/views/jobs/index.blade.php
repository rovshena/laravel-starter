<x-layout>
    <x-slot:title>Job Listings</x-slot:title>

    <x-slot:heading>Job Listings</x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job->id }}"
               class="block px-4 py-6 border border-gray-200 rounded-lg hover:border-blue-500 transition duration-150 ease-in-out">
                <div class="font-bold text-blue-500 text-sm">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong>{{ $job->title }}:</strong> Pays {{ $job->salary }} USD per year.
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
