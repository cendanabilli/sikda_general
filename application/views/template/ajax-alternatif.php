	<script src="//balupton.github.io/jquery-scrollto/lib/jquery-scrollto.js"></script>

			<!-- History.js -->
			<script src="//browserstate.github.io/history.js/scripts/bundled/html4+html5/jquery.history.js"></script>

			<!-- Ajaxify -->
			<script src="//rawgithub.com/browserstate/ajaxify/master/ajaxify-html5.js"></script>

						<script type="text/javascript">

			    //var directory = 'content/'; //directory of the content we want to ajax in
			    var state = History.getState();

			    //for when they click on an ajax link
			    $('.m-menu__link ajaxify').on('click', function(e){
			    	var $this = $(this);
			        var href = $this.attr('href'); // use the href value to determine what content to ajax in
			        $.ajax({
			            url: href, // create the necessary path for our ajax request
			            dataType: 'html',
			            success: function(data) {
			                $('#content').html(data); // place our ajaxed content into our content area
			                History.pushState(null,href, href ); // change the url and add our ajax request to our history
			            }
			        });
			        e.preventDefault(); // we don't want the anchor tag to perform its native function
			    });

			    //for when they hit the back button
			    $(window).on('statechange', function(){
			        state = History.getState(); // find out what we previously ajaxed in
			        $.ajax({
			            url:  state.title, //create our path
			            dataType: 'html',
			            success: function(data) {
			            	$('#content').html(data);
			            }
			        });
			    });
			</script>