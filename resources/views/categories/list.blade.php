<div class="panel-body">
    <div class="list-group">
        <ul class="nav">
            @foreach ($cats as $item)
            @if($item->level ===0)
               <li><a href="javascript:onCatSel({{$item->id}})"><span class="nav-label">{{$item->name}}</span></a></li>
               
               @if(count($item->hasManyJobCategories) >0)
                <ul class="nav">
                    <div class="row">
                @foreach ($item->hasManyJobCategories as $subcat)
                    <li class="col-md-5 category-item">
                        <a href="javascript:onCatSel({{$subcat->id}})">{{$subcat->name}}</a>
                    </li>
                @endforeach
                    </div>
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