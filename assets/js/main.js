( function () {
	'use strict';

	// Mobile menu toggle
	const toggle = document.querySelector( '.menu-toggle' );
	const nav    = document.querySelector( '.main-navigation' );

	if ( toggle && nav ) {
		toggle.addEventListener( 'click', function () {
			const isOpen = nav.classList.toggle( 'is-open' );
			toggle.setAttribute( 'aria-expanded', String( isOpen ) );
		} );

		// Close menu when clicking outside
		document.addEventListener( 'click', function ( e ) {
			if ( ! nav.contains( e.target ) ) {
				nav.classList.remove( 'is-open' );
				toggle.setAttribute( 'aria-expanded', 'false' );
			}
		} );
	}

} )();
