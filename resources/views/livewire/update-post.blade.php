<div class="col-12 col-lg-6 mt-5 d-flex justify-content-start formComponent rounded-3">
    <div class="row">
        <div class="col-12">
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>
    <form wire:submit.prevent='update' class="d-flex justify-content-start">
        <div class="d-flex justify-content-start flex-column ">
            <div class="d-flex">
                <img src="{{Storage::url(Auth::user()->img)}}" alt="" height="60"  width="60" class="mx-3 rounded-5 ">
                <textarea class="rounded-3  " wire:model='content' id="content" placeholder="A cosa stai pensando {{Auth::user()->name }} ? "></textarea>
            </div>

            <div class="d-flex flex-column mt-3 ms-3 ">
                <label for="img" class="d-block">Aggiungi Immagine</label>
                <input type="file" id="img" wire:model='img'>
                <div wire:loading target:="img">Sto caricando...</div>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-success ms-5">Modifica Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
