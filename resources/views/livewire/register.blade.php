<div>
    <form wire:submit.prevent="store" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
        <div class="sm:col-span-2">
            <label for="subject" class="block text-sm font-medium text-warm-gray-900">Nama Lengkap</label>
            <div class="mt-1">
                <input type="text" wire:model.lazy="nama"
                    class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border-warm-gray-300 rounded-md">
                    @error('nama')
                        <strong class="text-red-500">{{ $message }}</strong>
                    @enderror
            </div>
        </div>
        <div>
            <label for="jenis_kelamin" class="block text-sm font-medium text-warm-gray-900">Jenis Kelamin</label>
            <div class="mt-1">
                <select wire:model.lazy="jenis_kelamin"
                    class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border-warm-gray-300 rounded-md">
                    <option value=""></option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                <strong class="text-red-500">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div>
            <label for="usia" class="block text-sm font-medium text-warm-gray-900">Usia</label>
            <div class="mt-1">
                <input type="number" wire:model.lazy="usia" class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border-warm-gray-300 rounded-md">
                @error('usia')
                <strong class="text-red-500">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div>
            <label for="kelas" class="block text-sm font-medium text-warm-gray-900">Kelas</label>
            <div class="mt-1">
                <input type="number" wire:model.lazy="kelas"
                    class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border-warm-gray-300 rounded-md">
                @error('kelas')
                <strong class="text-red-500">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div>
            <label for="asal_sekolah" class="block text-sm font-medium text-warm-gray-900">Asal Sekolah</label>
            <div class="mt-1">
                <input type="text" wire:model.lazy="asal_sekolah"
                    class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border-warm-gray-300 rounded-md">
                @error('asal_sekolah')
                <strong class="text-red-500">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="sm:col-span-2">
            <div class="flex justify-between">
                <label for="ukuran_baju" class="block text-sm font-medium text-warm-gray-900">Ukuran Baju</label>
                <button type="button" id="ukuran-baju" class="text-sm text-blue-500 hover:underline">Lihat kuran baju</button>
            </div>
            <div class="mt-1">
                <input type="text" wire:model.lazy="ukuran_baju"
                    class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border-warm-gray-300 rounded-md">
                    @error('ukuran_baju')
                    <strong class="text-red-500">{{ $message }}</strong>
                    @enderror
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="no_wa_ayah" class="block text-sm font-medium text-warm-gray-900">No WA Ayah</label>
            <div class="mt-1">
                <input type="text" wire:model.lazy="no_wa_ayah"
                    class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border-warm-gray-300 rounded-md">
                    @error('no_wa_ayah')
                    <strong class="text-red-500">{{ $message }}</strong>
                    @enderror
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="no_wa_ibu" class="block text-sm font-medium text-warm-gray-900">No WA Ibu</label>
            <div class="mt-1">
                <input type="text" wire:model.lazy="no_wa_ibu"
                    class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border-warm-gray-300 rounded-md">
                    @error('no_wa_ibu')
                    <strong class="text-red-500">{{ $message }}</strong>
                    @enderror
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="alamat" class="block text-sm font-medium text-warm-gray-900">Alamat Tempat Tinggal</label>
            <div class="mt-1">
                <textarea wire:model.lazy="alamat" rows="4"
                    class="py-3 px-4 block w-full shadow-sm text-warm-gray-900 focus:ring-teal-500 focus:border-teal-500 border border-warm-gray-300 rounded-md"></textarea>
                    @error('alamat')
                    <strong class="text-red-500">{{ $message }}</strong>
                    @enderror
            </div>
        </div>
        <div class="sm:col-span-2 sm:flex sm:justify-end">
            <button type="submit"
                class="mt-2 w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 sm:w-auto">Daftarkan</button>
        </div>
    </form>
</div>
