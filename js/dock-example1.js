$(function () { 
	// Dock initialize
	$('#dock').Fisheye(
		{
			maxWidth: 29,
			items: 'a',
			itemsText: 'span',
			container: '.dock-container',
			itemWidth:16,
			proximity:16,
			alignment : 'left',
			valign: 'bottom',
			halign : 'center'
		}
	);
});