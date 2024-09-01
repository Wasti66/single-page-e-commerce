<header class="sticky top-0 z-40 border-b">
	<nav x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false" class="bg-white py-2.5">
		<div class="lg:container mx-auto px-6 md:px-4 lg:px-0 flex justify-between items-center">
			<!-- Brand Logo -->
			<a href="#" class="text-3xl font-bold text-black">
				<span>Was<span class="text-[#2bbef9]">t</span>i</span>
				<!-- <img src="./your-logo.svg" alt="brand logo" class="w-10" /> -->
			</a>
			<!-- Desktop Menu -->
			<ul class="hidden items-center gap-4 md:flex">
				<li>
				  <a href="#" class="font-medium text-lg text-gray-700">All</a>
				</li>
				<li>
				  <a href="#" class="font-medium text-lg text-gray-700">Orange</a>
				</li>
				<li>
				  <a href="#" class="font-medium text-lg text-gray-700">Apple</a>
				</li>
				<li>
				  <a href="#" class="font-medium text-lg text-gray-700">Mango</a>
				</li>
				<li>
				  <a href="#" class="font-medium text-lg text-gray-700">Login</a>
				</li>
				<form action="" method="post" class="flex items-center justify-between rounded-full justify-between w-full border border-slate-300 bg-gray-100">
					<input type="text" class="focus:ring-0 focus:outline-none bg-transparent ms-4 h-10 text-sm placeholder:font-medium placeholder:text-slate-600 w-full" placeholder="Type your product..">
					<button type="submit" class="flex items-center text-lg bg-[#2bbef9] font-medium px-2.5 py-1 me-0.5 rounded-l text-white duration-200 hover:bg-black rounded-full">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mt-1 ms-2">
						  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path>
						</svg>
					</button>
				 </form>
			</ul>
			<!-- Mobile Menu Button -->
			<button @click="mobileMenuIsOpen = !mobileMenuIsOpen" :aria-expanded="mobileMenuIsOpen" :class="mobileMenuIsOpen ? 'fixed top-6 right-6 z-20' : null" type="button" class="flex text-slate-700 dark:text-slate-300 md:hidden" aria-label="mobile menu" aria-controls="mobileMenu">
				<svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
				</svg>
				<svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
				</svg>
			</button>
			<!-- Mobile Menu -->
			<ul x-cloak x-show="mobileMenuIsOpen" x-transition:enter="transition motion-reduce:transition-none ease-out duration-300" x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0" x-transition:leave="transition motion-reduce:transition-none ease-out duration-300" x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full" id="mobileMenu" class="fixed max-h-svh overflow-y-auto inset-x-0 top-0 z-10 flex flex-col divide-y divide-slate-300 rounded-b-xl border-b border-slate-300 bg-slate-100 px-6 pb-12 pt-20 md:hidden space-y-4">
			  <li>
				<a href="#" class="font-medium text-lg text-gray-700">All</a>
			  </li>
			  <li>
				<a href="#" class="font-medium text-lg text-gray-700">Orange</a>
			  </li>
			  <li>
				<a href="#" class="font-medium text-lg text-gray-700">Apple</a>
			  </li>
			  <li>
				<a href="#" class="font-medium text-lg text-gray-700">Mango</a>
			  </li>
			  <li>
				<a href="#" class="font-medium text-lg text-gray-700">Login</a>
			  </li>
			  <form action="" method="post" class="flex items-center justify-between rounded-full justify-between w-full border">
					<input type="text" class="focus:ring-0 focus:outline-none bg-transparent ms-4 h-10 text-sm placeholder:font-medium placeholder:text-slate-600 w-full" placeholder="Type your product..">
					<button type="submit" class="flex items-center text-lg bg-[#2bbef9] font-medium px-4 py-1 me-0.5 rounded-l text-white duration-200 hover:bg-black rounded-full">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mt-1 ms-2">
						  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path>
						</svg>
					</button>
			  </form>
			</ul>
		</div>
	</nav>
</header>