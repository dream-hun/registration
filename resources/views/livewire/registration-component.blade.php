<div>
    <form wire:submit="save">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-2">
        <div class="mb-4">
             <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name"  autofocus autocomplete="name" />
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input wire:model="phone" id="phone" class="block mt-1 w-full" type="text" name="phone"  />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="mb-4">
        <x-input-label for="address" :value="__('Address')" />
              <x-text-input wire:model="address" id="address" class="block mt-1 w-full" type="text" name="address"  />
              <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

        <div class="mb-4">
       <x-input-label for="gender" :value="__('Gender')" />
            <select id="gender" wire:model="gender" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <div class="mb-4">
             <x-input-label for="trade" :value="__('Trade')" />
            <select id="department" wire:model="department_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                <option value="">Select Department</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('department_id')" class="mt-2" />
        </div>
</div>
<div class="flex">
        <button type="submit" class="bg-red-800 mt-4 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline disabled:cursor-not-allowed">
            Submit application
        </button>
        <div wire:loading.flex wire:target="save" class="flex absolute top-0 right-0 bottom-0 flex items-center pr-4">
                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
    </div>
    
    </form>
 
    
  <!-- Global notification live region, render this permanently at the end of the document -->
  <div x-show="$wire.showSuccessIndicator"
        x-transition.out.opacity.duration.2000ms
        x-effect="if($wire.showSuccessIndicator) setTimeout(() => $wire.showSuccessIndicator = false, 3000)"
        class="flex justify-end pt-4"
        aria-live="polite" class="pointer-events-none fixed inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6">
    <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
      <!-- Notification panel, dynamically insert this into the live region when it needs to be displayed -->
      
        <div x-show="show" x-transition:enter="transform ease-out duration-300 transition" x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2" x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
          <div class="p-4">
            <div class="flex items-start">
              <div class="flex-shrink-0">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
</svg>
              </div>
              <div class="ml-3 w-0 flex-1 pt-0.5">
                <p class="text-sm font-medium text-gray-900">Successfully saved!</p>
                <p class="mt-1 text-sm text-gray-500">Anyone with a link can now view this file.</p>
              </div>
              <div class="ml-4 flex flex-shrink-0">
                <button type="button" @click="show = false; setTimeout(() => show = true, 1000)" class="inline-flex rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                  <span class="sr-only">Close</span>
                  <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"></path>
</svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      
    </div>
  </div>

  </div>
