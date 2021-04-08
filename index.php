<?php


$request = $_SERVER['REQUEST_URI'];


if ($request == '/' || $request == '/index'){
    require __DIR__ . '/administrator/login.php';

}elseif ($request == '/kategori/menu-kategori'){
    require __DIR__ . '/administrator/kategori.php';

}elseif ($request == '/kategori/tambah-kategori'){
    require __DIR__ . '/administrator/tambah-kategori.php';

}elseif ($request == '/kategori/edit-kategori'){
    require __DIR__ . '/administrator/edit-kategori.php';

}elseif ($request == '/menu/edit-menu'){
    require __DIR__ . '/administrator/edit-menu.php';

}elseif ($request == '/menu/data-menu'){
    require __DIR__ . '/administrator/menu.php';

}elseif ($request == '/menu/tambah-menu'){
    require __DIR__ . '/administrator/tambah-menu.php';

}elseif ($request == '/user/data-user'){
    require __DIR__ . '/administrator/user.php';

}elseif ($request == '/user/tambah-user'){
    require __DIR__ . '/administrator/tambah-user.php';

}elseif ($request == '/user/edit-user'){
    require __DIR__ . '/administrator/edit-user.php';

}elseif ($request == '/pelanggan/data-pelanggan'){
    require __DIR__ . '/administrator/data-pelanggan.php';

}elseif ($request == '/order/data-order'){
    require __DIR__ . '/administrator/order.php';

}elseif ($request == '/Dashboard'){
    require __DIR__ . '/administrator/index.php';

}elseif ($request == '/test-web'){
    echo "hai";
    // require __DIR__ . '/framework.php';

}elseif ($request == '/framework-codeigniter-pengenalan'){
    require __DIR__ . '/tentang.php';

}elseif ($request == '/about-us'){
    require __DIR__ . '/tentang.php';
    
}else{
    require __DIR__ . '/404';
}
// switch ($request) {
//     case '/' :
//         require __DIR__ . '/home.php';
//         break;
//     case '/ci-zaman-now' :
//         require __DIR__ . '/framework.php';
//         break;
//     case '/about' :
//         require __DIR__ . '/views/about.php';
//         break;
//     default:
//         http_response_code(404);
//         require __DIR__ . '/404.php';
//         break;
// }