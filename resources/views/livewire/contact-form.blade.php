<div>
    @if ($formSubmitted)
        <p class="text-green-400 text-2xl text-center mt-8">Mensaje enviado con éxito. Le responderemos a la brevedad.</p>
    @else
    <form wire:submit.prevent="submitForm" class="space-y-8 mt-8">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-800">Nombre</label>
            <input wire:model="name" type="text" id="name" name="name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                placeholder="Nombre">
            @error('name')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-800">Email</label>
            <input wire:model="email" type="email" id="email" name="email"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                placeholder="Correo">
            @error('email')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-800">Teléfono</label>
            <input wire:model="phone" type="text" id="phone" name="phone"
                class="block p-3 w-full text-sm text-gray-800 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500"
                placeholder="Teléfono">
            @error('phone')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="sm:col-span-2">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-800">Mensaje</label>
            <textarea wire:model="message" id="message" rows="6" name="message"
                class="block p-2.5 w-full text-sm text-gray-800 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                placeholder="Escriba su mensaje..."></textarea>
            @error('message')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit"
            class="w-full lg:w-auto py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-azul-500 sm:w-fit hover:bg-azul-600 focus:ring-4 focus:outline-none focus:ring-azul-300">Enviar
            mensaje</button>
    </form>
    @endif
</div>
