<x-layout>
    <x-slot:title>Job</x-slot:title>

    <x-slot:heading>Job</x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>

    <p class="mt-6">
        <x-button href="{{ route('jobs.edit', $job) }}">Edit Job</x-button>
    </p>
</x-layout>
