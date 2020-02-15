const removeImg = document.querySelector('.remove-img')
if (removeImg)
{
	removeImg.addEventListener('click', function(e){
		e.preventDefault();
		document.querySelector('.thumbnail').remove();
		this.remove();
		document.querySelector('[name="removeImg"]').value = 'remove';
	});
}
 CKEDITOR.replace( 'content' );