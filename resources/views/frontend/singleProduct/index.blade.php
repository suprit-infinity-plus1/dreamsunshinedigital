@extends('layouts.master')
@section('content')
    
    <div class="container">
        <div class="row ">
            <div class="col-md-5 border border-black p-3 ">
                <div class="border border-secondary border-bottom-0">
                <img src="{{ asset('assets/images/productImage/Untitled-2.png') }}" class="w-75 " alt="oil-banner">
                </div>

                <div class="container border border-secondary ">
                    <div class="row">

                    
                    <div class="col border border-s-neutral-400 ">
                        <img src="{{ asset('assets/images/productImage/Untitled-2.png') }}" class="w-100" alt="">
                    </div>
                    <div class="col border border-s-neutral-400">
                        <img src="{{ asset('assets/images/productImage/Untitled-2.png') }}" class="w-100" alt="">
                    </div>
                    <div class="col border border-s-neutral-400">
                        <img src="{{ asset('assets/images/productImage/Untitled-2.png') }}" class="w-100" alt="">
                    </div>
                    <div class="col border border-s-neutral-400">
                        <img src="{{ asset('assets/images/productImage/Untitled-2.png') }}" class="w-100" alt="">
                    </div>
                    <div class="col border border-s-neutral-400">
                        <img src="{{ asset('assets/images/productImage/Untitled-2.png') }}" class="w-100" alt="">
                    </div>
                    <div class="col border border-s-neutral-400">
                        <img src="{{ asset('assets/images/productImage/Untitled-2.png') }}" class="w-100" alt="">
                    </div>
                    </div>
                </div>
            
            </div>
            <div class="col-md-7 ">
                <div class="text-black border border-black mt-5">
                    <h4>Anaya Rice</h4>
                </div>
                <div class="d-flex mt-4 gap-5">
                    <p class="fw-bold text-secondary">Quantity</p>
                    <div class="d-flex gap-4">
                        <div class="border border-2 p-2 fw-bold quantitybtn-1 quantity-text">1kg</div>
                        <div class="border border-2 p-2 fw-bold quantitybtn-1 quantity-text">5kg</div>
                    </div>
                </div>
                <div class="">

                Copy to BlackBox<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  
</div>
                
                </div>
                


                <div class="mt-4 border p-4">
                    <p class=" text-dark fs-5">Description</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse quam expedita eum aliquid a est numquam nostrum corrupti voluptatem, officiis ad quibusdam ullam omnis totam cumque minus atque itaque amet voluptatum quo assumenda debitis vero! Asperiores rerum blanditiis aliquam possimus!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
