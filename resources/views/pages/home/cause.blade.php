@if(!empty($causes))
    <section class="welcome-seciton">
        <div class="container">
            <div class="section-title text-center">
                <h2>Recent <span>Causes</span></h2>
            </div>
            <div class="row">
                @foreach($causes as $cause)
                    @include('pages.causes.single_cause')
                @endforeach

            </div>
        </div>
    </section>
@endif
