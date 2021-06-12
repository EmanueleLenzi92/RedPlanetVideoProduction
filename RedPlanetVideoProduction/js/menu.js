$( document ).ready(function() {


var posNav = 0;       // get initial position of navbar


    var currentScroll = $(window).scrollTop(); // get current position

    if (currentScroll > posNav) {           // apply position: fixed if you
        $('.addBgNav').css({                      // scroll to that element or below it
            
			WebkitTransition : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			MozTransition    : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			MsTransition     : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			OTransition      : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			transition       : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			background: '#f7f7f9',
			'box-shadow': '0 8px 6px -6px #999'
			
        });

    } else {                                   // apply position: static
        $('.addBgNav').css({                      // if you scroll above it
			
			WebkitTransition : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			MozTransition    : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			MsTransition     : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			OTransition      : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			transition       : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			background: 'rgba(0,0,0,0)',
			'box-shadow': 'none'
			

        });

    }





$(window).scroll(function() {                  // assign scroll event listener

    var currentScroll = $(window).scrollTop(); // get current position

    if (currentScroll > posNav) {           // apply position: fixed if you
        $('.addBgNav').css({                      // scroll to that element or below it
            
			WebkitTransition : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			MozTransition    : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			MsTransition     : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			OTransition      : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			transition       : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			background: '#f7f7f9',
			'box-shadow': '0 8px 6px -6px #999'
			
        });

    } else {                                   // apply position: static
        $('.addBgNav').css({                      // if you scroll above it
			
			WebkitTransition : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			MozTransition    : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			MsTransition     : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			OTransition      : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			transition       : 'background 1s ease-in-out, box-shadow 1s ease-in-out',
			background: 'rgba(0,0,0,0)',
			'box-shadow': 'none'
			

        });

    }

});


});