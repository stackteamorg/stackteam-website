        <!--=====================================-->
        <!--=        Service Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">چه خدماتی میتونیم به شما ارائه بدیم</span>
                    <h2 class="title">خدمات استک تیم</h2>
                    <p class="opacity-10">در اینجا برخی از خدمات استک تیم رو معرفی کردیم، در این اسکیل ها می‌تونیم افتخار همکاری با شرکت/استارتاپ و یا سازمان شما رو داشته باشیم و تیم های تخصصی را در اختیار شما بزاریم</p>
                </div>
                <div class="row">
                    @foreach ($services as $service)
                        <x-single-service :service="$service" />
                    @endforeach
                </div>
            </div>
        </section>