<?php
function gallery_preview($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    $permalink = get_the_permalink($post->ID);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';

    if(is_home() || is_archive() || is_search()) {
        $output = "<div class=\"gallery-preview\">\n";
        $i=0; $limit=3;
        foreach ($attachments as $id => $attachment) {
            $img = wp_get_attachment_image_src($id, 'post_thumbnail');

            $output .= "<figure>\n";
            $output .= "<a href=\"{$permalink}\"><img src=\"{$img[0]}\" width=\"{$img[1]}\" height=\"{$img[2]}\" alt=\"\" /></a>\n";
            $output .= "</figure>\n";
            if (++$i >=$limit) break;
        }
        $output .= "</div>\n";
    } elseif (is_singular()) {
        $output = "<div class=\"gallery\"><div class=\"ftg-items\">\n";
        foreach ($attachments as $id => $attachment) {
            $idk = $post->ID;
            $img = wp_get_attachment_image_src($id, 'full');
            $thumb = wp_get_attachment_image_src($id, 'medium');

            $image_title = $attachment->post_title;
            $caption = $attachment->post_excerpt;

            $output .= "<div class=\"tile\">\n";
            $output .= "<a href=\"{$img[0]}\" data-strip-caption=\"{$caption}\" data-src=\"{$img[0]}\" class=\"strip tile-inner\" data-strip-group=\"gallery-{$idk}\" data-strip-options=\"preload: [1,2], side: 'left'\">\n";
            $output .= "<img src=\"{$thumb[0]}\" class=\"item\" />\n";
            $output .= "</a>";
            $output .= "</div>";
        }
        $output .= "</div></div>\n";
    }

    return $output;
}





function add_strip_class_to_image_links($html, $attachment_id, $attachment) {
    $linkptrn = "/<a[^>]*>/";
    $found = preg_match($linkptrn, $html, $a_elem);

    // If no link, do nothing
    if($found <= 0) return $html;

    $a_elem = $a_elem[0];

    // Check to see if the link is to an uploaded image
    $is_attachment_link = strstr($a_elem, "wp-content/uploads/");

    // If link is to external resource, do nothing
    if($is_attachment_link === FALSE) return $html;

    if(strstr($a_elem, "class=\"") !== FALSE){ // If link already has class defined inject it to attribute
        $a_elem_new = str_replace("class=\"", "data-strip-options=\"side: 'left'\" class=\"strip ", $a_elem);
        $html = str_replace($a_elem, $a_elem_new, $html);
    }else{ // If no class defined, just add class attribute
        $html = str_replace("<a ", "<a class=\"strip\" data-strip-options=\"side: 'left'\" ", $html);
    }

    return $html;
}