@extends('layouts.main')

@section('content')
<div class="container text-center mt-5">
    <h3>Pilih Layout Dashboard</h3>
    <p class="text-muted">Silakan pilih layout yang ingin kamu gunakan.</p>

    <button class="btn btn-primary m-2" onclick="chooseLayout(1)">Layout 1</button>
    <button class="btn btn-success m-2" onclick="chooseLayout(2)">Layout 2</button>
</div>

<script>
function chooseLayout(layout) {
    fetch("{{ route('save.layout') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({ layout: layout })
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            location.reload();
        }
    });
}
</script>
@endsection
