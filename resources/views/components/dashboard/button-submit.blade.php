<button {{ $attributes->merge(['type' => 'submit', 'class' => 'focus:shadow-outline rounded-lg bg-blue-700 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700 focus:outline-none']) }}>
  {{ $slot }}
</button>
