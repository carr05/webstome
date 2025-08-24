<form action="{{ route('pilih.layout', ['layout' => 1]) }}" method="POST">
    @csrf
    <button type="submit">Pilih Layout 1</button>
</form>

<form action="{{ route('pilih.layout', ['layout' => 2]) }}" method="POST">
    @csrf
    <button type="submit">Pilih Layout 2</button>
</form>
