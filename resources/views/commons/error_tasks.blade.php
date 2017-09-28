@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
<!--            <li>{{ $error }}</li>  -->
            <div class="alert alert-warning">{{ $error }}</div>
        @endforeach
    </ul>
@endif