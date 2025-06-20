<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        /* Sidebar */
        #sidebar {
            width: 220px;
            transition: all 0.3s ease;
        }

        #sidebar.collapsed {
            margin-left: -220px;
        }

        #main-content {
            transition: margin-left 0.3s ease;
            margin-left: 220px;
        }

        #main-content.expanded {
            margin-left: 0;
        }

        .nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
        }

        .nav-link:hover {
            color: #ffc107 !important;
        }

        @media (max-width: 768px) {
            #sidebar {
                position: absolute;
                z-index: 1000;
            }
        }
    </style>
</head>

<body class="bg-light">

    <!-- Sidebar -->
    <div id="sidebar" class="bg-primary text-white position-fixed h-100 p-3">
        <h4 class="fw-bold mb-4 text-center">SIMRS</h4>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="{{ route('dashboard') }}" class="nav-link text-white {{ request()->routeIs('dashboard') ? 'active fw-bold' : '' }}">
                    <i class="fas fa-home me-1"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('obat.index') }}" class="nav-link text-white {{ request()->routeIs('obat.*') ? 'active fw-bold' : '' }}">
                    <i class="fas fa-pills me-1"></i> Data Obat
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('pasien.index') }}" class="nav-link text-white {{ request()->routeIs('pasien.*') ? 'active fw-bold' : '' }}">
                    <i class="fas fa-user-injured me-1"></i> Data Pasien
                </a>
            </li>
        </ul>
    </div>


    <div id="main-content" class="p-4">

        <button class="btn btn-outline-primary mb-3" id="toggleSidebar">
            <i class="fas fa-bars"></i>
        </button>

        @yield('content')

        <footer class="text-center mt-5 mb-3 text-muted">
            &copy; {{ date('Y') }} Sistem Informasi Obat dan Pasien
        </footer>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const toggleBtn = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        });
    </script>
</body>

</html>