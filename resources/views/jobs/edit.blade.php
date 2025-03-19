<x-layout>
    <x-slot:title>Edit Job: {{ $job->title }}</x-slot:title>

    <x-slot:heading>Edit Job: {{ $job->title }}</x-slot:heading>

    <form method="POST" action="{{ route('jobs.update', $job) }}"
          class="border border-gray-200 p-4 rounded-lg shadow-sm bg-white">
        @csrf
        @method('PUT')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                type="text"
                                name="title"
                                id="title"
                                placeholder="Shift Leader"
                                :value="old('title', $job->title)"
                                required
                            />
                            <x-form-error name="title"/>
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                type="text"
                                name="salary"
                                id="salary"
                                placeholder="50000 USD per year"
                                :value="old('salary', $job->salary)"
                                required
                            />
                            <x-form-error name="salary"/>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
            </div>
            <div class="flex items-center gap-x-6">
                <a href="{{ route('jobs.show', $job) }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <div>
                    <x-form-button>Update</x-form-button>
                </div>
            </div>
        </div>
    </form>
    <form id="delete-form" action="{{ route('jobs.destroy', $job) }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
