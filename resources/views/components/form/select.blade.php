@props(['name', 'label'])
<div class="w-full"><label for="{{$name}}" class="text-sm text-gray-600 block">{{$label}}</label>
    <select name="{{$name}}" id="{{$name}}" class="w-full" required>
        {{$slot}}
    </select>
</div>
