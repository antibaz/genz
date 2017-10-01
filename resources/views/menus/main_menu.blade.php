@php
    $menus = \App\Models\MenuMain::all()->sortBy('sort_menu');
    foreach ($menus as $raw_menu)
    {
        $arMenus[$raw_menu->parent][] = $raw_menu;
    }
@endphp

<div class="top_menu top-level tmmegamenu_item">
    <div class="stickUpTop" style="position: relative; top: 0px;">
        <div class="stickUpHolder container">
                    <div class="menu-title tmmegamenu_item">Меню</div>
                    <ul class="menu clearfix top-level-menu tmmegamenu_item">
                        @foreach($arMenus[0] as $menu)
                            <li class="top-level-menu-li tmmegamenu_item">
                                <a
                                        class="top-level-menu-li-a tmmegamenu_item"
                                        href="/{{ $menu->slug }}">{{ $menu->menu_title }}</a>
                                @if (isset($arMenus[$menu->id]) && count($arMenus[$menu->id]) > 0)
                                    <ul class="content" style="display: none">
                                        @foreach($arMenus[$menu->id] as $child)
                                            <li class="category"><a href="/{{ $child->slug }}">{{ $child->menu_title }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>


</div>