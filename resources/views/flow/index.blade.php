@extends('layouts.master')
@section('content')
<div class="header_heading">
    <div class="row align-items-center">
        <div class="col-6">
            <h1>Lens Flow</h1>
        </div>
        <div class="col-6 text-end">
            <a class="primary_btn" href="{{ route('newflow-add') }}">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 8H8V13C8 13.55 7.55 14 7 14C6.45 14 6 13.55 6 13V8H1C0.45 8 0 7.55 0 7C0 6.45 0.45 6 1 6H6V1C6 0.45 6.45 0 7 0C7.55 0 8 0.45 8 1V6H13C13.55 6 14 6.45 14 7C14 7.55 13.55 8 13 8Z"
                        fill="#FDFDFF" />
                </svg>
                @lang('global.addnewflow')
               {{-- @lang('global.addnewflow')   --}}
            </a>
        </div>
    </div>
</div>
<div class="box">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th> @lang('global.index_table_title')</th>
                    <th> @lang('global.index_table_status')</th> 
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                       <div class="desc">
                            <h4>Prescription Flow</h4>
                            <p>10 Products</p>
                       </div>
                    </td>
                    <td>Active</td> 
                    <td>
                        <a href="#" >
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M11 4.20874H4C3.46957 4.20874 2.96086 4.41945 2.58579 4.79453C2.21071 5.1696 2 5.67831 2 6.20874V20.2087C2 20.7392 2.21071 21.2479 2.58579 21.623C2.96086 21.998 3.46957 22.2087 4 22.2087H18C18.5304 22.2087 19.0391 21.998 19.4142 21.623C19.7893 21.2479 20 20.7392 20 20.2087V13.2087" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M18.5 2.70872C18.8978 2.3109 19.4374 2.0874 20 2.0874C20.5626 2.0874 21.1022 2.3109 21.5 2.70872C21.8978 3.10655 22.1213 3.64611 22.1213 4.20872C22.1213 4.77133 21.8978 5.3109 21.5 5.70872L12 15.2087L8 16.2087L9 12.2087L18.5 2.70872Z" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                
                        </a>
                        <a href="#" >
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.9648 9H10.9648C9.86027 9 8.96484 9.89543 8.96484 11V20C8.96484 21.1046 9.86027 22 10.9648 22H19.9648C21.0694 22 21.9648 21.1046 21.9648 20V11C21.9648 9.89543 21.0694 9 19.9648 9Z" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5 15.2087H4C3.46957 15.2087 2.96086 14.998 2.58579 14.623C2.21071 14.2479 2 13.7392 2 13.2087V4.20874C2 3.67831 2.21071 3.1696 2.58579 2.79453C2.96086 2.41945 3.46957 2.20874 4 2.20874H13C13.5304 2.20874 14.0391 2.41945 14.4142 2.79453C14.7893 3.1696 15 3.67831 15 4.20874V5.20874" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <g clip-path="url(#clip0_528_327)">
                                <path d="M15.4648 12.875V18.125" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8398 15.5H18.0898" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_528_327">
                                <rect width="9" height="9" fill="white" transform="translate(10.9648 11)"/>
                                </clipPath>
                                </defs>
                            </svg>                                                              
                        </a>
                        <a href="#" >
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 6.20874H5H21" stroke="#FF1F2C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19 6.20874V20.2087C19 20.7392 18.7893 21.2479 18.4142 21.623C18.0391 21.998 17.5304 22.2087 17 22.2087H7C6.46957 22.2087 5.96086 21.998 5.58579 21.623C5.21071 21.2479 5 20.7392 5 20.2087V6.20874M8 6.20874V4.20874C8 3.67831 8.21071 3.1696 8.58579 2.79453C8.96086 2.41945 9.46957 2.20874 10 2.20874H14C14.5304 2.20874 15.0391 2.41945 15.4142 2.79453C15.7893 3.1696 16 3.67831 16 4.20874V6.20874" stroke="#FF1F2C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                                               
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="desc">
                            <h4>Prescription Flow</h4>
                            <p>10 Products</p>
                       </div>
                    </td>
                    <td>Active</td> 
                    <td>
                        <a href="#" >
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M11 4.20874H4C3.46957 4.20874 2.96086 4.41945 2.58579 4.79453C2.21071 5.1696 2 5.67831 2 6.20874V20.2087C2 20.7392 2.21071 21.2479 2.58579 21.623C2.96086 21.998 3.46957 22.2087 4 22.2087H18C18.5304 22.2087 19.0391 21.998 19.4142 21.623C19.7893 21.2479 20 20.7392 20 20.2087V13.2087" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M18.5 2.70872C18.8978 2.3109 19.4374 2.0874 20 2.0874C20.5626 2.0874 21.1022 2.3109 21.5 2.70872C21.8978 3.10655 22.1213 3.64611 22.1213 4.20872C22.1213 4.77133 21.8978 5.3109 21.5 5.70872L12 15.2087L8 16.2087L9 12.2087L18.5 2.70872Z" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                
                        </a>
                        <a href="#" >
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.9648 9H10.9648C9.86027 9 8.96484 9.89543 8.96484 11V20C8.96484 21.1046 9.86027 22 10.9648 22H19.9648C21.0694 22 21.9648 21.1046 21.9648 20V11C21.9648 9.89543 21.0694 9 19.9648 9Z" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5 15.2087H4C3.46957 15.2087 2.96086 14.998 2.58579 14.623C2.21071 14.2479 2 13.7392 2 13.2087V4.20874C2 3.67831 2.21071 3.1696 2.58579 2.79453C2.96086 2.41945 3.46957 2.20874 4 2.20874H13C13.5304 2.20874 14.0391 2.41945 14.4142 2.79453C14.7893 3.1696 15 3.67831 15 4.20874V5.20874" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <g clip-path="url(#clip0_528_327)">
                                <path d="M15.4648 12.875V18.125" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8398 15.5H18.0898" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_528_327">
                                <rect width="9" height="9" fill="white" transform="translate(10.9648 11)"/>
                                </clipPath>
                                </defs>
                            </svg>                                                              
                        </a>
                        <a href="#" >
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 6.20874H5H21" stroke="#FF1F2C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19 6.20874V20.2087C19 20.7392 18.7893 21.2479 18.4142 21.623C18.0391 21.998 17.5304 22.2087 17 22.2087H7C6.46957 22.2087 5.96086 21.998 5.58579 21.623C5.21071 21.2479 5 20.7392 5 20.2087V6.20874M8 6.20874V4.20874C8 3.67831 8.21071 3.1696 8.58579 2.79453C8.96086 2.41945 9.46957 2.20874 10 2.20874H14C14.5304 2.20874 15.0391 2.41945 15.4142 2.79453C15.7893 3.1696 16 3.67831 16 4.20874V6.20874" stroke="#FF1F2C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                                               
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="desc">
                            <h4>Prescription Flow</h4>
                            <p>10 Products</p>
                       </div>
                    </td>
                    <td>Active</td> 
                    <td>
                        <a href="#" >
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M11 4.20874H4C3.46957 4.20874 2.96086 4.41945 2.58579 4.79453C2.21071 5.1696 2 5.67831 2 6.20874V20.2087C2 20.7392 2.21071 21.2479 2.58579 21.623C2.96086 21.998 3.46957 22.2087 4 22.2087H18C18.5304 22.2087 19.0391 21.998 19.4142 21.623C19.7893 21.2479 20 20.7392 20 20.2087V13.2087" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M18.5 2.70872C18.8978 2.3109 19.4374 2.0874 20 2.0874C20.5626 2.0874 21.1022 2.3109 21.5 2.70872C21.8978 3.10655 22.1213 3.64611 22.1213 4.20872C22.1213 4.77133 21.8978 5.3109 21.5 5.70872L12 15.2087L8 16.2087L9 12.2087L18.5 2.70872Z" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                
                        </a>
                        <a href="#" >
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.9648 9H10.9648C9.86027 9 8.96484 9.89543 8.96484 11V20C8.96484 21.1046 9.86027 22 10.9648 22H19.9648C21.0694 22 21.9648 21.1046 21.9648 20V11C21.9648 9.89543 21.0694 9 19.9648 9Z" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5 15.2087H4C3.46957 15.2087 2.96086 14.998 2.58579 14.623C2.21071 14.2479 2 13.7392 2 13.2087V4.20874C2 3.67831 2.21071 3.1696 2.58579 2.79453C2.96086 2.41945 3.46957 2.20874 4 2.20874H13C13.5304 2.20874 14.0391 2.41945 14.4142 2.79453C14.7893 3.1696 15 3.67831 15 4.20874V5.20874" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <g clip-path="url(#clip0_528_327)">
                                <path d="M15.4648 12.875V18.125" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8398 15.5H18.0898" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_528_327">
                                <rect width="9" height="9" fill="white" transform="translate(10.9648 11)"/>
                                </clipPath>
                                </defs>
                            </svg>                                                              
                        </a>
                        <a href="#" >
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 6.20874H5H21" stroke="#FF1F2C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19 6.20874V20.2087C19 20.7392 18.7893 21.2479 18.4142 21.623C18.0391 21.998 17.5304 22.2087 17 22.2087H7C6.46957 22.2087 5.96086 21.998 5.58579 21.623C5.21071 21.2479 5 20.7392 5 20.2087V6.20874M8 6.20874V4.20874C8 3.67831 8.21071 3.1696 8.58579 2.79453C8.96086 2.41945 9.46957 2.20874 10 2.20874H14C14.5304 2.20874 15.0391 2.41945 15.4142 2.79453C15.7893 3.1696 16 3.67831 16 4.20874V6.20874" stroke="#FF1F2C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                                               
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="desc">
                            <h4>Prescription Flow</h4>
                            <p>10 Products</p>
                       </div>
                    </td>
                    <td>Active</td> 
                    <td>
                        <a href="#" >
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M11 4.20874H4C3.46957 4.20874 2.96086 4.41945 2.58579 4.79453C2.21071 5.1696 2 5.67831 2 6.20874V20.2087C2 20.7392 2.21071 21.2479 2.58579 21.623C2.96086 21.998 3.46957 22.2087 4 22.2087H18C18.5304 22.2087 19.0391 21.998 19.4142 21.623C19.7893 21.2479 20 20.7392 20 20.2087V13.2087" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M18.5 2.70872C18.8978 2.3109 19.4374 2.0874 20 2.0874C20.5626 2.0874 21.1022 2.3109 21.5 2.70872C21.8978 3.10655 22.1213 3.64611 22.1213 4.20872C22.1213 4.77133 21.8978 5.3109 21.5 5.70872L12 15.2087L8 16.2087L9 12.2087L18.5 2.70872Z" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                
                        </a>
                        <a href="#" >
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.9648 9H10.9648C9.86027 9 8.96484 9.89543 8.96484 11V20C8.96484 21.1046 9.86027 22 10.9648 22H19.9648C21.0694 22 21.9648 21.1046 21.9648 20V11C21.9648 9.89543 21.0694 9 19.9648 9Z" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5 15.2087H4C3.46957 15.2087 2.96086 14.998 2.58579 14.623C2.21071 14.2479 2 13.7392 2 13.2087V4.20874C2 3.67831 2.21071 3.1696 2.58579 2.79453C2.96086 2.41945 3.46957 2.20874 4 2.20874H13C13.5304 2.20874 14.0391 2.41945 14.4142 2.79453C14.7893 3.1696 15 3.67831 15 4.20874V5.20874" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <g clip-path="url(#clip0_528_327)">
                                <path d="M15.4648 12.875V18.125" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8398 15.5H18.0898" stroke="#021532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_528_327">
                                <rect width="9" height="9" fill="white" transform="translate(10.9648 11)"/>
                                </clipPath>
                                </defs>
                            </svg>                                                              
                        </a>
                        <a href="#" >
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 6.20874H5H21" stroke="#FF1F2C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19 6.20874V20.2087C19 20.7392 18.7893 21.2479 18.4142 21.623C18.0391 21.998 17.5304 22.2087 17 22.2087H7C6.46957 22.2087 5.96086 21.998 5.58579 21.623C5.21071 21.2479 5 20.7392 5 20.2087V6.20874M8 6.20874V4.20874C8 3.67831 8.21071 3.1696 8.58579 2.79453C8.96086 2.41945 9.46957 2.20874 10 2.20874H14C14.5304 2.20874 15.0391 2.41945 15.4142 2.79453C15.7893 3.1696 16 3.67831 16 4.20874V6.20874" stroke="#FF1F2C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                                               
                        </a>
                    </td>
                </tr>                
            </tbody> 
        </table>
    </div>
</div>
@endsection