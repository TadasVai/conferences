<div class="text-center row mt-5">
    <div class="text-center col-md-3 m-auto">
        <div class="card card-body">
    <h4>Title</h4><p>{{$conference['title']}}</p>
    <p><b>Description:</b> {{$conference['content']}}</p>
    <p><b>Date:</b> {{$conference['date']}}</p>
    <p><b>Address:</b> {{$conference['address']}}</p>
    @guest
    @else
    <a href="{{route('conferences.edit', ['conference'=>$conference['id']]) }}"><button type="button" class="btn btn-secondary">Edit</button></a>
    <form action="{{ route('conferences.destroy', ['conference' => $conference['id']])  }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    @endguest
    <br>
        </div>
    </div>
</div>
