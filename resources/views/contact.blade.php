<x-layouts.layout>
    <div class="min-h-full bg-white p-8">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-4xl font-bold text-[#00bdb5] mb-8 text-center">Contacto</h1>
            
            <div class="bg-white rounded-lg shadow-lg p-6">
                <form class="space-y-6">
                    <div>
                        <label class="text-gray-700 font-semibold">Nombre</label>
                        <input type="text" class="input w-full border-[#00bdb5] bg-white text-gray-700 focus:border-[#00bdb5] focus:ring-[#00bdb5] rounded-md shadow-sm mt-1" required />
                    </div>
                    
                    <div>
                        <label class="text-gray-700 font-semibold">Email</label>
                        <input type="email" class="input w-full border-[#00bdb5] bg-white text-gray-700 focus:border-[#00bdb5] focus:ring-[#00bdb5] rounded-md shadow-sm mt-1" required />
                    </div>
                    
                    <div>
                        <label class="text-gray-700 font-semibold">Mensaje</label>
                        <textarea class="input w-full border-[#00bdb5] bg-white text-gray-700 focus:border-[#00bdb5] focus:ring-[#00bdb5] rounded-md shadow-sm mt-1 h-32" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn bg-[#00bdb5] text-white hover:bg-white hover:text-[#00bdb5] border border-[#00bdb5] w-full">
                        Enviar Mensaje
                    </button>
                </form>

                <div class="mt-8 pt-8 border-t border-gray-200">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Información de Contacto</h2>
                    <div class="space-y-4 text-gray-600">
                        <p>📍 Dirección: Calle Principal 123, Ciudad</p>
                        <p>📞 Teléfono: (123) 456-7890</p>
                        <p>✉️ Email: info@tucentro.edu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout> 