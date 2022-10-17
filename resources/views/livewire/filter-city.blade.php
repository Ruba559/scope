<div>

    <section class="row justify-content-center align-items-center">
        <div class="col-12 header">
            
            <div class="w-100  header-bg" width="100%" style="border-radius: 30px;background-image: url('images/realestates/2.webp');background-position: center;background-repeat: no-repeat;background-size:cover;">
               
                <div class="overlay"></div>
                <!-- <h1>الموقع الأول <span class="text-green">للعقارات في سوريا</span></h1> -->
                <h1>الموقع الأول للعقارات في سوريا</h1>
                <div class="searchbox d-flex flex-column justify-content-start">
                    <!-- <p>البحث السريع</p> -->
                    <form class="d-flex flex-row justify-content-between align-items-center" method="get" wire:submit.prevent="filter">
                        <div class="form-group">
                            <label for="my-input">المحافظة</label>
                               
                            <select id="my-input" class="form-control scope-input" wire:model='city_id'  name="city_id">
                        
                                @foreach ($cities as $item)
                                <option value ="{{ $item->id }}"> {{ $item->name }}  </option>
                                @endforeach
                        
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="my-input">النوع</label>
                            <select id="my-input"  class="form-control scope-input"  wire:model='type_id'  name="type_id">

                                @foreach ($propertyTypes as $item)
                                <option value = "{{ $item->id }}"> {{ $item->name }}  </option>
                                @endforeach
                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="my-input">الحد الأعلى للسعر</label>
                            <input id="my-input" class="form-control scope-input" type="text" name="">
                        </div>
                        <button class="btn search-btn mx-2 " style="margin-top: 18px" type="submit"><span class="fa fa-search"></span></button>
                    </form>
                </div>
            </div>
            
        </div>
    </section>
   
   
</div>
