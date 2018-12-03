<?php 

# Text
if (!function_exists('dilaz_mb_field_text')) {
	function dilaz_mb_field_text($field) {
		
		extract($field);
		
		$size  = isset($args['size']) ? intval($args['size']) : '30';
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$output = $prefix .'<input type="text" name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" class="'. esc_attr($class) .'" value="'. $meta .'" size="'. esc_attr($size) .'"  />'. $suffix .''. $desc2 .'';
		
		echo $output;
	}
}

# Password
if (!function_exists('dilaz_mb_field_password')) {
	function dilaz_mb_field_password($field) {
		
		extract($field);
		
		$size  = isset($args['size']) ? intval($args['size']) : '30';
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$output = $prefix .'<input type="password" name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" class="'. esc_attr($class) .'" value="'. $meta .'" size="'. esc_attr($size) .'"  />'. $suffix .''. $desc2 .'';
		
		echo $output;
	}
}

# Hidden
if (!function_exists('dilaz_mb_field_hidden')) {
	function dilaz_mb_field_hidden($field) {
		
		extract($field);
		
		$size  = isset($args['size']) ? intval($args['size']) : '30';
		$class = isset($class) ? sanitize_html_class($class) : '';
		$value = $value != '' && $value != $meta ? $value : $meta;
		
		$output = $prefix .'<input type="hidden" name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" class="'. esc_attr($class) .'" value="'. $value .'" size="'. esc_attr($size) .'"  />';
		
		echo $output;
	}
}

# Paragraph
if (!function_exists('dilaz_mb_field_paragraph')) {
	function dilaz_mb_field_paragraph($field) {
		
		extract($field);
		
		$size  = isset($args['size']) ? $args['size'] : '30';
		$value = $value != '' && $value != $meta ? $value : $meta;
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$output = $desc;
		$output .= $desc2;
		$output .= '<p class="dilaz-mb-paragraph '. $class .'">'. wpautop($value) .'</p>';
		
		echo $output;
	}
}

# URL
if (!function_exists('dilaz_mb_field_url')) {
	function dilaz_mb_field_url($field) {
		
		extract($field);
		
		$size  = isset($args['size']) ? intval($args['size']) : '30';
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$output = $prefix .'<input type="text" name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" class="'. esc_attr($class) .'" value="'. esc_url($meta). '" size="'. esc_attr($size) .'"  />'. $suffix .''. $desc2 .'';
		
		echo $output;
	}
}

# Email
if (!function_exists('dilaz_mb_field_email')) {
	function dilaz_mb_field_email($field) {
		
		extract($field);
		
		$size  = isset($args['size']) ? intval($args['size']) : '30';
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$output = $prefix .'<input type="email" name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" class="'. esc_attr($class) .'" value="'. esc_attr($meta). '" size="'. esc_attr($size) .'"  />'. $suffix .''. $desc2 .'';
		
		echo $output;
	}
}

# Number
if (!function_exists('dilaz_mb_field_number')) {
	function dilaz_mb_field_number($field) {
		
		extract($field);
		
		$size  = isset($args['size']) ? intval($args['size']) : '5';
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$output = $prefix .'<input type="text" name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" class="'. esc_attr($class) .'" value="'. $meta .'" size="'. esc_attr($size) .'" />'. $suffix .''. $desc2 .'';
		
		echo $output;
	}
}

# Stepper
if (!function_exists('dilaz_mb_field_stepper')) {
	function dilaz_mb_field_stepper($field) {
		
		extract($field);
		
		$size       = isset($args['size']) ? intval($args['size']) : '3';
		$class      = isset($class) ? sanitize_html_class($class) : '';
		$wheel_step = isset($args['wheel_step']) ? 'data-wheel-step="'. intval($args['wheel_step']) .'"' : '';
		$arrow_step = isset($args['arrow_step']) ? 'data-arrow-step="'. intval($args['arrow_step']) .'"' : '';
		$step_limit = isset($args['step_limit']) ? 'data-limit="['. $args['step_limit'] .']"' : '';
		
		$output = $prefix .'<input type="text" name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" value="'. $meta .'" size="'. esc_attr($size) .'" class="dilaz-stepper '. $class .'" '. $wheel_step .' '. $arrow_step .' '. $step_limit .'  />'. $suffix .''. $desc2 .'';
		
		echo $output;
	}
}

# Code
if (!function_exists('dilaz_mb_field_code')) {
	function dilaz_mb_field_code($field) {
		
		extract($field);
		
		$class = isset($class) ? sanitize_html_class($class) : '';
		$cols  = isset($args['cols']) ? intval($args['cols']) : '50';
		$rows  = isset($args['rows']) ? intval($args['rows']) : '5';
		
		$output = $prefix .'<textarea name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" class="'. esc_attr($class) .'" cols="'. esc_attr($cols) .'" rows="'. esc_attr($rows) .'">'. esc_textarea($meta) .'</textarea>'. $suffix .''. $desc2 .'';
		
		echo $output;
	}
}

# Textarea
if (!function_exists('dilaz_mb_field_textarea')) {
	function dilaz_mb_field_textarea($field) {
		
		extract($field);
		
		$class = isset($class) ? sanitize_html_class($class) : '';
		$cols  = isset($args['cols']) ? intval($args['cols']) : '50';
		$rows  = isset($args['rows']) ? intval($args['rows']) : '5';
		
		$output = $prefix .'<textarea name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" class="'. esc_attr($class) .'" cols="'. esc_attr($cols) .'" rows="'. esc_attr($rows) .'">'. esc_textarea($meta) .'</textarea>'. $suffix .''. $desc2 .'';
		
		echo $output;
	}
}

