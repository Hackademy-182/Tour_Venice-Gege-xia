<x-app-layout>
<!-- Contenitore principale centrato -->
<div style="display: flex; flex-direction: column; align-items: center; min-height: 100vh; padding: 20px; margin-top: 40px;">

    <!-- Titolo sopra la card -->
    <h1 style="text-align: center; font-size: 3rem; margin-bottom: 30px; color: #333;">Il Luogo</h1>

    <!-- Card orizzontale grande -->
    <div class="card mb-3" style="max-width: 900px; width: 100%; border: none; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,0.2);">
        <div class="row g-0 align-items-center">
            
            <!-- Immagine grande a sinistra -->
            <div class="col-md-5">
                <img src="{{ $luogo['img'] }}" class="img-fluid" 
                     style="height: 400px; object-fit: cover; width: 100%;" 
                     alt="{{ $luogo['nome'] }}">
            </div>
            
            <!-- Testo a destra con blur e gradiente -->
            <div class="col-md-7">
                <div class="card-body text-dark" 
                     style="
                       background: linear-gradient(135deg, rgba(255,255,0,0.4), rgba(0,200,255,0.4));
                       backdrop-filter: blur(12px);
                       -webkit-backdrop-filter: blur(12px);
                       padding: 30px;
                       height: 400px;
                       display: flex;
                       flex-direction: column;
                       justify-content: center;
                     ">
                    <h2 class="card-title" style="font-size: 2rem;">{{ $luogo['nome'] }}</h2>
                    <p class="card-text" style="font-size: 1.2rem;">{{ $luogo['descrizione'] }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
</x-app-layout>