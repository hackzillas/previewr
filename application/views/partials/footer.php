		<?php if (URI::current() != '/'): ?>
			<footer id="footer">
				<p>&copy; <?php echo date('Y'); ?>	Hackzillas, bitches.</p>
			</footer>
		<?php endif; ?>

		</div><!-- /container -->

		<?php echo Asset::container('footer')->scripts(); ?>

	</body>
</html>