<!--begin::Aside-->
<div class="aside aside-left d-flex  aside-fixed " id="kt_aside">

    <!--begin::Primary-->
    <div class="aside-primary d-flex flex-column align-items-center flex-row-auto">

        <!--begin::Brand-->
        <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-5 py-lg-12">

            <!--begin::Logo-->
            <a href="index.html">
                <img alt="Logo" src="{{ asset('assets/media/logos/logo-letter-2.png') }}" class="max-h-30px" />
            </a>

            <!--end::Logo-->
        </div>

        <!--end::Brand-->

        <!--begin::Nav Wrapper-->
        <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid py-5 scroll scroll-pull">

            <!--begin::Nav-->
            <ul class="nav flex-column" role="tablist">

                <!--begin::Item-->
                @foreach ($menus as $menu)
                    @can($menu->persmission_name)
                        <li class="menu-title"><span data-key="t-menu">{{ $menu->name }}</span></li>

                        @foreach ($menu->items as $item)
                            @can($item->permission_name)
                                <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body"
                                    data-boundary="window" title="{{ $item->name }}">
                                    <a href="{{ route($item->route) }}"
                                        class="nav-link btn btn-icon btn-clean btn-lg {{ request()->routeIs($item->route) ? ' active' : '' }}">
                                        <i class="{{ $item->icon }}"></i>
                                        </span>
                                    </a>
                                </li>
                            @endcan
                        @endforeach
                    @endcan
                @endforeach

                <!--end::Item-->

            </ul>

            <!--end::Nav-->
        </div>

        <!--end::Nav Wrapper-->
        <!--begin::Footer-->
        <div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-4 py-lg-10">
            <!--begin::Logout-->
            <a href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit()"
                class="btn btn-icon btn-clean btn-lg w-40px h-40px" data-toggle="tooltip" data-placement="right"
                data-container="body" data-boundary="window" title="Logout">
                <span class="symbol symbol-30 symbol-lg-40">
                    <span class="svg-icon svg-icon-xl">
                        <i class="flaticon2-right-arrow"></i>
                    </span>

                </span>
            </a>
            <form action="{{ route('logout') }}" method="POST" id="form-logout">
                @csrf
            </form>
            <!--end::Logout-->
        </div>
        <!--end::Footer-->
    </div>

    <!--end::Primary-->
</div>

<!--end::Aside-->
