<a href="{{ $href }}"  class="{{ $type_class }}"
    {{ $attributes->merge(['class' => $type_class.'type-'.$type]) }}>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    {{ $slot }}
</a>