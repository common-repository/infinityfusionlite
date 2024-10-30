;( function( $, window, document, undefined ) {

	'use strict';

	window.resp = {
		init: function() {
			var _self = this;

			// cached selectors
			this.$html = $( document.documentElement );
			this.$body = $( document.body );
			this.$wpwrap = $( '#wpwrap' );
			this.$wpbody = $( '#wpbody' );
			this.$adminmenu = $( '#adminmenu' );
			this.$overlay = $( '#resp-overlay' );
			this.$toolbar = $( '#wp-toolbar' );
			this.$toolbarPopups = this.$toolbar.find( 'a[aria-haspopup="true"]' );

			// jQuery Mobile swipe event
			$.event.special.swipe.scrollSupressionThreshold = 100; // Default: 30px; More than this horizontal displacement, and we will suppress scrolling.
			$.event.special.swipe.durationThreshold = 1000; // Default: 1000ms;  More time than this, and it isn't a swipe.
			$.event.special.swipe.horizontalDistanceThreshold = 100; // Default: 30px; Swipe horizontal displacement must be more than this.
			$.event.special.swipe.verticalDistanceThreshold = 75; // Default: 75px; Swipe vertical displacement must be less than this.

			// Modify functionality based on custom activate/deactivate event
			this.$html
				.on( 'activate.resp', function() { _self.activate(); } )
				.on( 'deactivate.resp', function() { _self.deactivate(); } );

			// Remove browser chrome
			window.scrollTo( 0, 1 );

			// Trigger custom events based on active media query.
			this.matchMedia();
			$( window ).on( 'resize', $.proxy( this.matchMedia, this ) );

			// workaround to resize the PressThis window back to a width of 770
			// the 'shortcut_link' filter isn't enought, because press-this.php
			// calls window.resizeTo() on $(document).ready()
			if ( this.$body.hasClass( 'press-this' ) ) {
				setTimeout( function() { window.resizeTo( 770, 580 ); }, 100 );
			}
		},

		activate: function() {
			this.modifySidebarEvents();
			this.disableDraggables();
			this.insertHamburgerButton();
			this.movePostSearch();
		},

		deactivate: function() {
			this.enableDraggables();
			this.removeHamburgerButton();
			this.restorePostSearch();
		},

		matchMedia: function() {
			clearTimeout( this.resizeTimeout );
			this.resizeTimeout = setTimeout( function() {

				if ( ! window.matchMedia )
					return;

				if ( window.matchMedia( '(max-width: 782px)' ).matches ) {
					if ( resp.$html.hasClass( 'touch' ) )
						return;

					resp.$html.addClass( 'touch' ).trigger( 'activate.resp' );
					window.stickymenu && stickymenu.disable();

					if ( ! resp.$body.hasClass( 'auto-fold' ) )
						resp.$body.addClass( 'auto-fold' );

					$( document ).on( 'swiperight.resp', function() {
						resp.$wpwrap.addClass( 'resp-open' );
					}).on( 'swipeleft.resp', function() {
						resp.$wpwrap.removeClass( 'resp-open' );
					});

				} else {
					if ( ! resp.$html.hasClass( 'touch' ) )
						return;

					resp.$html.removeClass( 'touch' ).trigger( 'deactivate.resp' );
					window.stickymenu && stickymenu.enable();

					$( document ).off( 'swiperight.resp swipeleft.resp' );
				}

				if ( window.matchMedia( '(max-width: 480px)' ).matches ) {
					if ( resp.$overlay.length == 0 ) {
						resp.$overlay = $( '<div id="resp-overlay"></div>' )
							.insertAfter( '#wpcontent' )
							.hide()
							.on( 'click.resp', function() {
								resp.$toolbar.find( '.menupop.hover' ).removeClass( 'hover' );
								$( this ).hide();
							});
					}
					resp.$toolbarPopups.on( 'click.resp', function() {
						resp.$overlay.show();
					});
				} else {
					resp.$toolbarPopups.off( 'click.resp' );
					resp.$overlay.hide();
				}

			}, 150 );
		},

		modifySidebarEvents: function() {
			this.$body.off( '.wp-mobile-hover' );
			this.$adminmenu.find( 'a.wp-has-submenu' ).off( '.wp-mobile-hover' );

			var scrollStart = 0;
			this.$adminmenu.on( 'touchstart.resp', 'li.wp-has-submenu > a', function() {
				scrollStart = $( window ).scrollTop();
			});

			this.$adminmenu.on( 'touchend.resp', 'li.wp-has-submenu > a', function( e ) {
				e.preventDefault();

				if ( $( window ).scrollTop() !== scrollStart )
					return false;

				$( this ).find( 'li.wp-has-submenu' ).removeClass( 'selected' );
				$( this ).parent( 'li' ).addClass( 'selected' );
			});
		},

		disableDraggables: function() {
			this.$wpbody
				.find( '.hndle' )
				.removeClass( 'hndle' )
				.addClass( 'hndle-disabled' );
		},

		enableDraggables: function() {
			this.$wpbody
				.find( '.hndle-disabled' )
				.removeClass( 'hndle-disabled' )
				.addClass( 'hndle' );
		},

		insertHamburgerButton: function() {
			this.$wpbody
				.find( '.wrap' )
				.prepend( '<div id="resp-toggle"></div>' );

			this.hamburgerButtonView = new Moby6HamburgerButton( { el: $( '#resp-toggle' ) } );
		},

		removeHamburgerButton: function() {
			if ( this.hamburgerButtonView !== undefined )
				this.hamburgerButtonView.destroy();
		},

		movePostSearch: function() {
			this.searchBox = this.$wpbody.find( 'p.search-box' );
			if ( this.searchBox.length ) {
				this.searchBox.hide();
				if ( this.searchBoxClone === undefined ) {
					this.searchBoxClone = this.searchBox.first().clone().insertAfter( 'div.tablenav.bottom' );
				}
				this.searchBoxClone.show();
			}
		},

		restorePostSearch: function() {
			if ( this.searchBox !== undefined ) {
				this.searchBox.show();
				if ( this.searchBoxClone !== undefined )
					this.searchBoxClone.hide();
			}
		}
	}

	$( document ).ready( $.proxy( resp.init, resp ) );

	/* Hamburger button view */
	var Moby6HamburgerButton = Backbone.View.extend({
		events: {
			'click': 'toggleSidebar'
		},

		initialize: function() {
			this.render();
		},

		render: function() {
			// Needs to be in a translatable template.
			this.$el.html( '<a href="#" title="Menu"></a>' );
			return this;
		},

		toggleSidebar: function(e) {
			e.preventDefault();
			resp.$wpwrap.toggleClass( 'resp-open' );
		},

		destroy: function() {
			this.undelegateEvents();
			this.$el.removeData().unbind();
			this.remove();
			Backbone.View.prototype.remove.call( this );
		}
	});

})( jQuery, window, document );