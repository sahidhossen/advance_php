<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 18-11-15
 * Time: 20.59
 */


/*
 * Check if the protocol http or https
 * */
function is_ssl(){
    $protocol = isset($_SERVER["HTTPS"]) ? 'https:' : 'http:';
    $host = $_SERVER['HTTP_HOST'];
    return $protocol.'//'.$host;
}

function get_root_folder(){
    $pathInPieces = explode('/', $_SERVER['REQUEST_URI']);
    return $pathInPieces[1];
}
//Home uri folder location
//exmple: http://localhost/blog/public/anyfiles
function home_uri(){
    return is_ssl().'/'.get_root_folder().'/public/';
}


function get_stylesheet_uri($folder_name=""){
    if($folder_name !="")
        return home_uri().'assets/'.$folder_name."/";
    return home_uri().'assets/css';
}

/*
 * Get any stylesheet from style sheet directory
 * */
function get_stylesheet_files($file_name=""){
    return get_stylesheet_uri().'/'.$file_name.'.css';
}
//only for homepage url
//exmple: http://localhost/blog

function get_home_url(){
    return is_ssl().'/'.get_root_folder();
}

function get_link( $page = '' ){

    if($page !='' ) {
        if (my_safe_pages($page))
            $page_name = $page;
        $page_name = 'index';
    }

   if(file_exists(PUBLIC_DIR.$page_name.'.php'))
        return PUBLIC_DIR.$page_name;
    return PUBLIC_DIR.$page_name.'.php';

}


function admin_home(){
    return get_home_url().'/admin/';
}

function admin_stylesheet( $filename = '' ){
    if( $filename =='' )
        return get_home_url().'/admin/assets/';

    return get_home_url()."/admin/assets/css/{$filename}".".css";
}


function admin_url( $page = '' ){
    switch($page){
        case 'home':
            return admin_home();
        break;
        case 'create-page':
            return admin_home().'create-page.php';
        break;
        case 'posts':
            return admin_home().'posts.php';
        break;
        case 'all-page':
            return admin_home().'all_page.php';
            break;
        case 'edit-page':
            return admin_home().'edit-page.php';
            break;
        case 'delete-page':
            return admin_home().'delete-page.php';
            break;     
        case 'stylesheet_dir':
            return admin_stylesheet();
        break;
        default:
            return 'ERROR';

    }
}


function get_admin_header(){
    //if(file_exists(ADMIN_DIR.'header.php'))
       // include(ADMIN_DIR.'header.php');
    echo ADMIN_DIR.'header.php';
}