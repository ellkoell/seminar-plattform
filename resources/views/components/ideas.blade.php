<div>
    <a {{ $attributes->merge(['class' => 'card w-96 bg-base-100 card-lg shadow-sm']) }}>
        <div class="card-body">
            <p>
                {{ $slot }}
            </p>
        </div>
    </a>
</div>
