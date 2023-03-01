@extends("layout.admin.master_layout")

@section("contents")
<form action="/admin/login" method="post">
    @csrf

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        Email :
        <input type="text" name="email">
    </div>
    <div>
        Password :
        <input type="text" name="password">
    </div>

    <button type="submit">Login</button>
</form>
@endsection
