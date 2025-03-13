<nav class="h-10v bg-[#00bdb5] flex flex-row justify-start justify-center items-center px-4">
    
    <a href="/" class="bg-[#00bdb5] text-white py-2 px-2 rounded hover:bg-white hover:text-[#00bdb5] 
    focus:outline-none focus:ring-2 focus:ring-white btn btn-sm btn-outline p-2 rounded mr-4">Home</a>
    
    <button class="bg-[#00bdb5] text-white py-2 px-2 rounded hover:bg-white hover:text-[#00bdb5] 
    focus:outline-none focus:ring-2 focus:ring-white btn btn-sm btn-outline p-2 rounded mr-4">About</button>
    
    <button class="bg-[#00bdb5] text-white py-2 px-2 rounded hover:bg-white hover:text-[#00bdb5] 
    focus:outline-none focus:ring-2 focus:ring-white btn btn-sm btn-outline p-2 rounded mr-4">Contact</button>
    
    <button class="bg-[#00bdb5] text-white py-2 px-2 rounded hover:bg-white hover:text-[#00bdb5] 
    focus:outline-none focus:ring-2 focus:ring-white btn btn-sm btn-outline p-2 rounded">Noticias</button>
    
    @auth
        <a href="{{route('alumnos.index')}}" class="mx-4 bg-[#00bdb5] text-white py-2 px-2 
        rounded hover:bg-white hover:text-[#00bdb5] focus:outline-none focus:ring-2 focus:ring-white btn btn-sm btn-outline p-2 rounded">Alumnos</a>
    @endauth
</nav>