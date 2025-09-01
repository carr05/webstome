<<<<<<< HEAD
<form action="{{ route('pilih.layout', ['layout' => 1]) }}" method="POST">
    @csrf
    <button type="submit">Pilih Layout 1</button>
</form>

<form action="{{ route('pilih.layout', ['layout' => 2]) }}" method="POST">
    @csrf
    <button type="submit">Pilih Layout 2</button>
</form>
=======
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="text-center mb-4">Pilih Layout Website</h2>

    <div class="row justify-content-center">
        <!-- Layout 1 -->
        <div class="col-md-4">
            <div class="card shadow p-3">
                <h5 class="text-center">Layout 1</h5>
                <form action="{{ route('tampilan.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="layout" value="layout1">
                    <button type="submit" class="btn btn-primary w-100 mt-3">Gunakan Layout 1</button>
                </form>
            </div>
        </div>

        <!-- Layout 2 -->
        <div class="col-md-4">
            <div class="card shadow p-3">
                <h5 class="text-center">Layout 2</h5>
                <form action="{{ route('tampilan.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="layout" value="layout2">
                    <button type="submit" class="btn btn-success w-100 mt-3">Gunakan Layout 2</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
>>>>>>> 9d760ca3b9a1edb5979a059f770aceed65a1c1e2
