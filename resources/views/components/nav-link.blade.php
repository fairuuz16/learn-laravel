<a {{ $attributes }}
   class="rounded-md px-3 py-2 text-sm font-medium 
      {{ request()->is('/') && $attributes->get('href') === '/' ? 'bg-gray-900 text-white' : '' }}
      {{ request()->is(ltrim($attributes->get('href'), '/')) && $attributes->get('href') !== '/' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}"
   aria-current="{{ request()->is(ltrim($attributes->get('href'), '/')) || (request()->is('/') && $attributes->get('href') === '/') ? 'page' : false }}">
   {{ $slot }}
</a>
