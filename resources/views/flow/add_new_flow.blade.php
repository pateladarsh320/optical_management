@extends('layouts.master')
@section('content')
<div class="header_heading">
    <div class="row align-items-center">
        <div class="col-12">
            <h1><svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.46967 5.96967C0.176777 6.26256 0.176777 6.73744 0.46967 7.03033L5.24264 11.8033C5.53553 12.0962 6.01041 12.0962 6.3033 11.8033C6.59619 11.5104 6.59619 11.0355 6.3033 10.7426L2.06066 6.5L6.3033 2.25736C6.59619 1.96447 6.59619 1.48959 6.3033 1.1967C6.01041 0.903806 5.53553 0.903806 5.24264 1.1967L0.46967 5.96967ZM15 7.25C15.4142 7.25 15.75 6.91421 15.75 6.5C15.75 6.08579 15.4142 5.75 15 5.75V7.25ZM1 7.25H15V5.75H1V7.25Z" fill="black"/>
                </svg>   Create Flow</h1>
        </div>
    </div>
</div>
<div class="box flow-box">
    <div class="body_box"><h4>Flow Title</h4>
        <p>This title is for internal use and is not visible to customers</p>
        <div class="form-group mb-0">
            <input type="text" class="form-control" />
        </div> 
    </div>      
</div>
<div class="box prescription-box">
     <div class="header_prescription d-flex align-items-center justify-content-between">
        <h4>Prescription Types</h4> 
        <a href="#" class="primary_btn"><svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.49989 1.5V10.5M1 6.00006H10" stroke="white" stroke-width="1.92857" stroke-linecap="round" stroke-linejoin="round"/>
            </svg> Add New</a>
     </div>
    <div class="body_box">
        <div class="no_added">
            <p>You have not added any prescription Yet</p>
        </div> 
    </div>       
</div>
<div class="box assign-product-box opcity-50">
    <div class="header_prescription d-flex align-items-center justify-content-between">
       <h4>Assign Product</h4>  
    </div>
   <div class="body_box">
        
   </div>       
</div>
{{-- popup sidebar  --}}
<div class="siderbar_popup">
    <div class="sidebar_header">
         <h3>Add Prescription Type</h3>
         <a href="javascript:void();" class="close_button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 6L6 18" stroke="#545666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M6 6L18 18" stroke="#545666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg> 
        </a>
    </div>
    <div class="sidebar_body">
        <form>
            <div class="form-group">
                <label>Prescription Type</label>
                <select class="form-control">
                    <option></option>
                </select>
            </div>
            <div class="form-group">
                <label>Display Title</label>
                <select class="form-control">
                    <option></option>
                </select>
            </div>
            <div class="form-group">
                <label>Description</label>
                <select class="form-control">
                    <option></option>
                </select>
            </div>
        </form>
    </div>
</div>
@endsection


