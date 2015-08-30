<div class="wrapper wrapper-content animated fadeInRight">
    <?php $index=0; ?>
    @foreach ($jds as $item)
        @if($index % 2 == 0)
        <div class="row">
        @endif
        <div class="col-md-6">
            <div class="ibox">
                <div class="ibox-content jd-box">

                    <div class="jd-company">
                        {{$item->belongsToCompany->title}}
                    </div>
                    <div class="jd-desc">
                        <span class="jd-price">
                            {{$item->minsalary}} - {{$item->maxsalary}}
                        </span>
                        <small class="text-muted">{{$item->belongsToCategory->name}}</small>
                        <a href="#" class="jd-name">{{$item->title}}</a>
                        <div class="small m-t-xs">
                         
                        </div>
                        <div class="m-t text-righ">
                            <a href="#" class="btn btn-xs btn-outline btn-primary">详情 <i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($index % 2 == 0)
        </div>
        @endif
        <?php $index++; ?>
    @endforeach
</div>    