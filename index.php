<?php include('head.php'); ?>
	  <!-- === header === -->
	  <?php include('header.php'); ?>
	  <!-- === main === -->
	  <main>
	    <!-- === banar === -->
		<?php include('banar.php'); ?>
		<!-- === our products === -->
		<?php include('products.php'); ?>
		<!-- === add to cart === -->
		<?php include('add_to_cart.php'); ?>
		<!-- === Billing & Delivery Information Section === -->
		<?php include('billing.php'); ?>	
		<!-- === subscription === -->
		<?php include('subscription.php'); ?>	
	  </main>
	  <!-- === footer === -->
	  <footer>
	     <?php include('footer.php'); ?>
	  </footer>
	  <!-- === alpine js === -->
	  <!-- <script src="js/collaps.cdn.min.js"></script>
	  <script src="js/alpine.min.js"></script> -->
	  <!-- === swiper js === -->
	  <script src="<?php echo $baseurl;?>js/swiper-bundle.min.js"></script>
	  <!-- === banar js === -->
	  <script>
			var swiper = new Swiper(".banar", {
			  effect: "fade",
			  autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			  },
			  pagination: {
				el: ".swiper-pagination",
				clickable: true,
			  },
			});
	  </script>
	  <script>
		function cartComponent() {
			return {
				products: [
					{ id: 1, images: 'images/product-1.jpg',title: 'Blue Diamond Almonds Lightly Salted',discount: '14%',available: 'stock',old_price: '$25.00',present_price: 15.00,quantity: 1 },
					{ id: 2, images: 'images/product-2.jpg',title: 'Blue Diamond Almonds Lightly Salted',discount: '10%',available: 'stock',old_price: '$50.00',present_price: 25.00,quantity: 1 },
					{ id: 3, images: 'images/product-3.jpg',title: 'Blue Diamond Almonds Lightly Salted',discount: '14%',available: 'stock',old_price: '$100',present_price: 75.00,quantity: 1 },
					{ id: 4, images: 'images/product-4.jpg',title: 'Blue Diamond Almonds Lightly Salted',discount: '14%',available: 'stock',old_price: '$120.00',present_price: 100.00,quantity: 1 }
					
				],
				cart: [],
				selectedShipping: '0',
				showCheckout: false,
				addToCart(product) {
					const index = this.cart.findIndex(item => item.id === product.id);
					if (index === -1) {
						this.cart.push({ ...product });
					} else {
						this.cart[index].quantity += product.quantity;
					}
				},
				removeFromCart(index) {
					this.cart.splice(index, 1);
				},
				increaseQuantity(index) {
					this.cart[index].quantity++;
				},
				decreaseQuantity(index) {
					if (this.cart[index].quantity > 1) {
						this.cart[index].quantity--;
					}
				},
				get subtotal() {
					return this.cart.reduce((sum, item) => sum + item.present_price * item.quantity, 0);
				},
				get total() {
					return this.subtotal;
				},
				checkout() {
					this.showCheckout = true;
				},
				async downloadInvoice() {
					const { jsPDF } = window.jspdf;
					const doc = new jsPDF();

					doc.text("Invoice", 10, 10);
					doc.text(`Date: ${new Date().toLocaleDateString()}`, 10, 20);
					doc.text(`Time: ${new Date().toLocaleTimeString()}`, 10, 30);

					doc.text("Products:", 10, 40);
					this.cart.forEach((item, index) => {
						doc.text(`${index + 1}. ${item.title} - $${item.present_price.toFixed(2)} x ${item.quantity} = $${(item.present_price * item.quantity).toFixed(2)}`, 10, 50 + (index * 10));
					});

					doc.text(`Subtotal: $${this.subtotal.toFixed(2)}`, 10, 70 + (this.cart.length * 10));
					doc.text(`Shipping: $${this.selectedShipping}`, 10, 80 + (this.cart.length * 10));
					doc.text(`Total: $${(this.total + parseFloat(this.selectedShipping)).toFixed(2)}`, 10, 90 + (this.cart.length * 10));

					doc.save("invoice.pdf");
				}
				
			}
		}
      </script>
	</body>
</html>