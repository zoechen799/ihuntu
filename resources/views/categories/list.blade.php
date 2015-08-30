<div class="panel-body">
    <div class="list-group">
        <ul class="nav">
            @foreach ($cats as $item)
            @if($item->level ===0)
               <li><a href="javascript:onCatSel({{$item->id}})"><span class="nav-label">{{$item->name}}</span></a></li>
               
               @if(count($item->hasManyJobCategories) >0)
                <ul class="nav nav-second-level">
                @foreach ($item->hasManyJobCategories as $subcat)
                    <li><a href="javascript:onCatSel({{$subcat->id}})">{{$subcat->name}}</a></li>
                @endforeach
                </ul> 
               @endif
            @endif   
            @endforeach
        </ul>
  
    </div>
    <script>
         function onCatSel(id){
             alert(id);
         }
    </script>
</div>