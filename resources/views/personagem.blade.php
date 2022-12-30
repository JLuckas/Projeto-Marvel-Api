@include('layouts.header')
<div class="container" style="background-color:white;">
    @foreach ($result as $r)
        <div class="buttons">
            <button onclick="window.history.back();" class="btn btn-danger"> Voltar</button>
            <h4 style="margin-top: 30px">{{$r->name}}</h4>
            <p></p>
        </div>
        <div class="form-group">
            <div class="input-group">
                <?= '<img src="'.$r->thumbnail->path.'/portrait_uncanny'.'.'.$r->thumbnail->extension.'" class="img"/>'?>
            </div><br/><br/>
            @if ($r->description == "")
                <p>This character don't have a description registered on Marvel's website.</p>
            @endif
            <p>{{$r->description}}</p>
        </div>
        <div class="comics">
            @foreach($r->comics->items as $comic)
                <?php
                    $array_url = explode("/", $comic->resourceURI);
                    $id = end($array_url);
                ?>
            @endforeach
        </div>

</div>

    @endforeach
</body>
</html>
