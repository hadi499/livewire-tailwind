<div class="overflow-auto md:w-[800px] p-8 mx-auto mt-6">

    <div class="">
        <div class="my-6">
            <a href="{{route('posts.create')}}" class="bg-blue-800 text-white hover:bg-blue-700 px-2 py-2 rounded-md">Create Post</a>

        </div>
        <table class=" bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="text-left py-3 px-4 font-semibold text-sm text-gray-600">Name</th>
                    <th class="text-left py-3 px-4 font-semibold text-sm text-gray-600">Email</th>
                    <th class="text-left py-3 px-4 font-semibold text-sm text-gray-600">Phone</th>
                    <th class="text-left py-3 px-4 font-semibold text-sm text-gray-600">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-50">
                    <td class="py-3 px-4 border-b">John Doe</td>
                    <td class="py-3 px-4 border-b">john.doe@example.com</td>
                    <td class="py-3 px-4 border-b">123-456-7890</td>
                    <td class="py-3 px-4 border-b space-y-1">
                        <button class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Edit</button>
                        <button class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Show</button>
                        <button class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">Delete</button>
                    </td>
                </tr>

                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

</div>