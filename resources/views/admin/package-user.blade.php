<x-layout>
    <x-admin-components.sidebar>
        <div
            class="relative flex flex-col  text-gray-700 bg-white shadow-md rounded-lg bg-clip-border p-6 mx-4  overflow-scroll mt-4">
            <div class="flex flex-col md:flex-row justify-between items-start gap-4 mb-5 mx-3">
                <div>
                    <h3 class="text-lg font-semibold text-slate-800">Paket User</h3>
                </div>
            </div>
            <div class="w-full">
                <table class="w-full text-left table-auto min-w-max ">
                    <thead class="text-center">
                        <tr>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-normal leading-none text-slate-500">No</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-normal leading-none text-slate-500">Nama</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-normal leading-none text-slate-500">Product</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-normal leading-none text-slate-500">Jenis Pesanan</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-normal leading-none text-slate-500">Kategori</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-normal leading-none text-slate-500">Alamat</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-normal leading-none text-slate-500">Status</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-normal leading-none text-slate-500">Action</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Team Members Rows (unchanged) -->
                        <!-- ... same rows as before ... -->
                        <tr class="hover:bg-slate-50">
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">1</p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">Nama User</p>
                            </td>
                            <td class="p-2 border-b border-slate-200">
                                <div class="flex items-center space-x-2">
                                    <img width="33" height="33"
                                        src="{{ asset('assets/images/accessories-04.jpeg') }}" alt="user"
                                        class="w-[45px] h-[45px] object-cover rounded-full" />
                                    <div class="text-sm leading-tight">
                                        <p class="m-0 font-bold">Salam rek lor </p>
                                        <p class="m-0">Price</p>
                                    </div>
                                </div>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">Manager</p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">Accessories</p>
                            </td>
                            <td class="p-4 border-b border-slate-200 break-words whitespace-normal">
                                <p
                                    class="block text-sm text-slate-800 overflow-hidden text-ellipsis whitespace-nowrap max-w-[200px]">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit. Minima, nihil. Blanditiis magni nisi, sapiente, consequuntur alias,
                                    dolorum
                                    laborum accusantium eos voluptate perspiciatis explicabo. Placeat reprehenderit
                                    laudantium dicta, vero sunt perferendis.</p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">Paket Sampai</p>
                            </td>
                            <td class="p-4 border-b border-slate-200 text-center">
                                <div class="flex justify-center">
                                    <button data-modal-target="select-modal" data-modal-toggle="select-modal"
                                        class="block text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 text-center mx-0.5"
                                        type="button">
                                        Edit
                                    </button>
                                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                        class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center mx-0.5"
                                        type="button">
                                        Delete
                                    </button>
                                    <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mx-0.5"
                                        type="button">
                                        Detail
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">2</p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">Nama User</p>
                            </td>
                            <td class="p-2 border-b border-slate-200">
                                <div class="flex items-center space-x-2">
                                    <img width="33" height="33" src="{{ asset('assets/images/kid-02.jpg') }}"
                                        alt="user" class="w-[45px] h-[45px] object-cover rounded-full" />
                                    <div class="text-sm leading-tight">
                                        <p class="m-0 font-bold">Nama Produk</p>
                                        <p class="m-0">Price</p>
                                    </div>
                                </div>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">Developer</p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">Wanita</p>
                            </td>
                            <td class="p-4 border-b border-slate-200 break-words whitespace-normal">
                                <p
                                    class="block text-sm text-slate-800 overflow-hidden text-ellipsis whitespace-nowrap max-w-[200px]">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit. Minima, nihil. Blanditiis magni nisi, sapiente, consequuntur alias,
                                    dolorum
                                    laborum accusantium eos voluptate perspiciatis explicabo. Placeat reprehenderit
                                    laudantium dicta, vero sunt perferendis.</p>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">3</p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">Nama User</p>
                            </td>
                            <td class="p-2 border-b border-slate-200">
                                <div class="flex items-center space-x-2">
                                    <img width="33" height="33" src="{{ asset('assets/images/kid-01.jpg') }}"
                                        alt="user" class="w-[45px] h-[45px] object-cover rounded-full" />
                                    <div class="text-sm leading-tight">
                                        <p class="m-0 font-bold">Nama Produk</p>
                                        <p class="m-0">Price: 12</p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">Executive</p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">Anak-anak</p>
                            </td>
                            <td class="p-4 border-b border-slate-200 break-words whitespace-normal">
                                <p
                                    class="block text-sm text-slate-800 overflow-hidden text-ellipsis whitespace-nowrap max-w-[200px]">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit. Minima, nihil. Blanditiis magni nisi, sapiente, consequuntur alias,
                                    dolorum
                                    laborum accusantium eos voluptate perspiciatis explicabo. Placeat reprehenderit
                                    laudantium dicta, vero sunt perferendis.</p>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">4</p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">Nama User</p>
                            </td>
                            <td class="p-2 border-b border-slate-200">
                                <div class="flex items-center space-x-2">
                                    <img width="33" height="33" src="{{ asset('assets/images/kid-03.jpg') }}"
                                        alt="user" class="w-[45px] h-[45px] object-cover rounded-full" />
                                    <div class="text-sm leading-tight">
                                        <p class="m-0 font-bold">Nama Produk</p>
                                        <p class="m-0">Price</p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">Developer</p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">Pria</p>
                            </td>
                            <td class="p-4 border-b border-slate-200 break-words whitespace-normal">
                                <p
                                    class="block text-sm text-slate-800 overflow-hidden text-ellipsis whitespace-nowrap max-w-[200px]">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit. Minima, nihil. Blanditiis magni nisi, sapiente, consequuntur alias,
                                    dolorum
                                    laborum accusantium eos voluptate perspiciatis explicabo. Placeat reprehenderit
                                    laudantium dicta, vero sunt perferendis.</p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">Terkirim</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Start Edit Modal --}}
            <!-- Main modal -->
            <div id="select-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-sm">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Ubah Status
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center"
                                data-modal-toggle="select-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-2 md:p-3">
                            <ul class="space-y-4 mb-4">
                                <li>
                                    <input type="radio" id="job-1" name="job" value="job-1"
                                        class="hidden peer" required />
                                    <label for="job-1"
                                        class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-500 rounded-lg cursor-pointer  peer-checked:border-blue-600  peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">Sedang Diproses</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="job-2" name="job" value="job-2"
                                        class="hidden peer">
                                    <label for="job-2"
                                        class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-500 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">Diperjalanan</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="job-3" name="job" value="job-3"
                                        class="hidden peer">
                                    <label for="job-3"
                                        class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-500 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">Paket Sampai</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                            <button
                                class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Edit Modal --}}

            {{-- Start Delete Modal --}}
            <div id="popup-modal" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow-sm">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="popup-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah Anda ingin menghapus history pesanan ini ?</h3>
                            <button data-modal-hide="popup-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-gray-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">
                                Tidak
                            </button>
                            <button data-modal-hide="popup-modal" type="button"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Hapus
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- End Delete Modal --}}
            <nav aria-label="Page navigation example" class="mt-4">
                <ul class="flex items-center -space-x-px h-10 text-base text-center justify-center ">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
                            <span class="sr-only">Previous</span>
                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-slate-600 border border-slate-300 bg-slate-200 hover:bg-slate-100 hover:text-slate-700">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 ">
                            <span class="sr-only">Next</span>
                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </x-admin-components.sidebar>
</x-layout>
