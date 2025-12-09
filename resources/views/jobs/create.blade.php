<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base leading-7 font-semibold text-gray-900">Create</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Please enter the details below for the job you want to create.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm leading-6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div class="mt-2">
                                <input type="text" name="title" placeholder="Programmer"
                                    class="block w-full rounded-md border border-gray-300 bg-white py-2 px-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-600" />
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm leading-6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div class="mt-2">
                                <input type="text" name="salary" placeholder="$25,000 per year"
                                    class="block w-full rounded-md border border-gray-300 bg-white py-2 px-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-600" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm leading-6 font-semibold text-gray-900">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
</x-layout>
