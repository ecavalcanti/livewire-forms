@props([
  'label',
  'model',
])

<div>
  <label for="{{ $model }}">{{ $label }}</label>
  <input wire:model="{{ $model }}" {{ $attributes }} id="{{ $model }}" name="{{ $model }}" autocomplete="{{ $model }}" class="rounded-md appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
  @if ($errors->has( $model ))
  <p class="text-red-500 text-xs p-2">
    {{ $errors->first( $model ) }}
  </p>
  @endif
</div>