# Editor
if (!function_exists('dilaz_mb_field_editor')) {
	function dilaz_mb_field_editor($field) {
		
		extract($field);
		
		$rows  = isset($args['rows']) ? intval($args['rows']) : '10';
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$settings = array(
			'textarea_name' => esc_attr($id),
			'textarea_rows' => $rows,
			'editor_class'  => $class,
			'tinymce'       => array('plugins' => 'wordpress')
		);
		
		$output = wp_editor($meta, $id, $settings);
		
		echo $output;
	}
}

# Radio
if (!function_exists('dilaz_mb_field_radio')) {
	function dilaz_mb_field_radio($field) {
		
		extract($field);
		
		$output = '';
		
		$class  = isset($class) ? sanitize_html_class($class) : '';
		$inline = isset($args['inline']) && $args['inline'] == true ? 'inline' : '';
		
		if ($inline == '') {
			$cols = 'style="width:100%;display:block"'; # set width to 100% if fields are not inline
		} else {
			$cols = isset($args['cols']) ? 'style="width:'. ceil(100/intval($args['cols'])) .'%"' : 'style="width:30%"';
		}
		
		foreach ( (array)$options as $key => $val ) {
			$checked = checked($meta, $key, false);			
			$state = $checked ? 'focus' : '';
			$output .= '<label for="'. esc_attr($id .'-'. $key) .'" class="dilaz-mb-option '. $inline .' '. $class .'" '. $cols .'><input type="radio" name="'. esc_attr($id) .'" id="'. esc_attr($id .'-'. $key) .'" class="dilaz-mb-input dilaz-mb-radio '. $state .'" value="'. $key .'" '. $checked .'  /><span class="radio"></span><span>'. $val .'</span></label>';
		}
		
		$output .= ''. $suffix .''. $desc2 .'';

		echo $output;
	}
}

# Checkbox
if (!function_exists('dilaz_mb_field_checkbox')) {
	function dilaz_mb_field_checkbox($field) {
		
		extract($field);
		
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$state = checked($meta, true, false) ? 'focus' : '';
		$output  = $prefix .'<label for="'. esc_attr($id) .'" class="dilaz-mb-option '. $class .'"><input type="checkbox" name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" class="dilaz-mb-checkbox '. $class .' '. $state .'" '. checked($meta, true, false) .' /><span class="checkbox"></span>'. $suffix .'</label>'. $desc2 .'';
		
		echo $output;
	}
}

# Multicheckbox
if (!function_exists('dilaz_mb_field_multicheck')) {
	function dilaz_mb_field_multicheck($field) {
		
		extract($field);
		
		$class  = isset($class) ? sanitize_html_class($class) : '';
		$std    = isset($std) && is_array($std) ? array_map('sanitize_text_field', $std) : array();
		$inline = isset($args['inline']) && $args['inline'] == true ? 'inline' : '';
		
		if ($inline == '') {
			$cols = 'style="width:100%;display:block"'; # set width to 100% if fields are not inline
		} else {
			$cols = isset($args['cols']) ? 'style="width:'. ceil(100/intval($args['cols'])) .'%"' : 'style="width:30%"';
		}
		
		$output = '';
		
		foreach ((array)$options as $option_value => $options_name) {
			
			$option_value = sanitize_key($option_value);
			
			$checked = isset($meta[$option_value]) ? checked($meta[$option_value], true, false) : '';
			
			$state = $checked ? 'focus' : '';
			$output .= '<label for="'. esc_attr($id .'-'. $option_value) .'" class="dilaz-mb-option '. $inline .' '. $class .'" '. $cols .'><input type="checkbox" value="'. $option_value .'" name="'. esc_attr($id .'['. $option_value .']') .'" id="'. esc_attr($id .'-'. $option_value) .'" class="dilaz-mb-input dilaz-mb-checkbox '. $state .'" '. $checked .'  /><span class="checkbox"></span><span>'. $options_name .'</span></label>';						
		}
		
		echo $output;
	}
}

# Select
if (!function_exists('dilaz_mb_field_select')) {
	function dilaz_mb_field_select($field) {
		
		extract($field);
		
		$output = '';
		
		$class         = isset($class) ? sanitize_html_class($class) : '';
		$select2_class = isset($args['select2']) ? sanitize_html_class($args['select2']) : '';
		$select2_width = isset($args['select2width']) ? 'data-width="'. sanitize_text_field($args['select2width']) .'"' : 'data-width="100px"';
		
		$output .= '<select id="'. esc_attr($id) .'" class="dilaz-mb-input dilaz-mb-select '. $select2_class .' '. $class .'" name="'. esc_attr($id) .'" '. $select2_width .'>';
		foreach ((array)$options as $key => $val) {
			// $selected = $meta == $key ? ' selected="selected"' : '';
			$selected = selected($meta == $key, true, false);
			$output .= '<option '. $selected .' value="'. $key .'">'. $val .'</option>';
		}
		$output .= '</select>'. $suffix .''. $desc2 .'';
		
		echo $output;
	}
}

# Multielect
if (!function_exists('dilaz_mb_field_multiselect')) {
	function dilaz_mb_field_multiselect($field) {
		
		extract($field);
		
		$output = '';
		
		$class         = isset($class) ? sanitize_html_class($class) : '';
		$select2_class = isset($args['select2']) ? sanitize_html_class($args['select2']) : '';
		$select2_width = isset($args['select2width']) ? 'data-width="'. sanitize_text_field($args['select2width']) .'"' : 'data-width="100px"';
		
		$output .= '<select id="'. esc_attr($id) .'" class="dilaz-mb-input dilaz-mb-select '. $select2_class .' '. $class .'" multiple="multiple" name="'. esc_attr($id) .'[]" '. $select2_width .'>';
			$selected_data = is_array($meta) ? $meta : array();
			foreach ($options as $key => $option) {
				// $selected = (in_array($key, $selected_data)) ? 'selected="selected"' : '';
				$selected = selected(in_array($key, $selected_data), true, false);
				$output .= '<option '. $selected .' value="'. esc_attr($key) .'">'. esc_html($option) .'</option>';
			}
		$output .= '</select>';
		
		echo $output;
	}
}

