<?php

/**
 * @param string $pages
 * @param int $paged
 * @param $base_url
 * @param int $range
 */
function my_pager($pages = '', $paged=1, $base_url, $range = 2)
{
    $showitems = ($range * 2) + 1;

        echo "<div class='know_pager pager_news'>";
    if (1 != $pages) {
        /*if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) {
            printf("<p class='pager_center'><a href='%s?page=1'><span>&laquo;</span></a></p>", $base_url);
        }*/
        if ($paged > 1) {
            printf("<p class='ico_link in_l_pager fll' ><a href='%s?page=" . ($paged - 1) . "'><img class='ico_pdf' src='/wp-content/themes/fk/images/topics/ico_pager04.png'></a></p>", $base_url);
        } else {echo "<p class='ico_link in_l_pager fll' ><a><img class='ico_pdf' src='/wp-content/themes/fk/images/topics/ico_pager04.png'></a></p>";}
        
        echo "<p class='pager_center'>";
        if($paged <= 2 && $showitems < $pages){
            for ($i = 1; $i <= 5; $i++) {
            if (1 != $pages && (!($i > $range * 2 + 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<a class='active_pager'><span>" . $i . "</span></a>" : sprintf('<a href="%s?page=%s"><span>%s</span></a>', $base_url, $i, $i);
        }}} elseif ($paged >= $pages -1 && $showitems < $pages){
            for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i <= $pages - ($range * 2 + 1)) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<a class='active_pager'><span>" . $i . "</span></a>" : sprintf('<a href="%s?page=%s"><span>%s</span></a>', $base_url, $i, $i);
        }}} else {
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<a class='active_pager'><span>" . $i . "</span></a>" : sprintf('<a href="%s?page=%s"><span>%s</span></a>', $base_url, $i, $i);
            }
        }}

        if ($paged < $pages) {
            printf('<p class="ico_link in_r_pager"><a href="%s?page=%s"><img class="ico_pdf" src="/wp-content/themes/fk/images/topics/ico_pager05.png"></a>', $base_url, ($paged + 1));
        }else {echo "<p class='ico_link in_r_pager fll' ><a><img class='ico_pdf' src='/wp-content/themes/fk/images/topics/ico_pager05.png'></a></p>";}
        /*if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) {
          printf('<p class="pager_center"><a href="%s?page=%s"><span>&raquo;</span></a></p>', $base_url, $pages);
        }
        */
    }
        echo "<div class=\"clear\"></div>";
        
        echo "</div>\n";
}