welcome larvel  <a href="{{url('/welcome')}}">page</a><br>
<form action="{{ url('/hello') }}" method="post">
    {{ csrf_field() }}
    <input type="submit" value="okay">
</form>

