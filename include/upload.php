
<section id="upload" class="four">
		<div class="container">

			<header>
					<h2>Upload Image</h2>
			</header>

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
		<form action="" method="post" enctype="multipart/form-data">
        <p>
            <label for="image">Upload image:</label>
            <!-- Við þurfum að vísa í superglobal array $_FILES til að nálgast skráarupplýsingar og skrá -->
            <input type="file" name="image[]" id="image" multipe>
        </p>
        <p>
            <input type="submit" name="upload" id="upload" value="Upload">
        </p>
    </form>

		</div>
</section>