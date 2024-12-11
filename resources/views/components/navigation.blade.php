{{-- @dump(request()->route()) muestra toda la info de la ruta
@dump(request()->routeIs('home'))muestra true o false para saber si estamos en la ruta que ponemos --}}
<nav>
    <ul>
        <li><a class="{{ request()->routeIs('home') ? 'text-green-400':'text-gray-600' }}" href="{{  route('home'); }}">Inicio</a></li>
        <li><a class="{{ request()->routeIs('posts.*') ? 'text-green-400':'text-gray-600' }}" href="{{ route('posts.index'); }}">blog</a></li>
        <li><a class="{{ request()->routeIs('about') ? 'text-green-400':'text-gray-600' }}" href="{{ route('about'); }}">nosotros</a></li><!--about es el nombre de blade-->
        <li><a class="{{ request()->routeIs('contact') ? 'text-green-400':'text-gray-600' }}" href="{{ route('contact'); }}">contacto</a></li>
    </ul> 
</nav>