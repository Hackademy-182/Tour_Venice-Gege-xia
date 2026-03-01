<x-app-layout>
    <x-app-layout>
        {{-- HERO --}}
        <section class="hero-vl p-4 p-md-5 rounded-5 text-white overflow-hidden position-relative">
            <div class="row align-items-center g-4">
                <div class="col-md-7">
                    <span class="badge bg-light text-dark rounded-pill px-3 py-2">Tour on the boats • Laguna di
                        Venezia</span>
                    <h1 class="display-5 fw-bold mt-3 mb-2">Venezia vista dall’acqua.</h1>
                    <p class="lead opacity-90 mb-4">
                        Scegli un tour, aggiungi il pranzo nelle isole e costruisci la tua giornata perfetta.
                    </p>

                    <div class="d-flex gap-2 flex-wrap">
                        <a class="btn btn-light btn-lg rounded-pill px-4" href="/prenota">Prenota ora</a>
                        <a class="btn btn-outline-light btn-lg rounded-pill px-4" href="#bellezze">Vedi bellezze</a>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="glass-card p-4 rounded-5">
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="small opacity-75">Da</div>
                                <div class="h3 fw-bold mb-0">€49</div>
                            </div>
                            <div class="text-end">
                                <div class="small opacity-75">Durata</div>
                                <div class="h5 fw-semibold mb-0">1–3 ore</div>
                            </div>
                        </div>
                        <hr class="opacity-25">
                        <div class="d-flex flex-wrap gap-2">
                            <span class="tag-vl">Murano</span>
                            <span class="tag-vl">Burano</span>
                            <span class="tag-vl">Torcello</span>
                            <span class="tag-vl">Lido</span>
                            <span class="tag-vl">Giudecca</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-blur a"></div>
            <div class="hero-blur b"></div>
        </section>

        {{-- BELLEZZE in cerchio --}}
        <section id="bellezze" class="mt-5">
            <div class="d-flex align-items-end justify-content-between flex-wrap gap-2">
                <div>
                    <h2 class="h3 fw-bold mb-1">Bellezze della laguna</h2>
                    <p class="text-muted mb-0">Card ovali in cerchio: scegli dove vuoi andare.</p>
                </div>
                <a class="btn btn-outline-dark rounded-pill" href="/prenota">Vai alla prenotazione</a>
            </div>

            <div class="orbit-wrap mt-4">
                <div class="orbit">
                    <button class="orbit-card" type="button">San Marco</button>
                    <button class="orbit-card" type="button">Murano</button>
                    <button class="orbit-card" type="button">Burano</button>
                    <button class="orbit-card" type="button">Torcello</button>
                    <button class="orbit-card" type="button">Lido</button>
                    <button class="orbit-card" type="button">Giudecca</button>
                    <button class="orbit-card" type="button">Pellestrina</button>
                    <button class="orbit-card" type="button">Sant’Erasmo</button>
                </div>
            </div>

            <p class="small text-muted mt-3">
                (Poi collegheremo queste card alla pagina Prenota e a 12 località totali.)
            </p>
        </section>

        {{-- PACCHETTI --}}
        <section class="mt-5">
            <h2 class="h3 fw-bold mb-3">Pacchetti</h2>

            <div class="row g-3">
                <div class="col-md-4">
                    <div class="pack pack-bronze p-4 rounded-5 h-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <h3 class="h5 fw-bold mb-0">Bronzo</h3>
                            <span class="badge rounded-pill text-bg-light">Base</span>
                        </div>
                        <p class="text-muted mt-2 mb-3">Perfetto per una prima esperienza in laguna/con aperitivi .</p>
                        <ul class="small text-muted mb-4">
                            <li>1 tour</li>
                            <li>Skipper incluso</li>
                            <li>Foto spot consigliati</li>
                        </ul>
                        <a class="btn btn-dark rounded-pill w-100" href="/prenota">Scegli Bronzo</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pack pack-gold p-4 rounded-5 h-100 border border-warning-subtle">
                        <div class="d-flex justify-content-between align-items-start">
                            <h3 class="h5 fw-bold mb-0">Oro</h3>
                            <span class="badge rounded-pill text-bg-warning">Best</span>
                        </div>
                        <p class="text-muted mt-2 mb-3">Più isole + opzioni pranzo/cena.</p>
                        <ul class="small text-muted mb-4">
                            <li>2 tour</li>
                            <li>Pranzo prenotabile</li>
                            <li>Orari flessibili</li>
                        </ul>
                        <a class="btn btn-warning rounded-pill w-100" href="/prenota">Scegli Oro</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pack pack-diamond p-4 rounded-5 h-100 border border-info-subtle">
                        <div class="d-flex justify-content-between align-items-start">
                            <h3 class="h5 fw-bold mb-0">Diamante</h3>
                            <span class="badge rounded-pill text-bg-info">VIP</span>
                        </div>
                        <p class="text-muted mt-2 mb-3">Esperienza completa: tour + soste + comfort.</p>
                        <ul class="small text-muted mb-4">
                            <li>Tour multipli</li>
                            <li>Extra: passaggio / noleggia la barca</li>
                            <li>Assistenza dedicata</li>
                        </ul>
                        <a class="btn btn-info rounded-pill w-100" href="/prenota">Scegli Diamante</a>
                    </div>
                </div>
            </div>
        </section>
    </x-app-layout>
</x-app-layout>
