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
          src="{{ asset('images/common/logo.png') }}"
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
          2/2 - Informations générales
        </p>

        <form action="">
          <div class="form-group mb-6">
            <input
              class="w-full px-3"
              type="text"
              id="arthur"
              placeholder="Arthur"
            />
            <label class="label" for="arthur">Prénom</label>
          </div>

          <div class="form-group mb-6">
            <input
              class="w-full px-3"
              type="text"
              id="arthur"
              placeholder="Nom"
            />
            <label class="label" for="arthur">Nom</label>
          </div>

          <div class="form-group error mb-6">
            <input
              class="w-full px-3"
              type="email"
              id="arthur"
              value="wdjij@kjo"
              placeholder="Arthur"
            />

            <div class="error-message">
              L’adresse email n’est pas valide
            </div>
            <label class="label" for="arthur">Prénom</label>
          </div>

          <div class="form-group mb-6">
            <input
              class="w-full px-3"
              type="password"
              id="arthur"
              placeholder="Mot de passe"
            />
            <div class="eye-shape">
              <img
                class="w-4"
                src="{{ asset('images/icon/eye-on.png') }}"
                alt="Eye shape"
              />
            </div>
            <label class="label" for="arthur">Password</label>
          </div>

          <div class="form-group mb-4">
            <input
              class="w-full px-3"
              type="password"
              id="arthur"
              placeholder="Confirmation mot de passe"
            />
            <div class="eye-shape">
              <img
                class="w-4"
                src="{{ asset('images/icon/eye-off.png') }}"
                alt="Eye shape"
              />
            </div>
            <label class="label" for="arthur">Confirm Password</label>
          </div>

          <div class="form-group flex mb-2">
            <label class="flex place-items-center" for="checkbox1">
              <input
                class="mr-2"
                type="checkbox"
                name="checkbox"
                id="checkbox1"
              />J’ai lu et j’accepte les CGU
            </label>
          </div>

          <button
            class="sm:mr-2 sm:mb-0 mb-2 rounded-full bg-[#7f2b28] flex text-white text-sm px-4 py-1.5"
          >
            Inscription
          </button>
        </form>
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
