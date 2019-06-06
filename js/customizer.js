/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
	
	//masthead subheading / text
	wp.customize('trio_front_page_text', function(value){
		value.bind(function(to){
			$('.masthead_sub_text').text(to);
		});
	});	

	wp.customize('trio_header_button_link', function(value){
		value.bind(function(to){
			$('#header_button_link').attr('href', to);
		});
	});

	wp.customize('trio_header_button_text', function(value){
		value.bind(function(to){
			$('#header_button_link').text(to);
		});
	});

} )( jQuery );