# Query select - 'post', 'term', 'user'
if (!function_exists('dilaz_mb_field_queryselect')) {
	function dilaz_mb_field_queryselect($field) {
		
		extract($field);
		
		$output = '';
		
		$query_type    = isset($args['query_type']) ? sanitize_text_field($args['query_type']) : '';
		$query_args    = isset($args['query_args']) ? (array)$args['query_args'] : array();
		$placeholder   = isset($args['placeholder']) ? sanitize_text_field($args['placeholder']) : __('Select a post', 'futurio-extra');
		$min_input     = isset($args['min_input']) ? intval($args['min_input']) : 3;
		$max_input     = isset($args['max_input']) ? intval($args['max_input']) : 0;
		$max_options   = isset($args['max_options']) ? intval($args['max_options']) : 0;
		$select2_width = isset($args['select2width']) ? sanitize_text_field($args['select2width']) : '100px';
		$select2       = isset($args['select2']) ? $args['select2'] : '';
		$multiple_attr = $select2 == 'select2multiple' ? 'multiple="multiple"' : '';
		$multiple_bool = $select2 == 'select2multiple' ? 'true' : 'false';
		$class         = isset($class) ? sanitize_html_class($class) : '';
		
		// if (wp_script_is('select2script', 'enqueued')) {
			// wp_localize_script('select2script', 'dilaz_mb_post_select_lang', array(
				// 'dilaz_mb_pref' => $query_args,
			// ));
		// }
		
		$output .= '<select style="" name="'. esc_attr($id) .'[]" id="'. esc_attr($id) .'" '. $multiple_attr .' class="dilaz-mb-query-select '. $class .'" 
		data-placeholder="'. esc_attr($placeholder) .'" 
		data-min-input="'. esc_attr($min_input) .'" 
		data-max-input="'. esc_attr($max_input) .'" 
		data-max-options="'. esc_attr($max_options) .'" 
		data-query-args="'. esc_attr(base64_encode(serialize($query_args))) .'" 
		data-query-type="'. esc_attr($query_type) .'" 
		data-multiple="'. esc_attr($multiple_bool) .'" 
		data-width="'. esc_attr($select2_width) .'">';
		
		$selected_data = is_array($meta) ? $meta : array();
		
		foreach ($selected_data as $key => $item_id) {
			
			if ($query_type == 'post') {
				$name = get_post_field('post_title', $item_id);
			} else if ($query_type == 'user') {
				$user_data = get_userdata($item_id);
				$name = ($user_data && !is_wp_error($user_data)) ? $user_data->nickname : '';
			} else if ($query_type == 'term') {
				$term_data = get_term($item_id);
				$name = ($term_data && !is_wp_error($term_data)) ? $term_data->name : '';
			} else {
				$name = 'Add query type';
			}
			
			$output .= '<option selected="selected" value="'. esc_attr($item_id) .'">'. $name .'</option>';
		}
			
		$output .= '</select>';

		echo $output;
	}
}

# Timezone
if (!function_exists('dilaz_mb_field_timezone')) {
	function dilaz_mb_field_timezone($field) {
		
		extract($field);
		
		$output = '';
		
		$class         = isset($class) ? sanitize_html_class($class) : '';
		$select2_class = isset($args['select2']) ? $args['select2'] : '';
		$select2_width = isset($args['select2width']) ? 'data-width="'. sanitize_text_field($args['select2width']) .'"' : 'data-width="100px"';
		
		$output .= '<select name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" class="dilaz-mb-input dilaz-mb-timezone '. $select2_class .' '. $class .'" '. $select2_width .'>';
		$output .= '<option value="">Select timezone</option>';
		foreach ((array)$options as $t) {
			$selected = $meta == $t['zone'] ? 'selected="selected"' : '';
			$output .= '<option '. $selected .' value="'. $t['zone'] .'">'. $t['diff_from_GMT'] .' - '. $t['zone'] .'</option>';
		}
		$output .= '</select>';
		
		echo $output;
	}
}

# Radio image
if (!function_exists('dilaz_mb_field_radioimage')) {
	function dilaz_mb_field_radioimage($field) {
		
		extract($field);
		
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$output = '';

		foreach ( (array)$options as $key => $val ) {
			$selected = $meta == $key ? ' dilaz-image-selector-img-selected' : '';
			$checked = $meta == $key ? ' checked="checked"' : '';
			$output .= '<div class="dilaz-image-select-wrapper">';
				$output .= '<input class="dilaz-image-selector" type="radio" name="'. esc_attr($id) .'" id="'. esc_attr($id .'_'. $key) .'" class="'. $class .'" value="'. $key .'" '. $checked .' />';
				$output .= '<img src="'. esc_url($val) .'" alt="'. $key .'" class="dilaz-image-selector-img '. $selected .'" onclick="document.getElementById(\''. esc_attr($id .'_'. $key) .'\').checked=true;" />';
			$output .= '<span class="inset"></span>';
			$output .= '<span class="check"><i class="fa fa-check"></i></span>';
			$output .= '</div>';
		}

		echo $output;
	}
}

# Color
if (!function_exists('dilaz_mb_field_color')) {
	function dilaz_mb_field_color($field) {
		
		extract($field);
		
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$output = '';
		
		$default_color = isset($std) ?  $std : '';
		
		$output .= '<input class="dilaz-mb-color '. $class .'" type="text" name="'.  esc_attr($id) .'" id="'.  esc_attr($id) .'" value="'. $meta .'" size="8" data-default-color="'. $default_color .'" />'. $suffix .' '. $desc2 .'';
		
		echo $output;
	}
}

