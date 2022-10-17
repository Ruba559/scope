@extends('layouts.master-app')
@section('body')
<div class="container">
    @livewire('filter-city')
    <section class="row justify-content-between align-items-center my-3">
        <div class="col-12 text-center my-5">
            <h2 class="text-grey font-weight-bold">الإعلانات العقارية <span class="text-green">في المحافظات السورية</span></h2>
        </div>
        @foreach ($properties as $item)
            
      
    <div class="col-md-2 col-6  p-2" >
        <div class="city-container" style="background-image: url('images/cities/damascus.jpg');">
            <p class="city-name">
               {{ $item->city->name }}
            </p>
        </div>
    </div>

    @endforeach

</section>
    <section class="row justify-content-between align-items-center my-5">
        <div class="col-12 d-flex flex-row justify-content-between mt-5">
            <h4 class="text-green font-weight-bold"> المضافة مؤخراً</h4>
            <a class="text-grey" href="">عرض الكل</a>
        </div>
        @foreach ($properties as $item)
       
        <div class="col-md-6 col-12">
            <div class="  property-item d-flex flex-row justify-content-start align-items-start my-5">
                <img class="im-fluid" src="images/realestates/1.jpg" alt="">
                <div class="properties d-flex flex-column w-100 justify-content-start align-items-start">
                    <h5 class="font-weight-bold">{{ $item->title }}</h5>
                    <p>{{number_format((float)$item->price, 0, '.', '')}} </p>
                    <div class="spec flex-row ">
                        <span class="fa fa-bed"></span><span class="mx-2">{{ $item->rooms }}</span>  <span class="fas fa-arrows-alt"></span><span class="mx-2">{{ $item->direction->name }}</span> 
                        <span class="fas fa-expand-arrows-alt"></span><span class="mx-2">قبلي</span>  <span class="fas fa-shower"></span><span class="mx-2">{{ $item->baths }}</span> 
                    </div>
                    <a class="btn" href="">صفحة العقار</a>
                </div>
                
            </div>
        </div>
        @endforeach
        
      
    </section>
    
</div>
@endsection