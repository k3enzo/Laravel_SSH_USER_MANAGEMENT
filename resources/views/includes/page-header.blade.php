<style type="text/css">
    .alert{
        direction: rtl !important;
    }
</style>

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">{{ ($title ?? '') }}</h6>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    @stack('pg_btn')
                </div>
                <div class="col-lg-12 col-12">
                    @include('flash::message')
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger mt-4" style="direction: rtl">{{$error}}</div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
