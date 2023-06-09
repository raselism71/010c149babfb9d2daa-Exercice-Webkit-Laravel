{{-- Extends layouts --}}
@extends('layouts.app')

{{-- Main Content --}}
@section('content')
<!-- Header Start From Here -->
<header>
    <nav class="bg-[#EFDFD5]">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-14 sm:h-20 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button
            id="mobileMenuButton"
            type="button"
            class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:text-[#7F2B28]"
            aria-controls="mobile-menu"
            aria-expanded="false"
            >
            <span class="sr-only">Open main menu</span>
            <svg
                id="menuIcon"
                class="block h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="#7f2b28"
                aria-hidden="true"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                />
            </svg>
            <svg
                id="closeIcon"
                class="hidden h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="#7f2b28"
                aria-hidden="true"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"
                />
            </svg>
            </button>
        </div>
        <div
            class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start"
        >
            <div class="flex flex-shrink-0 items-center">
            <img
                class="block h-8 w-auto lg:hidden"
                src="{{ asset('images/common/logo.png')}}"
                alt="Your Company"
            />
            <img
                class="hidden h-8 w-auto lg:block"
                src="{{ asset('images/common/logo.png')}}"
                alt="Your Company"
            />
            </div>
            <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4 navlist">
                <a
                href="#"
                class="active text-[#7F2B28] hover:text-[#7F2B28] rounded-md px-3 py-3 text-base font-medium"
                >UI Webkit</a
                >
                <a
                href="#"
                class="text-[#7F2B28] hover:text-[#7F2B28] rounded-md px-3 py-3 text-base font-medium"
                >Vidéos</a
                >
                <a
                href="#"
                class="text-[#7F2B28] hover:text-[#7F2B28] rounded-md px-3 py-3 text-base font-medium"
                >Exemples</a
                >
                <a
                href="#"
                class="text-[#7F2B28] hover:text-[#7F2B28] rounded-md px-3 py-3 text-base font-medium"
                >À propos</a
                >
                <a
                href="#"
                class="text-[#7F2B28] hover:text-[#7F2B28] rounded-md px-3 py-3 text-base font-medium"
                >Blog</a
                >
            </div>
            </div>
        </div>
        <div
            class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0"
        >
            <button
            class="rounded-full bg-[#7f2b28] hidden sm:block text-white text-sm px-4 py-1.5"
            >
            Download
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
            <div>
                <button
                type="button"
                class="flex text-sm ms-4"
                id="user-menu-button"
                aria-expanded="false"
                aria-haspopup="true"
                >
                <span class="sr-only">Open user menu</span>
                <img
                    class="h-5 w-5 rounded-full"
                    src="{{asset('images/icon/search.png')}}"
                    alt="Search"
                />
                </button>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden hidden bg-white" id="mobile-menu">
        <div class="h-screen space-y-1 px-2 pb-3 pt-2">
        <a
            href="#"
            class="text-[#7F2B28] hover:text-[#7F2B28] block rounded-md px-3 py-2 text-base font-medium"
            >UI Webkit</a
        >
        <a
            href="#"
            class="text-[#7F2B28] hover:text-[#7F2B28] block rounded-md px-3 py-2 text-base font-medium"
            >Vidéos</a
        >
        <a
            href="#"
            class="text-[#7F2B28] hover:text-[#7F2B28] block rounded-md px-3 py-2 text-base font-medium"
            >Exemples</a
        >
        <a
            href="#"
            class="text-[#7F2B28] hover:text-[#7F2B28] block rounded-md px-3 py-2 text-base font-medium"
            >À propos</a
        >
        <a
            href="#"
            class="text-[#7F2B28] hover:text-[#7F2B28] block rounded-md px-3 py-2 text-base font-medium"
            >Blog</a
        >

        <button
            class="rounded-full bg-[#7f2b28] text-white text-sm px-3 py-1 ms-2"
        >
            Download
        </button>
        </div>
    </div>
    </nav>
</header>
<!-- Header End In Here -->

<!-- Banner Section Start -->
<section class="banner-area sm:py-8 py-2">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <div
        class="grid place-items-center grid-cols-1 sm:grid-cols-2 sm:gap-5"
    >
        <div class="banner-content order-2 sm:order-1">
        <h3 class="sm:text-7xl text-4xl text-[#9e6e52] font-semibold mb-3">
            UI Webkit
        </h3>
        <p class="text-base text-[#7F2B28] leading-6 mb-5">
            Le webkit est un outil utilisé chez Appsolute pour améliorer la
            collaboration entre développeurs web et designers et permettre
            d’avancer de manière plus efficace. Les designers et les
            développeurs ont à leur disposition des composants designés et
            développé à adapter suivant l’identité visuelle et les besoins du
            projet.
        </p>

        <div class="action-btn block sm:mb-0 mb-6 sm:flex">
            <button
            class="sm:mr-2 sm:mb-0 mb-2 rounded-full bg-[#7f2b28] flex text-white text-sm px-4 py-1.5"
            >
            Télécharger le fichier figma
            <img
                class="ml-1 h-5 w-5 rounded-full"
                src="{{asset('images/icon/download.png')}}"
                alt="Download"
            />
            </button>
            <button
            class="rounded-full border border-[#7f2b28] block sm:block text-[#7f2b28] text-sm px-4 py-1.5"
            >
            Accéder au webkit
            </button>
        </div>
        </div>

        <div class="banner-thumb order-1 sm:order-2 mb-5 sm:mb-0">
        <img src="images/main/banner-1.png" alt="Banner" />
        </div>
    </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Feature Section Start -->
<section class="feature-area bg-[#D8E0D5] sm:py-16 py-5">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <div
        class="grid place-items-center grid-cols-1 sm:grid-cols-3 sm:gap-4"
    >
        <div class="text-start block w-full">
        <div class="feature-content order-2 sm:order-1">
            <h3
            class="sm:text-5xl text-4xl text-[#3A4838] font-semibold leading-10 mb-3"
            >
            À quoi sert le webkit ?
            </h3>

            <p class="text-xl text-[#3A4838] font-semibold leading-6 mb-5">
            Découvrez différents exemples d’utilisation en cliquant sur les
            articles ci-contre.
            </p>
            <p class="text-base text-[#2B0B0B] leading-6 mb-5">
            Raptim igitur properantes ut motus sui rumores celeritate nimia
            praevenirent, vigore corporum ac levitate confisi per flexuosas
            semitas ad summitates collium tardius evadebant. et cum
            superatis difficultatibus arduis ad supercilia venissent fluvii
            Melanis alti et verticosi, qui pro muro tuetur accolas
            circumfusus, augente nocte adulta terrorem quievere paulisper
            lucem opperientes. arbitrabantur enim nullo inpediente
            transgressi inopino adcursu adposita quaeque vastare, sed in
            cassum labores pertulere gravissimos. <br />
            <br />
            Latius iam disseminata licentia onerosus bonis omnibus Caesar
            nullum post haec adhibens modum orientis latera cuncta vexabat
            nec honoratis parcens nec urbium primatibus nec plebeiis.
            </p>

            <div class="action-btn block sm:mb-0 mb-6 sm:flex">
            <button
                class="sm:mb-0 mb-2 rounded-full bg-[#3A4838] flex text-white text-sm px-4 py-1.5"
            >
                Plus d’informations
            </button>
            </div>
        </div>
        </div>
        <div class="col-span-2 block w-full feature-elements">
        <div
            class="grid place-items-center grid-cols-1 sm:grid-cols-2 sm:gap-4"
        >
            <div class="feature-item sm:mb-0 mb-5">
            <div class="feature-thumb">
                <img
                class="rounded-t-2xl"
                src="{{ asset('images/main/feature-1.png')}}"
                alt="Feature"
                />
            </div>
            <div class="feature-content rounded-b-2xl px-5 py-4 bg-white">
                <h6
                class="sm:text-2xl text-base font-semibold text-[#3A4838]"
                >
                Projet Maneki
                </h6>
                <p class="text-lg font-medium text-[#3A4838] mb-2">
                Une intégration optimisée
                </p>
                <p class="text-base text-[#2B0B0B] mb-3 leading-6">
                Cuius acerbitati uxor grave accesserat incentivum,
                germanitate Augusti turgida supra modum, quam Hannibaliano
                regi fratris filio antehac Constantinus iunxerat pater,
                Megaera quaedam mortalis.
                </p>
                <button
                class="sm:mb-0 mb-2 rounded-full bg-[#3A4838] flex text-white text-sm px-4 py-1"
                >
                En savoir plus
                </button>
            </div>
            </div>
            <div class="feature-item sm:mb-0 mb-5 sm:pt-16">
            <div class="feature-thumb">
                <img
                class="rounded-t-2xl"
                src="{{ asset('images/main/feature-2.png')}}"
                alt="Feature"
                />
            </div>
            <div class="feature-content rounded-b-2xl px-5 py-4 bg-white">
                <h6 class="text-2xl font-semibold text-[#3A4838]">
                Projet Maneki
                </h6>
                <p class="text-lg font-medium text-[#3A4838] mb-2">
                Une intégration optimisée
                </p>
                <p class="text-base text-[#2B0B0B] mb-3 leading-6">
                Cuius acerbitati uxor grave accesserat incentivum,
                germanitate Augusti turgida supra modum, quam Hannibaliano
                regi fratris filio antehac Constantinus iunxerat pater,
                Megaera quaedam mortalis.
                </p>
                <button
                class="sm:mb-0 mb-2 rounded-full bg-[#3A4838] flex text-white text-sm px-4 py-1"
                >
                En savoir plus
                </button>
            </div>
            </div>
            <div class="feature-item sm:mb-0 mb-5 sm:-mt-16">
            <div class="feature-thumb">
                <img
                class="rounded-t-2xl"
                src="{{ asset('images/main/feature-3.png')}}"
                alt="Feature"
                />
            </div>
            <div class="feature-content rounded-b-2xl px-5 py-4 bg-white">
                <h6 class="text-2xl font-semibold text-[#3A4838]">
                Projet Maneki
                </h6>
                <p class="text-lg font-medium text-[#3A4838] mb-2">
                Une intégration optimisée
                </p>
                <p class="text-base text-[#2B0B0B] mb-3 leading-6">
                Cuius acerbitati uxor grave accesserat incentivum,
                germanitate Augusti turgida supra modum, quam Hannibaliano
                regi fratris filio antehac Constantinus iunxerat pater,
                Megaera quaedam mortalis.
                </p>
                <button
                class="sm:mb-0 mb-2 rounded-full bg-[#3A4838] flex text-white text-sm px-4 py-1"
                >
                En savoir plus
                </button>
            </div>
            </div>
            <div class="feature-item sm:mb-0 mb-5">
            <div class="feature-thumb">
                <img
                class="rounded-t-2xl"
                src="{{ asset('images/main/feature-4.png')}}"
                alt="Feature"
                />
            </div>
            <div class="feature-content rounded-b-2xl px-5 py-4 bg-white">
                <h6 class="text-2xl font-semibold text-[#3A4838]">
                Projet Maneki
                </h6>
                <p class="text-lg font-medium text-[#3A4838] mb-2">
                Une intégration optimisée
                </p>
                <p class="text-base text-[#2B0B0B] mb-3 leading-6">
                Cuius acerbitati uxor grave accesserat incentivum,
                germanitate Augusti turgida supra modum, quam Hannibaliano
                regi fratris filio antehac Constantinus iunxerat pater,
                Megaera quaedam mortalis.
                </p>
                <button
                class="sm:mb-0 mb-2 rounded-full bg-[#3A4838] flex text-white text-sm px-4 py-1"
                >
                En savoir plus
                </button>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- Feature Section End -->

<!-- FAQ Section Start -->
<section class="faq-area sm:py-16 py-6">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <div
        class="grid place-items-center grid-cols-1 sm:grid-cols-2 sm:gap-5"
    >
        <div class="faq-heading mb-3 sm:mb-0">
        <h3 class="sm:text-5xl text-3xl text-[#7F2B28] font-semibold sm:mb-7 mb-4">
            Questions fréquemment posées
        </h3>

        <div class="action-btn block sm:mb-0 mb-1 sm:flex">
            <button
            class="sm:mr-2 sm:mb-0 mb-2 rounded-full bg-[#7F2B28] flex text-white text-sm px-4 py-1.5"
            >
            Accéder à la FAQ
            </button>
        </div>
        </div>

        <div class="faq-content">
        <div class="accordion">
            <div class="accordion-item">
            <div
                class="accordion-header sm:text-2xl text-base text-[#7F2B28] font-semibold"
            >
                Comment utiliser le webkit ?
            </div>
            <div class="accordion-content">
                <p class="text-sm text-[#2B0B0B] leading-6">
                Cuius acerbitati uxor grave accesserat incentivum,
                germanitate Augusti turgida supra modum, quam Hannibaliano
                regi fratris filio antehac Constantinus iunxerat pater,
                Megaera quaedam mortalis, inflammatrix saevientis adsidua,
                humani cruoris avida nihil mitius quam maritus; qui paulatim
                eruditiores facti processu temporis ad nocendum per
                clandestinos versutosque rumigerulos conpertis leviter
                addere quaedam male suetos falsa et placentia sibi
                discentes, adfectati regni vel artium nefandarum calumnias
                insontibus adfligebant.
                </p>
            </div>
            </div>

            <div class="accordion-item">
            <div
                class="accordion-header sm:text-2xl text-base text-[#7F2B28] font-semibold"
            >
                Qui peut utiliser le webkit ?
            </div>
            <div class="accordion-content">
                <p class="text-sm text-[#2B0B0B] leading-6">
                Cuius acerbitati uxor grave accesserat incentivum,
                germanitate Augusti turgida supra modum, quam Hannibaliano
                regi fratris filio antehac Constantinus iunxerat pater,
                Megaera quaedam mortalis, inflammatrix saevientis adsidua,
                humani cruoris avida nihil mitius quam maritus; qui paulatim
                eruditiores facti processu temporis ad nocendum per
                clandestinos versutosque rumigerulos conpertis leviter
                addere quaedam male suetos falsa et placentia sibi
                discentes, adfectati regni vel artium nefandarum calumnias
                insontibus adfligebant.
                </p>
            </div>
            </div>

            <div class="accordion-item">
            <div
                class="accordion-header sm:text-2xl text-base text-[#7F2B28] font-semibold"
            >
                Où peut-on trouver des informations complémentaires ?
            </div>
            <div class="accordion-content">
                <p class="text-sm text-[#2B0B0B] leading-6">
                Cuius acerbitati uxor grave accesserat incentivum,
                germanitate Augusti turgida supra modum, quam Hannibaliano
                regi fratris filio antehac Constantinus iunxerat pater,
                Megaera quaedam mortalis, inflammatrix saevientis adsidua,
                humani cruoris avida nihil mitius quam maritus; qui paulatim
                eruditiores facti processu temporis ad nocendum per
                clandestinos versutosque rumigerulos conpertis leviter
                addere quaedam male suetos falsa et placentia sibi
                discentes, adfectati regni vel artium nefandarum calumnias
                insontibus adfligebant.
                </p>
            </div>
            </div>

            <div class="accordion-item">
            <div
                class="accordion-header sm:text-2xl text-base text-[#7F2B28] font-semibold"
            >
                Peut-on créer un projet sans l’utiliser ?
            </div>
            <div class="accordion-content">
                <p class="text-sm text-[#2B0B0B] leading-6">
                Cuius acerbitati uxor grave accesserat incentivum,
                germanitate Augusti turgida supra modum, quam Hannibaliano
                regi fratris filio antehac Constantinus iunxerat pater,
                Megaera quaedam mortalis, inflammatrix saevientis adsidua,
                humani cruoris avida nihil mitius quam maritus; qui paulatim
                eruditiores facti processu temporis ad nocendum per
                clandestinos versutosque rumigerulos conpertis leviter
                addere quaedam male suetos falsa et placentia sibi
                discentes, adfectati regni vel artium nefandarum calumnias
                insontibus adfligebant.
                </p>
            </div>
            </div>

            <div class="accordion-item">
            <div
                class="accordion-header sm:text-2xl text-base text-[#7F2B28] font-semibold"
            >
                Où trouver le webkit ?
            </div>
            <div class="accordion-content">
                <p class="text-sm text-[#2B0B0B] leading-6">
                Cuius acerbitati uxor grave accesserat incentivum,
                germanitate Augusti turgida supra modum, quam Hannibaliano
                regi fratris filio antehac Constantinus iunxerat pater,
                Megaera quaedam mortalis, inflammatrix saevientis adsidua,
                humani cruoris avida nihil mitius quam maritus; qui paulatim
                eruditiores facti processu temporis ad nocendum per
                clandestinos versutosque rumigerulos conpertis leviter
                addere quaedam male suetos falsa et placentia sibi
                discentes, adfectati regni vel artium nefandarum calumnias
                insontibus adfligebant.
                </p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- FAQ Section End -->

<!-- Footer Section Start -->
<footer class="bg-[#EFDFD5]">
    <div class="footer-area sm:py-16 py-6">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div
        class="sm:grid block place-items-center grid-cols-1 sm:grid-cols-6 gap-2 sm:gap-5 sm:pb-8 pb-5"
        style="border-bottom: 1px solid #cc9a7d"
        >
        <div class="w-full col-span-2">
            <img
            class="w-44 mb-3"
            src="{{ asset('images/common/logo.png')}}"
            alt="Logo"
            />
            <p class="text-base px-2 text-[#7F2B28] leading-6">
            Quam ob rem circumspecta cautela observatum est deinceps et cum
            edita montium petere coeperint grassatores, loci iniquitati
            milites cedunt.
            </p>
        </div>
        <div class="w-full">
            <a
            href="#"
            class="text-[#7F2B28] block hover:text-[#7F2B28] rounded-md px-3 sm:py-3 py-2 text-base font-medium"
            >Home</a
            >

            <a
            href="#"
            class="text-[#7F2B28] block hover:text-[#7F2B28] rounded-md px-3 sm:py-3 py-2 text-base font-medium"
            >Documentation</a
            >

            <a
            href="#"
            class="text-[#7F2B28] block hover:text-[#7F2B28] rounded-md px-3 sm:py-3 py-2 text-base font-medium"
            >Examples</a
            >
        </div>
        <div class="w-full">
            <a
            href="#"
            class="text-[#7F2B28] block hover:text-[#7F2B28] rounded-md px-3 sm:py-3 py-2 text-base font-medium"
            >Components</a
            >

            <a
            href="#"
            class="text-[#7F2B28] block hover:text-[#7F2B28] rounded-md px-3 sm:py-3 py-2 text-base font-medium"
            >Blog</a
            >

            <a
            href="#"
            class="text-[#7F2B28] block hover:text-[#7F2B28] rounded-md px-3 sm:py-3 py-2 text-base font-medium"
            >Contact</a
            >
        </div>
        <div class="w-full">
            <a
            href="#"
            class="text-[#7F2B28] block hover:text-[#7F2B28] rounded-md px-3 sm:py-3 py-2 text-base font-medium"
            >Legal</a
            >

            <a
            href="#"
            class="text-[#7F2B28] block hover:text-[#7F2B28] rounded-md px-3 sm:py-3 py-2 text-base font-medium"
            >Terms of service</a
            >

            <a
            href="#"
            class="text-[#7F2B28] block hover:text-[#7F2B28] rounded-md px-3 sm:py-3 py-2 text-base font-medium"
            >Privacy</a
            >
        </div>
        <div class="w-full">
            <a
            href="#"
            class="text-[#7F2B28] block hover:text-[#7F2B28] rounded-md px-3 sm:py-3 py-2 text-base font-medium"
            >Contact</a
            >

            <span
            class="text-[#7F2B28] block hover:text-[#7F2B28] rounded-md px-3 sm:py-3 py-2 text-base font-medium"
            >26 rue Émile Decorps <br />
            69100 Villeurbanne</span
            >

            <div class="flex place-items-center pl-3">
            <a href="#">
                <img
                class="h-6 w-6 rounded-full"
                src="{{asset('images/icon/facebook.png')}}"
                alt="Social Icon"
                />
            </a>
            <a href="#">
                <img
                class="h-6 w-6 mx-4 rounded-full"
                src="{{asset('images/icon/instagram.png')}}"
                alt="Social Icon"
                />
            </a>
            <a href="#">
                <img
                class="h-6 w-6 rounded-full"
                src="{{asset('images/icon/linkedin.png')}}"
                alt="Social Icon"
                />
            </a>
            </div>
        </div>
        </div>

        <div class="footer-bottom text-center text-[#9E6E52] pt-4">
        UI Webkit Mars 2022
        </div>
    </div>
    </div>
</footer>
<!-- Footer Section ENd -->
@stop
