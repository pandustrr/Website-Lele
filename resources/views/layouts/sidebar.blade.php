<aside id="sidebar"
    class="w-64 bg-white border-r border-gray-200 flex flex-col justify-between h-screen transition-all duration-300 fixed top-0 left-0 z-40 -translate-x-full md:translate-x-0">
    <!-- Logo and Close Button -->
    <div class="relative border-b border-gray-200">
        <div class="flex justify-center items-center py-6 px-4">
            <img src="{{ asset('images/tanpa_bg.png') }}" alt="Logo" class="h-20">
            <button id="closeSidebar" class="md:hidden absolute right-4 text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Menu Content -->
    <div class="flex-1 overflow-y-auto">
        <ul class="space-y-2 font-medium px-2 mt-4">
            <!-- DASHBOARDS -->
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100"
                    aria-controls="dropdown-dashboard" data-collapse-toggle="dropdown-dashboard">
                    <svg class="w-5 h-5 text-purple-500" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left whitespace-nowrap text-gray-900 font-semibold">Dashboards</span>
                    <svg id="dashboard-arrow" class="w-3 h-3 ms-1 transform transition-transform duration-200"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-dashboard" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 ps-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100">Analisis
                            Prediksi</a>
                    </li>
                    <li>
                        <a href="{{ route('produksi') }}"
                            class="flex items-center w-full p-2 ps-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100">Produksi</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 ps-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100">Keuangan</a>
                    </li>
                </ul>
            </li>

            <!-- SETTINGS -->
            <li class="px-3 mt-4 text-xs font-semibold tracking-wide text-gray-500 uppercase">Settings</li>

            <!-- ACCOUNT SETTINGS -->
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100"
                    aria-controls="dropdown-account" data-collapse-toggle="dropdown-account">
                    <svg class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M10 10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 0c-4.418 0-8 2.015-8 4.5V17h16v-2.5c0-2.485-3.582-4.5-8-4.5Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left whitespace-nowrap">Account Settings</span>
                    <svg id="account-arrow" class="w-3 h-3 ms-1 transform transition-transform duration-200"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-account" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 ps-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100">Account</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 ps-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100">Profil</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 ps-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100">Change
                            Password</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- LOGOUT BUTTON -->
    <div class="p-4">
        <a href="#"
            class="flex items-center justify-center w-full p-2 text-white bg-red-500 hover:bg-red-600 rounded-lg font-semibold shadow-lg shadow-red-200">
            Logout
        </a>
    </div>
</aside>

<button id="toggleSidebar"
    class="fixed top-4 z-[9999] bg-[#6495ED] hover:bg-[#4a7bc9] p-3 rounded-r-lg shadow-lg transition-all duration-300"
    aria-label="Toggle Sidebar" style="left: 16rem;">
    <svg id="toggleIcon" class="w-6 h-6 text-white transform transition-transform duration-300 rotate-180" fill="none"
        stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
    </svg>
</button>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const toggleSidebarBtn = document.getElementById('toggleSidebar');
        const closeSidebar = document.getElementById('closeSidebar');
        const toggleIcon = document.getElementById('toggleIcon');

        // Function to update sidebar and toggle button state
        const updateSidebarState = (isOpen) => {
            if (isOpen) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('md:translate-x-0');
                toggleSidebarBtn.style.left = '16rem';
                toggleIcon.classList.remove('rotate-0');
                toggleIcon.classList.add('rotate-180');
            } else {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.remove('md:translate-x-0');
                toggleSidebarBtn.style.left = '0';
                toggleIcon.classList.remove('rotate-180');
                toggleIcon.classList.add('rotate-0');
            }
        };

        // Check initial state based on screen size
        const checkInitialState = () => {
            if (window.innerWidth >= 768) { 
                updateSidebarState(true);
            } else {
                updateSidebarState(false);
            }
        };

        // Toggle sidebar
        toggleSidebarBtn.addEventListener('click', function() {
            const isOpen = !sidebar.classList.contains('-translate-x-full');
            updateSidebarState(!isOpen);
        });

        // Close sidebar (mobile)
        closeSidebar.addEventListener('click', function() {
            updateSidebarState(false);
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            checkInitialState();
        });

        // Collapsible menu items
        document.querySelectorAll('[data-collapse-toggle]').forEach(button => {
            button.addEventListener('click', function() {
                const targetId = this.getAttribute('aria-controls');
                const target = document.getElementById(targetId);
                const arrow = document.getElementById(`${targetId.split('-')[1]}-arrow`);

                target.classList.toggle('hidden');
                arrow.style.transform = target.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(90deg)';
            });
        });

        // Initialize
        checkInitialState();
    });
</script>
