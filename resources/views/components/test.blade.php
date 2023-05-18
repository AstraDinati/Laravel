<div {{ $attributes->merge(["test" => false, "disabled" => true]) }} >
    <div {{ $header->attributes->merge(["test2"]) }} >
        {{ $header }}
    </div>
    {{ $slot }}{{ $count->count() }} {{ $test("test method") }}
    {{ $footer }}
</div>