<div wire:init="loadData">
    <fieldset>
        <legend>Select a Location: </legend>
        @if ($data)
        <label for="radio-1">New York</label>
        <input type="radio" name="radio-1" id="radio-1">
        <label for="radio-2">Paris</label>
        <input type="radio" name="radio-1" id="radio-2">
        <label for="radio-3">London</label>
        <input type="radio" name="radio-1" id="radio-3">
        @endif
    </fieldset>
</div>
