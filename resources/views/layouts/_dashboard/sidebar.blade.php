<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            {{-- menu dashboard --}}
            <a class="nav-link {{ set_active('dashboard.index') }}" href="{{ route('dashboard.index') }}">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                {{ trans('dashboard.link.dashboard') }}
            </a>
            <div class="sb-sidenav-menu-heading">{{ trans('dashboard.menu.master') }}</div>
            {{-- menu posts --}}
            @can('manage_posts')
                <a class="nav-link {{ set_active(['posts.index', 'posts.create', 'posts.edit', 'posts.show']) }}"
                    href="{{ route('posts.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class="far fa-newspaper"></i>
                    </div>
                    {{ trans('dashboard.link.posts') }}
                </a>
            @endcan
            {{-- menu categories --}}
            @can('manage_categories')
                <a class="nav-link {{ set_active(['categories.index', 'categories.create', 'categories.edit', 'categories.show']) }}"
                    href="{{ route('categories.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-bookmark"></i>
                    </div>
                    {{ trans('dashboard.link.categories') }}
                </a>
            @endcan
            {{-- menu tags --}}
            @can('manage_tags')
                <a class="nav-link {{ set_active(['tags.index', 'tags.create', 'tags.edit']) }}"
                    href="{{ route('tags.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-tags"></i>
                    </div>
                    {{ trans('dashboard.link.tags') }}
                </a>
            @endcan
            <div class="sb-sidenav-menu-heading">{{ trans('dashboard.menu.user_permission') }}
            </div>
            {{-- Users --}}
            @can('manage_users')
                <a class="nav-link {{ set_active(['users.index', 'users.show', 'users.create', 'users.edit']) }}"
                    href="{{ route('users.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    {{ trans('dashboard.link.users') }}
                </a>
            @endcan
            {{-- Role --}}
            @can('manage_roles')
                <a class="nav-link {{ set_active(['roles.index', 'roles.show', 'roles.create', 'roles.edit']) }}"
                    href="{{ route('roles.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    {{ trans('dashboard.link.roles') }}
                </a>
            @endcan
            <div class="sb-sidenav-menu-heading">{{ trans('dashboard.menu.setting') }}</div>
            {{-- menu file manager --}}
            <a class="nav-link {{ set_active(['filemanager.index']) }}" href="{{ route('filemanager.index') }}">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-photo-video"></i>
                </div>
                {{ trans('dashboard.link.file_manager') }}
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">{{ trans('dashboard.label.logged_in_as') }}</div>
        <!-- show username -->
        {{ Auth::user()->name }}
    </div>
</nav>
