{{-- Functions --}}
@php

if (!function_exists('setTitle')) :
    function setTitle($page_name) {

        // echo $page_name;

        $admin_name = '| Apotek - Penjualan Obat FEFO';

        if ($page_name === 'dashboard') :
            echo 'Apotek Admin - Penjualan Obat FEFO';

        elseif ($page_name === 'kategori') :
            echo 'Kategori ' . $admin_name;
        elseif ($page_name === 'obat') :
            echo 'Obat ' . $admin_name;
        elseif ($page_name === 'supplier') :
            echo 'Supplier ' . $admin_name;
        elseif ($page_name === 'obat-expired') :
            echo 'Obat Expired ' . $admin_name;
        elseif ($page_name === 'pembelian') :
            echo 'Pembelian ' . $admin_name;
        elseif ($page_name === 'penjualan') :
            echo 'Penjualan ' . $admin_name;
        elseif ($page_name === 'laporan-pembelian') :
            echo 'Laporan Pembelian ' . $admin_name;
        elseif ($page_name === 'laporan-penjualan') :
            echo 'Laporan Penjualan ' . $admin_name;
        elseif ($page_name === 'stok-obat') :
            echo 'Laporan Stok Barang ' . $admin_name;
        elseif ($page_name === 'hpp') :
            echo 'Laporan HPP ' . $admin_name;
        elseif ($page_name === 'laba') :
            echo 'Laporan Laba ' . $admin_name;
        elseif ($page_name === 'pengguna') :
            echo 'Pengguna ' . $admin_name;
        endif;
    }
endif;

if (!function_exists('set_breadcrumb')) {
    function set_breadcrumb($page_name, $category_name) {

        $category = ucfirst($category_name);

        $removeUnderscore = str_replace('_', ' ', $page_name);

        $removeDash = str_replace('-', ' ', $removeUnderscore);

        $page = ucwords($removeDash);

        if ($page_name === 'dashboard') :
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $page .'</a></li>';

        elseif ($page_name === 'kategori') :
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        elseif ($page_name === 'obat') :
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        elseif ($page_name === 'supplier') :
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        elseif ($page_name === 'obat-expired') :
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $page .'</a></li>';

        elseif ($page_name === 'pembelian') :
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        elseif ($page_name === 'penjualan') :
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        elseif ($page_name === 'laporan-pembelian') :
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span> Pembelian </span></li>';

        elseif ($page_name === 'laporan-penjualan') :
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span> Penjualan </span></li>';

        elseif ($page_name === 'stok-obat') :
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        elseif ($page_name === 'hpp') :
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span> HPP </span></li>';

        elseif ($page_name === 'laba') :
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        elseif ($page_name === 'pengguna') :
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $page .'</a></li>';

        endif;

    }
}


// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

@endphp
