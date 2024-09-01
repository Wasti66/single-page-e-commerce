<template x-teleport="body">
   <div x-show="open" class="bg-black inset-0 fixed z-50 flex justify-center items-center bg-opacity-25">
	  <!-- === dialog === -->
	  <div x-show="open" x-transition.duration.500ms="" @click.outside="open = false" class="bg-white w-11/12 md:w-8/12 shadow rounded-md text-start z-50 space-y-4 rounded-xl">
		<!-- === modal title === -->
		<div class="bg-gray-100 py-2.5 p-2 rounded-t-lg">
		  <h5 class="text-lg font-semibold flex items-center justify-between">
		  Modal Title
		  <i @click="open = false" class="fas fa-times cursor-pointer"></i>
		  </h5>
		</div>
		<!-- === modal body === -->
		<div class="container mx-auto px-4 overflow-y-scroll h-[400px]">
			<div class="grid grid-cols-12 mb-16">
				<!-- === product images === -->
				<div class="col-span-12 lg:col-span-5 m-auto">
				  <img src="images/product-img-3.jpg" class="w-full rounded-md">	 
				</div>
				<!-- === product description === -->
				<div class="col-span-12 lg:col-span-7">
					<!-- === product title === -->
					<h1 class="capitalize text-3xl font-medium text-gray-800 mb-2">product name</h1>
					<hr>
					<!-- === product description === -->
					<p class="text-base text-gray-700 my-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
					<h4 class="text-2xl font-medium text-gray-800 mb-2">Orange : $50</h4>
					<hr>
					<div class="flex items-center mt-2">
					  <h6 class="font-medium text-gray-700">Avaiability : </h6>
					  <span class="inline-flex items-center rounded-md bg-green-600 px-2 py-1 text-xs font-semibold text-white ring-1 ring-inset ring-green-600/20">In Stock</span>
					</div>
					<h6 class="font-medium text-gray-700 my-2">Categories : <span class="font-normal">Vegetable Fruit</span></h6>
					<!-- === product quantity input === -->
					<div x-data="{ currentVal: 1, minVal: 0, maxVal: 10, decimalPoints: 0, incrementAmount: 1 }" class="flex flex-col gap-1 mb-2">
						<div @dblclick.prevent class="flex items-center">
							<button @click="currentVal = Math.max(minVal, currentVal - incrementAmount)" class="flex h-8 items-center justify-center rounded-l-xl border border-slate-300 bg-slate-100 px-3 py-2 text-slate-700 hover:opacity-75 focus-visible:z-10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0" aria-label="subtract">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="2" class="size-4">
									<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15"/>
								</svg>
							</button>
							<form action="" method="post">
								<input x-model="currentVal.toFixed(decimalPoints)" id="counterInput" type="text" class="h-8 w-16 rounded-none border border-slate-300 bg-slate-100/50 text-center text-black focus-visible:z-10 focus-visible:outline-0" readonly />
							</form>
							<button @click="currentVal = Math.min(maxVal, currentVal + incrementAmount)" class="flex h-8 items-center justify-center rounded-r-xl border border-slate-300 bg-slate-100 px-3 py-2 text-slate-700 hover:opacity-75 focus-visible:z-10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0" aria-label="add">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="2" class="size-4">
									<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
								</svg>
							</button>
						</div>
					</div>
					<!-- --- === add to cart === --->
					<form action="" method="">
					   <input type="submit" class="bg-[#f36e24] font-semibold text-sm text-white rounded px-4 py-2 cursor-pointer mb-2" value="ADD TO CART">
					</form>
					<a href="#" class="font-medium text-base text-black hover:text-[#f36e24] capitalize">add to favorites<i class="fa-solid fa-heart ms-2"></i></a>
					<hr class="my-4">
					
				</div>
			</div>
		</div>
		<!-- === modal body end === -->
		
		<!-- === modal footer === -->
		<div class="text-end bg-gray-100 py-2.5 p-2 rounded-b-lg">
		  <button class="p-2 px-4 text-sm font-semibold bg-white text-slate-700 ring-1 ring-slate-900/5 rounded-md me-1 shadow-md">Accept</button>
		  <button @click="open = false" class="p-2 px-4 text-sm font-semibold bg-red-600 text-white rounded-md shadow-md">Cancle</button>
		</div>
	  </div>
	</div>
</template>