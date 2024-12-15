@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'focus:border-theme-pine focus:ring-theme-pine block w-full rounded-md border border-gray-500 text-sm dark:text-white bg-transparent']) }}>
