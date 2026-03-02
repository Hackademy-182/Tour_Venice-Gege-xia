<x-app-layout>
    <div class="card mb-3">
    <img src="{{ $luogo['img'] }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $luogo['nome'] }}</h5>
        <p class="card-text">{{ $luogo['descrizione'] }}</p>
    </div>
</div>
</x-app-layout>
