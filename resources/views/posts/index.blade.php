<div>
    <h2>Hi {{$some}}</h2>
    <ul>
    @foreach($posts as $post)
    <li>{{$post['id']}}</li>
    @endforeach
    </ul>
</div>