@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

<form action="{{ route('template.choose') }}" method="POST">
    @csrf
    @foreach($layouts as $layout)
        <input type="radio" name="layout_id" value="{{ $layout->id }}"> {{ $layout->name }}<br>
    @endforeach
    <button type="submit">Pilih Layout</button>
</form>
