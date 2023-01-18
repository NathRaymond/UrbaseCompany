@extends('company.layout.master')

@section('headlinks')
@endsection

@section('active-menubilling')
active-menu
@endsection

@section('content')
<div class="dashboard-panel">
    <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
        <h2 class="fw-bold p-0 m-0">Billing</h2>
        @include('company.layout.active')
    </div>
    <div class="row mx-0 mt-3 mb-0 billing-filter-and-search-parent-container">
        <div class="col-md-8 px-0 d-flex align-items-center billing-filter-and-search-container">
            <div class="d-flex justify-content-end align-items-center">
                <button class="filter-btn d-flex justify-content-center align-items-center rounded border-0">
                    <iconify-icon icon="clarity:filter-grid-solid" class="fs-4"></iconify-icon> Filter
                </button>
                <select name="" id="" class="p-1 ms-2 rounded billing-filter-select">
                    <option value="">All</option>
                    <option value="">Active</option>
                    <option value="">Grace</option>
                    <option value="">Suspended</option>
                </select>
            </div>
            <div class="transaction-search-container billing-filter-search-container d-flex align-items-center ms-4">
                <iconify-icon icon="bx:search" class="fs-4"></iconify-icon>
                <input type="search" class="w-100 p-0 ms-2 h-100 transaction-search-container-text border-0"
                    placeholder="Search Talent">
            </div>
        </div>
        <div class="col-md-4 px-0 d-flex justify-content-end align-items-center">
            <div>
                <a href="{{ url('billings-view-pool') }}"
                    class="billing-view-pool-btn p-0 m-0 text-decoration-none ">View
                    Pool</a>
            </div>
        </div>
    </div>
    <div class="company-talent-list-parent-container w-100 pb-0 overflow-auto mt-4 rounded border">
        <div class="transaction-overflow-container billing-talents-overflow-container">
            <div
                class="company-talents-list-heading d-flex justify-content-between align-items-center fw-bold mb-3 px-2 py-3 mb-0">
                <div class="billing-talents-name-container-each">
                    <p>Full Name</p>
                </div>
                <div class="billing-talents-role-container-each">
                    <p>Role</p>
                </div>
                <div class="billing-talents-container-each">
                    <p>Salary</p>
                </div>
                <div class="billing-talents-container-each">
                    <p>Salary Due Date</p>
                </div>
                <div class="billing-talents-container-each">
                    <p>Status</p>
                </div>
                <div class="billing-talents-container-each">
                    <p>Action</p>
                </div>
            </div>
            <div class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold ">
                <div class="billing-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture1.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@aurbase.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="billing-talents-role-container-each">
                    <p class="company-talent-list-role billing-talent-list-role mx-auto">Product Designer
                    </p>
                </div>
                <div class="billing-talents-container-each">
                    <p>$3000.00</p>
                </div>
                <div class="billing-talents-container-each ">
                    01/09/2022
                </div>
                <div
                    class="billing-talents-container-each d-flex flex-column align-items-center justify-content-center">
                    <div
                        class="d-flex flex-column align-items-center position-relative billing-user-status-parent-container justify-content-center">
                        <iconify-icon icon="carbon:dot-mark" class="position-absolute billing-user-active-status-icon ">
                        </iconify-icon>
                        <iconify-icon icon="clarity:user-solid" class="fs-2"></iconify-icon>
                        <p class="billing-user-active-status">Active</p>
                    </div>
                </div>
                <div class="billing-talents-container-each">
                    <button class="billing-add-to-pool-btn fw-semibold">Add to pool</button>
                </div>
            </div>
            <div
                class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold transaction-bg">
                <div class="billing-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture1.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@aurbase.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="billing-talents-role-container-each">
                    <p
                        class="company-talent-list-role w-100 company-talent-list-role-Intermediate billing-talent-list-role mx-auto">
                        Backend Developer</p>
                </div>
                <div class="billing-talents-container-each">
                    <p>$3000.00</p>
                </div>
                <div class="billing-talents-container-each ">
                    01/09/2022
                </div>
                <div
                    class="billing-talents-container-each d-flex flex-column align-items-center justify-content-center">
                    <div
                        class="d-flex flex-column align-items-center position-relative billing-user-status-parent-container justify-content-center">
                        <iconify-icon icon="carbon:dot-mark" class="position-absolute billing-user-grace-status-icon ">
                        </iconify-icon>
                        <iconify-icon icon="clarity:user-solid" class="fs-2"></iconify-icon>
                        <p class="billing-user-grace-status">Grace</p>
                    </div>
                </div>
                <div class="billing-talents-container-each">
                    <button class="billing-add-to-pool-btn fw-semibold in-pool-active">In pool</button>
                </div>
            </div>
            <div class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold ">
                <div class="billing-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture1.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@aurbase.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="billing-talents-role-container-each">
                    <p
                        class="company-talent-list-role company-talent-list-role-junior billing-talent-list-role mx-auto">
                        Frontend Developer</p>
                </div>
                <div class="billing-talents-container-each">
                    <p>$3000.00</p>
                </div>
                <div class="billing-talents-container-each ">
                    01/09/2022
                </div>
                <div
                    class="billing-talents-container-each d-flex flex-column align-items-center justify-content-center">
                    <div
                        class="d-flex flex-column align-items-center position-relative billing-user-status-parent-container justify-content-center">
                        <iconify-icon icon="carbon:dot-mark"
                            class="position-absolute billing-user-suspended-status-icon "></iconify-icon>
                        <iconify-icon icon="clarity:user-solid" class="fs-2"></iconify-icon>
                        <p class="billing-user-suspended-status">Suspended</p>
                    </div>
                </div>
                <div class="billing-talents-container-each">
                    <button class="billing-add-to-pool-btn fw-semibold in-pool-active">In pool</button>
                </div>
            </div>
            <div
                class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold transaction-bg">
                <div class="billing-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture1.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@aurbase.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="billing-talents-role-container-each">
                    <p
                        class="company-talent-list-role w-100 company-talent-list-role-Intermediate billing-talent-list-role mx-auto">
                        Backend Developer</p>
                </div>
                <div class="billing-talents-container-each">
                    <p>$3000.00</p>
                </div>
                <div class="billing-talents-container-each ">
                    01/09/2022
                </div>
                <div
                    class="billing-talents-container-each d-flex flex-column align-items-center justify-content-center">
                    <div
                        class="d-flex flex-column align-items-center position-relative billing-user-status-parent-container justify-content-center">
                        <iconify-icon icon="carbon:dot-mark" class="position-absolute billing-user-active-status-icon ">
                        </iconify-icon>
                        <iconify-icon icon="clarity:user-solid" class="fs-2"></iconify-icon>
                        <p class="billing-user-active-status">Active</p>
                    </div>
                </div>
                <div class="billing-talents-container-each">
                    <button class="billing-add-to-pool-btn fw-semibold">Add to pool</button>
                </div>
            </div>
            <div class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold ">
                <div class="billing-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture1.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@aurbase.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="billing-talents-role-container-each">
                    <p class="company-talent-list-role billing-talent-list-role mx-auto">Product Designer
                    </p>
                </div>
                <div class="billing-talents-container-each">
                    <p>$3000.00</p>
                </div>
                <div class="billing-talents-container-each ">
                    01/09/2022
                </div>
                <div
                    class="billing-talents-container-each d-flex flex-column align-items-center justify-content-center">
                    <div
                        class="d-flex flex-column align-items-center position-relative billing-user-status-parent-container justify-content-center">
                        <iconify-icon icon="carbon:dot-mark" class="position-absolute billing-user-grace-status-icon ">
                        </iconify-icon>
                        <iconify-icon icon="clarity:user-solid" class="fs-2"></iconify-icon>
                        <p class="billing-user-grace-status">Grace</p>
                    </div>
                </div>
                <div class="billing-talents-container-each">
                    <button class="billing-add-to-pool-btn fw-semibold">Add to pool</button>
                </div>
            </div>
            <div
                class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold transaction-bg">
                <div class="billing-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture1.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@aurbase.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="billing-talents-role-container-each">
                    <p
                        class="company-talent-list-role company-talent-list-role-junior billing-talent-list-role mx-auto">
                        Frontend Developer</p>
                </div>
                <div class="billing-talents-container-each">
                    <p>$3000.00</p>
                </div>
                <div class="billing-talents-container-each ">
                    01/09/2022
                </div>
                <div
                    class="billing-talents-container-each d-flex flex-column align-items-center justify-content-center">
                    <div
                        class="d-flex flex-column align-items-center position-relative billing-user-status-parent-container justify-content-center">
                        <iconify-icon icon="carbon:dot-mark" class="position-absolute billing-user-active-status-icon ">
                        </iconify-icon>
                        <iconify-icon icon="clarity:user-solid" class="fs-2"></iconify-icon>
                        <p class="billing-user-active-status">Active</p>
                    </div>
                </div>
                <div class="billing-talents-container-each">
                    <button class="billing-add-to-pool-btn fw-semibold in-pool-active">In pool</button>
                </div>
            </div>
            <div class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold">
                <div class="billing-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture1.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@aurbase.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="billing-talents-role-container-each">
                    <p
                        class="company-talent-list-role w-100 company-talent-list-role-Intermediate billing-talent-list-role mx-auto">
                        Backend Developer</p>
                </div>
                <div class="billing-talents-container-each">
                    <p>$3000.00</p>
                </div>
                <div class="billing-talents-container-each ">
                    01/09/2022
                </div>
                <div
                    class="billing-talents-container-each d-flex flex-column align-items-center justify-content-center">
                    <div
                        class="d-flex flex-column align-items-center position-relative billing-user-status-parent-container justify-content-center">
                        <iconify-icon icon="carbon:dot-mark"
                            class="position-absolute billing-user-suspended-status-icon "></iconify-icon>
                        <iconify-icon icon="clarity:user-solid" class="fs-2"></iconify-icon>
                        <p class="billing-user-suspended-status">Suspended</p>
                    </div>
                </div>
                <div class="billing-talents-container-each">
                    <button class="billing-add-to-pool-btn fw-semibold">Add to pool</button>
                </div>
            </div>
            <div
                class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold transaction-bg">
                <div class="billing-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture1.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@aurbase.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="billing-talents-role-container-each">
                    <p class="company-talent-list-role billing-talent-list-role mx-auto">Product Designer
                    </p>
                </div>
                <div class="billing-talents-container-each">
                    <p>$3000.00</p>
                </div>
                <div class="billing-talents-container-each ">
                    01/09/2022
                </div>
                <div
                    class="billing-talents-container-each d-flex flex-column align-items-center justify-content-center">
                    <div
                        class="d-flex flex-column align-items-center position-relative billing-user-status-parent-container justify-content-center">
                        <iconify-icon icon="carbon:dot-mark" class="position-absolute billing-user-grace-status-icon ">
                        </iconify-icon>
                        <iconify-icon icon="clarity:user-solid" class="fs-2"></iconify-icon>
                        <p class="billing-user-grace-status">Grace</p>
                    </div>
                </div>
                <div class="billing-talents-container-each">
                    <button class="billing-add-to-pool-btn fw-semibold">Add to pool</button>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 d-flex justify-content-center align-items-center flex-column">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item" aria-current="page">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    @include('company.layout.include.footer')
</div>
@endsection

@section('scripts')
@endsection