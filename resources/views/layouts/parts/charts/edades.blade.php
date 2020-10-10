<!-- DONUT CHART -->
<div class="card bg-gradient-navy collapsed-card">
    <div class="card-header">
        <h3 class="card-title">Edades</h3>
        <p>{{$data[1]}}</p>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
    </div>
</div>