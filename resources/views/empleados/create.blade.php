<form action="{{ route('empleados.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="prueba">
    <input type="submit">
</form>