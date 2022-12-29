@include('layouts.header')

    <div class=show>
        <h2>Search for a Marvel character:</h2>
    </div>
    <form action="{{route('search')}}" action="GET">
        <div class="input-group form-group" style="width: 80%;margin:0 auto;">
            <input type="text"
            name="name"
            class="form-control"
            style="width: 80%;"
            placeholder="Insert a character's name to search for it"
            value="<?= $_GET['name'] ?? '' ?>">

            <button class="input-group-append btn btn-danger btn-sm" type="submit" style="margin-left: 5ps">Search</button>
        </div>
        <br/><br/>
    </form>
    <div class="album py-5 bg-light">
        <h3>Search history</h3>
        <div class="row">
                @foreach ($heroes as $info)
                    <div class="card col-md-4">
                        <?= '<img src="'.$info->path.'.'.$info->extension.'" class="card-img-top"/>'; ?>
                        <br />
                        <h4>{{$info->name}}</h4>
                        <p>{{$info->description}}</p>
                        <a href="{{ route('character', $info->id)}}" class="btn btn-danger btn-sm">See more</a>
                    </div>
                @endforeach

    </div>

    </body>


</html>
