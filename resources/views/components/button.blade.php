<button {{ $attributes->merge(['class' => 'text-white font-semibold text-xl bg-none border-4 border-white px-4 py-2 hover:bg-white hover:text-primary-300 transition duration-150 ease-in']) }}>
    {{ $slot }}
</button>
