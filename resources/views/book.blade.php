<x-app-layout>
    <div class="cotainer py-4">
        <div class="align-items-end justify-content-between flex-wrap gap-2 mb-3">
            <div class= "d-flex justify-content-center">
                <h1 classe='h3 fw-bold mb-1 '></h1>
                <a href="/" class="btn btn-outline-dark rounded-pill">Torna indietro </a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-5">
                <div class="bg-white border rounded-5 p-4 shadow-sm">
                    <h2 class="h5 fw-bold-mb-3">1) Scegli pacchetto</h2>
                    <div class="vstack gap-2">
                        <label class="vl-choice">
                            <input type="radio" name = "package" value="base" checked>
                            <div class="vl-choice__box">
                                <div class="d-flex justify-content-between aligh-item-start">
                                    <div>
                                        <div class="fw-bold">Base</div>
                                        <div class="badge text-bg-light rounded-pill">2h Aperitivo a bordo && Fantastica
                                            Esperenza </div>
                                    </div>

                                    <span>Da $250 a Persona (1-3 Persone) </span>
                                </div>
                            </div>
                        </label>
                        <label class="vl-choice">
                            <input type="radio" name = "package" value="base" checked>
                            <div class="vl-choice__box">
                                <div class="d-flex justify-content-between aligh-item-start">
                                    <div>
                                        <div class="fw-bold">Oro</div>
                                        <div class="badge text-bg-light rounded-pill">4-5h Murano-Burano && Tempo libero
                                        </div>
                                    </div>
                                    <span>Da $300 a Persona (2-6 Persone) </span>
                                </div>
                            </div>
                        </label>
                        <label class="vl-choice">
                            <input type="radio" name = "package" value="base" checked>
                            <div class="vl-choice__box">
                                <div class="d-flex justify-content-between aligh-item-start">
                                    <div>
                                        <div class="fw-bold">Diamante</div>
                                        <div class="badge text-bg-light rounded-pill">3-8h Rotta Personalizzata </div>
                                    </div>
                                    <span>Da $350 a Persona (3-6 Persone) </span>
                                </div>
                            </div>
                        </label>
                    </div>
                    <hr class="my-4">

                    <h3 class="h6 fw-bold mb-2">2) Extra</h3>
                    <div class="vstack gap-2">
                        <label class="form-check">
                            <input class="form-check-input" type="checkbox" name="extras[]" value="pranzo">
                            <span class="form-check-label">Pranzo in isola (selezione locale dopo)</span>
                        </label>
                        <label class="form-check">
                            <input class="form-check-input" type="checkbox" name="extras[]" value="aperitivo_plus">
                            <span class="form-check-label">Aperitivo Premium</span>
                        </label>
                        <label class="form-check">
                            <input class="form-check-input" type="checkbox" name="extras[]" value="passaggio">
                            <span class="form-check-label">Passaggio (transfer) in laguna</span>
                        </label>
                    </div>

                    <div class="alert alert-light border mt-4 mb-0 small">
                        Dopo l’invio ti contattiamo per conferma disponibilità, orari e prezzo finale.
                    </div>
                </div>
            </div>

            {{-- COL DX: form --}}
            <div class="col-lg-7">
                <form class="bg-white border rounded-5 p-4 shadow-sm" method="POST" action="#">
                    @csrf

                    <h2 class="h5 fw-bold mb-3">3) I tuoi dati</h2>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nome</label>
                            <input class="form-control" name="nome" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Cognome</label>
                            <input class="form-control" name="cognome" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Codice Fiscale</label>
                            <input class="form-control text-uppercase" name="codice_fiscale" maxlength="16" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input class="form-control" type="email" name="email" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Cellulare</label>
                            <input class="form-control" name="telefono" placeholder="+39..." required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Indirizzo</label>
                            <input class="form-control" name="indirizzo" required>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="active" for="timeStandard">Ora di partenza</label>
                                <input class="form-control" id="timeStandard" type="time">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Data tour (richiesta)</label>
                            <input class="form-control" type="date" name="data_tour" required>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Note (opzionale)</label>
                            <textarea class="form-control" rows="3" name="note"
                                placeholder="Es: fermate. richieste, isole, allergie, ecc."></textarea>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="vstack gap-2">

                        <label class="form-check">
                            <input class="form-check-input" type="checkbox" name="privacy" required>
                            <span class="form-check-label">Accetto privacy e trattamento dati</span>
                        </label>
                    </div>

                    <div class="d-flex gap-2 flex-wrap mt-4">
                        <button class="btn btn-dark btn-lg rounded-pill px-4" type="submit">Invia richiesta</button>
                        <a class="btn btn-outline-dark btn-lg rounded-pill px-4" href="/">Annulla</a>
                    </div>

                    <p class="text-muted small mt-3 mb-0">
                        * Questo è un form “richiesta”: la prenotazione è confermata solo dopo nostra risposta tramitte
                        whatsapp/email/telefono.
                    </p>
                </form>
            </div>
        </div>

    </div>
</x-app-layout>
