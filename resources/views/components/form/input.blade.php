@props(['name', 'label'])
<div class="w-full mt-4">
    <label for="{{$name}}" class="text-sm text-gray-600 block">{{$label}}</label>
    <input name="{{$name}}" id="{{$name}}" class="w-full" {{$attributes}}/>
</div>
