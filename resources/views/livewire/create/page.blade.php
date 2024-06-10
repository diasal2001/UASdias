<div>
    {{-- With label, invalid feedback disabled, and form group class --}}
    <div class="row">
        <x-adminlte-input name="iLabel" wire:model="Pengirim" label="Pengirim" placeholder="Tulis nama"
            fgroup-class="col-md-6" disable-feedback/>
    </div>

    <div class="row">
        <x-adminlte-textarea name="iLabel" wire:model="Penerima" label="Penerima" placeholder="Tulis nama"
            fgroup-class="col-md-6" disable-feedback/>
    </div>

    <div class="row">
        <x-adminlte-textarea name="iLabel" wire:model="pesan" label="pesan baru" placeholder="Ketikkan pesan"
            fgroup-class="col-md-6" disable-feedback/>
    </div>
    <hr>
    <div class="row">
        <x-adminlte-button wire:click="kirim" icon="fas fa-paper-plane " theme="success" label="kirim"/>
    </div>
</div>
