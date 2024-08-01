<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Certificates') }}
        </h2>
    </x-slot>
    <div class="flex justify-end p-2 mr-24">
        <a href="{{ Route('certificates.create') }}" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">+ Add</a>
    </div>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Certificate User name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Issuer
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            fill="currentColor" >

                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Certificate Number
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                             fill="currentColor" viewBox="0 0 24 24">

                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Created At
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" fill="currentColor" >

                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="GET">
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td>
                                <div>
                                    <input type="text" name="name" id="small-input" placeholder="search here.." class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="issuer" id="small-input" placeholder="search here.."  class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="number" id="small-input" placeholder="search here.." class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" id="small-input" placeholder="search here.." class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </td>
                            <td>
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                            </td>
                        </tr>
                        </form>
                        @foreach($certificates as $certificate)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $certificate->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $certificate->issuer }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $certificate->number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $certificate->created_at }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ url('/storage/'.$certificate->file) }}" target="_blank"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Certificate</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                {{ $certificates->links() }}
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
