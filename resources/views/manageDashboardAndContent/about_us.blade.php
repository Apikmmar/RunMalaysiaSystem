@extends('components.master')

@section('content')

    <div>
        <br><br>
        <div class="container d-flex">
            <div class="col-4">
                <img src="{{ asset('images/proj-laravel-logo-no-bg.png') }}" alt="runmalaysia.png" class="aboutrunmalaysiaimg">
            </div>
            <div>
                <p style="font-family: 'Roboto', sans-serif;">
                    <b>RunMalaysia</b>, a dynamic non-governmental organization, has strategically collaborated with the Ministry of Youth and Sports 
                    (Kementerian Belia Sukan or KBS) to propel the nation's passion for running to new heights. We specialize in organizing exhilarating running 
                    events such as marathons and fun runs. Our partnership with KBS aims to harness the nation's enthusiasm for physical activity. By aligning 
                    with KBS, RunMalaysia gains invaluable support to elevate the scale and impact of its running events. Together, we aspire to create a vibrant running 
                    culture that not only promotes fitness but also fosters a sense of community and well-being among Malaysians. Through meticulously planned marathons and 
                    engaging fun runs, RunMalaysia, in collaboration with KBS, seeks to inspire a nation to lace up  running shoes and embark on a journey towards a 
                    healthier and more active lifestyle.
                </p>
            </div>
        </div>
        <br>
        <div class="container d-flex">
            <div>
                <p style="font-family: 'Roboto', sans-serif;">
                    <b>The Ministry of Youth and Sports Malaysia</b>, abbreviated as Kementerian Belia Sukan (KBS), plays a pivotal role in the nation's development, 
                    particularly in empowering its youth and promoting sports activities. As a governmental entity, KBS is entrusted with the task of formulating and 
                    implementing policies that address the needs and aspirations of Malaysia's young population. KBS focuses on creating opportunities for youth 
                    engagement, development, and empowerment, recognizing the importance of sports as a catalyst for personal growth and community building. 
                    The ministry is actively involved in supporting various sporting initiatives, events, and organizations that contribute to the overall well-being 
                    of Malaysians.
                </p>
            </div>
            <div class="col-4">
                <div class="col-4 mx-auto">
                    <img src="{{ asset('images/kbslogo.png') }}" alt="runmalaysia.png" class="aboutkbsimg">
                </div>
            </div>
            
        </div>
    </div>

@endsection