<div class="row">
    @if(session('success') || session('error'))
        <div class="col-md-12">
            @if (session('success'))
                <div class="notification success-alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="notification danger-alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    @endif
</div>