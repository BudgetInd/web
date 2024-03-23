<a {{ $attributes }}
  class="{{ request()->is($href) ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }} block rounded-md px-3 py-2 text-sm">
  {{ $slot }}
</a>