# Multiple Colors
if (!function_exists('dilaz_mb_field_multicolor')) {
	function dilaz_mb_field_multicolor($field) {
		
		extract($field);
		
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$output = '';
		
		if (isset($options)) {
			foreach ($options as $key => $value) {
				
				$color_name    = isset($value['name']) ? $value['name'] : '';
				$default_color = isset($value['color']) ? $value['color'] : '';
				$saved_color   = isset($meta[$key]) ? $meta[$key] : $default_color;
				
				$output .= '<div class="dilaz-mb-multi-color">';
				$output .= '<strong>'. $color_name .'</strong><br />';
				$output .= '<input class="dilaz-mb-color '. $class .'" type="text" name="'.  esc_attr($id) .'['. esc_attr($key) .']" id="'.  esc_attr($id) .'" value="'. $saved_color .'" data-default-color="'. $default_color .'" />';
				$output .= '</div>';
			}
			$output .= '<br />'. $suffix .' '. $desc2 .'';
		}
		
		echo $output;
	}
}

# Date
if (!function_exists('dilaz_mb_field_date')) {
	function dilaz_mb_field_date($field) {
		
		extract($field);
		
		$class    = isset($class) ? sanitize_html_class($class) : '';
		$size     = isset($args['size']) ? intval($args['size']) : '20';
		$format   = isset($args['format']) ? $args['format'] : 'l, d F, Y';
		$selected = $meta ? date($format, $meta) : '';
		
		$output = '<input type="text" class="dilaz-mb-input dilaz-mb-date '. $class .'" name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" value="'. $selected .'" size="'. $size .'" />'. $suffix .''. $desc2 .'';
		
		echo $output;
	}
}

# Date - (From - to)
if (!function_exists('dilaz_mb_field_date_from_to')) {
	function dilaz_mb_field_date_from_to($field) {
		
		extract($field);
		
		$output = '';
		
		$size  = isset($args['size']) ? intval($args['size']) : '30';
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$from_args   = isset($args['from_args']) ? $args['from_args'] : array();
		$from_format = isset($from_args['format']) ? $from_args['format'] : 'l, d F, Y';
		$from_prefix = isset($from_args['prefix']) ? $from_args['prefix'] : '';
		$from_suffix = isset($from_args['suffix']) ? $from_args['suffix'] : '';
		$from_date   = isset($from_args['date']) && !empty($from_args['date']) ?  $from_args['date'] : '';
		$from_date   = isset($meta['from']) && is_numeric($meta['from']) ? date($from_format, $meta['from']) : $from_date;
		
		$to_args   = isset($args['to_args']) ? $args['to_args'] : array();
		$to_format = isset($to_arg['format']) ? $to_arg['format'] : 'l, d F, Y';
		$to_prefix = isset($to_args['prefix']) ? $to_args['prefix'] : '';
		$to_suffix = isset($to_args['suffix']) ? $to_args['suffix'] : '';
		$to_date   = isset($to_args['date']) && !empty($to_args['date']) ? $to_args['date'] : '';
		$to_date   = isset($meta['to']) && is_numeric($meta['to']) ? date($to_format, $meta['to']) : $to_date;
		
		$output .= '<div class="dilaz-mb-date-from-to '. $class .'">';
		$output .= '<table>';
			$output .= '<tr>';
				$output .= '<td>'. $from_prefix .'</td>';
				$output .= '<td><input type="text" class="from-date dilaz-mb-input" name="'. esc_attr($id) .'[from]" id="'. esc_attr($id) .'[from]" value="'. $from_date .'" size="'. $size .'" /></td>';
				$output .= '<td>'. $from_suffix .'</td>';
			$output .= '</tr>';
			$output .= '<tr>';
				$output .= '<td>'. $to_prefix .'</td>';
				$output .= '<td><input type="text" class="to-date dilaz-mb-input" name="'. esc_attr($id) .'[to]" id="'. esc_attr($id) .'[to]" value="'. $to_date .'" size="'. $size .'" /></td>';
				$output .= '<td>'. $to_suffix .'</td>';
			$output .= '</tr>';
		$output .= '</table>';
		
		$output .= $desc2;
		
		$output .= '</div>';
		
		echo $output;
	}
}

# Month
if (!function_exists('dilaz_mb_field_month')) {
	function dilaz_mb_field_month($field) {
		
		extract($field);
		
		$size     = isset($args['size']) ? intval($args['size']) : '20';
		$class    = isset($class) ? sanitize_html_class($class) : '';
		$format   = isset($args['format']) ? $args['format'] : 'F, Y';
		$selected = $meta ? date($format, $meta) : '';
		
		$output = '<input type="text" class="dilaz-mb-input dilaz-mb-month '. $class .'" name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" value="'. $selected .'" size="'. $size .'" />'. $suffix .''. $desc2 .'';
		
		echo $output;
	}
}

