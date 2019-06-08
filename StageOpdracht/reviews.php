<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reviews</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="review_style.css">
</head>
<body>
	<? include "navigation.php"; ?>
	<h1 class="header">Reviews</h1>
	<div class="container">
		


		<div class="form_container">
			<form action="connect_review.php" method="post">
				<input class="form_item name_input" placeholder="Name" type="text" name="name" minlength="2" maxlength="20" required>
				<textarea class="form_item review_input" placeholder="Review" type="text" name="review" rows="3" cols="20" required></textarea>
				<div class="submit_wrapper"><input class="form_item submit" type="submit" name="submit"></div>
			</form>
		</div>
		
		<? include "pull_review.php";

		$all_reviews = collect_reviews();

		foreach ($all_reviews as $review) {
		?>
			<div class="review">
				<p class="review_name"><? echo $review["name"]; ?></p>
				<p class="review_text"><? echo $review["review"]; ?></p>
			</div>
		<? } ?>
		<div class="review">
			<p class="review_name">Lorem Ipsum</p>
			<p class="review_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

	</div>

	<footer>
		<a href="https://github.com/ChancellorXeno" class="footer_link footer_item">My GitHub</a>
		<p class="footer_item">© Ricardo Veen</p>
		<p class="compar">Created for <a href="https://www.compar.nl/">@ Compar</a></p>
	</footer>



</body>