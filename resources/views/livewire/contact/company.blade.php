<div class="mx-auto">
    <form wire:submit.prevent="submit">
        <div class="my-2">
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus  wire:model="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="my-2">
            <x-input-label for="identification" :value="__('identification')" />
            <x-text-input id="identification" class="block mt-1 w-full" type="text" name="identification" :value="old('identification')" required autofocus  wire:model='identification'/>
            <x-input-error :messages="$errors->get('identification')" class="mt-2" />
        </div>
        <div class="my-2">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus  wire:model='email'/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
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
            <x-input-label for="extra" :value="__('Otro')"/>
            <textarea class="w-full" name="extra" id="extra" wire:model='extra'></textarea>
            <x-input-error :messages="$errors->get('extra')" class="mt-2" />
        </div>
        <div class="flex justify-end">
            <x-primary-button class="mt-5" type="submit">Guardar</x-primary-button>
        </div>
    </form>
</div>