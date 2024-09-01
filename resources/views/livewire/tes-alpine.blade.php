<div>
    <div x-data="{open: false}"
        class="container mx-auto w-1/4 text-center text-lg mt-10 bg-lime-200 p-10 rounded-xl shadow">

        <button @click="open = !open" x-text="open ? 'Tutup' : 'Buka'" x-bind-class="open ? 'bg-cyan-600' : 'bg-slate-600'"
            class="py-2 px-5 text-white bg-blue-400 rounded-md">Buka</button>
        <div x-show="open" x-transition.origin.bottom.duration.1000ms
            class="w-3/4 mx-auto  mt-4 p-5 bg-blue-400 rounded text-white">
            Lorem ipsum dolor sit amet consectetur adipisicing elit...
        </div>

    </div>

    <div x-data class="container mx-auto w-1/4 text-center text-lg mt-10 bg-pink-200 p-10 rounded-xl shadow">



        <div x-data="{ warna: 'bg-blue-400' }">
            <button
                @click="warna = (warna === 'bg-blue-400' ? 'bg-yellow-500' : 'bg-blue-400')"
                :class="warna"
                class="py-2 px-5 text-white rounded-md">
                Ubah Warna
            </button>
        </div>

    </div>


    <div x-data class="container mx-auto w-1/4 text-center text-lg mt-10 bg-blue-200 p-5 rounded-xl shadow">
        <p>Balon text pop up.</p>

        <div class="relative flex items-center" x-data="{ tooltip: false }">
            <!-- Icon -->
            <i @mouseover="tooltip = true" @mouseout="tooltip = false"
                class="fas fa-info-circle cursor-pointer text-gray-500  fa-2x"></i>

            <!-- Tooltip -->
            <div x-show="tooltip" class="absolute left-0 bottom-10 ml-4 p-2 bg-gray-700 text-white text-xs rounded shadow-lg">
                Ini adalah balon teks
            </div>
        </div>


    </div>
</div>