# Month - (From - To)
if (!function_exists('dilaz_mb_field_month_from_to')) {
	function dilaz_mb_field_month_from_to($field) {
		
		extract($field);
		
		$output = '';
		
		$size  = isset($args['size']) ? intval($args['size']) : '20';
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$from_args   = isset($args['from_args']) ? $args['from_args'] : array();
		$from_format = isset($from_args['format']) ? $from_args['format'] : 'F, Y';
		$from_prefix = isset($from_args['prefix']) ? $from_args['prefix'] : '';
		$from_suffix = isset($from_args['suffix']) ? $from_args['suffix'] : '';
		$from_month  = isset($from_args['month']) && !empty($from_args['month']) ?  $from_args['month'] : '';
		$from_month  = isset($meta['from']) && is_numeric($meta['from']) ? date($from_format, $meta['from']) : $from_month;
		
		$to_args   = isset($args['to_args']) ? $args['to_args'] : array();
		$to_format = isset($to_arg['format']) ? $to_arg['format'] : 'F, Y';
		$to_prefix = isset($to_args['prefix']) ? $to_args['prefix'] : '';
		$to_suffix = isset($to_args['suffix']) ? $to_args['suffix'] : '';
		$to_month  = isset($to_args['month']) && !empty($to_args['month']) ? $to_args['month'] : '';
		$to_month  = isset($meta['to']) && is_numeric($meta['to']) ? date($to_format, $meta['to']) : $to_month;
		
		$output .= '<div class="dilaz-mb-month-from-to '. $class .'">';
		$output .= '<table>';
			$output .= '<tr>';
				$output .= '<td>'. $from_prefix .'</td>';
				$output .= '<td><input type="text" class="from-month dilaz-mb-input" name="'. esc_attr($id) .'[from]" id="'. esc_attr($id) .'[from]" value="'. $from_month .'" size="'. $size .'" /></td>';
				$output .= '<td>'. $from_suffix .'</td>';
			$output .= '</tr>';
			$output .= '<tr>';
				$output .= '<td>'. $to_prefix .'</td>';
				$output .= '<td><input type="text" class="to-month dilaz-mb-input" name="'. esc_attr($id) .'[to]" id="'. esc_attr($id) .'[to]" value="'. $to_month .'" size="'. $size .'" /></td>';
				$output .= '<td>'. $to_suffix .'</td>';
			$output .= '</tr>';
		$output .= '</table>';
		
		$output .= $desc2;
		
		$output .= '</div>';
		
		echo $output;
	}
}

# Time
if (!function_exists('dilaz_mb_field_time')) {
	function dilaz_mb_field_time($field) {
		
		extract($field);
		
		$size     = isset($args['size']) ? intval($args['size']) : '20';
		$class    = isset($class) ? sanitize_html_class($class) : '';
		$format   = isset($args['format']) ? $args['format'] : 'h:i:s A';
		$selected = isset($meta) && is_numeric($meta) ? date($format, $meta) : '';
		
		$output = '<input type="text" class="dilaz-mb-input dilaz-mb-time '. $class .'" name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" value="'. $selected .'" size="'. $size .'" />'. $suffix .''. $desc2 .'';

		echo $output;
	}
}

# Time - (From - To)
if (!function_exists('dilaz_mb_field_time_from_to')) {
	function dilaz_mb_field_time_from_to($field) {
		
		extract($field);
		
		$output = '';
		
		$size  = isset($args['size']) ? intval($args['size']) : '20';
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$from_args   = isset($args['from_args']) ? $args['from_args'] : array();
		$from_format = isset($from_args['format']) ? $from_args['format'] : 'h:i:s A';
		$from_prefix = isset($from_args['prefix']) ? $from_args['prefix'] : '';
		$from_suffix = isset($from_args['suffix']) ? $from_args['suffix'] : '';
		$from_time   = isset($from_args['time']) && !empty($from_args['time']) ?  $from_args['time'] : '';
		$from_time   = isset($meta['from']) && is_numeric($meta['from']) ? date($from_format, $meta['from']) : $from_time;
		
		$to_args   = isset($args['to_args']) ? $args['to_args'] : array();
		$to_format = isset($to_arg['format']) ? $to_arg['format'] : 'h:i:s A';
		$to_prefix = isset($to_args['prefix']) ? $to_args['prefix'] : '';
		$to_suffix = isset($to_args['suffix']) ? $to_args['suffix'] : '';
		$to_time   = isset($to_args['time']) && !empty($to_args['time']) ? $to_args['time'] : '';
		$to_time   = isset($meta['to']) && is_numeric($meta['to']) ? date($to_format, $meta['to']) : $to_time;
		
		$output .= '<div class="dilaz-mb-time-from-to '. $class .'">';
		$output .= '<table>';
			$output .= '<tr>';
				$output .= '<td>'. $from_prefix .'</td>';
				$output .= '<td><input type="text" class="from-time dilaz-mb-input" name="'. esc_attr($id) .'[from]" id="'. esc_attr($id) .'[from]" value="'. $from_time .'" size="'. $size .'" /></td>';
				$output .= '<td>'. $from_suffix .'</td>';
			$output .= '</tr>';
			$output .= '<tr>';
				$output .= '<td>'. $to_prefix .'</td>';
				$output .= '<td><input type="text" class="to-time dilaz-mb-input" name="'. esc_attr($id) .'[to]" id="'. esc_attr($id) .'[to]" value="'. $to_time .'" size="'. $size .'" /></td>';
				$output .= '<td>'. $to_suffix .'</td>';
			$output .= '</tr>';
		$output .= '</table>';
		
		$output .= $desc2;
		
		$output .= '</div>';
		
		echo $output;
	}
}

# Date Time
if (!function_exists('dilaz_mb_field_date_time')) {
	function dilaz_mb_field_date_time($field) {
		
		extract($field);
		
		$size     = isset($args['size']) ? intval($args['size']) : '40';
		$class    = isset($class) ? sanitize_html_class($class) : '';
		$format   = isset($args['format']) ? $args['format'] : 'l, d F Y h:i:s A';
		$selected = $meta ? date($format, $meta) : '';
		
		$output = '<input type="text" class="dilaz-mb-input dilaz-mb-date-time '. $class .'" name="'. esc_attr($id) .'" id="'. esc_attr($id) .'" value="'. $selected .'" size="'. $size .'" />'. $suffix .''. $desc2 .'';
		
		echo $output;
	}
}

