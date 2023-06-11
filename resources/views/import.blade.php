<form method="POST" action="{{ route('import') }}" enctype="multipart/form-data">
    @csrf
    <input type="file" name="import_file" accept=".csv, application/vnd.ms-excel">
    <button type="submit">Import</button>
</form>
