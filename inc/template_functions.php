<?php
function onepress_sanitize_repeatable_data_field($input, $setting)
{
	$control = $setting->manager->get_control($setting->id);

	$fields = $control->fields;
	if (is_string($input)) {
		$input = json_decode(wp_unslash($input), true);
	}
	$data = wp_parse_args($input, array());

	if (!is_array($data)) {
		return false;
	}
	if (!isset($data['_items'])) {
		return false;
	}
	$data = $data['_items'];

	foreach ($data as $i => $item_data) {
		foreach ($item_data as $id => $value) {

			if (isset($fields[$id])) {
				switch (strtolower($fields[$id]['type'])) {
					case 'text':
						$data[$i][$id] = sanitize_text_field($value);
						break;
					case 'url':
						$data[$i][$id] = esc_url($value);
						break;
					case 'textarea':
					case 'editor':
						$data[$i][$id] = wp_kses_post($value);
						break;
					case 'color':
						$data[$i][$id] = sanitize_hex_color_no_hash($value);
						break;
						// case 'coloralpha':
						// 	$data[ $i ][ $id ] = onepress_sanitize_color_alpha( $value );
						// 	break;
						// case 'checkbox':
						// 	$data[ $i ][ $id ] = onepress_sanitize_checkbox( $value );
						// 	break;
						// case 'select':
						// 	$data[ $i ][ $id ] = '';
						// 	if ( is_array( $fields[ $id ]['options'] ) && ! empty( $fields[ $id ]['options'] ) ) {
						// 		// if is multiple choices
						// 		if ( is_array( $value ) ) {
						// 			foreach ( $value as $k => $v ) {
						// 				if ( isset( $fields[ $id ]['options'][ $v ] ) ) {
						// 					$value [ $k ] = $v;
						// 				}
						// 			}
						// 			$data[ $i ][ $id ] = $value;
						// 		} else { // is single choice
						// 			if ( isset( $fields[ $id ]['options'][ $value ] ) ) {
						// 				$data[ $i ][ $id ] = $value;
						// 			}
						// 		}
						// 	}

						// 	break;
					case 'radio':
						$data[$i][$id] = sanitize_text_field($value);
						break;
					case 'media':
						$value = wp_parse_args(
							$value,
							array(
								'url' => '',
								'id' => false,
							)
						);
						$value['id'] = absint($value['id']);
						$data[$i][$id]['url'] = sanitize_text_field($value['url']);

						if ($url = wp_get_attachment_url($value['id'])) {
							$data[$i][$id]['id']   = $value['id'];
							$data[$i][$id]['url']  = $url;
						} else {
							$data[$i][$id]['id'] = '';
						}

						break;
					default:
						$data[$i][$id] = wp_kses_post($value);
				}
			} else {
				$data[$i][$id] = wp_kses_post($value);
			}

			if (is_array($data) && is_array($fields) && count($data[$i]) != count($fields)) {
				foreach ($fields as $k => $f) {
					if (!isset($data[$i][$k])) {
						$data[$i][$k] = '';
					}
				}
			}
		}
	}

	return $data;
}
if ( ! function_exists( 'get_media_url' ) ) {
	function get_media_url( $media = array(), $size = 'full' ) {
		$media = wp_parse_args(
			$media,
			array(
				'url' => '',
				'id' => '',
			)
		);
		$url = '';
		if ( $media['id'] != '' ) {
			if ( strpos( get_post_mime_type( $media['id'] ), 'image' ) !== false ) {
				$image = wp_get_attachment_image_src( $media['id'], $size );
				if ( $image ) {
					$url = $image[0];
				}
			} else {
				$url = wp_get_attachment_url( $media['id'] );
			}
		}
		if ( $url == '' && $media['url'] != '' ) {
			$id = attachment_url_to_postid( $media['url'] );
			if ( $id ) {
				if ( strpos( get_post_mime_type( $id ), 'image' ) !== false ) {
					$image = wp_get_attachment_image_src( $id, $size );
					if ( $image ) {
						$url = $image[0];
					}
				} else {
					$url = wp_get_attachment_url( $id );
				}
			} else {
				$url = $media['url'];
			}
		}
		return $url;
	}
}


if (!function_exists('template_data')) {
	/**
	 * Get's the data in the theme_mod and adds default values if necessary
	 *
	 * @since 1.1.4
	 * @return array
	 */
	function template_data($section, $default_fields)
	{

		$array = get_theme_mod($section);
		if (is_string($array)) {
			$array = json_decode($array, true);
		}
		if (!empty($array) && is_array($array)) {
			foreach ($array as $k => $v) {
				$array[$k] = wp_parse_args(
					$v,
					$default_fields
				);
			}
		}
		return $array;
	}
}

if ( ! function_exists( 'get_donate_data' ) ) {
	/**
	 * Get Donate Data
	 *
	 * @since 1.1.4
	 * @return array
	 */
	function get_donate_data($section) {
		return template_data($section, array(
			'item' => ''
		));
	}
}