# Date Time - (From - To)
if (!function_exists('dilaz_mb_field_date_time_from_to')) {
	function dilaz_mb_field_date_time_from_to($field) {
		
		extract($field);
		
		$output = '';
		
		$size  = isset($args['size']) ? intval($args['size']) : '40';
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$from_args      = isset($args['from_args']) ? $args['from_args'] : array();
		$from_format    = isset($from_args['format']) ? $from_args['format'] : 'l, d F Y h:i:s A';
		$from_prefix    = isset($from_args['prefix']) ? $from_args['prefix'] : '';
		$from_suffix    = isset($from_args['suffix']) ? $from_args['suffix'] : '';
		$from_date_time = isset($from_args['date_time']) && !empty($from_args['date_time']) ? $from_args['date_time'] : '';
		$from_date_time = isset($meta['from']) && is_numeric($meta['from']) ? date($from_format, $meta['from']) : $from_date_time;
		
		$to_args      = isset($args['to_args']) ? $args['to_args'] : array();
		$to_format    = isset($to_arg['format']) ? $to_arg['format'] : 'l, d F Y h:i:s A';
		$to_prefix    = isset($to_args['prefix']) ? $to_args['prefix'] : '';
		$to_suffix    = isset($to_args['suffix']) ? $to_args['suffix'] : '';
		$to_date_time = isset($to_args['date_time']) && !empty($to_args['date_time']) ? $to_args['date_time'] : '';
		$to_date_time = isset($meta['to']) && is_numeric($meta['to']) ? date($to_format, $meta['to']) : $to_date_time;
		
		$output .= '<div class="dilaz-mb-date-time-from-to '. $class .'">';
		$output .= '<table>';
			$output .= '<tr>';
				$output .= '<td>'. $from_prefix .'</td>';
				$output .= '<td><input type="text" class="from-date-time dilaz-mb-input" name="'. esc_attr($id) .'[from]" id="'. esc_attr($id) .'[from]" value="'. $from_date_time .'" size="'. $size .'" /></td>';
				$output .= '<td>'. $from_suffix .'</td>';
			$output .= '</tr>';
			$output .= '<tr>';
				$output .= '<td>'. $to_prefix .'</td>';
				$output .= '<td><input type="text" class="to-date-time dilaz-mb-input" name="'. esc_attr($id) .'[to]" id="'. esc_attr($id) .'[to]" value="'. $to_date_time .'" size="'. $size .'" /></td>';
				$output .= '<td>'. $to_suffix .'</td>';
			$output .= '</tr>';
		$output .= '</table>';
		
		$output .= $desc2;
		
		$output .= '</div>';
		
		echo $output;
	}
}

# Slider
if (!function_exists('dilaz_mb_field_slider')) {
	function dilaz_mb_field_slider($field) {
		
		extract($field);
		
		$output = '';
		
		$meta   = $meta != '' ? (int)$meta : '0';
		$min    = isset($args['min']) ? (int)$args['min'] : '';
		$max    = isset($args['max']) ? (int)$args['max'] : '';
		$step   = isset($args['step']) ? (int)$args['step'] : '';
		$prefix = isset($args['prefix']) ? sanitize_text_field($args['prefix']) : '';
		$suffix = isset($args['suffix']) ? sanitize_text_field($args['suffix']) : '';
		$class  = isset($class) ? sanitize_html_class($class) : '';
		
		$output .= '<input type="hidden" id="'. esc_attr($id) .'" name="'. esc_attr($id) .'" value="'. esc_attr($meta) .'" />';
		$output .= '<div class="dilaz-mb-slider '. $class .'" data-val="'. esc_attr($meta) .'" data-min="'. esc_attr($min) .'" data-max="'. esc_attr($max) .'" data-step="'. esc_attr($step) .'"></div>';
		$output .= '<div class="dilaz-mb-slider-val">'. $prefix .'<span>'. esc_attr($meta) .'</span>'. $suffix .'</div>';

		echo $output;
	}
}

# Range
if (!function_exists('dilaz_mb_field_range')) {
	function dilaz_mb_field_range($field) {
		
		extract($field);
		
		$output = '';
		
		$minStd  = isset($std['min_std']) ? (int)$std['min_std'] : 0;
		$maxStd  = isset($std['max_std']) ? (int)$std['max_std'] : 0;
		$meta    = $meta != '' ? (array)$meta : '0';
		$min_val = is_array($meta) && isset($meta['min']) ? (int)$meta['min'] : $minStd;
		$max_val = is_array($meta) && isset($meta['max']) ? (int)$meta['max'] : $maxStd;
		$min     = isset($args['min'][0]) ? (int)$args['min'][0] : 0;
		$max     = isset($args['max'][0]) ? (int)$args['max'][0] : 0;
		$minName = isset($args['min'][1]) ? (string)$args['min'][1] : '';
		$maxName = isset($args['max'][1]) ? (string)$args['max'][1] : '';
		$step    = isset($args['step']) ? (int)$args['step'] : '';
		$prefix  = isset($args['prefix']) && $args['prefix'] != '' ? sanitize_text_field($args['prefix']) : '';
		$suffix  = isset($args['suffix']) && $args['suffix'] != '' ? sanitize_text_field($args['suffix']) : '';
		$class   = isset($class) ? sanitize_html_class($class) : '';
		
		$output .= '<div class="dilaz-mb-range '. $class .'" data-min-val="'. esc_attr($min_val) .'" data-max-val="'. esc_attr($max_val) .'" data-min="'. esc_attr($min) .'" data-max="'. esc_attr($max) .'" data-step="'. esc_attr($step) .'">';
			$output .= '<div class="dilaz-mb-slider-range"></div>';
			$output .= '<input type="hidden" class="" name="'. esc_attr($id) .'[min]" id="option-min" value="'. esc_attr($min_val) .'" placeholder="" size="7">';
			$output .= '<div class="dilaz-mb-min-val"><span class="min">'. $minName .'</span>'. $prefix .'<span class="val">'. esc_attr($min_val) .'</span>'. $suffix .'</div>';
			$output .= '<input type="hidden" class="" name="'. esc_attr($id) .'[max]" id="option-max" value="'. esc_attr($max_val) .'" placeholder="" size="7">';
			$output .= '<div class="dilaz-mb-max-val"><span class="max">'. $maxName .'</span>'. $prefix .'<span class="val">'. esc_attr($max_val) .'</span>'. $suffix .'</div>';
		$output .= '</div>';
		
		
		echo $output;
	}
}

