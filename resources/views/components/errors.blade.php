@if ($errors -> any())
<div class="red">
    <ul>
        @foreach ($errors -> all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>


@endif