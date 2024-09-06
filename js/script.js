


$(document).ready(function() {

	initEditor();

	initTagsInput();

})


function initEditor() {
	
	$('#editor_editor').trumbowyg();

}

function initTagsInput() {
	
	const tagsInput = $('#tagsInput');
    
    const tags = [];
    
    // Function to add a new tag
    function addTag(tag) {
        if (tags.includes(tag)) return;
        
        tags.push(tag);
        
        const tagElement = $('<span/>');
        tagElement.addClass('tag is-info m-2');
        tagElement.text(tag);
        
        const deleteBtn = $('<button/>');
        deleteBtn.addClass('delete is-small');
        deleteBtn.on('click', function() {
            $(this).closest('span').remove();
            tags.splice(tags.indexOf(tag), 1);
        });
        
        tagElement.append(deleteBtn);
        tagsInput.after(tagElement);

        tagsInput.val('');
    }

    // Handle pressing Enter to add a tag
    tagsInput.on('keypress', function(e) {
        if (e.key === 'Enter' && tagsInput.val().trim()) {
            e.preventDefault();
            addTag(tagsInput.val().trim());
        }
    });

}
