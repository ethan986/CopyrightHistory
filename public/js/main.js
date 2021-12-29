// CALLUMS STUFF 

// Overlay Code

	// General Overlay Code

		// Closes the Search input overlay when 'escape' is pressed
		$(document).keyup(function(e) {
			// checks current key pressed (27 is 'esc')
			if (e.keyCode == 27) {
				// closes any given overlay if they are open if not does nothing
				close_search();
				close_login();
			};
		});

	// Code for Login Box Overlay

		// opens the login overlay
		function open_login() {
			// shows login box overlay with a fade in animation
			$('#overlay_login').fadeIn();
			// shows backdrop for login overlay
			$('#login-overlay').fadeIn();
		}
		// closes the login overlay
		function close_login() {
			// hides login box overlay with fade out animation
			$('#overlay_login').fadeOut();
			// hides backdrop for login overlay
			$('#login-overlay').fadeOut();
		}

	// Code for search bar overlay
		// opens the search bar overlay
		function open_search() {
			// shows search bar overlay with a slide down animation
			$("#search-bar").slideDown("fast");
			// shows translucent backdrop for search bar overlay
			$("#overlay_search").fadeIn();
		}
		// closes the search bar overlay
		function close_search() {
			// removes search bar overlay with slide animation
			$("#search-bar").slideUp("fast");
			// removes grey translucent backdrop with fade animation
			$("#overlay_search").fadeOut();
		}

		// Code for advanced search section of overlay

			// Code to Toggle between "Open Advanced Options and Close Advanced Options" Text
			// when button is pressed
			$.fn.toggleText = function(t1,t2){
				if (this.text() == t1){
					this.text(t2);
				} else {
					this.text(t1);
				}
				return this;
			}

			// Toggles between advanced options open and closed
			function toggle_advanced() {
				// this function ensures there is no inline css present that would override the
				// toggled class (below in the code there is a part which sets the css to a fixed
				// height, this code is used to get rid of that before closing to ensure the height
				// of the search box is decreased on clicking close advanced options)
				$('#search-bar').css('height','');

				// the toggle class functions will increase/decrease the size of the search bar
				// box depending on the previous state of the search bar box (open/close to close/open)
				$('#search-bar').toggleClass("advanced-closed");
				$('#search-bar').toggleClass("advanced-open");

				// toggle text will change the text in the Open/Close advanced options button
				// depending on the current state of the button
				$('#advanced').toggleText('Open Advanced Options','Close Advanced Options');
				// This will show hidden content in the Advanced option section of the search
				// overlay
				$('.options-ext').toggle();
			}

			$(document).ready(function() {

				// this code will perform an action on the press
				// of an advanced options section
				$('.a-s-style').click(function(){

					// This will show the content under the advanced
					// options buttons when pressed and will close
					// them when pressed again.
					$(this).next().toggleClass("a-s-content");

					// This code will ensure the advanced search options
					// when expanded will be restricted to 75% of the screens
					// height and not spill out further
					$('#search-bar').css("height",'');
					var window_height = $(window).height() * 0.75;
					if (parseInt($("#search-bar").css("height"),10) > window_height){
						console.log('yes');
						$("#search-bar").css("height",window_height);
					}

				})
			});