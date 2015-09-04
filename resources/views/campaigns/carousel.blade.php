<div class="ibox">
    <div clas="ibox-content">
        <div class="row">
            <div class="col-md-8">
                <div class="carousel slide" id="carousel2">
                    <ol class="carousel-indicators">
                        <?php $index=0; ?>
                        @foreach ($campaigns as $item)
                            <li data-slide-to="{{$index}}" data-target="#carousel2"  class="{{$index ==0 ? 'active': ''}}"></li>
                            <?php $index++; ?>          
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        <?php $index=0; ?>
                        @foreach ($campaigns as $item)
                            <div class="carousel-item item {{$index ==0 ? 'active': ''}}">
                                <img alt="image"  class="img-carousel" src="{{$item->imageurl}}">
                                <div class="carousel-caption-hidden">
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
            <div class="col-md-4">
                <div class="campaign-title">
                    <h3></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showLabel(){
        var label = $('#carousel2 .item.active .carousel-caption-hidden p').html();
        $(".campaign-title h3").html(label);
    };
    
    showLabel();
    $('#carousel2').bind('slid.bs.carousel', function (e) {
        showLabel();
    });
</script>