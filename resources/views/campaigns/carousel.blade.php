<div class="ibox-content ">
    <div class="carousel slide" id="carousel2">
        <ol class="carousel-indicators">
            <?php $index=0; ?>
            @foreach ($campaigns as $item)
                <li data-slide-to="{{$index}}" data-target="#carousel2"  class="active"></li>
                <?php $index++; ?>          
            @endforeach
        </ol>
        <div class="carousel-inner">
            <?php $index=0; ?>
            @foreach ($campaigns as $item)
                <div class="carousel-item item {{$index ==0 ? 'active': ''}}">
                    <img alt="image"  class="img-responsive" src="{{$item->imageurl}}">
                    <div class="carousel-caption">
                        <p>{{$item->title}}</p>
                    </div>
                </div>
                <?php $index++; ?>  
            @endforeach
        </div>
        <a data-slide="prev" href="#carousel2" class="left carousel-control">
            <span class="icon-prev"></span>
        </a>
        <a data-slide="next" href="#carousel2" class="right carousel-control">
            <span class="icon-next"></span>
        </a>
    </div>
</div>