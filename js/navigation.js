/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */
( function() {

	var menuButton = document.querySelector('.menu-row__button i');
	var menuOverlay = document.querySelector('.menu-overlay--closed');
	var body = document.querySelector('body');

	var menuOpen = false;
	var bodyClasses = body.className;

	function closeMenu() {
		menuOverlay.className = 'menu-overlay--closed';
		menuButton.className = 'fa fa-bars';
		body.className = bodyClasses;
	}

	function openMenu() {
		menuOverlay.className = 'menu-overlay--open';
		menuButton.className = 'fa fa-close';
		body.className += ' body--menu-opened';
	}

	menuButton.onclick = function() {
		menuOpen ? closeMenu() : openMenu();
		menuOpen = !menuOpen;
	};
} )();
