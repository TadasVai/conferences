<div>
    <h4>{{$conference['title']}}</h4>
    <p>{{$conference['content']}}</p>
    <a href="{{route(conferences.edit, ['conference'=>$conference['id']]) }}"><button type="button">Edit</button></a>
    <br>
</div>
