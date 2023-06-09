{{-- Extends layouts --}}
@extends('layouts.app')

{{-- Main Content --}}
@section('content')
<!-- Incription Section Start -->
<section class="banner-area">
    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-2">
      <div class="banner-thumb hidden sm:block">
        <img src="{{ asset('images/main/banner-2.png') }}" alt="Banner" />
      </div>
      <div class="banner-content sm:py-10 pt-10 pb-2 sm:px-7 px-2">
        <div
          class="flex place-items-center sm:justify-between justify-center sm:mb-0 mb-4"
        >
          <img
            class="w-36"
            src="{{ asset('images/common/logo.png')}}"
            alt="Logo"
          />
  
          <p class="hidden sm:block text-sm text=[#2B0B0B]">
            Vous avez déjà un compte ?
            <a href="#" class="text-[#7F2B28]">Connectez-vous</a>
          </p>
        </div>
  
        <div class="questions-wrapper p-2 sm:p-12">
          <h5 class="sm:text-5xl text-4xl text-[#7F2B28] font-semibold mb-3">
            Inscription
          </h5>
  
          <p class="text-xl text-[#2B0B0B] font-semibold mb-4">
            1/2 - Vous êtes…
          </p>
  
          <div class="multiple-choices pl-5 mb-5">
            <div class="option mb-3">
              <input id="radio1" type="radio" name="radio" class="hidden" />
              <label for="radio1" class="flex items-center cursor-pointer">
                <span
                  class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"
                ></span>
                Designer UX</label
              >
            </div>
  
            <div class="option mb-3">
              <input id="radio2" type="radio" name="radio" class="hidden" />
              <label for="radio2" class="flex items-center cursor-pointer">
                <span
                  class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"
                ></span>
                Designer UI</label
              >
            </div>
  
            <div class="option mb-3">
              <input id="radio3" type="radio" name="radio" class="hidden" />
              <label for="radio3" class="flex items-center cursor-pointer">
                <span
                  class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"
                ></span>
                Développeur front</label
              >
            </div>
  
            <div class="option mb-3">
              <input id="radio4" type="radio" name="radio" class="hidden" />
              <label for="radio4" class="flex items-center cursor-pointer">
                <span
                  class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"
                ></span>
                Développeur back</label
              >
            </div>
  
            <div class="option mb-3">
              <input id="radio4" type="radio" name="radio" class="hidden" />
              <label for="radio4" class="flex items-center cursor-pointer">
                <span
                  class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"
                ></span>
                Étudiant</label
              >
            </div>
          </div>
  
          <button
            class="sm:mr-2 sm:mb-0 mb-2 rounded-full bg-[#7f2b28] flex text-white text-sm px-4 py-1.5"
          >
            Question suivante
            <img
              class="ml-1 h-5 w-5 rounded-full"
              src="{{ asset('images/icon/next.png') }}"
              alt="Next"
            />
          </button>
        </div>
  
        <p class="block sm:hidden text-sm pt-5 text-center text=[#2B0B0B]">
          Vous avez déjà un compte ?
          <a href="#" class="text-[#7F2B28]">Connectez-vous</a>
        </p>
      </div>
    </div>
</section>
<!-- Incription Section End -->
@stop
