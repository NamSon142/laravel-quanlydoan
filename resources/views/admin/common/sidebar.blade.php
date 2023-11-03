<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admincp" class="brand-link">
        <img src="{{asset('admin/dist/img/Logo_PTIT_University.png')}}" alt="PTIT Logo" class="brand-image">
        <span class="brand-text font-weight-light">Quản lý đồ án</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/dist/img/'. (Auth::user()->avatar ?? 'default-avatar.png'))}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->username ?? ''}}</a>
            </div>
        </div>

        
    </div>
    <!-- /.sidebar -->
</aside>