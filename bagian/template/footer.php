<footer class="bg-gradient-to-b from-blue-800 to-blue-900 text-white py-12 mt-16 shadow-lg">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center md:items-start gap-8">
            <!-- Logo & Deskripsi -->
            <div class="text-center md:text-left max-w-md">
                <div class="flex items-center justify-center md:justify-start space-x-2 mb-4">
                    <!-- Logo Biru (Tema Indonesia, misal: Bintang) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-400" fill="currentColor"
                        viewBox="0 0 24 24">
                        <polygon points="12,2 15,9 22,9.3 17,14 18.5,21 12,17.5 5.5,21 7,14 2,9.3 9,9" />
                    </svg>
                    <span class="text-2xl font-bold">Cari Tau Isi Dunia</span>
                </div>
                <p class="text-blue-100 mb-4">Menyajikan informasi terkini dengan semangat kebangsaan Indonesia.</p>
                <p class="text-sm text-blue-300">&copy; <span id="currentYear"></span> Cari Tau Isi Dunia. All rights
                    reserved.</p>
            </div>

            <!-- Kontak -->
            <div class="text-center md:text-right">
                <h3
                    class="text-xl font-bold mb-4 relative pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-16 after:h-1 after:bg-white after:rounded-full">
                    Hubungi Kami
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-center justify-center md:justify-end space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:kontak@portalMerahKebanggan.id"
                            class="hover:text-dark-300 transition">ahmadzakisiregar69@gmail.com</a>
                    </li>
                    <li class="flex items-center justify-center md:justify-end space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:+628123456789" class="hover:text-dark-300 transition">+62 853 6249 8034</a>
                    </li>
                    <li class="flex items-center justify-center md:justify-end space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        <a href="https://www.instagram.com/rassidrsdslpa05_?igsh=dWJld2pwY21ndjdv&utm_source=qr"
                            target="_blank" class="hover:text-dark-300 transition">@CariTauIsiDunia</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Lokasi & Copyright -->1
        <div class="mt-12 pt-6 border-t border-blue-700 text-center">
            <div class="flex justify-center items-center space-x-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-blue-200">Medan, Indonesia</span>
            </div>
        </div>
    </div>
</footer>

<script>
document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>