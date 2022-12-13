<div class="mx-auto">
    <form wire:submit.prevent="submit">
        <div class="my-2">
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus  wire:model='name'/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="my-2">
            <x-input-label for="surname" :value="__('Surname')" />
            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus  wire:model='surname'/>
            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
        </div>
        
        <div class="my-2">
            <x-input-label for="choices" :value="__('Tipo')" />
            <select class="w-full" name="choices" id="choices"  wire:model='choices'>
                <option value="">Seleccione</option>
                <option value="adverd">{{__('Adverd')}}</option>
                <option value="post">{{ __('Post')}}</option>
                <option value="post">{{ __('Post')}}</option>
                <option value="cource">{{ __('Cource')}}</option>
                <option value="Movie">{{ __('Movie')}}</option>
                <option value="Other">{{ __('Other')}}</option>
            </select>
            <x-input-error :messages="$errors->get('choices')" class="mt-2" />
        </div>
        <div class="my-2">
            <x-input-label for="other" :value="__('Otro')"/>
            <textarea class="w-full" name="other" id="other" wire:model='other'></textarea>
            <x-input-error :messages="$errors->get('other')" class="mt-2" />
        </div>
        <div class="flex justify-end">
            <x-primary-button class="mt-5" type="submit">Enviar</x-primary-button>
        </div>
    </form>
</div>

