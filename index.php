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

}else{
    require __DIR__ . '/administrator/404.php';
}
?>
