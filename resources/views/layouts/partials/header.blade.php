<style>
    .active{
        font-weight: bold;
        color: blue;
    }
</style>

<header class="bg-red-200 ">
    <nav class="md:w-1/4">
        <ul class="flex text-center">
            <li class="flex-1">
                <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
            </li>
            <li class="flex-1">
                <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>
            </li>
            <li class="flex-1">
                <a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a>
            </li>
        </ul>
    </nav>
</header>