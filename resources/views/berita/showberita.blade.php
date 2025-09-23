@extends('layouts.main')

@section('content')
<div class="container">
  <h1 class="mb-3">Daftar Berita</h1>

  @forelse ($berita as $item)
    <article class="mb-5 border-bottom pb-3">
        <h2>{{ $item->judul }}</h2>
        <p>
          <strong>Kategori:</strong> {{ ucfirst($item->category) }} |
          <strong>Tanggal:</strong>
          {{ \Carbon\Carbon::parse($item->published_at)->translatedFormat('d F Y') }}
        </p>
        <img src="{{ $item->image ? Storage::url($item->image) : 'https://via.placeholder.com/800x400' }}"
             alt="gambar" class="mb-3 img-fluid">
        <p>{{ Str::limit($item->content, 200) }}</p>
        <a href="{{ route('berita.show', $item->id) }}" class="btn btn-primary">Baca selengkapnya</a>
    </article>
  @empty
    <p>Tidak ada berita.</p>
  @endforelse

  {{ $berita->links() }}
</div>
@endsection
