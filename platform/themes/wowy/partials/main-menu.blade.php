@foreach ($menu_nodes as $menu)
    @if ($menu->has_child)
        <div class="has-sub-menu">
            <div class="menu-item-wrapper" >
                <a href="{{ url($menu->url) }}">{{ $menu->title }}</a>
                <span class="mobile-menu-toggle"
                    style="cursor: pointer; padding: 10px; font-weight: bold; font-size: 20px;">+</span>
            </div>

            <div class="ul-header-submenu" style="display: none;">
                <ul>
                    @foreach ($menu->child as $child)
                        <li class="{{ $child->has_child ? 'side-dropdown' : '' }}">
                            <div class="sub-menu-item-wrapper"
                                style="display: flex; align-items: center; justify-content: space-between;">
                                <a href="{{ url('projects/' . ltrim($child->url, '/')) }}">
                                    {{ $child->title }}
                                </a>
                                @if ($child->has_child)
                                    <span class="sub-mobile-toggle" style="cursor: pointer; padding: 5px 15px;">+</span>
                                @endif
                            </div>

                            @if ($child->has_child)
                                <ul class="sub-side-menu" style="display: none;">
                                    @foreach ($child->child as $subchild)
                                        <li>
                                            <a href="{{ url(ltrim($subchild->url, '/')) }}">
                                                {{ $subchild->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @else
        <a href="{{ url($menu->url) }}">{{ $menu->title }}</a>
    @endif
@endforeach


<style>

/* --- Desktop View (992px and above) --- */
@media (min-width: 992px) {
    .has-sub-menu:hover > .ul-header-submenu {
        display: block !important;
    }

    .side-dropdown:hover > .sub-side-menu {
        display: block !important;
        position: absolute;
        left: 100%;
        top: 0;
    }

    .mobile-menu-toggle, .sub-mobile-toggle {
        display: none !important; /
    }
}





    .ul-header-submenu {
        overflow: visible !important;
    }


    .ul-header-submenu ul li {
        position: relative;
        list-style: none;
    }

  
    .sub-side-menu {
        display: none;
     
        position: absolute;
        top: 0;
        left: 100%;
   
        background: #000;
       
        min-width: 200px;
        padding: 5px 0;
        border: 1px solid #444;
        z-index: 9999;
            border-radius: 15px;
    }


    .side-dropdown:hover>.sub-side-menu {
        display: block !important;
    }


    @media (max-width: 991px) {
        .sub-side-menu {
            position: static;
            display: block;
            padding-left: 20px;
            border: none;
        }
    }

    .ul-header-submenu ul li {
        position: relative;
        list-style: none;
    }


    .sub-side-menu {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        background: #000;
        min-width: 200px;
        padding: 5px 0;
        border: 1px solid #444;
        z-index: 9999;
    }

  
    @media (max-width: 991px) {
        .sub-side-menu {
            position: static;
            background: transparent;
            border: none;
            padding-left: 20px;
        }
    }

    .arrow {
        float: right;
    }




    .ul-header-submenu ul li {
        position: relative;
        list-style: none;
    }


    .side-dropdown:hover>.sub-side-menu {
        display: block;
    }

    .sub-side-menu {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        background: #000;
        min-width: 200px;
        padding: 5px 0;
        border: 1px solid #444;
        z-index: 9999;
    }


    @media (max-width: 991px) {
        .sub-side-menu {
            position: static;
            background: transparent;
            border: none;
            padding-left: 20px;
        }

        .side-dropdown:hover>.sub-side-menu {
            display: none;
        
        }
    }
</style>
{{-- <style>
@media (max-width: 991px) {
    /* Desktop hover band karo mobile ma */
    /* .side-dropdown:hover > .sub-side-menu,
    .has-sub-menu:hover > .ul-header-submenu {
        display: none !important;
    } */

    /* Sub-menus styling for mobile */
    .ul-header-submenu, .sub-side-menu {
        position: static !important;
        width: 100% !important;
        padding-left: 20px !important;

        border: none !important;
        box-shadow: none !important;
    }

    .menu-item-wrapper, .sub-menu-item-wrapper {
        border-bottom: 1px solid #333;
    }
}
</style> --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
    
    // 1. Projects na menu par click toggle (Main Menu)
    document.querySelectorAll(".mobile-menu-toggle").forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.stopPropagation();
            const parentDiv = this.closest(".has-sub-menu");
            const subMenu = parentDiv.querySelector(".ul-header-submenu");

            if (subMenu.style.display === "block") {
                subMenu.style.display = "none";
                this.textContent = "+";
            } else {
                subMenu.style.display = "block";
                this.textContent = "-";
            }
        });
    });

    // 2. Mivanthum 1 na menu par click toggle (Sub Menu)
    document.querySelectorAll(".sub-mobile-toggle").forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.stopPropagation();
            const parentLi = this.closest("li");
            const sideMenu = parentLi.querySelector(".sub-side-menu");

            if (sideMenu.style.display === "block") {
                sideMenu.style.display = "none";
                this.textContent = "+";
            } else {
                sideMenu.style.display = "block";
                this.textContent = "-";
            }
        });
    });
});
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        // Toggle main submenu (Projects +)
        document.querySelectorAll(".menu-toggle").forEach(function(toggle) {
            toggle.addEventListener("click", function(e) {
                e.preventDefault();
                const submenu = this.nextElementSibling;

                document.querySelectorAll(".ul-header-submenu").forEach(function(menu) {
                    if (menu !== submenu) menu.style.display = "none";
                });

                submenu.style.display = submenu.style.display === "block" ? "none" : "block";
            });
        });

        // Toggle side submenu (Mivanthum 1 + → Availability Status)
        document.querySelectorAll(".submenu-toggle").forEach(function(toggle) {
            toggle.addEventListener("click", function(e) {
                const parentLi = this.closest("li");
                const subMenu = parentLi.querySelector(".sub-side-menu");

                if (subMenu) {
                    e.preventDefault();

                    // Close other side menus
                    parentLi.parentElement.querySelectorAll(".sub-side-menu").forEach(function(
                        menu) {
                        if (menu !== subMenu) menu.style.display = "none";
                    });

                    subMenu.style.display = subMenu.style.display === "block" ? "none" :
                    "block";
                }
            });
        });

    });
</script>

{{-- <ul {!! $options !!}>
    @php $menu_nodes->loadMissing('metadata'); @endphp
    @foreach ($menu_nodes as $key => $row)
        <li class="{{ $row->css_class }}">
            <a href="{{ url($row->url) }}" @if ($row->active) class="active" @endif target="{{ $row->target }}">
                @if ($iconImage = $row->getMetadata('icon_image', true))
                    <img src="{{ RvMedia::getImageUrl($iconImage) }}" alt="icon image" width="14" height="14" style="vertical-align: middle; margin-top: -2px"/>
                @elseif ($row->icon_font)<i class='{{ trim($row->icon_font) }}'></i> @endif{{ $row->title }}
                @if ($row->has_child)
                    @if ($row->parent_id) <i class="fa fa-chevron-right"></i> @else <i class="fa fa-chevron-down"></i> @endif
                @endif
            </a>
            @if ($row->has_child)
                {!!
                    Menu::generateMenu([
                        'menu'       => $menu,
                        'view'       => 'main-menu',
                        'options'    => ['class' => $row->parent_id ? 'level-menu level-menu-modify' : 'sub-menu'],
                        'menu_nodes' => $row->child,
                    ])
                !!}
            @endif
        </li>
    @endforeach
</ul> --}}
