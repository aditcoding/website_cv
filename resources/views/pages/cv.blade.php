<x-layout title="CV - Mohammad Aditya Pradana Putra">
    <main class="px-4 md:px-10 py-10 bg-gradient-to-br from-gray-100 to-gray-200 text-gray-900 space-y-10">

        {{-- HEADER --}}
        <section class="bg-gradient-to-r from-blue-500 to-indigo-600 py-10 text-white shadow-md rounded-b-xl animate-fadeIn">
            <div class="text-center">
                <img src="{{ asset('storage/image/Aditya_Pradana.jpg') }}"
                     alt="Foto Profil"
                     class="mx-auto rounded-full w-32 h-32 object-cover aspect-square border-4 border-white shadow-lg mb-4">
                <h2 class="text-2xl font-bold">Mohammad Aditya Pradana Putra</h2>
                <p class="text-sm">Web Developer | Software Developer</p>
            </div>
        </section>

        {{-- TENTANG SAYA --}}
        <section class="bg-white p-6 rounded-lg shadow-lg animate-fadeIn">
            <h3 class="text-xl font-semibold border-b pb-2 mb-4">Tentang Saya</h3>
            <p class="text-gray-700 leading-relaxed">
                Saya adalah seorang yang antusias terhadap pengembangan teknologi, dan saya adalah orang yang menyukai tantangan dan suka belajar hal-hal baru.
            </p>
        </section>

        {{-- PENDIDIKAN --}}
        <section class="bg-white p-6 rounded-lg shadow-lg animate-fadeIn">
            <h3 class="text-xl font-semibold border-b pb-2 mb-4">Pendidikan</h3>
            <div class="space-y-4">
                <div>
                    <h4 class="font-bold">Politeknik Negeri Jember</h4>
                    <span class="text-sm text-gray-500">2023 - Sekarang</span>
                    <p class="text-gray-700">D4 Teknik Informatika</p>
                </div>
                <div>
                    <h4 class="font-bold">SMA Negeri 1 Patianrowo</h4>
                    <span class="text-sm text-gray-500">2019 - 2022</span>
                    <p class="text-gray-700">Rekayasa Perangkat Lunak</p>
                </div>
            </div>
        </section>

        {{-- PENGALAMAN --}}
        <section class="space-y-6 animate-fadeIn">
            <h3 class="text-xl font-semibold">Pengalaman</h3>

            @php
                $experiences = [
                    [
                        'title' => 'Developer Pourchase',
                        'year' => '2024 - 2024',
                        'desc' => 'Masuk sebagai bagian tim developer aplikasi dekstop'
                    ],
                    [
                        'title' => 'Web Developer PerpusDig',
                        'year' => '2024 - 2024',
                        'desc' => 'Developer website perpusDig , website untuk perpustakaan daerah kab Nganjuk'
                    ],
                    [
                        'title' => 'Web Developer SiTani',
                        'year' => '2025 - Sekarang',
                        'desc' => 'Masuk sebagai tim developer untuk website SiTani website untuk Dinas Pertanian Kabupaten Nganjuk'
                    ],
                ];
            @endphp

            @foreach ($experiences as $exp)
                <div class="bg-white p-4 rounded-md shadow hover:shadow-lg transition duration-300">
                    <h4 class="font-bold text-lg">{{ $exp['title'] }}</h4>
                    <span class="text-sm text-gray-500">{{ $exp['year'] }}</span>
                    <p class="mt-2 text-gray-700">{{ $exp['desc'] }}</p>
                </div>
            @endforeach
        </section>

        {{-- KONTAK --}}
        <section id="kontak" class="bg-white p-6 rounded-lg shadow-lg animate-fadeIn">
            <h3 class="text-xl font-semibold border-b pb-2 mb-4">Kontak</h3>
            <ul class="space-y-2 text-gray-700">
                <li>Email: <a href="mailto:pradanapmaditya@gmail.com" class="text-blue-500 hover:underline">pradanapmaditya@gmail.com</a></li>
                <li>LinkedIn: <a href="#" class="text-blue-500 hover:underline">linkedin.com/in/AdityaPradana</a></li>
                <li>GitHub: <a href="#" class="text-blue-500 hover:underline">github.com/aditcoding</a></li>
            </ul>
        </section>

    </main>
</x-layout>
