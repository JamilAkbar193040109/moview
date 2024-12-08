@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-theme-overlay focus:border-theme-pine focus:ring-theme-pine block w-full rounded-md border border-gray-500 text-sm text-theme-text']) }}>
