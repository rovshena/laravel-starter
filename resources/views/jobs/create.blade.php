<x-layout>
    <x-slot:title>Create Job</x-slot:title>

    <x-slot:heading>Create Job</x-slot:heading>

    <form method="POST" action="{{ route('jobs.store') }}"
          class="border border-gray-200 p-4 rounded-lg shadow-sm bg-white">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                type="text"
                                name="title"
                                id="title"
                                placeholder="Shift Leader"
                                :value="old('title')"
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
                                :value="old('salary')"
                                required
                            />
                            <x-form-error name="salary"/>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>
