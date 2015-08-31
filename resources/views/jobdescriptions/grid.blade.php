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
                            年薪: {{$item->minsalary}} - {{$item->maxsalary}}万
                        </span>
                        <small class="jd-cate badge badge-info">{{$item->belongsToCategory->name}}</small>
                        <span  class="jd-name">{{$item->title}}</span>
                        <div class="small m-t-xs">
                         <?php
                            $jdescription = $item->responsibility;
                            if(mb_strlen($jdescription, 'UTF-8') > 100){
                                $jdescription = mb_strimwidth($jdescription, 0, 100);
                                $jdescription = $jdescription . '...';
                            }
                         ?>
                            {{$jdescription}}
                        </div>
                        <div class="m-t text-righ">
                            <a href="{{ URL('jds/'.$item->id) }}" class="btn btn-xs btn-outline btn-primary">详情 <i class="fa fa-long-arrow-right"></i> </a>
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