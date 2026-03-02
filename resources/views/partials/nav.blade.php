<nav class="navbar navbar-expand-lg fixed-top vl-nav vl-nav--overlay">
    <div class="container-fluid px-3 px-md-4">
        <a class="navbar-brand fw-bold text-white" href="/">Veniceland</a>

        <div class="ms-auto d-flex align-items-center gap-2">

            <!-- Burger dropdown -->
            <div class="dropdown">
                <button class="btn vl-burger" data-bs-toggle="dropdown" aria-expanded="false">
                    <span></span><span></span><span></span>
                </button>

                <div class="dropdown-menu dropdown-menu-end vl-menu p-3">
                    <a class="vl-item {{ request()->is('/') ? 'active' : '' }}" href="/">
                        <div class="vl-item__title">Home</div>
                        <div class="vl-item__sub">laguna,locali.isole.bacaro-tour</div>
                    </a>

                    <a class="vl-item {{ request()->is('prenota*') ? 'active' : '' }}" href="./prenota">
                        <div class="vl-item__title">Visita</div>
                        <div class="vl-item__sub">Tour e prenotazione</div>
                    </a>

                    <a class="vl-item {{ request()->is('contatti*') ? 'active' : '' }}" href="/contatti">
                        <div class="vl-item__title">Perché noi</div>
                        <div class="vl-item__sub">Chi siamo + contatti</div>
                    </a>

                    <div class="mt-3">
                        <a class="btn btn-dark w-100 rounded-pill" href="/prenota">Prenota ora</a>
                    </div>
                </div>
            </div>

            <!-- Lingue dropdown -->
            <div class="dropdown ms-lg-2">
                <a class="nav-link vl-link dropdown-toggle" href="#" id="langDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    🇮🇹
                </a>

                <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="langDropdown">
                    <li><a class="dropdown-item" href="#">🇮🇹 Italiano</a></li>
                    <li><a class="dropdown-item" href="#">🇬🇧 English</a></li>
                    <li><a class="dropdown-item" href="#">🇷🇺 Русский</a></li>
                    <li><a class="dropdown-item" href="#">🇵🇱 Polski</a></li>
                    <li><a class="dropdown-item" href="#">🇨🇳 中文</a></li>
                    <li><a class="dropdown-item" href="#">🇯🇵 日本語</a></li>
                    <li><a class="dropdown-item" href="#">🇩🇪 Deutsch</a></li>
                    <li><a class="dropdown-item" href="#">🇫🇷 Français</a></li>
                    <li><a class="dropdown-item" href="#">🇪🇸 Español</a></li>
                    <li><a class="dropdown-item" href="#">🇵🇹 Português</a></li>
                </ul>
            </div>

            <!-- CTA -->
            <div class="ms-lg-2">
                <a class="btn btn-light rounded-pill px-4" href="/prenota">Prenota ora</a>
            </div>

        </div>
    </div>
</nav>
