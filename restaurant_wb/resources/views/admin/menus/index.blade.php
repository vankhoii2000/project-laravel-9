<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.menus.create') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    New menu
                </a>

            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                    <thead class="text-xs text-black uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Food name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="relative py-3 px-6">

                            </th>
                            <th scope="col" class="relative py-3 px-6">

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr class="bg-white border-b light:bg-gray-900 light:border-gray-700 text-black">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap dark:text-black">
                                    {{ $menu->name }}
                                </th>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('images/menus/' . $menu->image) }}" alt="img"
                                        class="w-21 h-18 rounded">
                                </td>
                                <td class="px-6 py-4">
                                    {{ $menu->price }} vnd
                                </td>
                                <td class="px-6 py-4">
                                    {{ $menu->description }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('admin.menus.edit', $menu->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        <button>Edit</button>
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('admin.menus.destroy', $menu->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
