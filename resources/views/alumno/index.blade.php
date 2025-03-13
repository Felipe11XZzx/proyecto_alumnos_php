<x-layouts.layout>
    <div class="max-h-full overflow-x-auto p-6 bg-white">
        @if (session()->has ("status"))
            <div class="bg-[#00bdb5] text-white p-4 rounded-lg mb-4">
                <h2>{{session()->get("status")}}</h2>
            </div>
        @endif

        <a href="alumnos/create" class="btn bg-[#00bdb5] text-white hover:bg-white hover:text-[#00bdb5] border border-[#00bdb5] mb-6">
            Crear alumno
        </a>

        <div class="overflow-x-auto rounded-lg shadow-lg">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th class="text-center font-semibold text-white text-lg bg-[#00bdb5] p-4">NOMBRE</th>
                        <th class="text-center font-semibold text-white text-lg bg-[#00bdb5] p-4">DNI</th>
                        <th class="text-center font-semibold text-white text-lg bg-[#00bdb5] p-4">EMAIL</th>
                        <th class="text-center font-semibold text-white text-lg bg-[#00bdb5] p-4">ACCIONES</th>
                        <th class="text-center font-semibold text-white text-lg bg-[#00bdb5] p-4"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($alumnos as $alumno)
                        <tr class="{{$loop->even ? 'bg-[#00bdb5]/10' : 'bg-white'}} hover:bg-[#00bdb5]/20 transition-colors duration-200">
                            <td class="text-center text-lg p-4">{{ $alumno->nombre }}</td>
                            <td class="text-center text-lg p-4">{{ $alumno->dni }}</td>
                            <td class="text-center text-lg p-4">{{ $alumno->email }}</td>
                            <td class="text-center p-4"> 
                                <a href="{{route('alumnos.edit',$alumno->id)}}" class="flex flex-col items-center text-gray-600 hover:text-[#00bdb5] transition-colors duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                                        <path strokeLinecap="round" strokeLinejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                    <span class="text-sm">Editar</span>
                                </a>
                            </td>
                            <td class="text-center p-4">
                                <form id="formulario{{$alumno->id}}" action="{{route('alumnos.destroy', $alumno->id)}}" method="POST">
                                    @method("DELETE")
                                    @csrf
                                    <button type="button" onclick="confirmarDelete({{$alumno->id}})" class="flex flex-col items-center text-gray-600 hover:text-red-600 transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                        </svg>
                                        <span class="text-sm">Borrar</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center p-4">No hay alumnos registrados</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Scripts de SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmarDelete(id) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "No podrás revertir esta acción",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#00bdb5',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`formulario${id}`).submit();
                }
            });
        }
    </script>
</x-layouts.layout>