@extends('layouts.master')
@section('content')
<div class="box">
    <div class="carddetail">
        <div class="row">
            <div class="col-md-4">
                <div class="card_view">
                    <div class="icon purple">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.44447 6.11111V19.5556H19.5556V6.11111H15.8889V15.8889L11 13.4444L6.11114 15.8889V6.11111H2.44447ZM2.44447 22C1.77225 22 1.19699 21.7609 0.718697 21.2826C0.240401 20.8043 0.000845332 20.2286 3.05176e-05 19.5556V4.30834C3.05176e-05 4.02315 0.0460674 3.74815 0.138141 3.48334C0.230216 3.21852 0.367512 2.97408 0.55003 2.75001L2.07781 0.886117C2.30188 0.600932 2.58177 0.381747 2.91747 0.228562C3.25318 0.0753768 3.60477 -0.000808348 3.97225 6.46678e-06H18.0278C18.3945 6.46678e-06 18.7461 0.076599 19.0826 0.229784C19.4191 0.382969 19.699 0.601747 19.9222 0.886117L21.45 2.75001C21.6334 2.97408 21.7711 3.21852 21.8631 3.48334C21.9552 3.74815 22.0008 4.02315 22 4.30834V19.5556C22 20.2278 21.7609 20.8034 21.2826 21.2826C20.8043 21.7617 20.2286 22.0008 19.5556 22H2.44447ZM2.93336 3.66667H19.0667L18.0278 2.44445H3.97225L2.93336 3.66667ZM8.55558 6.11111V11.9167L11 10.6944L13.4445 11.9167V6.11111H8.55558Z" fill="#8B3ACA"/>
                        </svg>                                
                    </div>
                    <div class="decr">
                        <h3>Total Orders</h3>
                        <div class="data">15</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card_view">
                    <div class="icon green_light">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5494 0.943271C11.4547 0.505319 10.2334 0.505319 9.13867 0.943271L1.58643 3.96705C1.22162 4.11295 0.908836 4.36472 0.688364 4.68993C0.467891 5.01515 0.349824 5.39892 0.349365 5.79182V15.8221C0.3493 16.2155 0.467123 16.5998 0.687629 16.9255C0.908135 17.2513 1.2212 17.5034 1.58643 17.6495L9.13867 20.6707C9.71217 20.9003 10.3261 21.0119 10.9438 20.9986C10.6245 20.5674 10.3543 20.1019 10.1383 19.6107C9.96375 19.5723 9.79264 19.5196 9.62667 19.4533L2.07312 16.4321C1.95132 16.3833 1.84696 16.2991 1.77353 16.1903C1.7001 16.0816 1.66097 15.9533 1.6612 15.8221V5.87315L10.1881 9.28393V13.7009C10.5167 12.9866 10.9598 12.3307 11.5 11.7594V9.28261L20.0269 5.87184V10.2809C20.4974 10.5223 20.9347 10.81 21.3387 11.1441V5.79182C21.3388 5.39847 21.221 5.01413 21.0005 4.6884C20.78 4.36266 20.4669 4.11049 20.1017 3.96443L12.5494 0.943271ZM9.62667 2.16328C10.4086 1.85051 11.2808 1.85051 12.0628 2.16328L18.9171 4.90502L15.9274 6.09879L7.85438 2.87167L9.62667 2.16328ZM6.08865 3.57613L14.1617 6.80456L10.8441 8.13345L2.77102 4.9037L6.08865 3.57613ZM22.6506 16.7115C22.6506 15.1459 22.0286 13.6444 20.9216 12.5373C19.8145 11.4302 18.313 10.8083 16.7473 10.8083C15.1817 10.8083 13.6802 11.4302 12.5731 12.5373C11.466 13.6444 10.8441 15.1459 10.8441 16.7115C10.8441 18.2772 11.466 19.7787 12.5731 20.8858C13.6802 21.9929 15.1817 22.6148 16.7473 22.6148C18.313 22.6148 19.8145 21.9929 20.9216 20.8858C22.0286 19.7787 22.6506 18.2772 22.6506 16.7115ZM13.6566 16.2498L13.6606 16.2472L16.2842 13.6235C16.3447 13.5608 16.4171 13.5109 16.4971 13.4765C16.5772 13.4421 16.6632 13.424 16.7503 13.4233C16.8374 13.4225 16.9238 13.4391 17.0044 13.4721C17.085 13.5051 17.1583 13.5538 17.2198 13.6154C17.2814 13.6769 17.3301 13.7502 17.3631 13.8308C17.3961 13.9114 17.4127 13.9978 17.4119 14.0849C17.4112 14.1719 17.3931 14.258 17.3587 14.338C17.3243 14.4181 17.2744 14.4904 17.2117 14.5509L15.707 16.0556H19.371C19.545 16.0556 19.7118 16.1247 19.8348 16.2477C19.9578 16.3707 20.0269 16.5376 20.0269 16.7115C20.0269 16.8855 19.9578 17.0523 19.8348 17.1753C19.7118 17.2984 19.545 17.3675 19.371 17.3675H15.707L17.2117 18.8721C17.2744 18.9326 17.3243 19.005 17.3587 19.085C17.3931 19.1651 17.4112 19.2511 17.4119 19.3382C17.4127 19.4253 17.3961 19.5117 17.3631 19.5923C17.3301 19.6729 17.2814 19.7462 17.2198 19.8077C17.1583 19.8693 17.085 19.918 17.0044 19.951C16.9238 19.984 16.8374 20.0006 16.7503 19.9998C16.6632 19.9991 16.5772 19.981 16.4971 19.9466C16.4171 19.9122 16.3447 19.8623 16.2842 19.7996L13.6606 17.1759C13.5384 17.0542 13.4692 16.8892 13.4677 16.7168V16.7076C13.4688 16.5366 13.5366 16.3728 13.6566 16.2511" fill="#39C1CA"/>
                        </svg>                                                                
                    </div>
                    <div class="decr">
                        <h3>Today's Orders</h3>
                        <div class="data">01</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card_view">
                    <div class="icon yellow_light">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.44444 0C1.08778 0 0 1.08778 0 2.44444V19.5556C0 20.9122 1.08778 22 2.44444 22H19.5556C20.9122 22 22 20.9122 22 19.5556V2.44444C22 1.08778 20.9122 0 19.5556 0H2.44444ZM2.44444 2.44444H19.5556V19.5556H2.44444V2.44444ZM4.88889 4.88889V7.33333H17.1111V4.88889H4.88889ZM4.88889 9.77778V12.2222H17.1111V9.77778H4.88889ZM4.88889 14.6667V17.1111H13.4444V14.6667H4.88889Z" fill="#CFD240"/>
                        </svg>                                                                                               
                    </div>
                    <div class="decr">
                        <h3>Total Product</h3>
                        <div class="data">40</div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<div class="box">
    <div class="heading_box">
        Latest Order
    </div>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>Product </th>
                    <th>Type</th>
                    <th>Lens</th>
                    <th>Add-ons</th>
                    <th>Amount</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>The Kriby - 55452</td>
                    <td>Reader</td>
                    <td>Clear | Blokz</td>
                    <td>Gradient Green</td>
                    <td>$42.85</td>
                    <td>
                        <a href="#" class="secondary_btn">View Details </a>
                    </td>
                </tr>
                <tr>
                    <td>The Kriby - 55452</td>
                    <td>Reader</td>
                    <td>Clear | Blokz</td>
                    <td>Gradient Green</td>
                    <td>$42.85</td>
                    <td>
                        <a href="#" class="secondary_btn">View Details </a>
                    </td>
                </tr>
                <tr>
                    <td>The Kriby - 55452</td>
                    <td>Reader</td>
                    <td>Clear | Blokz</td>
                    <td>Gradient Green</td>
                    <td>$42.85</td>
                    <td>
                        <a href="#" class="secondary_btn">View Details </a>
                    </td>
                </tr>
                <tr>
                    <td>The Kriby - 55452</td>
                    <td>Reader</td>
                    <td>Clear | Blokz</td>
                    <td>Gradient Green</td>
                    <td>$42.85</td>
                    <td>
                        <a href="#" class="secondary_btn">View Details </a>
                    </td>
                </tr>
                <tr>
                    <td>The Kriby - 55452</td>
                    <td>Reader</td>
                    <td>Clear | Blokz</td>
                    <td>Gradient Green</td>
                    <td>$42.85</td>
                    <td>
                        <a href="#" class="secondary_btn">View Details </a>
                    </td>
                </tr>
            </tbody> 
        </table>
    </div>
</div>
@endsection