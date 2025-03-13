<x-layouts.layout>
<div class="min-h-full flex flex-col justify-center items-center bg-gray-50 py-8">
    <div class="w-full max-w-2xl bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-3xl font-bold text-[#00bdb5] text-center mb-8">Editar Alumno</h1>
        
        <form action="{{route('alumnos.update', $alumno->id)}}" method="post" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @method("PUT")
            @csrf
            
            <div class="space-y-2">
                <label class="text-gray-700 font-semibold">Nombre</label>
                <input value="{{$alumno->name}}" name="name" type="text" placeholder="Nombre del alumno"
                    class="input w-full border-[#00bdb5] bg-white text-gray-700 focus:border-[#00bdb5] focus:ring-[#00bdb5] rounded-md shadow-sm" />
            </div>
            
            <div class="space-y-2">
                <label class="text-gray-700 font-semibold">DNI</label>
                <input value="{{$alumno->dni}}" name="dni" type="text" placeholder="DNI del alumno"
                    class="input w-full border-[#00bdb5] bg-white text-gray-700 focus:border-[#00bdb5] focus:ring-[#00bdb5] rounded-md shadow-sm" />
            </div>
            
            <div class="space-y-2">
                <label class="text-gray-700 font-semibold">Email</label>
                <input value="{{$alumno->email}}" name="email" type="email" placeholder="Email del alumno"
                    class="input w-full border-[#00bdb5] bg-white text-gray-700 focus:border-[#00bdb5] focus:ring-[#00bdb5] rounded-md shadow-sm" />
            </div>
            
            <div class="md:col-span-2 flex justify-center gap-4 mt-4">
                <button type="submit" 
                    class="btn bg-[#00bdb5] text-white hover:bg-white hover:text-[#00bdb5] border border-[#00bdb5] px-8">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
</div>
</x-layouts.layout>