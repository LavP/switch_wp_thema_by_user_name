<?php
/*
  Plugin Name: Switch thema by user name
*/

function my_theme_change($template) {
    if(isset($_GET['thema'])){
        return $_GET['thema'];
    }else{
        //ユーザーによる切り替え
        $user = wp_get_current_user();
        if($user->first_name === 'kusuhara') {
            return 'kusuhara'; //テスト用テーマのフォルダ名
        } else if($user->first_name === 'goto') {
            return 'goto';
        }else{
            return $template;
        }
    }
}

add_filter('template', 'my_theme_change');
add_filter('stylesheet', 'my_theme_change');