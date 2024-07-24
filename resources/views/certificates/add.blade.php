<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Certificates') }}
        </h2>
    </x-slot>
    <div class="py-5 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
                <form class="max-w-lg mx-auto" method="POST" action="{{ route('certificates.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" id="name" name="name" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('name')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="certificate-number"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Certificate Number</label>
                        <input type="text" id="certificate-number" required name="certificate_number"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('certificate_number')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="issuer-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Issuer Name</label>
                        <input type="text" name="issuer" required id="issuer-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('issuer')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="large_size">File</label>
                        <input class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="large_size" type="file" name="file">
                        @error('file')
                        <div>{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="mb-5">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
