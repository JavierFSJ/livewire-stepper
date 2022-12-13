<div class="w-1/3 mx-auto">
    @if ($step === 1)
        <form wire:submit.prevent="submit">
            <div class="my-2">
                <x-input-label for="subject" :value="__('Asunto')" />
                <x-text-input id="subject" class="block mt-1 w-full" type="text" subject="subject" :value="old('subject')"
                    required autofocus wire:model='subject' />
                <x-input-error :messages="$errors->get('subject')" class="mt-2" />
            </div>
            <div class="my-2">
                <x-input-label for="type" :value="__('Tipo')" />
                <select class="w-full" name="type" id="type" wire:model='type'>
                    <option value="">Seleccione</option>
                    <option value="company">{{ __('Company') }}</option>
                    <option value="person">{{ __('Person') }}</option>
                </select>
                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            </div>
            <div class="my-2">
                <x-input-label for="message" :value="__('Mensaje')" />
                <textarea class="w-full" name="message" id="message" wire:model='message'></textarea>
                <x-input-error :messages="$errors->get('message')" class="mt-2" />
            </div>
            <div class="flex justify-end">
                <x-primary-button class="mt-5" type="submit">Enviar</x-primary-button>
            </div>
        </form>
    @elseif ( $step === 2)
        {{-- Company --}}
        @livewire('contact.company')
    @elseif ( $step === 3)
        {{--Person--}}
        @livewire('contact.person')
    @elseif ( $step === 4)
        {{-- Extra --}}
        @livewire('contact.detail')
    @else
        {{-- Fin --}}
    @endif
</div>
