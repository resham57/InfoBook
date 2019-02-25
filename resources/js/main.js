import 'datatables.net-bs4';
import 'datatables.net-bs4/css/dataTables.bootstrap4.min.css';
import 'datatables.net-responsive-bs4';

$('.card-resize-icon').on('click', function(){
	var card = $(this);
	card.parents('.card--resizable').toggleClass('card-fullscreen');
	card.toggleClass("fa-window-maximize fa-window-restore");
});

$('.card-minimize-icon').on('click', function(){
	$('.card-minimizable').toggle(500);
});