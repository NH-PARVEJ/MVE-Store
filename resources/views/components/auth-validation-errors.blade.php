@props(['errors'])

@if ($errors->any())
    <div class="alert border-0 bg-light-danger alert-dismissible fade show" {{ $attributes }}>
        <div class="font-medium text-danger text-red-600">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <div class="mt-3 l-0 list-disc list-inside text-danger text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span>
            @endforeach
        </div>
    </div>
@endif
