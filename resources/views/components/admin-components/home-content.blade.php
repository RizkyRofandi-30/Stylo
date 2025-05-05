{{-- Page content --}}
<main class="flex-1 overflow-y-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Dashboard </h2>
    <!-- Dashboard cards -->
    <div class="grid grid-cols-1 sm:grid-cols-1 xl:grid-cols-3 lg:grid-cols-2 gap-6 p-4">
        <!-- Card 1 -->
        <div class="bg-white rounded-xl shadow-md p-6 transition hover:shadow-lg">
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4 text-center sm:text-left">
                <!-- Icon -->
                <div class="bg-green-100 p-4 rounded-md border border-green-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-green-600">
                        <path d="M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17" />
                        <path
                            d="m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9" />
                        <path d="m2 16 6 6" />
                        <circle cx="16" cy="9" r="2.9" />
                        <circle cx="6" cy="5" r="3" />
                    </svg>
                </div>
                <!-- Text -->
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Total Revenue</h2>
                    <p class="text-3xl font-bold text-gray-900">$24,780</p>
                    <p class="text-sm text-gray-500 mt-1">Compared to $22,032 last month</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-xl shadow-md p-6 transition hover:shadow-lg">
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4 text-center sm:text-left">
                <!-- Icon -->
                <div class="bg-amber-100 p-4 rounded-md border border-amber-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="text-amber-600">
                        <path
                            d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z" />
                        <path d="m3.3 7 8.7 5 8.7-5" />
                        <path d="M12 22V12" />
                    </svg>
                </div>
                <!-- Text -->
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Total Item</h2>
                    <p class="text-3xl font-bold text-gray-900">24.780</p>
                    <p class="text-sm text-gray-500 mt-1">Compared to $22,032 last month</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-xl shadow-md p-6 transition hover:shadow-lg">
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4 text-center sm:text-left">
                <!-- Icon -->
                <div class="bg-indigo-100 p-4 rounded-md border border-indigo-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="text-indigo-600">
                        <path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z" />
                        <path d="M14 8H8" />
                        <path d="M16 12H8" />
                        <path d="M13 16H8" />
                    </svg>
                </div>
                <!-- Text -->
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Order Total</h2>
                    <p class="text-3xl font-bold text-gray-900">45</p>
                    <p class="text-sm text-gray-500 mt-1">Compared to $22,032 last month</p>
                </div>
            </div>
        </div>

        <!-- Repeatable Cards -->
        @for ($i = 1; $i <= 6; $i++)
            <div class="bg-white p-6 rounded-xl shadow-md transition hover:shadow-lg">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Content Card {{ $i }}</h3>
                <p class="text-gray-600 text-sm">
                    This is some sample content for your dashboard. This card represents data visualization or
                    information that would be useful for your users.
                </p>
            </div>
        @endfor
    </div>
    <div
        class="relative flex flex-col  text-gray-700 bg-white shadow-md rounded-lg bg-clip-border p-6 mx-4  overflow-scroll">
        <div class="flex flex-col md:flex-row justify-between items-start gap-4 mb-5 mx-3">
            <div>
                <h3 class="text-lg font-semibold text-slate-800">Team Members and Roles</h3>
                <p class="text-slate-500">Overview of the key persons involved in the next project and their
                    geographical distribution.</p>
            </div>

            <div>
                <button class="px-4 py-2 text-sm font-semibold text-white bg-blue-600 rounded hover:bg-blue-700">
                    See All
                </button>
            </div>
        </div>
        <div class="w-full">
            <table class="w-full text-left table-auto min-w-max">
                <thead>
                    <tr>
                        <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">Product</p>
                        </th>
                        <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">Role</p>
                        </th>
                        <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">Email</p>
                        </th>
                        <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">Location</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Team Members Rows (unchanged) -->
                    <!-- ... same rows as before ... -->
                    <tr class="hover:bg-slate-50">
                        <td class="p-4 border-b border-slate-200">
                            <img width="33" height="33" src="{{ asset('assets/images/accessories-04.jpeg') }}"
                                alt="user" style="border-radius: 50%" />
                            <p class="block text-sm text-slate-800">John Michael</p>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">Manager</p>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">john.michael@example.com</p>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">New York, USA</p>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">Alexa Liras</p>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">Developer</p>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">alexa.liras@example.com</p>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">San Francisco, USA</p>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">Laurent Perrier</p>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">Executive</p>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">laurent.perrier@example.com</p>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">Paris, France</p>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">Michael Levi</p>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">Developer</p>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">michael.levi@example.com</p>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">London, UK</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</main>
