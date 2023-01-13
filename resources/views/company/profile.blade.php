@extends('company.layout.master')

@section('headlinks')
@endsection

@section('active-menuprofile')
    active-menu
@endsection

@section('content')
    <div class="dashboard-panel">
        <!-- Company Info Modal -->
        <form action="{{ url('updateinformation') }}" method="post" onsubmit="showloader1()" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="editCompanyInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content py-4 px-5">
                        <div class="modal-header p-0 pb-2 border-0">
                            <h3 class="modal-title fw-semibold" id="staticBackdropLabel">Company Profile</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="w-100 py-4">
                            <div class="profile-pic-change-parent d-flex justify-content-between">
                                <img style="border-radius: 130px; width:130px; height:110px"
                                    @if ($avatar == '') src="{{ asset('assets/img/company-profile-pic-modal.png') }}" @else src="{{ $avatar }}" @endif
                                    alt="" class="img-fluid" id="bio-data-profile-image">
                                &nbsp;
                                <button class="profile-pic-upload-btn position-relative rounded" style="width: 500px;">
                                    <input type="file" name="avatar"
                                        class="position-absolute top-0 start-0 w-100 h-50 opacity-0 profile-pic-upload-input">
                                    Change profile picture
                                </button>
                                {{--  <div class="align-self-center">Change Profile Pic</div>  --}}
                            </div>
                            <div class="row w-100 my-4">
                                <div class=" col-md-6 d-flex flex-column">
                                    <label class="company-profile-bio-data-title">Company Name</label>
                                    <input type="text" name="name" class="company-profile-bio-data w-100"
                                        placeholder="" value="{{ session()->get('user')['company'] }}" required>
                                </div>
                                <div class="col-md-6 d-flex flex-column">
                                    <label class="company-profile-bio-data-title">Industry</label>
                                    <select class="form-select company-profile-bio-data" name="industry"
                                        aria-label="Default select example" required>
                                        <option value="{{ $informations->industry ?? '' }}" selected>{{ $informations->industry ?? '' }}</option>
                                        <option value="information Technology">information Technology</option>
                                        <option value="Entertainment">Entertainment</option>
                                        <option value="Science">Science</option>
                                        <option value="Fiction">Fiction</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row w-100 mt-4">
                                <div class=" col-md-6 d-flex flex-column">
                                    <label class="company-profile-bio-data-title">Company Size</label>
                                    <select class="form-select company-profile-bio-data" name="size"
                                        aria-label="Default select example" required>
                                        <option value="{{ $informations->size ?? '' }}" selected>{{ $informations->size ?? '' }}</option>
                                        <option value="50-100" >50-100</option>
                                        <option value="101-500">101-500</option>
                                        <option value="501-1000">501-1000</option>
                                        <option value="1000 above">1000 above</option>
                                    </select>
                                </div>
                                <div class="col-md-6 d-flex flex-column">
                                    <label class="company-profile-bio-data-title">Company Location</label>
                                    <select class="form-select company-profile-bio-data" name="location"
                                        aria-label="Default select example" required>
                                        <option value="{{ $informations->location ?? '' }}" selected>{{ $informations->location ?? '' }}</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Russia">Russia</option>
                                        <option value="India">India</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row w-100 my-5">
                                <div class=" col-md-12 d-flex flex-column">
                                    <label class="company-profile-bio-data-title">Company Address </label>
                                    <input type="text" name="address" class="company-profile-bio-data w-100 p-4"
                                        placeholder="" value="{{ $informations->address ?? '' }}" required>
                                </div>
                            </div>

                            <div class="row w-100 my-5">
                                <div class=" col-md-12 d-flex flex-column">
                                    <label class="company-profile-bio-data-title">Website</label>
                                    <input type="text" name="website" class="company-profile-bio-data w-100 p-4"
                                        placeholder="" value="{{ $informations->website ?? '' }}" required>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex justify-content-end px-4">
                            <button type="button" class="btn cancel-bio-data" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn update-bio-data">Update &nbsp; <span
                                    class="spinner-border loader spinner-border-sm" role="status" aria-hidden="true"
                                    style="display:none" id="thisLoader1"></span></button>
                        </div>
                    </div>
                </div>

            </div>
        </form>

        <!-- About Company Modal -->
        <form action="{{ url('updateabout') }}" method="post" onsubmit="showloader3()">
            @csrf
            <div class="modal fade" id="editAboutCompany" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content py-4 px-5">
                        <div class="modal-header p-0 pb-2 border-0">
                            <h3 class="modal-title fw-semibold" id="staticBackdropLabel">About the Company</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div>
                            <textarea class="form-control" name="about" rows="10" placeholder="" required>{{ $abouts->about }}</textarea>
                        </div>
                        <div class="modal-footer px-0">
                            <button type="button" class="btn cancel-bio-data" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn update-bio-data">Update  &nbsp;<span
                                class="spinner-border loader spinner-border-sm" id="thisLoader3" role="status"
                                aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Specialities Modal -->

        <div class="modal fade" id="editSpecialities" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content py-4 px-5">
                    <div class="modal-header p-0 pb-2 border-0">
                        <h3 class="modal-title fw-semibold" id="staticBackdropLabel">Specialities</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="specialities-modal-container my-4 p-0">
                        <input type="email" class="specialities-edit-data w-100 p-4" />
                    </div>
                    <div class="modal-footer px-0 border-0">
                        <button type="button" class="btn cancel-bio-data" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn update-bio-data">Update</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
            <h2 class="fw-bold p-0 m-0">Profile</h2>
            @include('company.layout.active2')
        </div>

        <div class=" mt-4 p-5 company-profile-info-container rounded">
            <div class="company-profile-info d-flex justify-content-between">
                <h3 class="company-profile-info-header">Company information</h3>
                <div class="company-profile-info-edit-icon-conatiner d-flex flex-column align-items-center "
                    role="button" data-bs-toggle="modal" data-bs-target="#editCompanyInfo">
                    <iconify-icon icon="fa6-solid:pen" class="company-profile-info-edit-icon fs-5"></iconify-icon>
                    <p class="">Edit</p>
                </div>
            </div>
            <div class="company-profile-info-details pt-4 px-5 w-100">
                <div class="company-profile-info-details-img">
                    <img style="border-radius: 130px; width:150px; height:150px"
                        @if ($avatar == '') src="{{ asset('assets/img/Profile-pic.png') }}" @else src="{{ $avatar }}" @endif
                        alt="" class="img-fluid" id="bio-data-profile-image">
                </div>
                <div class="profile-aurbuser-name-industry align-self-center w-25">
                    <h3 class="profile-aurbuser-name">{{ session()->get('user')['company'] }}</h3>
                    <p class="profile-aurbuser-industry">Industry: {{ $informations->industry ?? '' }}</p>
                </div>

                <div class="company-information-container w-50 pt-4">
                    <div class="company-information-container-details d-flex justify-content-between py-2">
                        <p class="company-title-info">Company Website</p>
                        <p class="company-title-info-details">{{ $informations->website ?? '' }}</p>
                    </div>
                    <div class="company-information-container-details d-flex justify-content-between py-2">
                        <p class="company-title-info">Company Size</p>
                        <p class="company-title-info-details">{{ $informations->size ?? '' }}</p>
                    </div>
                    <div class="company-information-container-details d-flex justify-content-between py-2">
                        <p class="company-title-info">Company Location</p>
                        <p class="company-title-info-details">{{ $informations->location ?? '' }}</p>
                    </div>
                    <div class="company-information-container-details d-flex justify-content-between py-2">
                        <p class="company-title-info">Company Address</p>
                        <p class="company-title-info-details-address">
                            {{ $informations->address ?? '' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=" mt-5 p-5 company-profile-info-container rounded">
            <div class="company-profile-info d-flex justify-content-between">
                <h3 class="company-profile-info-header">About the Company</h3>
                <div class="d-flex flex-column align-items-center" role="button" data-bs-toggle="modal"
                    data-bs-target="#editAboutCompany">
                    <iconify-icon icon="fa6-solid:pen" class="fs-5 company-profile-info-edit-icon"></iconify-icon>
                    <p class="">Edit</p>
                </div>
            </div>
            <div class="pt-4 about-company-details">
                {{$abouts->about ?? ''}}
            </div>
        </div>

        <div class=" mt-5 p-5 company-profile-info-container rounded">
            <div class="company-profile-info d-flex justify-content-between">
                <h3 class="company-profile-info-header">Specialities</h3>
                <div class="d-flex flex-column align-items-center" role="button" data-bs-toggle="modal"
                    data-bs-target="#editSpecialities">
                    <iconify-icon icon="fa6-solid:pen" class=" company-profile-info-edit-icon fs-5"></iconify-icon>
                    <p class="">Edit</p>
                </div>
            </div>
            <div class="pt-4 d-flex flex-wrap specialities-tools ">
                <div class="aurbase-user-specialities">Technology</div>
                <div class="aurbase-user-specialities">Products</div>
                <div class="aurbase-user-specialities">Management</div>
            </div>
        </div>

        @include('company.layout.include.footer')
    </div>
@endsection

@section('scripts')
    <script>
        function showloader1() {
            var loader = document.getElementById('thisLoader1');
            loader.style.display = "inline-block";
        }
    </script>

    <script>
        function showloader3() {
            var loader = document.getElementById('thisLoader3');
            loader.style.display = "inline-block";
        }
    </script>
@endsection
