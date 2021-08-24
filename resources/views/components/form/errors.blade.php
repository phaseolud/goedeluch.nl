<div>
    @if ($errors->any())
        <div class="p-6 bg-primary-100">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
