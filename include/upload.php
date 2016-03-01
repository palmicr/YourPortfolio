
<section id="upload" class="four">
		<div class="container">

		<?php
        // Keyrir bara ef það er búið að smella á submit 
        if (isset($result)) {
            echo '<ul>';
            //  Birta skilboðin úr messages array (Upload class).
            foreach ($result as $message) {
                echo "<li>$message</li>";
            }
            echo '</ul>';
        }
    ?>
		<form action="file_upload.php" method="post" enctype="multipart/form-data" id="uploadImage">
		 		<ul>
		 				<li>
									<label for="usermail">Image Title</label>
									<input type="email" name="usermail" required>
						</li>
						<li>
		 				<label for="image">Upload images:</label>
		 				<input type="file" name="fileToUplad" id="fileToUplad">
		 				</li>
		 				<input type="submit" name="upload" id="upload" value="Upload">
		 		</ul>
		</form>

		</div>
</section>