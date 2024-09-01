<section class="pt-4 pb-4">
	<div class="lg:container mx-auto px-6 lg:px-0">
	  <h1 class="font-bold text-2xl sm:text-5xl text-gray-800 text-center mb-12">My Carts</h1>
	  <!-- Cart Section -->
	  <div class="mt-4 p-6 bg-white rounded-lg shadow-sm" @add-to-cart.window="addToCart($event.detail.product)">
		  <template x-if="cart.length > 0">
			 <div class="overflow-x-auto">
				<table class="w-full text-center">
					<thead>
					   <tr class="border-b">
						 <th class="py-2 ">SL No</th>
						 <th class="py-2 ">Image</th>
						 <th class="py-2 ">PRODUCT NAME</th>
						 <th class="py-2 ">PRICE</th>
						 <th class="py-2 ">QUANTITY</th>
						 <th class="py-2 ">TOTAL</th>
						 <th class="py-2 ">ACTION</th>
					   </tr>
					</thead>
					<tbody>
						<template x-for="(item, index) in cart" :key="index">
							<tr class="border-b">
								<td class="py-2">
									<p x-text="index + 1" class=""></p>
								</td>
								<td class="py-2">
									<img :src="item.images" alt="" class="h-12 w-12">
								</td>
								<td class="py-2">
									<h3 x-text="item.title" class=""></h3>
								</td>
								<td class="py-2">
									<p x-text="'$' + (item.present_price).toFixed(2)" class="text-gray-600"></p>
								</td>
								<td class="py-2">
									<div class="flex items-center justify-center">
										<button class="px-3 py-1 bg-gray-200 rounded-lg" @click="decreaseQuantity(index)">-</button>
										<input type="text" x-model.number="item.quantity" readonly class="w-12 text-center border mx-2 py-1 bg-transparent">
										<button class="px-3 py-1 bg-gray-200 rounded-lg" @click="increaseQuantity(index)">+</button>
									</div>
								</td>
								<td class="py-2">
									<p x-text="'$' + (item.present_price * item.quantity).toFixed(2)" class="text-gray-600"></p>
								</td>
								<td class="py-2">
									<button @click="removeFromCart(index)" class="px-4 py-1 bg-red-500 text-white rounded-lg shadow hover:bg-red-600"><i class="fa-solid fa-trash-can"></i></button>
								</td>
							</tr>
						</template>
							<tr class="border-b">
								<td class="py-2">
									
								</td>
								<td class="py-2">
									
								</td>
								<td class="py-2">
									
								</td>
								<td class="py-2">
									
								</td>
								<td class="py-2 ">
									<p class="text-xl font-semibold text-end">Subtotal</p>
								</td>
								<td class="py-2">
								<p class="text-xl font-semibold" x-text="'$' + subtotal.toFixed(2)"></p>
								</td>
								<td class="py-2">
									
								</td>
							</tr>
							<tr class="border-b">
								<td class="py-2">
									
								</td>
								<td class="py-2">
									
								</td>
								<td class="py-2">
									
								</td>
								<td class="py-2">
									
								</td>
								<td class="py-2">
									<p class="text-xl font-semibold text-end">Total</p>
								</td>
								<td class="py-2">
									<p class="text-xl font-semibold" x-text="'$' + total.toFixed(2)"> </p>
								</td>
								<td class="py-2">
									
								</td>
							</tr>
							<tr class="border-b">
								<td class="py-2">
									
								</td>
								<td class="py-2">
									
								</td>
								<td class="py-2">
									
								</td>
								<td class="py-2">
									
								</td>
								<td class="py-2">
									
								</td>
								<td class="py-2 ">
									
								</td>
								<td class="py-2 flex items-center justify-center gap-x-2">
									<a href="#" class="px-4 py-2 bg-[#2bbef9] text-white rounded-lg shadow">Continue Shopping</a>
									<button @click="checkout()" class="px-4 py-2 bg-[#2bbef9] text-white rounded-lg shadow">Check Out</button>
								</td>
							</tr>
					</tbody>
				</table>
			 </div>
		  </template>
		  <template x-if="cart.length === 0">
			  <p class="text-gray-600 text-xl">Your cart is empty now.</p>
		  </template>
	  </div>
	</div>
</section>