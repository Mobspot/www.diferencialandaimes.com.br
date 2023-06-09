<?php
/**
 * Jetpack Compatibility Class
 *
 * @since   2.0.25
 *
 * @package foogallery
 */

if ( ! class_exists( 'FooGallery_Jetpack_Compatibility' ) ) {

	/**
	 * Class FooGallery_Jetpack_Compatibility
	 */
	class FooGallery_Jetpack_Compatibility {

		/**
		 * FooGallery_Jetpack_Compatibility constructor.
		 */
		public function __construct() {
			// Add 'skip-lazy' class onto all image tags generated by FooGallery.
			add_filter( 'foogallery_attachment_html_image_attributes', array( $this, 'add_lazy_image_attributes' ), 10, 3 );

			// Add 'data' to allowed protocols.
			// This it to overcome a conflict with JetPack lazy images, whereby JP passes all image attributes through the wp_kses_hair function
			// This results in our image placeholder src of 'data:image/svg+xml...' being replaced with 'image/svg+xml...' which returns a 404.
			add_filter( 'kses_allowed_protocols', array( $this, 'add_data_to_allowed_protocols' ) );
		}

		/**
		 * Adds skip-lazy class to all img tags so that they get ignored by lazy loading plugins
		 *
		 * @param array                $attr                  the attributes.
		 * @param array                $args                  extra arguments.
		 * @param FooGalleryAttachment $foogallery_attachment the current attachment.
		 *
		 * @return mixed
		 */
		public function add_lazy_image_attributes( $attr, $args, $foogallery_attachment ) {
			if ( array_key_exists( 'class', $attr ) ) {
				$attr['class'] .= ' skip-lazy';
			} else {
				$attr['class'] = 'skip-lazy';
			}

			return $attr;
		}


		/**
		 * Add 'data' to allowed protocols.
		 *
		 * @param array $protocols existing allowed protocols.
		 *
		 * @return mixed
		 */
		public function add_data_to_allowed_protocols( $protocols ) {
			$protocols[] = 'data';

			return $protocols;
		}
	}
}