if ( ! function_exists( 'get_example_data' ) ) {
	/**
	 * Get Example Data
	 *
	 * @since 1.1.4
	 * @return array
	 */
	function get_example_data($section) {
		return template_data($section, array(
      'title' => '',
			'question' => '',
            'answer' => '',
            'link' => ''
    ));
  }
}
      
if ( ! function_exists( 'get_class_event_data' ) ) {
	/**
	 * Get Class and Events Data
	 *
	 * @since 1.1.4
	 * @return array
	 */
	function get_class_event_data($section) {
		return template_data($section, array(
			'Headline' => '',
        	'Location' => '',
			'Event_Type' => '',
		    'Event_Date' => '',
           	'Paragraph' => '',
           	'Cost'  => '',
           	'Time' => '',
           	'Link'  => ''
		));
	}
}

if(!function_exists('get_gs_data')) {
	/**
	 * Get Garden Sites Data
	 *
	 * @since 1.1.4
	 * @return array
	 */
	function get_gs_data($section) {
		return template_data($section, array(
			'Site_Number' => '',
        	'Site_Name' => '',
			'Plot_Slug' => '', 
			'Plot_Capacity' => '',
		    'Location' => ''
		));
	}
}

if ( ! function_exists( 'get_plant_sale_data' ) ) {
	/**
	 * Get Example Data
	 *
	 * @since 1.1.4
	 * @return array
	 */
	function get_plant_sale_data($section) {
		return template_data($section, array(
			'plant-sale-day-of-week' => '',
			'plant-sale-date' => '',
            'plant-sale-time' => '',
		));
	}
}

if (!function_exists('get_media_url')) {
	function get_media_url($media = array(), $size = 'full')
	{
		$media = wp_parse_args(
			$media,
			array(
				'url' => '',
				'id' => '',
			)
		);
		$url = '';
		if ($media['id'] != '') {
			if (strpos(get_post_mime_type($media['id']), 'image') !== false) {
				$image = wp_get_attachment_image_src($media['id'], $size);
				if ($image) {
					$url = $image[0];
				}
			} else {
				$url = wp_get_attachment_url($media['id']);
			}
		}
		if ($url == '' && $media['url'] != '') {
			$id = attachment_url_to_postid($media['url']);
			if ($id) {
				if (strpos(get_post_mime_type($id), 'image') !== false) {
					$image = wp_get_attachment_image_src($id, $size);
					if ($image) {
						$url = $image[0];
					}
				} else {
					$url = wp_get_attachment_url($id);
				}
			} else {
				$url = $media['url'];
			}
		}
		return $url;
	}
}

if (!function_exists('get_growing_tips_data')) {
	function get_growing_tips_data($section)
	{
		return template_data($section, array(
			'topic' => '',
			'link' => ''
		));
	}
}

if ( ! function_exists( 'get_new_items_data' ) ) {
	/**
	 * Get New items Data
	 *
	 * @since 1.1.4
	 * @return array
	 */
	function get_new_items_data($section) {
		return template_data($section, array(
			'ps-new-item-name' => '',
			'ps-new-item-category' => '',
		));
	}
}

if (!function_exists('get_our_people_data')) {
	/**
	 * Get Our People Data
	 *
	 * @since 1.1.4
	 * @return array
	 */
	function get_our_people_data($section)
	{
		return template_data($section, array(
			'member_name' => '',
			'member_title' => ''
		));
	}
}

if (!function_exists('get_mastcomp_data')) {
	function get_mastcomp_data($section)
	{
		if ($section ==  'master_composter_handouts_guidelines') {
			return template_data($section, array(
				'hgpage_title' => '',
				'hgpage_description' => '',
				'hgpage_link' => ''
			));
		} elseif ($section == 'master_composter_reports_presentations_specialprojects') {
			return template_data($section, array(
				'rpspage_title' => '',
				'rpspage_description' => '',
				'rpspage_link' => ''
			));
		} elseif ($section == 'master_composter_partners_advisors') {
			return template_data($section, array(
				'pa_name' => '',
				'pa_link' => ''
			));
		} elseif ($section == 'master_composter_contacts') {
			return template_data($section, array(
				'contact_name' => '',
				'contact_title' => '',
				'contact_email' => ''
			));
		}
	}
}

if ( ! function_exists( 'get_discont_items_data' ) ) {
	/**
	 * Get Discontinued Data
	 *
	 * @since 1.1.4
	 * @return array
	 */
  function get_discont_items_data($section) {
		return template_data($section, array(
			'ps-discont-item-name' => '',
			'ps-discont-item-cateogry' => '',
		));
	}
}

if (!function_exists('get_example_data')) {
	function get_example_data($section)
	{
		return template_data($section, array(
			'question' => '',
			'answer' => '',
			'link' => ''
    ));
  }
}

	
