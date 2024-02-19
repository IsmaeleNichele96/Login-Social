<x-layout>
    {{-- Sezione Pubblica Post --}}
    <section class="container px-4">
        {{-- Row del titolo della homepage --}}
        <div class="row">
            <div class="col-12 mt-5">
                <h5 class="text-center text-uppercase">pubblica un post</h5>
            </div>
        </div>
        {{-- Row del componente di LiveWire --}}
        <div class="row justify-content-center ">
            <livewire:create-post/>
        </div>

        {{-- Row del componente di LiveWire --}}
        <div class="row justify-content-center ">
            <livewire:read-post/>
        </div>
    </section>
</x-layout>
