<?php

function list_language(){
	$languages = icl_get_languages('skip_missing=0&orderby=code');
    //$lang_txt = ( ICL_LANGUAGE_CODE == 'en' ) ? 'English':'Language';
    $lang_txt = get_language_name(ICL_LANGUAGE_CODE);
	if(!empty($languages)){

        echo '<div class="dropdown">';
        echo '<button type="button" class="dropbtn">'.$lang_txt.'</button>';
        echo '<div class="dropdown-content">';
        echo '<ul>';
        foreach($languages as $l){
            
            if( !$l['active'] ){
                echo '<li>';
                echo '<a href="'.$l['url'].'">';
                echo icl_disp_language($l['native_name']);
                echo '</a>';
                echo '</li>';
            }
            
        }
        echo '</ul>';
        echo '</div>';
        echo '</div>';

	}
}

function get_language_name($code=''){
    global $sitepress;
    $details = $sitepress->get_language_details($code);
    return ($details['english_name']) ? $details['english_name']:'';
}
