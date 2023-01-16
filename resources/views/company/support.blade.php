@extends('company.layout.master')

@section('headlinks')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css"
        integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('active-menusupport')
    active-menu
@endsection

@section('content')
    <div class="dashboard-panel">

        <!-- Modal -->
        <div class="modal fade" id="newTicket" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content py-4 px-5">
                    <form action="{{route('create-support')}}" method="post">
                        @csrf
                    <div class="modal-header p-0 pb-2 border-0">
                        <h3 class="modal-ticket-header">New Ticket</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body px-0 ">
                            <h4 class="modal-ticket-body-title">Tittle</h4>
                            <div class="">
                                <input type="search" name="subject" required class="w-100 modal-ticket-input-title p-2">
                            </div>
                            <h4 class="modal-ticket-body-title py-3">Note</h4>
    
                            <div class="">
                                <textarea id="summernote" class="" required name="message">
    
                            </textarea>
                            </div>
                        </div>
                        <div style="float: right" > <button type="submit" class="modal-submit-post align-self-end p-2 px-4"  role="button">Post</button> </div>
                    </form>
                    
                </div>
            </div>
        </div>

        <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
            <h2 class="fw-bold p-0 m-0">Support</h2>
            @include('company.layout.active')
        </div>
        <div class="row mx-0 mt-4 mb-0 support-ticket-and-filter-container justify-content-between">
            <div class="support-ticket p-3 d-flex justify-content-between align-items-center" data-bs-toggle="modal"
                data-bs-target="#newTicket">
                <div class="support-pen-container d-flex justify-content-center align-items-center">
                    <iconify-icon icon="bi:pen-fill"></iconify-icon>
                </div>
                <p>New Ticket</p>
            </div>

            <div class="support-ticket p-3 d-flex justify-content-around">
                <iconify-icon icon="bytesize:filter" class="fs-5"></iconify-icon>
                <p>Sort: A-Z</p>
            </div>
        </div>

        @foreach ($tickets as $ticket)
            <div class="support-container p-5 my-3 ">
                <div class="support-container-ticket-duaration d-flex justify-content-between align-items-center">
                    <div class="ticket-title-parent d-flex justify-content-between align-items-center">
                        <div class="ticket-icon-parent d-flex align-items-center justify-content-center">
                            <iconify-icon icon="majesticons:ticket" class="fs-4"></iconify-icon>
                        </div>
                        <p class="ticket-title-text">Ticket {{$ticket->ticket_code}}</p>
                        <p style="width: 65px" class="ticket-status-@if($ticket->status == "Pending")inactive @else active @endif">@if($ticket->status == "Pending")Pending @else Active @endif</p>
                    </div>

                    <div class="ticket-day-text">{{date('l:h:iA', strtotime($ticket->created_at))}}</div>
                </div>

                <div class="ticket-header py-3">
                    {{$ticket->subject}}
                </div>
                <div class="ticket-body">
                    {{$ticket->message}}
                </div>
            </div>  
        @endforeach
        

       
        @include('company.layout.include.footer')
    </div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"
integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA=="
crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"
        integrity="sha512-6F1RVfnxCprKJmfulcxxym1Dar5FsT/V2jiEUvABiaEiFWoQ8yHvqRM/Slf0qJKiwin6IDQucjXuolCfCKnaJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/note-editor.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if ($errors->any())
            Swal.fire('Oops...', "{!! implode('', $errors->all('<p>:message</p>')) !!}", 'error')
        @endif

        @if (session()->has('message'))
            Swal.fire(
                'Success!',
                "{{ session()->get('message') }}",
                'success'
            )
        @endif
        @if (session()->has('success'))
            Swal.fire(
                'Success!',
                "{{ session()->get('success') }}",
                'success'
            )
        @endif
    </script>
@endsection
