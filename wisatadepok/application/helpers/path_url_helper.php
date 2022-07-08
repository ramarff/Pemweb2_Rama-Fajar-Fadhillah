<?php
if (!function_exists("img")){
    function img($src){
        $img=base_url("assets/images/$src");
        return $img;
    } 
}
if(!function_exists("js")){
    function js($src){
        $js=base_url("assets/js/$src");
        return $js;
    } 
}
if(!function_exists("css")){
    function css($src){
        $css=base_url("assets/css/$src");
        return $css;
    }
}
if(!function_exists("rupiah")){
    function rupiah($angka){
        if ($angka > 0) {
            $hasil_rupiah = "IDR ".number_format($angka,2,',','.');
            return $hasil_rupiah;
        }
        return "GRATIS";
    }    
}
if(!function_exists("fontawesome")){
    function fontawesome($src){
        $font=base_url("assets/font-awesome/$src");
        return $font;
    }    
}
if(!function_exists("admin")){
    function admin($src){
        $admin=base_url("admin/$src");
        return $admin;
    }    
}
if(!function_exists("access")){
    function access(){
        // $admin=base_url("admin/$src");
        // return $admin;
      return "<script>alert('Akses Ditolak! Anda harus login terlebih dahulu!')</script>";
    }    
}


?>