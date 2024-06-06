<section>
    <header>
        @if (session('message')) 
            <div>
                <p class="text-green-500"> {{ session('message') }}</p>
            </div>
        @endif
        
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            User Avatar
        </h2>

        <div>
            <img src="{{ "/storage/$user->avatar" }}" class="rounded-full" width="50" height="50" alt="avatar">
        </div>


        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            Add or Update Avatar
        </p>
    </header>

    <form action="{{ route('profile.avatar') }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="mt-4">
            <x-input-label for="avatar" value="Avatar" />
            <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" :value="old('avatar', $user->avatar)" required autofocus autocomplete="avatar" />
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        </div>

        <div class="flex items-center gap-4 mt-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>

</section>
