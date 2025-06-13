<?php
// Ambil kategori aktif dari URL (jika ada)
$kategoriAktif = isset($_GET['kategori']) ? $_GET['kategori'] : '';
?>

<aside class="lg:col-span-1 animate-fadeIn" style="animation-delay: 0.2s;">
    <div class="bg-white p-4 rounded-lg shadow">
        <h2 class="text-xl font-semibold text-black-700 mb-4 border-b-2 border-red-200 pb-2">Kategori</h2>
        <ul class="space-y-2">
            <li>
                <a href="?page=home&kategori=politik"
                   class="block p-2 rounded hover:text-blue-700 hover:bg-blue-100
                   <?= $kategoriAktif === 'politik' ? 'bg-blue-100 font-semibold text-blue-900' : 'text-black' ?>">
                    Politik
                </a>
            </li>
            <li>
                <a href="?page=home&kategori=ekonomi"
                   class="block p-2 rounded hover:text-blue-700 hover:bg-blue-100
                   <?= $kategoriAktif === 'ekonomi' ? 'bg-blue-100 font-semibold text-blue-900' : 'text-black' ?>">
                    Ekonomi & Bisnis
                </a>
            </li>
            <li>
                <a href="?page=home&kategori=teknologi"
                   class="block p-2 rounded hover:text-blue-700 hover:bg-blue-100
                   <?= $kategoriAktif === 'teknologi' ? 'bg-blue-100 font-semibold text-blue-900' : 'text-black' ?>">
                    Teknologi
                </a>
            </li>
            <li>
                <a href="?page=home&kategori=hiburan"
                   class="block p-2 rounded hover:text-blue-700 hover:bg-blue-100
                   <?= $kategoriAktif === 'hiburan' ? 'bg-blue-100 font-semibold text-blue-900' : 'text-black' ?>">
                    Hiburan
                </a>
            </li>
            <li>
                <a href="?page=home&kategori=gayahidup"
                   class="block p-2 rounded hover:text-blue-700 hover:bg-blue-100
                   <?= $kategoriAktif === 'gayahidup' ? 'bg-blue-100 font-semibold text-blue-900' : 'text-black' ?>">
                    Gaya Hidup
                </a>
            </li>
            <li>
                <a href="?page=home&kategori=olahraga"
                   class="block p-2 rounded hover:text-blue-700 hover:bg-blue-100
                   <?= $kategoriAktif === 'olahraga' ? 'bg-blue-100 font-semibold text-blue-900' : 'text-black' ?>">
                    Olahraga
                </a>
            </li>
        </ul>
    </div>
</aside>
