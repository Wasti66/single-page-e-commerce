<section class="pt-4 pb-4">
	<div class="lg:container mx-auto px-6 lg:px-0">
	  <h1 class="font-bold text-2xl sm:text-5xl text-gray-800 text-center mb-12">Our Products</h1>
	  <!-- === products grid === -->
	  <div class="grid grid-cols-12 gap-4">
		<template x-for="product in products" :key="product.id">
			<!-- === products col === -->
			<div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3">
			  <div class="rounded-md border bg-white group overflow-hidden relative">
				<!-- === product images === -->
				<img :src="product.images" class="w-full scale-75 group-hover:scale-90 transition-all">
				<!-- === === -->
				<div class="absolute inset-0 flex justify-between px-2.5 py-2.5">
				  <span x-text="product.discount" class="bg-[#2bbef9] text-xs font-medium text-white px-3 py-1. rounded h-[1.5rem] flex items-center"></span>
				  <div class="flex flex-col items-end mt-1 space-y-2 opacity-0 group-hover:opacity-100">
					 <!-- === search === -->
					 <div x-data="{open : false}">
					   <a @click="open =! open" class="h-10 w-10 border rounded-full flex items-center justify-center shadow hover:text-white text-gray-400 hover:bg-[#233a95] hover:border-0 cursor-pointer">
						 <i class="fa-solid fa-magnifying-glass text-sm"></i>
					   </a>
					   <!-- === modal start === -->
					   <?php include('modal.php'); ?>
					 </div>
					 <!-- === wishlist === --> 
					 <a class="h-10 w-10 border rounded-full flex items-center justify-center shadow hover:text-white text-gray-400 hover:bg-[#233a95] hover:border-0 cursor-pointer">
					   <i class="fa-regular fa-heart text-sm"></i>
					 </a>
				  </div>
				</div>
				<!-- === product body === -->
				<div class="px-2.5 pb-4 space-y-1.5 relative">
				  <h3 class="font-semibold text-gray-700 text-lg hover:text-[#2bbef9]">
					<a href="#" x-html="product.title"></a>
				  </h3>
				  <p x-text="product.available" class="uppercase text-green-600 text-xs font-semibold"></p>
				  <ul class="flex items-center" x-data="{ reviews: [ {icon : 'fa-star',color : 'text-[#f36e24]'},{icon : 'fa-star',color : 'text-[#f36e24]'},{icon : 'fa-star',color : 'text-[#f36e24]'} ] }">
					<template x-for="review in reviews">
						<i class="fa-solid text-[0.6rem] text-yellow-500" :class="review.icon"></i>
					</template>
					<p class="text-xs text-gray-500 font-semibold ms-1.5">(1)</p>
				  </ul>
				  <!-- === product price === -->
				  <div class="flex items-center">
					<h4 x-text="product.old_price" class="line-through text-base text-gray-400 font-semibold"></h4>
					<h3 x-text="'$' + (product.present_price * product.quantity).toFixed(2)" class="text-lg text-red-600 font-bold ms-2"></h3>
				  </div>
				  <!-- === quantity === -->
				  <div class="flex items-center justify-start gap-x-4">
					  <p class="text-medium font-semibold py-0.5">Quantity:</p>
					  <div class="outline rounded-lg outline-1 outline-gray-400 flex items-center">
						<button class="px-3 py-0.5" @click="product.quantity > 1 ? product.quantity-- : null">-</button>
						<input type="text" x-model.number="product.quantity" readonly class="w-12 text-center border-r border-l border-gray-500 focus:outline-none py-0.5 bg-transparent">
						<button class="px-3 py-0.5" @click="product.quantity++">+</button>
					  </div>
				  </div>
				  <p class="py-2"></p>
				  <!-- === product add to cart === -->
				  <a @click="$dispatch('add-to-cart', { product: product })" class="border border-[#2bbef9] text-sm rounded-full block capitalize font-medium px-4 py-2 text-[#2bbef9] hover:bg-[#2bbef9] hover:text-white transition-all text-center cursor-pointer">
					add to cart		  
					</a>
				</div>
			  </div>
			</div>
		</template>
	  </div>
	</div>
</section>	