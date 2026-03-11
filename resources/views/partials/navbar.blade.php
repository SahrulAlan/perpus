<!--  Header Start -->
<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="ti ti-bell"></i>
                    <div class="notification bg-primary rounded-circle"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                    <div class="message-body">
                        <a href="javascript:void(0)" class="dropdown-item">
                            Item 1
                        </a>
                        <a href="javascript:void(0)" class="dropdown-item">
                            Item 2
                        </a>
                    </div>
                </div>
            </li>
        </ul>
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                <li class="nav-item dropdown">
                    <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="./assets/images/profile/user-1.jpg" alt="" width="35" height="35"
                            class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up p-3" aria-labelledby="drop2"
                        style="min-width: 220px;">
                        <div class="message-body">
                            <!-- Header dengan user info (opsional) -->
                            <div class="text-center mb-3 pb-2 border-bottom">
                                <h6 class="fw-semibold mb-1">{{ Auth::user()->name ?? 'User' }}</h6>
                                <p class="text-muted small mb-0">{{ Auth::user()->email ?? 'user@example.com' }}</p>
                            </div>

                            <!-- Menu items -->
                            <a href="javascript:void(0)"
                                class="d-flex align-items-center gap-3 dropdown-item px-3 py-2 rounded-2 mb-1">
                                <i class="ti ti-user fs-5 text-primary"></i>
                                <span class="mb-0 fs-3 fw-medium">My Profile</span>
                            </a>

                            <a href="javascript:void(0)"
                                class="d-flex align-items-center gap-3 dropdown-item px-3 py-2 rounded-2 mb-1">
                                <i class="ti ti-mail fs-5 text-success"></i>
                                <span class="mb-0 fs-3 fw-medium">My Account</span>
                            </a>

                            <a href="javascript:void(0)"
                                class="d-flex align-items-center gap-3 dropdown-item px-3 py-2 rounded-2 mb-3">
                                <i class="ti ti-list-check fs-5 text-warning"></i>
                                <span class="mb-0 fs-3 fw-medium">My Task</span>
                            </a>

                            <!-- Divider -->
                            <div class="dropdown-divider my-2"></div>

                            <!-- Logout Button - CENTERED -->
                            <form action="{{ route('logout') }}" method="post" class="text-center mt-3">
                                @csrf
                                <button type="submit"
                                    class="btn btn-outline-danger px-5 py-2 rounded-3 d-inline-flex align-items-center gap-2">
                                    <i class="ti ti-logout fs-5"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!--  Header End -->
