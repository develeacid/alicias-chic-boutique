<button {{ $attributes->merge(['type' => 'submit', 'class' => 'site-btn']) }}>
    {{ $slot }}
</button>
