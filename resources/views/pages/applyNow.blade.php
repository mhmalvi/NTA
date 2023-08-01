@extends('layouts.app')
@section('title', 'Diploma of Remedial Massage')
    @push('seo')

        <meta name="description"
            content="With a Diploma of Remedial Massage course at Noble Training Academy, develop essential skills to work across a range of industries from sport to rehabilitation" />

    @endpush
@section('content')
 <!--Page Header-->
    <section class="page_header padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-content">
                    <h1 style="color: #fff;">HLT52015 - Diploma of Remedial Massage</h1>
                    <div class="page_nav">
                        <span>You are here:</span> <a href="{{ URL::to('/') }}">Home</a> <span><i
                                class="fa fa-angle-double-right"></i>Courses</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
  


 <div style="height:500px; margin-top:100px;"></div>
    
    <script type="application/ld+json">
            {
            	"@context": "http://schema.org/",
            	"@type": "Course",
            		"associatedMedia":"https://www.nta.nsw.edu.au/",
            		"description":"RPL in Beauty Therapy Diploma",
            		"image":"https://nta.nsw.edu.au/public/assets/images/courses/Diploma-of-Beauty-Therapy.webp",
            		"name":"RECOGNITION OF PRIOR LEARNING (RPL) in Beauty Therapy",
            		"potentialAction":"SHB50115 - Diploma of Beauty Therapy",
            		"url":"https://www.nta.nsw.edu.au/diploma-in-beauty-therapy"
            }
</script>
@endsection

@push('css')
<style>
    .btn-custom{
    border: none;
    background: #3FD4FB;
    color: #fff !important;
    text-transform: uppercase;
    width: 100%;
    margin-bottom: 20px;
    font-weight: 700;
    font-size: 13px;
    /* height: 43px; */
    padding: 15px;
}
.btn-custom-in-content{
    border: none;
    background: #3FD4FB;
    color: #fff !important;
    text-transform: uppercase;
    padding: 15px 55px !important;
    margin-bottom: 20px;
    font-weight: 700;
    font-size: 13px;
    /* height: 43px; */
    padding: 15px;
}
</style>
@endpush
