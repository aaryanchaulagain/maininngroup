<footer class="bg-white border-t border-gray-100 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 font-display-main">Any more questions? Feel free to write us a mail!</h3>
            <p class="mt-2 text-gray-500">We'll respond your queries immediately.</p>
            <div class="mt-4 flex items-center justify-center gap-4">
                <span class="h-px w-16 bg-gray-200"></span>
                <i class="fa-solid fa-envelope-open-text text-[#094978] text-xl" aria-hidden="true"></i>
                <span class="h-px w-16 bg-gray-200"></span>
            </div>
        </div>
        <div class="flex justify-center gap-4 mb-10">
            <a href="https://www.facebook.com/Innovative-Associates-264830543559326" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="w-10 h-10 rounded-full bg-[#094978] text-white flex items-center justify-center hover:bg-[#072f4c] transition"><i class="fa-brands fa-facebook-f text-sm"></i></a>
            <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer" aria-label="Twitter" class="w-10 h-10 rounded-full bg-[#094978] text-white flex items-center justify-center hover:bg-[#072f4c] transition"><i class="fa-brands fa-x-twitter text-sm"></i></a>
            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="w-10 h-10 rounded-full bg-[#094978] text-white flex items-center justify-center hover:bg-[#072f4c] transition"><i class="fa-brands fa-instagram text-sm"></i></a>
            <a href="mailto:info@inngroup.com.au" aria-label="Email us" class="w-10 h-10 rounded-full bg-[#094978] text-white flex items-center justify-center hover:bg-[#072f4c] transition"><i class="fa-solid fa-envelope text-sm"></i></a>
        </div>
        <div class="border-t border-gray-100 pt-8 grid grid-cols-1 md:grid-cols-2 gap-8 text-sm text-gray-600">
            <div>
                <p class="font-bold text-gray-900 uppercase tracking-wide mb-2">Contacts</p>
                <p>Suite 101, Level 10, 420 Pitt Street, Sydney NSW 2222</p>
                <p class="mt-1">Phone: +61 02 8592 1165 | Mob: 0403 054 593 (Shamim), 0434 392 347 (Dila)</p>
                <p class="mt-1">Email: <a href="mailto:info@inngroup.com.au" class="text-[#094978] hover:underline">info@inngroup.com.au</a></p>
            </div>
            <div>
                <p class="font-bold text-gray-900 uppercase tracking-wide mb-2">Disclaimer</p>
                <p class="text-xs text-gray-500 leading-relaxed">The information contained in this website is for general information purposes only. The information is provided by Innovative Associates and Innovative Wealth and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind.</p>
            </div>
        </div>
        <div class="border-t border-gray-100 mt-8 pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-gray-500">
            <p>&copy; {{ date('Y') }} Innovative Associates | Innovative Wealth</p>
            <nav class="flex gap-4" aria-label="Footer">
                <a href="#" class="hover:text-[#094978] transition">About</a>
                <a href="{{ route('main.contact') }}" class="hover:text-[#094978] transition">Contact</a>
                <a href="#" class="hover:text-[#094978] transition">Terms</a>
            </nav>
        </div>
    </div>
</footer>
