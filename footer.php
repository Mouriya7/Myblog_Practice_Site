		<!-- Let me know -->
		<section id="conta">
			<div class="leme">
				<h1>Let me know what's on your mind</h1>
				<form action="form.php">
					<div class="leme-com">
						<div class="leme-lf">
							<label>First Name</label><br />
							<input type="text" name="firstname"><br />
							<label>Email *</label><br />
							<input type="text" name="email"><br />
						</div>
						<div class="leme-rt">
							<label>Last Name</label><br />
							<input type="text" name="lastname"><br />
							<label>Leave us a message</label><br />
							<input type="text" name="message"><br />
						</div>
					</div>
					<button id="bu" name="submit">Submit</button>
				</form>
			</div>


			<!-- Footer -->
			<footer class="fot">
				<p>Copyright © <?php echo date('Y'); ?> by Turning Heads. Proudly created with wix</p>
			</footer>
			<?php wp_footer(); ?>
		</section>


		<script>
			window.onscroll = function () { myFunction() };

			var header = document.getElementById("myHeader");
			var sticky = header.offsetTop;

			function myFunction() {
				if (window.pageYOffset > sticky) {
					header.classList.add("sticky");
				} else {
					header.classList.remove("sticky");
				}
			}
		</script>






</body>

</html>