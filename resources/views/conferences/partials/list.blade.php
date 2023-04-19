<div>
    <h4>Title: {{$conference['title']}}</h4>
    <p>Description: {{$conference['content']}}</p>
    <p>Date: {{$conference['date']}}</p>
    <p>Address: {{$conference['address']}}</p>
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
