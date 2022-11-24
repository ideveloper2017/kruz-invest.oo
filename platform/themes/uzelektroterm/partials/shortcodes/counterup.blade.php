<section class="fun-facts-section fun-facts-02 section-block">
    <div class="container">
        <div class="row">
            @foreach($counters as $counter)
                <div class="col-md-3 col-sm-6">
                    <i class="pe-7s-display1"></i>
                    <h3><span class="counter">{{ $counter->number }}</span>{{ clean($counter->name) }}</h3>
                </div>
           @endforeach
         </div> <!-- .row -->
    </div> <!-- .container -->
</section> <!-- .split-section -->
<div class="statistics-counter-wrap wide-tb-100 m-0" style="display: none">
    <div class="container">
        <div class="row smart-mar">
            @foreach($counters as $counter)
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="stats-wrap">
                    <i class="icofont icofont-globe-alt"></i>
                    <div class="box">{{ clean($counter->name) }}</div>
                    <span class="counter">{{ $counter->number }}</span>
                </div>
            </div>
            @endforeach

        </div><!-- Statistic Counter End -->
    </div>
</div>
