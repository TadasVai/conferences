<div>
    <h4>{{$conference['title']}}</h4>
    <p>{{$conference['content']}}</p>
    @guest
    @else
    <a href="{{route('conferences.edit', ['conference'=>$conference['id']]) }}"><button type="button">Edit</button></a>
    <form action="{{ route('conferences.destroy', ['conference' => $conference['id']])  }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    @endguest
    <br>
</div>