# File Upload
if (!function_exists('dilaz_mb_field_upload')) {
	function dilaz_mb_field_upload($field) {
		
		global $post;
		
		extract($field);
		
		$output = '';
		
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$data_file_multiple = (isset($args['multiple']) && $args['multiple'] == true) ? 'data-file-multiple="true"' : '';
		$file_type          = (isset($args['file_type']) && $args['file_type'] != '') ? strtolower($args['file_type']) : 'image';
		$data_file_type     = $file_type != '' ? 'data-file-type="'. $file_type .'"' : 'data-file-type="image"';
		$data_file_specific = (isset($args['file_specific']) && $args['file_specific'] == true) ? 'data-file-specific="true"' : '';
		$frame_title        = (isset($args['frame_title']) && $args['frame_title'] != '') ? sanitize_text_field($args['frame_title']) : '';
		$frame_button_text  = (isset($args['frame_button_text']) && $args['frame_button_text'] != '') ? sanitize_text_field($args['frame_button_text']) : '';
		
		switch ($file_type) {
			
			case ('image') :
				$data_frame_title = ($frame_title != '') ? 'data-frame-title="'. $frame_title .'"' : 'data-frame-title="'. __('Choose Image', 'dilaz-panel') .'"';
				$data_frame_b_txt = ($frame_button_text != '') ? 'data-frame-button-text="'. $frame_button_text .'"' : 'data-frame-button-text="'. __('Use Selected Image', 'dilaz-panel') .'"';
				break;
			
			case ('audio') :
				$data_frame_title = ($frame_title != '') ? 'data-frame-title="'. $frame_title .'"' : 'data-frame-title="'. __('Choose Audio', 'dilaz-panel') .'"';
				$data_frame_b_txt = ($frame_button_text != '') ? 'data-frame-button-text="'. $frame_button_text .'"' : 'data-frame-button-text="'. __('Use Selected Audio', 'dilaz-panel') .'"';
				break;
			
			case ('video') :
				$data_frame_title = ($frame_title != '') ? 'data-frame-title="'. $frame_title .'"' : 'data-frame-title="'. __('Choose Video', 'dilaz-panel') .'"';
				$data_frame_b_txt = ($frame_button_text != '') ? 'data-frame-button-text="'. $frame_button_text .'"' : 'data-frame-button-text="'. __('Use Selected Video', 'dilaz-panel') .'"';
				break;
			
			case ('document') :
				$data_frame_title = ($frame_title != '') ? 'data-frame-title="'. $frame_title .'"' : 'data-frame-title="'. __('Choose Document', 'dilaz-panel') .'"';
				$data_frame_b_txt = ($frame_button_text != '') ? 'data-frame-button-text="'. $frame_button_text .'"' : 'data-frame-button-text="'. __('Use Selected Document', 'dilaz-panel') .'"';
				break;
			
			case ('spreadsheet') :
				$data_frame_title = ($frame_title != '') ? 'data-frame-title="'. $frame_title .'"' : 'data-frame-title="'. __('Choose Spreadsheet', 'dilaz-panel') .'"';
				$data_frame_b_txt = ($frame_button_text != '') ? 'data-frame-button-text="'. $frame_button_text .'"' : 'data-frame-button-text="'. __('Use Selected Spreadsheet', 'dilaz-panel') .'"';
				break;
			
			case ('interactive') :
				$data_frame_title = ($frame_title != '') ? 'data-frame-title="'. $frame_title .'"' : 'data-frame-title="'. __('Choose Interactive File', 'dilaz-panel') .'"';
				$data_frame_b_txt = ($frame_button_text != '') ? 'data-frame-button-text="'. $frame_button_text .'"' : 'data-frame-button-text="'. __('Use Selected Interactive File', 'dilaz-panel') .'"';
				break;
			
			case ('text') :
				$data_frame_title = ($frame_title != '') ? 'data-frame-title="'. $frame_title .'"' : 'data-frame-title="'. __('Choose Text File', 'dilaz-panel') .'"';
				$data_frame_b_txt = ($frame_button_text != '') ? 'data-frame-button-text="'. $frame_button_text .'"' : 'data-frame-button-text="'. __('Use Selected Text File', 'dilaz-panel') .'"';
				break;
			
			case ('archive') :
				$data_frame_title = ($frame_title != '') ? 'data-frame-title="'. $frame_title .'"' : 'data-frame-title="'. __('Choose Archive File', 'dilaz-panel') .'"';
				$data_frame_b_txt = ($frame_button_text != '') ? 'data-frame-button-text="'. $frame_button_text .'"' : 'data-frame-button-text="'. __('Use Selected Archive File', 'dilaz-panel') .'"';
				break;
			
			case ('code') :
				$data_frame_title = ($frame_title != '') ? 'data-frame-title="'. $frame_title .'"' : 'data-frame-title="'. __('Choose Code File', 'dilaz-panel') .'"';
				$data_frame_b_txt = ($frame_button_text != '') ? 'data-frame-button-text="'. $frame_button_text .'"' : 'data-frame-button-text="'. __('Use Selected Code File', 'dilaz-panel') .'"';
				break;
		}
		
		$output .= '<div class="dilaz-mb-file-upload '. $class .'">';
		
		$output .= '<input type="button" id="upload-'. esc_attr($id) .'" class="dilaz-mb-file-upload-button button" value="'. sprintf(__('Upload %s', 'futurio-extra'), $file_type) .'" rel="'. $post->ID .'" '. $data_file_type.' '. $data_file_specific .' '. $data_file_multiple .' '. $data_frame_title .' '. $data_frame_b_txt .' />';
		
			$output .= '<div class="dilaz-mb-file-wrapper" data-file-id="'. esc_attr($id) .'">';
			
			if ($meta != '') {
				foreach ($meta as $key => $attachment_id) {
					
					if ($attachment_id) {
						$file = wp_get_attachment_image_src($attachment_id, 'thumbnail'); $file = $file[0];
						$file_full = wp_get_attachment_image_src($attachment_id, 'full'); $file_full = $file_full[0];
					} else {
						$file = '';
						$file_full = '';
					}
					
					if ($attachment_id != '' && false !== get_post_status($attachment_id)) {
						
						$output .= '<div class="dilaz-mb-media-file '. $file_type .' '. ($attachment_id != '' ? '' : 'empty') .'" id="file-'. esc_attr($id) .'">';
			
						$output .= '<input type="hidden" name="'. esc_attr($id) .'[]" id="file_'. esc_attr($id) .'" class="dilaz-mb-file-id upload" value="'. 
						$attachment_id .'" size="30" rel"" />';
						$output .= sizeof($meta) > 1 ? '<span class="sort"></span>' : '';
						
						# get attachment data
						$attachment = get_post($attachment_id);
						
						# get file extension
						$file_ext = pathinfo($attachment->guid, PATHINFO_EXTENSION);	
						
						# get file type
						$file_type = wp_ext2type($file_ext);
						
						$output .= '<div class="filename '. $file_type .'">'. $attachment->post_title .'</div>';
						
						$media_remove = '<a href="#" class="remove" title="'. __('Remove', 'futurio-extra') .'"><i class="fa fa-close"></i></a>';					
						
						switch ($file_type) {
							
							case ('image') :
								$output .= ($file_ext) ? '<img src="'. $file .'" class="dilaz-mb-file-preview file-image" alt="" />'. $media_remove : '';
								break;
							
							case ('audio') :
								$output .= ($file_ext) ? '<img src="'. DILAZ_MB_IMAGES .'media/audio.png" class="dilaz-mb-file-preview file-audio" alt="" />'. $media_remove : '';
								break;
							
							case ('video') :
								$output .= ($file_ext) ? '<img src="'. DILAZ_MB_IMAGES .'media/video.png" class="dilaz-mb-file-preview file-video" alt="" />'. $media_remove : '';
								break;
							
							case ('document') :
								$output .= ($file_ext) ? '<img src="'. DILAZ_MB_IMAGES .'media/document.png" class="dilaz-mb-file-preview file-document" alt="" />'. $media_remove : '';
								break;
							
							case ('spreadsheet') :
								$output .= ($file_ext) ? '<img src="'. DILAZ_MB_IMAGES .'media/spreadsheet.png" class="dilaz-mb-file-preview file-spreadsheet" alt="" />'. $media_remove : '';
								break;
							
							case ('interactive') :
								$output .= ($file_ext) ? '<img src="'. DILAZ_MB_IMAGES .'media/interactive.png" class="dilaz-mb-file-preview file-interactive" alt="" />'. $media_remove : '';
								break;
								
							case ('text') :
								$output .= ($file_ext) ? '<img src="'. DILAZ_MB_IMAGES .'media/text.png" class="dilaz-mb-file-preview file-text" alt="" />'. $media_remove : '';
								break;
								
							case ('archive') :
								$output .= ($file_ext) ? '<img src="'. DILAZ_MB_IMAGES .'media/archive.png" class="dilaz-mb-file-preview file-archive" alt="" />'. $media_remove : '';
								break;
								
							case ('code') :	
								$output .= ($file_ext) ? '<img src="'. DILAZ_MB_IMAGES .'media/code.png" class="dilaz-mb-file-preview file-code" alt="" />'. $media_remove : '';
								break;	
								
						}
						$output .= '</div><!-- .dilaz-mb-media-file -->'; // end .dilaz-mb-media-file
					}
				}
			}
			$output .= '</div><!-- .dilaz-mb-file-wrapper -->'; // end .dilaz-mb-file-wrapper
			$output .= '<div class="clear"></div>';
		$output .= '</div><!-- .dilaz-mb-file-upload -->'; // end .dilaz-mb-file-upload
		echo $output;
	}
}

