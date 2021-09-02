<div class="md:col-span-3 w-full mt-4">
    <label for="{{$name}}" class="text-sm text-gray-600 block">{{$label}}</label>
    <textarea class="w-full" name="{{$name}}" id="{{$name}}"  rows="3" {{$attributes}}>{{$slot}}</textarea>
</div>
