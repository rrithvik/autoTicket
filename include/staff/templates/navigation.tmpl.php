<?php
//function console_log( $data ){
//    echo '<script>';
//    echo 'console.log('. json_encode( $data ) .')';
//    echo '</script>';
//}
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
if($nav && ($tabs=$nav->getTabs()) && is_array($tabs)){
    foreach($tabs as $name =>$tab) {
        if ($tab['href'][0] != '/')
            $tab['href'] = ROOT_PATH . 'scp/' . $tab['href'];
        echo sprintf('<li class="nav-item dropdown %s %s"><a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="%s" role="button" aria-expanded="false">%s</a><ul class="dropdown-menu">',
            isset($tab['active']) ? 'active':'inactive',
            @$tab['class'] ?: '',
            $tab['href'],$tab['desc']);
        if(($subnav=$nav->getSubMenu($name))){
//            echo "<li class='dropdown-item'>\n";
//            debug_to_console(0, $subnav);
            foreach($subnav as $k => $item) {

//                debug_to_console(1, gettype($item));
//                debug_to_console(2, $item);
                if (isset($item['id']) && !($id=$item['id']))
                    $id="nav$k";
                if ($item['href'][0] != '/')
                    $item['href'] = ROOT_PATH . 'scp/' . $item['href'];

                echo sprintf(
                    '<li><a class="nav-link" href="%s" title="%s" id="%s"><img class="img-thumbnail %s" src="" alt=""/>&nbsp;&nbsp;%s</a></li>',
                    $item['href'], $item['title'] ?? null,
                    $id ?? null, $item['iconclass'], $item['desc']);
            }
//            echo "\n</li>\n";
        }
        echo "\n</ul></li>\n";
    }
} ?>
