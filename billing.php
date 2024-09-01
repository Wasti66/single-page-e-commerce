<section class="pt-4 pb-4">
	<div class="lg:container mx-auto px-6 lg:px-0">
	  <div x-show="showCheckout">
		<!-- Breadcrumb -->
		<div class="bg-[#2bbef96b] py-4 px-6 rounded-lg">
		   <h1 class="text-2xl font-bold text-gray-600">Billing & Delivery Information</h1>
		</div>
		<!-- === add to cart subtotal and forms === -->
		<div class="grid grid-cols-12 gap-6 mt-8">
		  <!-- === forms === -->
		  <div class="col-span-12 sm:col-span-8">
			<form action="" method="post">
			  <div class="space-y-2.5 bg-white px-4 py-4 shadow-sm rounded">
				 <div class="grid grid-cols-1 md:grid-cols-2 gap-2.5">
					<!-- === full name === -->
					<div class="">
					   <label for="fullName" class="text-gray-800 font-medium">Full Name</label>
					   <input type="text" id="fullName" name="fullName" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5" value="">
					</div>
					<!-- === email === -->
					<div class="">
					   <label for="email" class="text-gray-800 font-medium">Email</label>
					   <input type="text" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5" value="">
					</div>
				 </div>
				 <!-- === email === -->
				 <div class="">
					<label for="phone" class="text-gray-800 font-medium">Phone</label>
					<input type="text" id="phone" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5" value="">
				 </div>
				 <!-- === District === -->
				 <div class="">
					<label for="district" class="text-gray-800 font-medium">District</label>
					<select type="text" id="district" name="district" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5">
						<option>District</option>
						<option value="Dhaka">Dhaka</option>
						<option value="Faridpur">Faridpur</option>
					</select>
				 </div>
				 <!-- === address === -->
				 <div class="">
					<label for="address" class="text-gray-800 font-medium">Address</label>
					<textarea type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5" value=""></textarea>
				 </div>
				 <!-- === Cash on delivery input and label === -->
				 <div class="flex items-center">
					<input id="cash" type="radio" value="" name="cash" class="w-4 h-4 bg-gray-100 border-gray-300 focus:ring-blue-500" checked="">
					<label for="cash" class="ms-2 text-base font-medium text-gray-800">Cash on delivery</label>
					<img src="images/cash.png" class="h-8 w-12 ms-3">
				 </div>
				 <!-- === bkash input and label === -->
				 <div class="flex items-center">
					<input id="bkash" type="radio" value="" name="cash" class="w-4 h-4 bg-gray-100 border-gray-300 focus:ring-blue-500">
					<label for="bkash" class="ms-2 text-sm font-medium text-gray-900">Bkash</label>
					<img src="images/bkash.png" class="h-8 w-12 ms-3">
				 </div>
				 <!-- === Nagad input and label === -->
				<div class="flex items-center">
				   <input id="nagad" type="radio" value="" name="cash" class="w-4 h-4 bg-gray-100 border-gray-300 focus:ring-blue-500">
				   <label for="nagad" class="ms-2 text-sm font-medium text-gray-900">Nagad</label>
				   <img src="images/nagad.png" class="h-8 w-12 ms-3">
				</div>
				<input type="submit" name="payment_submission" class="w-full text-center mt-2.5 p-2.5 bg-[#233a95] rounded-md hover:bg-black text-white font-medium cursor-pointer transition" value="PLACE ORDER">
			  </div>
			</form>
		  </div>
		  <!-- === suntotal === -->
		  <div class="col-span-12 sm:col-span-4">
			<!-- Delivery Method -->
			<div class="px-2.5 md:px-4 py-2.5 divide-y divide-dashed bg-white rounded shadow-sm mb-4">
				<h3 class="uppercase text-lg font-semibold tracking-wider text-gray-700 py-2">Delivery Method</h3>
				<label class="flex items-center mb-2">
					<input type="radio" name="shipping" value="0" x-model="selectedShipping" class="form-radio text-green-500">
					<span class="ml-2">Free Shipping - $0.00</span>
				</label>
				<label class="flex items-center">
					<input type="radio" name="shipping" value="5" x-model="selectedShipping" class="form-radio text-green-500">
					<span class="ml-2">Flat Rate - $20.00</span>
				</label>
			</div>
			<div class="px-2.5 md:px-4 py-2.5 divide-y divide-dashed bg-white rounded shadow-sm">
			  <h3 class="uppercase text-lg font-semibold tracking-wider text-gray-700 py-2">cart totals</h3>
			  <div class="flex items-center justify-between py-2">
				<p class="text-sm text-gray-700 font-medium">Subtotal</p>
				<h6 x-text="'$' + total.toFixed(2)" class="text-base text-gray-700 font-medium"></h6>
			  </div>
			  <div class="flex items-center justify-between py-2">
				<p class="text-sm text-gray-700 font-medium">Delivery Charges</p>
				<h6 x-text="'$' + selectedShipping" class="text-base text-gray-700 font-medium"></h6>
			  </div>
			  <div class="flex items-center justify-between py-2">
				<p class="text-sm text-gray-700 font-medium">Total</p>
				<h6 x-text="'$' + (total + parseFloat(selectedShipping)).toFixed(2)" class="text-base text-gray-700 font-medium"></h6>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
</section>