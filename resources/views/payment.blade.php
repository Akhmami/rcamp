<x-app-layout>
    <div class="min-h-full">
        <main class="pb-8">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-5xl lg:px-8">
                <section aria-labelledby="profile-overview-title">
                    <div class="rounded-lg bg-white overflow-hidden shadow">
                        <h2 class="sr-only" id="profile-overview-title">Pembayaran Overview</h2>
                        <div class="bg-white p-6">
                            <div class="flex flex-col">
                                @if (!empty($participant))
                                <div class="text-center">
                                    <h2 class="text-lg font-semibold">Selesaikan Pembayaran</h2>
                                    <span class="text-sm text-gray-500">Mohon untuk menyelesaikan pembayaran sebelum kegiatan
                                        dimulai.</span>
                                </div>
                
                                <div class="md:w-2/3 w-full mx-auto border rounded-md mt-8">
                                    <div class="flex border-b py-4 justify-between">
                                        <div class="pl-4">BSI Virtual Account</div>
                                        <div class="pr-4">
                                            <img class="w-14 h-auto" src="{{ asset('images/bsi.png') }}" alt="BSI">
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm text-gray-500 truncate">
                                                    Kode Bayar <span class="text-xs">(Pembayaran via BSI)</span>
                                                </p>
                                                <p class="text-lg font-bold truncate">
                                                    {{ config('bsi.va') }}
                                                </p>
                                            </div>
                                            <div>
                                                <button type="button" onclick="copyToClipboard({{ config('bsi.va') }})" class="inline-flex space-x-1 text-sm leading-5 font-medium text-indigo-600
                                                                                                        hover:underline">
                                                    <span class="hidden sm:block">Salin</span> <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm text-gray-500 truncate">
                                                    Nomor Rekening <span class="text-xs">(Transfer Bank Lain)</span>
                                                </p>
                                                <p class="text-lg font-bold truncate">
                                                    {{ config('bsi.full_va') }}
                                                </p>
                                            </div>
                                            <div>
                                                <button type="button"
                                                    onclick="copyToClipboard({{str_replace(' ', '', config('bsi.full_va'))}})" class="inline-flex space-x-1 text-sm leading-5 font-medium text-indigo-600
                                                                                hover:underline">
                                                    <span class="hidden sm:block">Salin</span> <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 pt-4 pb-2">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm text-gray-500 truncate">
                                                    Tagihan
                                                </p>
                                                <p class="text-lg truncate text-gray-600">
                                                    {{ rupiah(700000) }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 pt-2 pb-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm text-gray-500 truncate">
                                                    Biaya Admin Bank BSI + Kode Unik
                                                </p>
                                                <p class="text-lg truncate text-gray-600">
                                                    {{ rupiah((2000 + substr($participant->no_pendaftaran, '-3'))) }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm text-gray-500 truncate">
                                                    Total Pembayaran
                                                </p>
                                                <p class="text-lg font-bold truncate">
                                                    {{ rupiah((700000 + (2000 + substr($participant->no_pendaftaran, '-3')))) }}
                                                </p>
                                            </div>
                                            <div>
                                                <button type="button"
                                                    onclick="copyToClipboard({{ (700000 + (2000 + substr($participant->no_pendaftaran, '-3'))) }})"
                                                    class="inline-flex space-x-1 text-sm leading-5 font-medium text-indigo-600
                                                                                                                    hover:underline">
                                                    <span class="hidden sm:block">Salin</span> <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="prose md:w-2/3 w-full mx-auto mt-6">
                                    <h4>Cara Pembayaran</h4>
                                    <ul class="text-sm">
                                        <li class="font-semibold">Menggunakan Pembayaran Akademik BSI Mobile Banking</li>
                                        <ol class="pl-6 pb-4">
                                            <li>Akses BSI Mobile Banking dari handphone kemudian pilih "Bayar".</li>
                                            <li>Pilih "Akademik"</li>
                                            <li>Dibagian "Nama Akademik" cari <strong>9194 - NFBS SERANG</strong></li>
                                            <li>Dibagian "Masukan ID Pelanggan/Kode Bayar" masukan
                                                <strong>{{ config('bsi.va') }}</strong>
                                            </li>
                                            <li>Klik "SELANJUTNYA"</li>
                                            <li>Masukan nominal
                                                <strong>{{ rupiah((700000 + (2000 + substr($participant->no_pendaftaran, '-3'))),
                                                    false) }}</strong>
                                            </li>
                                            <li>Klik "SELANJUTNYA" dan selesaikan pembayaran</li>
                                        </ol>
                
                                        <li class="font-semibold">Menggunakan Metode Transfer Dari Bank Lain</li>
                                        <ol class="pl-6 pb-4">
                                            <li>Pilih menu "Transfer antar bank" atau "Transfer online antarbank".</li>
                                            <li>Masukkan kode bank BSI (451) atau pilih bank yang dituju yaitu BSI.</li>
                                            <li>Masukkan nomor Virtual Account Anda
                                                <strong>{{ config('bsi.full_va') }}</strong>
                                                pada rekening tujuan.
                                            </li>
                                            <li>Masukan nominal transfer
                                                <strong>{{ rupiah((700000 + (2000 + substr($participant->no_pendaftaran, '-3'))),
                                                    false) }}</strong>
                                            </li>
                                            <li>Konfirmasi rincian Anda akan tampil di layar, cek dan apabila sudah sesuai silahkan
                                                lanjutkan transaksi sampai dengan
                                                selesai.</li>
                                        </ol>
                                    </ul>
                                </div>
                                @else
                                <!-- Tidak ada pembayaran -->
                
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    
        @push('script')
        <script>
            function copyToClipboard(value) {
                var tempInput = document.createElement("input");
                tempInput.value = value;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand("copy");
                document.body.removeChild(tempInput);
            }
        </script>
        @endpush
</x-app-layout>