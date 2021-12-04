<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/"
                        aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('slip.index') }}"
                        aria-expanded="false">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span class="hide-menu">Slip Order</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('kwitansi.index') }}"
                        aria-expanded="false">
                        <i class="fa fa-university" aria-hidden="true"></i>
                        <span class="hide-menu">Kwitansi</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('pengeluaran.index') }}"
                        aria-expanded="false">
                        <i class="fa fa-th-large " aria-hidden="true"></i>
                        <span class="hide-menu">pengeluaran</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-cyan sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" type="submit">
                            <i class="fa fa-sign-out-alt" aria-hidden="true"></i>
                            <span class="hide-menu">Logout</span>
                        </button>
                    </form>
                    {{-- <a class="sidebar-link waves-effect waves-dark sidebar-link" href="logout"
                        aria-expanded="false">
                        <i class="fa fa-sign-out-alt " aria-hidden="true"></i>
                        <span class="hide-menu">Logout</span>
                    </a> --}}
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
