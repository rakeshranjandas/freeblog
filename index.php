
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Blog Editor</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	

    <!-- WYSIWYG Editor -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js" integrity="sha512-YJgZG+6o3xSc0k5wv774GS+W1gx0vuSI/kr0E0UylL/Qg/noNspPtYwHPN9q6n59CTR/uhgXfjDXLTRI+uIryg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css" integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <style>
        /*.tags-input {
            display: flex;
            flex-wrap: wrap;
            border: 1px solid #dbdbdb;
            border-radius: 4px;
            padding: 0.5em;
        }*/
       /* .tags-input input {
            border: none;
            outline: none;
            flex-grow: 1;
        }
        .tags-input .tag {
            margin: 0.25em;
        }*/

    </style>
</head>
<body>
	<section class="section">
		<div class="columns">

			<div class="container column is-three-quarters">
				
				<div class="field">
					<input class="input is-link" type="text" placeholder="Title" />
				</div>
				
				<div class="field">
					<div class="tags-input is-grouped is-grouped-multiline" id="tagsInputContainer">
						 <input class="input is-link" id="tagsInput" type="text" placeholder="Add a tag">
					</div>
				</div>
				
				<div id="editor_area" class="field">
					<div id="editor_editor"></div>
				</div>

				<div class="field">
					<p class="content has-text-centered"><button class="button is-primary">Publish</button></p>
				</div>
			</div>

			<div id="folder_area" class="container column is-one-quarter has-background-light">
				<p class="block has-background-link-light has-text-centered">First post</p>
				<p class="block has-background-link-light has-text-centered">Second post</p>
			</div>

		</div>
	</section>

    <script>

    </script>


    <!-- Link to External JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>


<?php
