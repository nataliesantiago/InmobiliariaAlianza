<section class="box">
    <center><h3 style="color: #5A5A5A;">Áreas</h3></center>
        <center>
            <hr>
            <a href="javascript:ddtreemenu.flatten('treemenu1', 'expand')" >Abrir subáreas</a>
             | <a href="javascript:ddtreemenu.flatten('treemenu1', 'contact')">Cerrar subáreas</a>
        <hr></center>
        <ul class="nav nav-list" id="treemenu1" class="treeview">
            @foreach($areas as $key=>$area)
            @if($area->parent==null)
                @if($key > 1)
                    </ul>
                    </li>
                @endif
            <li><a class="control-label col-xs-12" href="#">{{ $area->name }}</a>
            <ul>
            @else
            <li><a class="control-label col-xs-10" href="#">{{  $area->name }}</a></li >
            @endif
            @endforeach
            </ul>
            </li>
        </ul>            

        <script type="text/javascript">
        ddtreemenu.createTree("treemenu1", true)
        
        </script>
</section>
