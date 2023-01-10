@extends('company.layout.master')

@section('headlinks')

@endsection

@section('active-menutalent')
    active-menu
@endsection

@section('content')
<div class="dashboard-panel">

    <div class="modal fade" id="talentsAddUser" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content py-4 px-4">
                <div class="modal-header p-0 pb-2">
                    <h3 class="modal-title fw-semibold" id="staticBackdropLabel">Add User(s)</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body px-1">
                    <div class=" block bio-data-input-parent-container mx-0 mb-1 d-flex flex-column">
                        <label for="" class="bio-data-name-label fw-semibold mb-2">Enter Email
                            Address</label>
                        <div
                            class="d-flex bio-data-input-child-container mb-0 px-0 justify-content-between align-items-center">
                            <div class="talent-add-user-modal-input-container">
                                <input type="email"
                                    class="bio-data-name-input work-experience-textarea w-100" required>
                            </div>
                            <div class="talent-add-user-modal-delete-icon-container px-3 d-flex">
                                <iconify-icon icon="fluent:delete-24-filled"
                                    class="fs-4 talent-add-user-modal-delete-icon me-2"></iconify-icon>
                                <iconify-icon icon="akar-icons:plus"
                                    class="add fs-4 talent-add-user-modal-add-icon"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer px-0">
                    <button type="button" class="btn cancel-bio-data"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn update-bio-data">Add All</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Upload Csv Modal -->

    <div class="modal fade" id="uploadCSV" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content py-4 px-4">
                <div class="modal-header p-0 pb-2 border-0">
                    <h3 class="modal-title fw-semibold" id="staticBackdropLabel">Upload CSV</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="px-1 border-0">
                    <div class="image-upload-container position-relative">
                        <input type="file" class="file-upload-input opacity-0 w-100 h-100 position-absolute"
                            role="button" onchange="readURL(this);" accept="image/*" />
                        <div class="d-flex flex-column align-items-center">
                            <iconify-icon icon="material-symbols:drive-folder-upload"
                                class="fs-2 csv-upload-icon" role="button">
                            </iconify-icon>
                            <div class="fw-semibold">Upload CSV</div>
                        </div>

                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="your image" />
                    </div>
                </div>
                <div class="modal-footer px-0 border-0">
                    <button type="button" onclick="removeUpload()" class="btn remove-csv">Remove
                        Csv</button>
                    <button type="button" class="btn update-bio-data">Upload CSV</button>
                </div>
            </div>
        </div>
    </div>

    <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
        <h2 class="fw-bold p-0 m-0">Talents</h2>
        @include('company.layout.active')
    </div>
    <div class="talent-csv-container row mx-0 mt-5 mb-3 d-flex align-items-center">
        <div class="col-lg-6 px-0 d-flex  align-items-center talent-csv-child-container">
            <div>
                <div class="talent-download-csv-btn fw-semibold">Download CSV</div>
            </div>
            <div class="mx-3 talent-upload-csv-btn-container position-relative" data-bs-toggle="modal"
                data-bs-target="#uploadCSV">
                <!-- <input type="file" class="w-100 h-100 position-absolute opacity-0"> -->
                <div class="talent-upload-csv-btn fw-semibold">Upload CSV</div>
            </div>
            <div>
                <a href="#" class="talent-add-user-btn fw-semibold" data-bs-toggle="modal"
                    data-bs-target="#talentsAddUser">Add User</a>
            </div>
        </div>
        <div class="col-lg-6 px-0 talent-csv-child-color-container">
            <div class="d-flex align-items-center justify-content-end stack-test-all-level-container">
                <p class="me-2 stack-stack-note-text">Note:</p>
                <div class="d-flex align-items-center stack-test-each-level-container">
                    <div class="d-flex justify-content-center align-items-center  ">
                        <div class="stack-senior-level-container me-1">
                        </div>
                        <p class=" fw-normal me-2 stack-level-text-list">Senior Level</p>
                    </div>
                    <div
                        class="d-flex justify-content-center align-items-center stack-intermediate-level-parent-container">
                        <div class="stack-intermediate-level-container me-1">
                        </div>
                        <p class="stack-level-text me-2 stack-level-text-list">Intermediate Level</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="stack-junior-level-container me-1">
                        </div>
                        <p class="stack-level-text me-2 stack-level-text-list">Junior Level</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="company-talent-list-parent-container w-100 pb-5 overflow-auto mt-5 rounded">
        <div class="transaction-overflow-container company-talents-overflow-container ">
            <div
                class="company-talents-list-heading d-flex justify-content-between align-items-center fw-bold mb-3 px-2 py-3 mb-0">
                <div class="company-talents-name-container-each">
                    <p>Full Name</p>
                </div>
                <div class="company-talents-container-each">
                    <p>Role</p>
                </div>
                <div class="company-talents-container-each">
                    <p>Stack</p>
                </div>
                <div class="company-talents-container-each">
                    <p>Morale</p>
                </div>
                <div class="company-talents-container-each">
                    <p>Action</p>
                </div>
            </div>
            <a href="{{ url('talents-profile') }}"
                class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold company-talent-each-list">
                <div class="company-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture1.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div
                            class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each">
                    <span class="company-talent-list-role">Product Designer</span>
                </div>
                <div class="company-talents-container-each">
                    <img src="{{ asset('assets/img/talent-swift-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-figma-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-php-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-react-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                </div>
                <div class="company-talents-container-each ">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-start justify-content-center flex-column">
                            <div class="company-talent-morale-level-heart-container ">
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each opacity-25">
                    <iconify-icon icon="ep:edit"
                        class="me-2 company-talent-list-action company-talent-list-action-edit-icon">
                    </iconify-icon>
                    <iconify-icon icon="ci:trash-full"
                        class="company-talent-list-action company-talent-list-action-delete-icon">
                    </iconify-icon>
                </div>
            </a>
            <div
                class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold company-talent-each-list">
                <div class="company-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-profile-picture2.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div
                            class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each">
                    <span class="company-talent-list-role company-talent-list-role-Intermediate">Product
                        Designer</span>
                </div>
                <div class="company-talents-container-each">
                    <img src="{{ asset('assets/img/talent-swift-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-figma-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-php-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-react-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                </div>
                <div class="company-talents-container-each opacity-25">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-start justify-content-center flex-column">
                            <div class="company-talent-morale-level-heart-container ">
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each">
                    <iconify-icon icon="ep:edit"
                        class="me-2 company-talent-list-action company-talent-list-action-edit-icon">
                    </iconify-icon>
                    <iconify-icon icon="ci:trash-full"
                        class="company-talent-list-action company-talent-list-action-delete-icon">
                    </iconify-icon>
                </div>
            </div>
            <div
                class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold company-talent-each-list">
                <div class="company-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture2.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div
                            class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each">
                    <span class="company-talent-list-role company-talent-list-role-junior">Product
                        Designer</span>
                </div>
                <div class="company-talents-container-each">
                    <img src="{{ asset('assets/img/talent-swift-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-figma-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-php-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-react-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                </div>
                <div class="company-talents-container-each ">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-start justify-content-center flex-column">
                            <div class="company-talent-morale-level-heart-container ">
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each opacity-25">
                    <iconify-icon icon="ep:edit"
                        class="me-2 company-talent-list-action company-talent-list-action-edit-icon">
                    </iconify-icon>
                    <iconify-icon icon="ci:trash-full"
                        class="company-talent-list-action company-talent-list-action-delete-icon">
                    </iconify-icon>
                </div>
            </div>
            <div
                class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold company-talent-each-list">
                <div class="company-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture2.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div
                            class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each">
                    <span class="company-talent-list-role">Product Designer</span>
                </div>
                <div class="company-talents-container-each">
                    <img src="{{ asset('assets/img/talent-swift-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-figma-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-php-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-react-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                </div>
                <div class="company-talents-container-each ">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-start justify-content-center flex-column">
                            <div class="company-talent-morale-level-heart-container ">
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each opacity-25">
                    <iconify-icon icon="ep:edit"
                        class="me-2 company-talent-list-action company-talent-list-action-edit-icon">
                    </iconify-icon>
                    <iconify-icon icon="ci:trash-full"
                        class="company-talent-list-action company-talent-list-action-delete-icon">
                    </iconify-icon>
                </div>
            </div>
            <div
                class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold company-talent-each-list">
                <div class="company-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture2.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div
                            class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each">
                    <span class="company-talent-list-role company-talent-list-role-Intermediate">Product
                        Designer</span>
                </div>
                <div class="company-talents-container-each">
                    <img src="{{ asset('assets/img/talent-swift-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-figma-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-php-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-react-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                </div>
                <div class="company-talents-container-each ">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-start justify-content-center flex-column">
                            <div class="company-talent-morale-level-heart-container ">
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each opacity-25">
                    <iconify-icon icon="ep:edit"
                        class="me-2 company-talent-list-action company-talent-list-action-edit-icon">
                    </iconify-icon>
                    <iconify-icon icon="ci:trash-full"
                        class="company-talent-list-action company-talent-list-action-delete-icon">
                    </iconify-icon>
                </div>
            </div>
            <div
                class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold company-talent-each-list">
                <div class="company-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture2.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div
                            class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each">
                    <span class="company-talent-list-role company-talent-list-role-junior">Product
                        Designer</span>
                </div>
                <div class="company-talents-container-each">
                    <img src="{{ asset('assets/img/talent-swift-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-figma-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-php-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-react-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                </div>
                <div class="company-talents-container-each ">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-start justify-content-center flex-column">
                            <div class="company-talent-morale-level-heart-container ">
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each opacity-25">
                    <iconify-icon icon="ep:edit"
                        class="me-2 company-talent-list-action company-talent-list-action-edit-icon">
                    </iconify-icon>
                    <iconify-icon icon="ci:trash-full"
                        class="company-talent-list-action company-talent-list-action-delete-icon">
                    </iconify-icon>
                </div>
            </div>
            <div
                class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold company-talent-each-list">
                <div class="company-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture2.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div
                            class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each">
                    <span class="company-talent-list-role">Product
                        Designer</span>
                </div>
                <div class="company-talents-container-each">
                    <img src="{{ asset('assets/img/talent-swift-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-figma-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-php-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-react-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                </div>
                <div class="company-talents-container-each ">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-start justify-content-center flex-column">
                            <div class="company-talent-morale-level-heart-container ">
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each opacity-25">
                    <iconify-icon icon="ep:edit"
                        class="me-2 company-talent-list-action company-talent-list-action-edit-icon">
                    </iconify-icon>
                    <iconify-icon icon="ci:trash-full"
                        class="company-talent-list-action company-talent-list-action-delete-icon">
                    </iconify-icon>
                </div>
            </div>
            <div
                class="transaction-each-list d-flex justify-content-between align-items-center fw-semibold company-talent-each-list">
                <div class="company-talents-name-container-each">
                    <div class="d-flex px-3">
                        <div
                            class="company-talent-profile-picture-container d-flex justify-content-center align-items-center position-relative">
                            <img src="{{ asset('assets/img/company-talent-urbase-tag.png') }}" alt=""
                                class="company-talent-aurbase-tag position-absolute">
                            <img src="{{ asset('assets/img/company-talent-profile-picture2.png') }}" alt=""
                                class="company-talent-profile-picture img-fluid">
                        </div>
                        <div
                            class="d-flex flex-column align-items-start company-talent-user-details-container">
                            <p class="company-talent-list-user-name fw-bold">Joseph</p>
                            <p class="company-talent-list-user-email fw-normal">josephmicheal689@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each">
                    <span class="company-talent-list-role company-talent-list-role-Intermediate">Product
                        Designer</span>
                </div>
                <div class="company-talents-container-each">
                    <img src="{{ asset('assets/img/talent-swift-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-figma-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-php-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                    <img src="{{ asset('assets/img/talent-react-stack.png') }}" alt=""
                        class="company-talent-container-stack-img">
                </div>
                <div class="company-talents-container-each ">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-start justify-content-center flex-column">
                            <div class="company-talent-morale-level-heart-container ">
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                                <iconify-icon icon="bi:heart-fill"
                                    class="company-talent-morale-level-heart me-1">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="company-talents-container-each opacity-25">
                    <iconify-icon icon="ep:edit"
                        class="me-2 company-talent-list-action company-talent-list-action-edit-icon">
                    </iconify-icon>
                    <iconify-icon icon="ci:trash-full"
                        class="company-talent-list-action company-talent-list-action-delete-icon">
                    </iconify-icon>
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
    </div>
    @include('company.layout.include.footer')
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/add-user-email.js') }}"></script>

<script src="{{ asset('assets/js/upload-image.js') }}"></script>
@endsection
