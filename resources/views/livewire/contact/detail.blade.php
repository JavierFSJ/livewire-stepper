<div class="mx-auto">
    <form wire:submit.prevent="submit">
        <div class="my-2">
            <x-input-label for="extra" :value="__('Extra')" />
            <textarea wire:model="extra" id="extra" class="w-full my-4 h-40"></textarea>
            <x-input-error :messages="$errors->get('extra')" class="mt-2" />
        </div>
        <div class="flex justify-end">
            <x-primary-button class="mt-5" type="submit">Guardar</x-primary-button>
        </div>
    </form>
</div>
