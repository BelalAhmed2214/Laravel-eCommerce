@extends('dashboard.layout')
@section("content")

<div class="card card-custom">
 <div class="card-header">
  <h3 class="card-title">
   {{$methodName}}
  </h3>
 </div>
 <!--begin::Form-->
 <form class="form" action="{{url('product/store')}}" method="post">
  <div class="card-body">
  <div class="card card-custom">
   <!--begin textArea-->  

    <div class="form-group">

        <textarea id="kt-tinymce-1" name="kt-tinymce-1" class="tox-target">
       
        </textarea>
    </div>
    
    
   
    
    <!--End textArea-->

   <!--Start Name-->
   <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control form-control-solid" placeholder="Name"/>
   </div>
   <!--End Name-->
    <!--Start CostPrices-->

   <div class="form-group">
    <label>Cost Price</label>
    <div class="input-group">
     <div class="input-group-prepend">
      <span class="input-group-text">$</span>
     </div>
     <input type="text" name="cost_price" class="form-control" placeholder="Cost Price" aria-label="Amount (to the nearest dollar)"/>
     <div class="input-group-append">
      <span class="input-group-text"><i class="la la-registered"></i></span>
     </div>
    </div>
   </div>
    <!--End CostPrices-->
    <!--Start SellingPrices-->
    <div class="form-group">
    <label>Selling Price</label>
    <div class="input-group">
     <div class="input-group-prepend">
      <span class="input-group-text">$</span>
     </div>
     
     <input type="text" name="selling_price" class="form-control" placeholder="Selling Price" aria-label="Amount (to the nearest dollar)"/>
     <div class="input-group-append">
      <span class="input-group-text"><i class="la la-registered"></i></span>
     </div>
    </div>
   </div>
    
    <!--End SellingPrices-->
    <!--Start::quantity-->
    
    <div class="form-group">
    <label>Quantity</label>
    <input type="name" name="quan" class="form-control form-control-solid" placeholder="qut"/>
   </div>
    </div>
    <!--End::quantity-->
  
    <!--Start Buttons-->
  <div class="card-footer">
   <button type="reset" class="btn btn-primary mr-2">Save</button>
   <button type="reset" class="btn btn-secondary">Cancel</button>
  </div>
    <!--End Buttons-->
    </div>
 </form>
 <!--end::Form-->
</div>

@endsection


@section("js")
<script src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/plugins/custom/tinymce/tinymce.bundle.js?v=7.2.9"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
<script src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/js/pages/crud/forms/editors/tinymce.js?v=7.2.9"></script>
<script>
// Class definition
// Class definition

var KTTinymce = function () {
    // Private functions
    var demos = function () {
        tinymce.init({
            selector: '#kt-tinymce-1',
            toolbar: false,
            statusbar: false
        });
    }

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();

// Initialization
jQuery(document).ready(function() {
    KTTinymce.init();
});
</script>
@endsection