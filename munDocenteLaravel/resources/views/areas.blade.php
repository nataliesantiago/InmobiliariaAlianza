<section class="box">
    <center><h3 style="color: #5A5A5A;">Áreas</h3></center>
        <center>
        <hr>
        <a href="javascript:expandTree('tree1'); " >Abrir subáreas</a>
         | <a href="javascript:collapseTree('tree1'); ">Cerrar subáreas</a>
        <hr></center>


        <ul id="tree1" class="mktree">
            @foreach($areas as $key=>$area)
                @if($area->parent==null)
                    @if($key > 1)
                        </ul>
                        </li>
                    @endif
                <li>&nbsp;&nbsp;<a href="/search_area/{{ $area->id }}">{{ $area->name }}</a>
                <ul>
                @else
                    <li><a href="/search_area/{{ $area->id }}">{{  $area->name }}</a></li>
                @endif
            @endforeach
            </ul>
            </li>
        </ul>            

</section>
