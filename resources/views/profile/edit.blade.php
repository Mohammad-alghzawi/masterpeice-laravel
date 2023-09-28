@extends('layouts.master')
@section('title','home')
@section('content')
<x-app-layout>
    <div class="hero overlay" style="  background-image: url('{{ asset('assets/img/cart1.jpg') }}'); height: 400px; background-size: cover; background-repeat: no-repeat;" >
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center " >
                    <h1 class="heading mt-6 mb-2" style="margin-top:200px; font-weight: bolder;font-size:50px; color:white" data-aos="fade-up">Your Profile</h1>
                </div>
            </div>
        </div>
    </div>

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    {{-- @include('profile.partials.update-password-form') --}}
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection

