<div class="container px-6 py-10 mx-auto">

    <section class="mt-28">

        <h1 class="text-2xl font-semibold text-center text-[#040181] capitalize lg:text-3xl dark:text-white">
            Formulir Pendaftaran </h1>

        <div class="flex justify-center mx-auto mt-6 mb-10">
            <span class="inline-block w-40 h-1 bg-[#040181] rounded-full"></span>
            <span class="inline-block w-3 h-1 mx-1 bg-[#040181] rounded-full"></span>
            <span class="inline-block w-1 h-1 bg-[#040181] rounded-full"></span>
        </div>

        @if (session()->has('success'))
            <div id="alert-additional-content-3"
                class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                role="alert">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium capitalize">{{ session('success') }}</h3>
                </div>
                <div class="mt-2 text-sm">
                    Pendaftaran keanggotaan Partai Perjuangan Aceh yang telah anda daftarkan akan segera kami proses.
                    Segera
                    kami hubungi anda melalui email maupun telepon.
                    Terima kasih,
                    <span class="font-semibold block mt-10 text-[#040181]">Partai Perjuangan Aceh</span>
                </div>

            </div>
        @else
            <form wire:submit="save">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                            Induk
                            Kependidikan (NIK) <sup> * </sup></label>
                        <input type="text" id="nik" wire:model.lazy="nik"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="123456" required value="{{ old('nik') }}" />
                        @error('nik')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Lengkap <sup> * </sup></label>
                        <input type="text" id="nama" wire:model.lazy="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Budiawan" required value="{{ old('name') }}" />
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="nm_panggilan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Panggilan</label>
                        <input type="text" id="nm_panggilan" wire:model.lazy="nickname"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="budi" value="{{ old('nickname') }}" />
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                            Kontak <sup> * </sup></label>
                        <input type="number" id="phone" wire:model.lazy="telp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required
                            value="{{ old('telp') }}" />
                        @error('telp')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            <sup> * </sup></label>
                        <input type="email" id="email" wire:model.lazy="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="john.doe@company.com" required value="{{ old('email') }}" />
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="tempat_lahir"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir <sup> *
                            </sup>
                        </label>
                        <input type="text" id="tempat_lahir" wire:model.lazy="tempat_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required value="{{ old('tempat_lahir') }}" />
                        @error('tempat_lahir')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="tgllahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Lahir <sup> * </sup></label>
                    <input type="date" id="tgllahir" wire:model="tanggal_lahir"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="john.doe@company.com" required value="{{ old('tanggal_lahir') }}" />
                    @error('tanggal_lahir')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="jenis_kelamin"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                        Kelamin <sup> * </sup></label>
                    <select id="jenis_kelamin" wire:model="gender"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="laki-laki" {{ old('gender') == 'laki-laki' ? 'selected' : '' }}>Laki-laki
                        </option>
                        <option value="perempuan" {{ old('gender') == 'perempuan' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>
                    @error('gender')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="golongan_darah"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Golongan Darah</label>
                        <select id="golongan_darah" wire:model="gol_darah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Pilih Golongan Darah</option>
                            <option value="A" {{ old('gol_darah') == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ old('gol_darah') == 'B' ? 'selected' : '' }}>B</option>
                            <option value="O" {{ old('gol_darah') == 'O' ? 'selected' : '' }}>O</option>
                            <option value="AB" {{ old('gol_darah') == 'AB' ? 'selected' : '' }}>AB</option>
                        </select>
                        @error('gol_darah')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div wire:loading.class="opacity-50">
                        <label for="provinsi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi
                            <sup> * </sup> </label>
                        <select id="provinsi" wire:model="provinsi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            @foreach ($dataprov as $item)
                                <option value="{{ $item->name }}"
                                    {{ old('provinsi') == $item->name ? 'selected' : '' }}>{{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('provinsi')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="kotakabupaten"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota/Kabupaten</label>
                        <input type="text" id="kotakabupaten" wire:model="kotakab"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('kotakab') }}" />
                        @error('kotakab')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="kecamatan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>
                        <input type="text" id="kecamatan" wire:model="kecamatan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('kecamatan') }}" />
                        @error('kecamatan')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="desa"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desa</label>
                        <input type="text" id="desa" wire:model="desa"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('desa') }}" />
                        @error('desa')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="alamat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <textarea id="alamat" wire:model="alamat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="alamat_saat_ini"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Saat
                            Ini</label>
                        <textarea id="alamat_saat_ini" wire:model="alamat_saat_ini"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('alamat_saat_ini') }}</textarea>
                        @error('alamat_saat_ini')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="lokasi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi</label>
                        <input type="text" id="lokasi" wire:model="lokasi" placeholder="5.534763, 95.318581"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('lokasi') }}" />
                        @error('lokasi')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="negara"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Negara</label>
                        <input type="text" id="negara" wire:model="negara"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('negara') }}" />
                        @error('negara')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="agama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama
                            <sup> * </sup></label>
                        <select id="agama" required wire:model="agama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Pilih Agama</option>
                            <option value="islam" {{ old('agama') == 'islam' ? 'selected' : '' }}>Islam</option>
                            <option value="kristen" {{ old('agama') == 'kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="budha" {{ old('agama') == 'budha' ? 'selected' : '' }}>Budha</option>
                            <option value="hindu" {{ old('agama') == 'hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="konghucu" {{ old('agama') == 'konghucu' ? 'selected' : '' }}>Konghucu
                            </option>
                            <option value="lainnya" {{ old('agama') == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                        @error('agama')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="status_kawin"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Kawin
                        </label>
                        <select id="status_kawin" wire:model="status_kawin"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Pilih Status Kawin</option>
                            <option value="lajang" {{ old('status_kawin') == 'lajang' ? 'selected' : '' }}>Lajang
                            </option>
                            <option value="menikah" {{ old('status_kawin') == 'menikah' ? 'selected' : '' }}>Menikah
                            </option>
                            <option value="cerai" {{ old('status_kawin') == 'cerai' ? 'selected' : '' }}>Cerai
                            </option>
                            <option value="duda" {{ old('status_kawin') == 'duda' ? 'selected' : '' }}>Duda</option>
                            <option value="janda" {{ old('status_kawin') == 'janda' ? 'selected' : '' }}>Janda
                            </option>
                        </select>
                        @error('status_kawin')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        </select>
                    </div>
                    <div>
                        <label for="pekerjaan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                        <input type="text" id="pekerjaan" wire:model="pekerjaan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ old('pekerjaan') }}" />
                        @error('pekerjaan')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="ktp">KTP
                            <sup> * </sup>
                        </label>
                        <input wire:model="ktp" value="{{ old('ktp') }}"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="file_input_help" id="ktp" type="file" />
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or
                            GIF
                            (MAX. 800x400px) atau pdf (MAX. 2MB)</p>
                        @error('ktp')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="photo"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Photo
                            (File Upload) <sup> * </sup></label>
                        <input type="file" id="photo" wire:model="photo" value="{{ old('photo') }}"
                            class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" />
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or
                            GIF
                            (MAX. 800x400px dan 2Mb) </p>
                        @error('photo')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <button type="submit"
                    class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-7 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Daftar</button>
                @if ($errors->any())
                    <p
                        class="mt-2 text-sm text-red-600 dark:text-red-500 bg-red-200 max-w-md px-2 rounded text-center float-right mr-5 capitalize">
                        Ada kesalahan
                        input,
                        cek kembali
                        form di
                        atas!</p>
                @endif
            </form>
        @endif
    </section>
</div>
