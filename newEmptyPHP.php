<div id="navbar" role="navigation" class="navbar-collapse collapse" aria-expanded="false" style="height: 0px;">
                    <ul class="nav navbar-nav navbar-right">
                        <li class=""><a href="/"><span>Главная</span></a></li>
                        <li class=""><a target="_self" class="smooth" href="/catalog/"><i class="icon-chevron-down-bold icon-color icon-position-left icon-size-m"></i><span>Каталог</span></a>
                            <ul class="sub-menu">
                                <li><a href="/catalog/kuhni/"><span>Кухни</span></a></li>
                                <li><a href="/catalog/shkaf/"><span>Шкафы купе</span></a></li>
                                <li><a href="/catalog/garderobnya/"><span>Гардеробные</span></a></li>
                                <li><a href="/catalog/office/"><span>Офисная мебель</span></a></li>
                                <li><a href="/catalog/detskie/"><span>Детские</span></a></li>
                                <li><a href="/catalog/drugay-mebel/"><span>Другая мебель</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a href="/service/"><span>Услуги и цены</span></a></li>
                        <li class=""><a href="/about/"><span>О нас</span></a></li>
                        <li class=""><a href="/contact/"><span>Контакты</span></a></li>
                    </ul>
                </div>

add_filter( 'wp_get_nav_menu_items', 'filter_function_name_944', 10, 3 );
function filter_function_name_944( $items, $menu, $args ){
    foreach ($items as $key=>$item) {
        if ($item->menu_item_parent > 0 ) {
            echo $id = $item->menu_item_parent.'<br/>';
        }
        
    }
    exit;
	
}