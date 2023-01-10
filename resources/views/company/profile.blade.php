@extends('company.layout.master')

@section('headlinks')

@endsection

@section('active-menuprofile')
    active-menu
@endsection

@section('content')
<div class="dashboard-panel">
    <!-- Company Info Modal -->
    <div class="modal fade" id="editCompanyInfo" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content py-4 px-5">
                <div class="modal-header p-0 pb-2 border-0">
                    <h3 class="modal-title fw-semibold" id="staticBackdropLabel">Company Profile</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="w-100 py-4">
                    <div class="profile-pic-change-parent d-flex justify-content-between">
                        <img src="{{ asset('assets/img/company-profile-pic-modal.png') }}" alt="" class="">
                        <div class="align-self-center">Change Profile Pic</div>
                    </div>
                    <div class="row w-100 my-4">
                        <div class=" col-md-6 d-flex flex-column">
                            <label class="company-profile-bio-data-title">Company Name</label>
                            <input type="email" class="company-profile-bio-data w-100"
                                placeholder="JoeTechX">
                        </div>
                        <div class="col-md-6 d-flex flex-column">
                            <label class="company-profile-bio-data-title">Industry</label>
                            <select class="form-select company-profile-bio-data"
                                aria-label="Default select example">
                                <option selected>information Technology</option>
                                <option value="1">Entertainment</option>
                                <option value="2">Science</option>
                                <option value="3">Fiction</option>
                            </select>
                        </div>
                    </div>
                    <div class="row w-100 mt-4">
                        <div class=" col-md-6 d-flex flex-column">
                            <label class="company-profile-bio-data-title">Company Size</label>
                            <select class="form-select company-profile-bio-data"
                                aria-label="Default select example">
                                <option selected>50-100</option>
                                <option value="1">101-500</option>
                                <option value="2">501-1000</option>
                                <option value="3">1000 above</option>
                            </select>
                        </div>
                        <div class="col-md-6 d-flex flex-column">
                            <label class="company-profile-bio-data-title">Company Location</label>
                            <select class="form-select company-profile-bio-data"
                                aria-label="Default select example">
                                <option selected>Canada</option>
                                <option value="1">Nigeria</option>
                                <option value="2">Russia</option>
                                <option value="3">India</option>
                            </select>
                        </div>
                    </div>

                    <div class="row w-100 my-5">
                        <div class=" col-md-12 d-flex flex-column">
                            <label class="company-profile-bio-data-title">Company Address </label>
                            <input type="email" class="company-profile-bio-data w-100 p-4"
                                placeholder="Toronto City Hall 100 Queen St W, Toronto, Ontario M5H 2N1 Canada.">
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-end px-4">
                    <button type="button" class="btn cancel-bio-data"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn update-bio-data">Update</button>
                </div>
            </div>
        </div>

    </div>

    <!-- About Company Modal -->
    <div class="modal fade" id="editAboutCompany" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content py-4 px-5">
                <div class="modal-header p-0 pb-2 border-0">
                    <h3 class="modal-title fw-semibold" id="staticBackdropLabel">About the Company</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div>
                    <textarea class="form-control" rows="10"
                        placeholder="joeTechX is an American multinational technology company that focuses on search engine technology"></textarea>
                </div>
                <div class="modal-footer px-0">
                    <button type="button" class="btn cancel-bio-data"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn update-bio-data">Update</button>
                </div>
            </div>
        </div>

    </div>

    <!-- Specialities Modal -->

    <div class="modal fade" id="editSpecialities" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content py-4 px-5">
                <div class="modal-header p-0 pb-2 border-0">
                    <h3 class="modal-title fw-semibold" id="staticBackdropLabel">Specialities</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="specialities-modal-container my-4 p-0">
                    <input type="email" class="specialities-edit-data w-100 p-4"/>
                </div>
                <div class="modal-footer px-0 border-0">
                    <button type="button" class="btn cancel-bio-data"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn update-bio-data">Update</button>
                </div>
            </div>
        </div>

    </div>

    <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
        <h2 class="fw-bold p-0 m-0">Profile</h2>
        @include('company.layout.active')
    </div>

    <div class=" mt-4 p-5 company-profile-info-container rounded">
        <div class="company-profile-info d-flex justify-content-between">
            <h3 class="company-profile-info-header">Company information</h3>
            <div class="company-profile-info-edit-icon-conatiner d-flex flex-column align-items-center " role="button" data-bs-toggle="modal"
                data-bs-target="#editCompanyInfo">
                <iconify-icon icon="fa6-solid:pen" class="company-profile-info-edit-icon fs-5"></iconify-icon>
                <p class="">Edit</p>
            </div>
        </div>
        <div class="company-profile-info-details pt-4 px-5 w-100">
            <div class="company-profile-info-details-img">
                <img src="{{ asset('assets/img/Profile-pic.png') }}" alt="" class="">
            </div>
            <div class="profile-aurbuser-name-industry align-self-center w-25">
                <h3 class="profile-aurbuser-name">JoeTechX</h3>
                <p class="profile-aurbuser-industry">Industry: Tech/ICT</p>
            </div>

            <div class="company-information-container w-50 pt-4">
                <div class="company-information-container-details d-flex justify-content-between py-2">
                    <p class="company-title-info">Company Website</p>
                    <p class="company-title-info-details">www.joextech.com</p>
                </div>
                <div class="company-information-container-details d-flex justify-content-between py-2">
                    <p class="company-title-info">Company Size</p>
                    <p class="company-title-info-details">50 - 100</p>
                </div>
                <div class="company-information-container-details d-flex justify-content-between py-2">
                    <p class="company-title-info">Company Location</p>
                    <p class="company-title-info-details">Canada</p>
                </div>
                <div class="company-information-container-details d-flex justify-content-between py-2">
                    <p class="company-title-info">Company Address</p>
                    <p class="company-title-info-details-address">
                        Toronto City Hall 100Queen St W, <br />
                        Toronto, Ontario M5H 2N1 Canada.
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
            I’m an Enthusiastic UI/UX DESIGNER with good designing skills,
            communication skills and interpersonal skills, Disciplined and
            eager to contribute to team success through hard work,
            where I can build a fulfilling career through, resourcefulness,
            diligence and excellent organizational skills.I’m an Enthusiastic
            UI/UX DESIGNER with good designing skills, communication skills and
            interpersonal skills, Disciplined and eager to contribute to
            team success through hard work, where I can build a fulfilling career
            through, resourcefulness, diligence and excellent organizational skills.
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

@endsection
