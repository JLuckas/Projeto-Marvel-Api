@include('layouts.header')

        <div class=show>
            <h2>Search for a Marvel character:</h2>
        </div>
        <form action="{{route('search')}}" action="GET">
            <div class="flex-container input-group form-group" style="width: 80%;margin:0 auto;">
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

            @if (count($heroes) == 0)

                <h3>No character was searched yet.</h3>

                @else
                <div class="row">
                        @foreach ($heroes as $info)
                            <div class="card col-md-4">
                                <?= '<img src="'.$info->path.'.'.$info->extension.'" class="card-img-top"/>'; ?>
                                <br />
                                <h4>{{$info->name}}</h4>
                                <br />
                                <a href="{{ route('character', $info->id)}}" class="btn btn-danger btn-sm">See more</a>
                            </div>
                        @endforeach

            @endif




        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>


</html>
