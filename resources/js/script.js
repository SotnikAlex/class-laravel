document.querySelector('.remove-img').addEventListener('click', function(e){
	e.preventDefault();
	document.querySelector('.thumbnail').remove();
	this.remove();
	document.querySelector('[name="removeImg"]').value = 'remove';
});