<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  d-flex  align-items-center">
            <a class="navbar-brand" href="{{ route('home') }}" data-toggle="tooltip" data-original-title="{{ setting('company_name') }}">
                @if (setting('company_logo'))
                <img alt="{{ setting('company_name') }}"
                    height="45"
                    class="navbar-brand-img"
                    src="{{ asset(setting('company_logo')) }}">
                @else
                {{ substr(setting('company_name'), 0, 15) }}...
                @endif
            </a>
            <div class=" ml-auto ">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('home*')) ? 'active' : '' }}" href="{{route('home')}}">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">{{__('داشبورد')}}</span>
                        </a>
                    </li>
                    @can('update-settings')
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('settings*')) ? 'active' : '' }}" href="{{route('settings.index')}}">
                                <i class="ni ni-settings-gear-65 text-primary"></i>
                                <span class="nav-link-text">{{__('تنظیمات سیستم')}}</span>
                            </a>
                        </li>
                    @endcan

                    @canany(['view-user', 'create-user'])

                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('users*')) ? 'active' : '' }}" href="#navbar-users"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-users">
                                <i class="fas text-primary fa-tasks"></i>
                                <span class="nav-link-text">{{__('مدیریت کاربران')}}</span>
                            </a>
                            <div class="collapse" id="navbar-users">
                                <ul class="nav nav-sm flex-column">
                                 @can('view-user')
                                    <li class="nav-item">
                                        <a href="{{route('users.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">{{__('کل کاربران')}}</span></a>
                                    </li>
                                    @endcan
                                    @can( 'create-user')
                                    <li class="nav-item">
                                        <a href="{{route('users.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">{{__('ثبت کاربر جدید')}}</span></a>
                                    </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                    @endcan

                    @canany(['view-permission', 'create-permission'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('permissions*')) ? 'active' : '' }}" href="{{route('permissions.index')}}">
                                <i class="fas fa-lock-open text-primary"></i>
                                <span class="nav-link-text">{{__('مدیریت دسترسی ها')}}</span>
                            </a>
                        </li>
                    @endcan
                    @canany(['view-role', 'create-role'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('roles*')) ? 'active' : '' }}" href="{{route('roles.index')}}">
                                <i class="fas fa-lock text-primary"></i>
                                <span class="nav-link-text">{{__('مدیریت نقش ها')}}</span>
                            </a>
                        </li>
                    @endcan

                    @canany(['media'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('media*')) ? 'active' : '' }}" href="{{route('media.index')}}">
                                <i class="fas fa-images text-primary"></i>
                                <span class="nav-link-text">{{__('مدیریت فایلها')}}</span>
                            </a>
                        </li>
                    @endcan
                    @canany(['view-activity-log'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('activity-log*')) ? 'active' : '' }}" href="{{route('activity-log.index')}}">
                                <i class="fas fa-history text-primary"></i>
                                <span class="nav-link-text">لاگ تغییرات</span>
                            </a>
                        </li>
                    @endcan
                    @canany(['view-activity-ssh-log'])
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('activity-ssh-log*')) ? 'active' : '' }}" href="{{route('activity-ssh-log.index')}}">
                            <i class="fas fa-history text-primary"></i>
                            <span class="nav-link-text">لاگ دستورات SSH</span>
                        </a>
                    </li>
                    @endcan
                    <li class="nav-item">
                        <hr class="my-3">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
