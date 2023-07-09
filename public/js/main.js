
(function () {
	$(document).ready(function(){
		$('.Tab-content_item').hide();
		$('.Tab-content_item:first').fadeIn();
		$('.Tabs-listItem').click(function(){
			let path = $(this).children('a').attr('href');
            $('.Tab-content_item').hide();
			$(path).fadeIn();
            return false;
		})
		
	})
	}())
	function cancel()
	{
		history.back();
	}
	function onchange_selected() {
		let obj = document.getElementById("selected_box");
		obj.options[obj.selectedIndex].value && (window.location = obj.options[obj.selectedIndex].value)
	}