# Buttonset
if (!function_exists('dilaz_mb_field_buttonset')) {
	function dilaz_mb_field_buttonset($field) {
		
		extract($field);
		
		$output = '';
		
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$value = isset($meta) ? $meta : '';
		foreach ($options as $key => $option) {
			$checked  = '';
			$selected = '';
			if (null != checked($value, $key, false)) {
				$checked  = checked($value, $key, false);
				$selected = 'selected';  
			}
			$output .= '<label for="'. esc_attr($id .'-'. $key) .'" class="dilaz-mb-button-set-button '. $selected .' '. $class .'"><input type="radio" class="dilaz-mb-input dilaz-mb-button-set" name="'. esc_attr($id) .'" id="'. esc_attr($id .'-'. $key) .'" value="'. esc_attr($key) .'" '. $checked .' /><span>'. esc_html($option) .'</span></label>';
		}
		
		echo $output;
	}
}

# Switch
if (!function_exists('dilaz_mb_field_switch')) {
	function dilaz_mb_field_switch($field) {
		
		extract($field);
		
		$output = '';
		
		$class = isset($class) ? sanitize_html_class($class) : '';
		
		$value = isset($meta) ? $meta : '';
		$i = 0;
		foreach ($options as $key => $option) {
			$i++;
			$checked = '';
			$selected = '';
			if (null != checked($value, $key, false)) {
				$checked = checked($value, $key, false);
				$selected = 'selected';  
			}
			$state = ($i == 1) ? 'switch-on' : 'switch-off';
			$output .= '<label for="'. esc_attr($id .'-'. $key) .'" class="dilaz-mb-switch-button '. $selected .' '. $state .' '. $class .'"><input type="radio" class="dilaz-mb-input dilaz-mb-switch" name="'. esc_attr($id) .'" id="'. esc_attr($id .'-'. $key) .'" value="'. esc_attr($key) .'" '. $checked .' /><span>'. esc_html($option) .'</span></label>';
		}
		
		echo $output;
	}
}