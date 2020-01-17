<div class="container-fluid mb-3 position-relative bg-purple">
    <div class="row">
        <div class="container py-2">
            <div class="row page-title-row">
                <div class="col-8 col-md-6">
                    <h2 class="page-title text-white">@section('page-title') Dashboard @show</h2>
                    <p class="text-white">@section('page-subtitle') Dashboard page @show</p>
                </div>
                <div class="col col-md-6 text-right align-self-center">
                    @section('page-top-content')
                        <a href="#" class="btn btn-success" data-toggle="tooltip" title="Buy Now!" >
                            <i class="fa fa-star"></i>
                        </a>
                        <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" title="Setting" id="color-setting">
                            <i class="fa fa-cogs"></i>
                        </button>
                    @show
                </div>
            </div>

        </div>
    </div>
</div>
