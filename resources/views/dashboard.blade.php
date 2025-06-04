@extends('layouts.master')

@section('content')
    <h1>DMS Dashboard</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Open Modal
    </button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myTestModal">
        Open Modal 2
    </button>
    <div class="modal fade" tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pretium nisi nunc,
                    sit amet tincidunt ipsum faucibus vitae. Pellentesque eget odio tristique, mattis elit id.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-subtle" data-bs-dismiss="modal">Secondary Action</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myTestModal" tabindex="-1" aria-labelledby="myTestModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"> {{-- modal-dialog-centered for vertical centering --}}
            <div class="modal-content">
                <div class="modal-header bg-primary text-white"> {{-- AdminLTE adds color classes for Bootstrap --}}
                    <h5 class="modal-title" id="myTestModalLabel">My Test Modal Title</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button> {{-- btn-close-white for light background --}}
                </div>
                <div class="modal-body">
                    <p>This is a simple Bootstrap 5 modal integrated into your Laravel 12 AdminLTE 4 project.</p>
                    <p>You can put any content here:</p>
                    <ul>
                        <li>Forms</li>
                        <li>Tables</li>
                        <li>Messages</li>
                    </ul>
                    <div class="alert alert-info" role="alert">
                        Just for testing purposes!
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save Changes</button> {{-- Example action button --}}
                </div>
            </div>
        </div>
    </div>
    <i class="fa-solid fa-bell fa-3x icon-primary"></i>
@endsection
