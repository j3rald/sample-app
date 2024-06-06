<x-app-layout>
    
    <div class="flex justify-center mt-20">
        <form method="POST" action="{{ route('login') }}" class="w-96">
            @csrf
            
            <h4> Create Ticket </h4>

            <!-- Ticket Title -->
            <div class="mt-5">
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div class="mt-2">
                <x-input-label for="desc" :value="__('Description')" />
                <x-textarea class="w-full" name="description" id="description"></x-textarea>
            </div>

            <div>
                <x-input-label for="attachment" :value="__('Attachment')" />
                <x-file-input class="w-full" name="attachment" id="attachment"> </x-file-input>
            </div>
    
            <!-- Password -->
            {{-- <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div> --}}
    
    
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-3 ">
                    Create
                </x-primary-button>
            </div>
        </form>
    
    </div>
    
</x-app-layout>
