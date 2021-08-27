@props(['approved'])
<div class="flex align-middle">
    <input type="hidden" value="0" name="approved">
    <label class="text-sm text-gray-600 mr-4" for="approved">Goedgekeurd?</label>
    <input type="checkbox" name="approved" value="{{ 1 }}" {{$approved ? 'checked' : ''}}>
</div>
